<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=DB::table('products')->join('categories','products.category_id','=','categories.id')->paginate(5);
        return view('products.product',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=DB::table('categories')->get();
        return view('products.add_product',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_name' => 'required|unique:products',
            'product_price' => 'required|numeric',
            'product_quantity' => 'required|numeric',
            'product_description' => 'required',
            'category_id' => 'required',
        ],[
            'product_name.required' => 'Tên sản phẩm không được để trống',
            'product_name.unique' => 'Tên sản phẩm đã tồn tại',
            'product_price.required' => 'Giá phẩm không được để trống',
            'product_price.numeric' => 'Giá phải là số',
            'product_quantity.required' => 'Số lượng không được để trống',
            'product_quantity.numeric' => 'Số lượng là số',
            'product_description.required' => 'Mô tả sản phẩm không được để trống',
            'category_id.required' => 'Bạn phải chọn loại ',
        ]);
        if($request->hasFile('product_image')){
            $file=$request->product_image;
            $ext=$request->product_image->extension();
            $file_name=time().'-'.'product.'.$ext;
            $file->storeAs('public/products', $file_name);
        }
        $request->merge(['image'=>$file_name]);
        DB::table('products')->insert([
            'product_name'         => $request->product_name,
            'product_price'        => $request->product_price,
            'product_quantity'     => $request->product_quantity,
            'product_description'  => $request->product_description,
            'category_id'          =>$request->category_id,
            'product_image'        =>$request->image
        ]);
        return redirect()->route('product.create')->with('success','Product add succsess');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $product=DB::table('products')->join('categories','products.category_id','=','categories.id')->where('products.id',$id)->first();
        
        return view('products.show_product',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $categories=DB::table('categories')->get();
        $product=DB::table('products')->join('categories','products.category_id','=','categories.id')
        ->where('products.id',$id)->first();
        return view('products.edit_product',['product'=>$product,'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('products')
        ->where('id', $id)
        ->update([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_quantity' => $request->product_quantity,
            'status' => $request->status,
            // 'product_image' => $request->product_image,
            'product_description' => $request->product_description,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('product.edit',$id)->with('success','Update add succsess');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('products')->where('id',$id)->delete();
        return redirect()->back()->with('success','product delete succsess');
    }
    public function filter(Request $request){
        // dd($request->status);
        $status=$request->status;
        $products=DB::table('products')->join('categories','products.category_id','=','categories.id')->where('products.status',$status)->paginate();
        return view('products.filter',['products'=>$products]);
    }
    
}
