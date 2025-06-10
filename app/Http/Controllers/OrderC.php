<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Repository\Product\ProductRepo;
use App\Repository\Transaction\TransactionRepo;
use Illuminate\Http\Request;
use App\Exports\TransactionExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class OrderC extends Controller
{
    public function __construct(
        protected ProductRepo $__repo_product,
        protected TransactionRepo $__repo_transaction
    ) {}

    public function index(Request $req)
    {
        $products = $this->__repo_product->index($req->all());
        return view('backend.pages.order.tampilO', compact('products'));
    }

    public function order(Request $req)
    {
        // Cukup satu kali panggil, dan lebih baik pakai $req langsung
        $this->__repo_transaction->order($req->all());

        // Redirect ke halaman history dengan pesan sukses
        return redirect()->route('order.history')->with('success', 'Makanan/Minuman berhasil dipesan, silakan cek history pembelian.');
    }

    public function history(Request $req)
    {
        // Ambil semua order milik user yang sedang login
        $ordersQuery = $this->__repo_transaction->index($req->all());

        $orders = $ordersQuery
            ->where("student_id", auth()->user()->userReference->reference_id)
            ->get();

        return view('backend.pages.order.history', compact('orders'));
    }

    public function accept(Request $request, $id)
    {
        $this->__repo_transaction->accept($id);
        return redirect()->back()->with('success', 'Pesanan diterima.');
    }

    public function decline(Request $request, $id)
    {
        $this->__repo_transaction->decline($id);
        return redirect()->back()->with('success', 'Pesanan ditolak & saldo dikembalikan.');
    }

    public function tampilM(Request $req)
    {
        $products = $this->__repo_product->index(request()->all());
        return view('backend.pages.order.tampilM', compact('products'));
    }

    public function manage()
    {
        $orders = Transaction::with('product', 'student.user')->where('status', 0)->get();
        return view('backend.pages.order.manage', compact('orders'));
    }

    public function tampilP()
    {
        $orders = Transaction::progres()->with('product', 'student.user')->get();
        return view('backend.pages.order.progres', compact('orders'));
    }

    public function done($id)
    {
        $this->__repo_transaction->done($id);
        return back()->with('success', 'Pesanan berhasil diselesaikan.');
    }

    public function export()
    {
        $orders = \App\Models\Transaction::where('student_id', auth()->user()->userReference->reference_id)->get();

        $filename = "history_order.csv";
        $headers = [
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['ID', 'Product Name', 'Paid', 'Debt', 'Status', 'Date'];

        $callback = function () use ($orders, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($orders as $order) {
                fputcsv($file, [
                    $order->id,
                    $order->product->name ?? 'N/A',
                    $order->paid,
                    $order->debt,
                    $order->status,
                    $order->created_at->format('Y-m-d H:i')
                ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }

    public function exportExcel()
    {
        $orders = \App\Models\Transaction::where('student_id', auth()->user()->userReference->reference_id)->get();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Header
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Product');
        $sheet->setCellValue('C1', 'Paid');
        $sheet->setCellValue('D1', 'Debt');
        $sheet->setCellValue('E1', 'Status');
        $sheet->setCellValue('F1', 'Date');

        $row = 2;
        foreach ($orders as $order) {
            $sheet->setCellValue('A' . $row, $order->id);
            $sheet->setCellValue('B' . $row, $order->product->name ?? 'N/A');
            $sheet->setCellValue('C' . $row, $order->paid);
            $sheet->setCellValue('D' . $row, $order->debt);
            $sheet->setCellValue('E' . $row, $order->status);
            $sheet->setCellValue('F' . $row, $order->created_at->format('Y-m-d H:i'));
            $row++;
        }

        $writer = new Xlsx($spreadsheet);

        $filename = 'history_order.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $filename);
        $writer->save($temp_file);

        return response()->download($temp_file, $filename)->deleteFileAfterSend(true);
    }

    public function clearHistoryStudent()
    {
        $studentId = auth()->user()->userReference->reference_id;

        Transaction::where('student_id', $studentId)
            ->history() // status decline/done
            ->delete();

        return back()->with('success', 'Riwayat siswa berhasil dihapus.');
    }

    public function clearHistoryEmployee()
    {
        $employeeId = auth()->user()->userReference->reference_id;

        Transaction::whereHas('product', function ($q) use ($employeeId) {
            $q->where('created_by', $employeeId);
        })
            ->history()
            ->delete();

        return back()->with('success', 'Riwayat penjualan berhasil dihapus.');
    }


    public function employeeHistory(Request $req)
    {
        $employee = auth()->user()->userReference->reference;

        $orders = Transaction::with('product', 'student.user')
            ->whereIn('status', [
                Transaction::STATUS_DONE,
                Transaction::STATUS_DECLINE
            ])
            ->latest()
            ->paginate(5);

        return view("backend.pages.order.historyP", compact("orders"));
    }
}
