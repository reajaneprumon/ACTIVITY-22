<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ return Product::all(); }
    public function store(Request $request){ return Product::create($request->all()); }
    public function show($id){ return Product::findOrFail($id); }
    
    public function update(Request $request,$id){
        $p=Product::findOrFail($id);
        $p->update($request->all());
        return $p;
    }
    public function destroy($id){
        Product::destroy($id);
        return response()->json(['message'=>'Deleted']);
    }
}