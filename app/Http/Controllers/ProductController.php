<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('products',['products'=>$data]);
    }
    public function detail($id){
        $data = Product::find($id);
        return view('productdetail',['product'=>$data]);
    }
    public function search(Request $req){
        return $req->input();
    }
}
