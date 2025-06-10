<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Repository\Product\ProductRepo;
use App\Repository\Ruangan\RuanganRepo;
use Illuminate\Http\Request;

class ProductC extends Controller
{
    public function __construct(
        protected ProductRepo $__repo_product,
        protected RuanganRepo $__repo_room 
    )
    {
    
    }

    public function index(Request $req){
        $products=$this->__repo_product->index(request()->all());
        return view('backend.pages.product_management.index', compact('products'));
    }

    public function store(Request $req){
        $products = $this->__repo_product->store(request()->all());
        return redirect()->route('product_management.product.index');
    }

    public function create(Request $req)
    {
        $rooms=$this->__repo_room->index(request()->all());
        return view('backend.pages.product_management.create', compact('rooms'));
    }

     public function employee()
    {
        return $this->belongsTo(Employee::class, 'created_by');
    }

}
