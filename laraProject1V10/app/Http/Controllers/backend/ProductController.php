<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = Product::All();
        return view('backend.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['category'] = Category::All();
        return view('backend.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'product' => 'required | min:4',
            'description' => 'required | min:6',
            'price' => 'required|numeric',
            'category' => 'required',
            'image' => 'mimes:jpg,jpeg,png',
        ]);

        $filename = time(). "." . $request->image->extension();

        if($validate){
            $data = [
                'name' => $request->product,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category,
                'image'=> $filename,
            ];
    
            // if(Product::insert($data)){
            //     return redirect('product')->with('msg', 'Product Added Successfully');
            // }

            $model = new Product();       
            if($model->create($data)){
            $request->image->move('images', $filename);    
            return redirect('product')->with('msg', 'Product Added Successfully');
          }


        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $category = Category::all();
        return view('backend.product.edit', compact('product', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'product' => 'required | min:4',
            'description' => 'required | min:6',
            'price' => 'required|numeric',
            'category' => 'required',
            // 'image' => 'mimes:jpg,jpeg,png',
        ]);

        // $filename = time(). "." . $request->image->extension();

        if($validate){
            $data = [
                'name' => $request->product,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category,
                // 'image'=> $filename,
            ];
    
            // if(Product::insert($data)){
            //     return redirect('product')->with('msg', 'Product Added Successfully');
            // }

            $model = new Product();       
            if($model->update($data)){
            // $request->image->move('images', $filename);    
            return redirect('product')->with('msg', 'Product Added Successfully');
          }


        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        // echo $id;

        // $deleted = DB::table('products')->where('id', $id)->delete();
        // return redirect('product')->with('msg', 'Product Delete Successfully');

        $product = Product::find($id);
        $product->delete();
        return redirect('product')->with('msg', 'Product Delete Successfully');
    }
}
