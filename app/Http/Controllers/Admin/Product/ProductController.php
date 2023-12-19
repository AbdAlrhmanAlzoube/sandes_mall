<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
       $products = Product::with('category')->get();
       return view('Admin.Product.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories=Category::all();
        return view('Admin.Product.add_product',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $products = $request->validated();
        Product::create($products);
        $categories = Category::all();
       return redirect ()->route('products.index',compact('categories'))->with('success', 'Product added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
{
    $categories = Category::all(); // Retrieve categories from the database
    return view('admin.Product.edit_product', compact('product', 'categories'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $Product_data = $request->validated();
        $product->update($Product_data);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        $Product->delete();

        return redirect()->route('products.index')->with('delete', 'Product deleted successfully.');
    }
}
