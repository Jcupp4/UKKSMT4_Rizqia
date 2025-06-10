<?php

namespace App\Repository\Transaction;

use App\Contracts\Transaction\TransactionInterfacae;
use App\Contracts\Transaction\TransactionInterface;
use App\Models\Product;
use App\Models\Student;
use App\Models\Transaction;

class TransactionRepo implements TransactionInterface
{
    protected SaldoRepo $__repo_saldo;

    public function __construct(SaldoRepo $saldoRepo)
    {
        $this->__repo_saldo = $saldoRepo;
    }

    public function order(array $attributes)
    {
        $student = auth()->user()->userReference->reference;
        if (isset($student)) {
            if ($student instanceof Student) {
                if ($student->saldo->saldo > 0) {
                    if (isset($attributes['product_id'])) {
                        $product = Product::find($attributes['product_id']);
                        if ($student->saldo->saldo > $product->price) {
                            $transaction = Transaction::create([
                                "debt" => $attributes['paid'] - $product->price,
                                'paid' => $attributes['paid'],
                                "product_id" => $attributes['product_id'],
                                "student_id" => $student->getKey(),
                            ]);

                            $student->saldo->saldo -= $product->price;
                            $student->saldo->save();
                        } else {
                            dd("saldo tidak mencukupi");
                        }
                    } else {
                        dd("product belum ada yg di pilih");
                    }
                } else {
                    dd("saldo siswa kurang dari 0");
                }
            } else {
                dd("yg wajib order harus siswa");
            }
        }
        return $student;
    }

    public function index(array $attributes)
    {
        $attributes ??= request()->all();
        return Transaction::with("student", "product");
    }

    // Tambahan baru:
    public function accept($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        $transaction->status = Transaction::STATUS_PROGRES;

        // Opsional: kalau kamu mau simpan employee_id, pastikan ada field ini di tabel
        // $transaction->employee_id = auth()->user()->userReference->reference_id ?? null;

        $transaction->save();

        return $transaction;
    }

    public function decline($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        $transaction->status = Transaction::STATUS_DECLINE;
        $transaction->save();

        $student = $transaction->student;
        $user = $student->user; // relasi user dari student

        $amountToRefund = $transaction->paid - $transaction->debt;

        // Simpan ke saldo log
        $this->__repo_saldo->store([
            'reference_id'   => $student->getKey(),
            'reference_type' => Student::class,
            'saldo'          => $amountToRefund,
        ]);

        // Update saldo langsung ke user
        if ($user) {
            $user->balance += $amountToRefund;
            $user->save();
        }

        return $transaction;
    }

    public function done($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        $transaction->status = Transaction::STATUS_DONE;
        $transaction->save();

        return $transaction;
    }
}