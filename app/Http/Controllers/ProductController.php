<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Model\Product;
use Illuminate\Http\Request as Request;


class ProductController extends Controller
{

    /* public function __construct()
       {
           $this->middleware('guest');
       }*/


    public function index()
    {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }

    public function show($id)
    {
        $p = Product::find($id);
        return view('product.show', ['product' => $p]);
    }

    public function edit($id = null)
    {
        if (isset($id)) {
            $p = Product::find($id);
        } else {
            $p = new Product();
        }
        return view('product.edit', ['product' => $p]);
    }

    public function save(Request $request, $id = null)
    {
        if (isset($id)) {
            Product::updateOrCreate(["id" => $id], $request->input());
        } else {
            Product::create($request->input());
        }
        return redirect("/products");
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect("/products");
    }


}

