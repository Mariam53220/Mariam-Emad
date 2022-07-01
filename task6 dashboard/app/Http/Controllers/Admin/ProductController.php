<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $brands = DB::table('brands')->select('id', 'name_en', 'name_ar')->orderBy('name_en')->orderBy('name_ar')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en', 'name_ar')->orderBy('name_en')->orderBy('name_ar')->get();
        return view('products.create', compact('brands', 'subcategories'));
    }

    public function edit($id)
    {

        $brands = DB::table('brands')->select('id', 'name_en', 'name_ar')->orderBy('name_en')->orderBy('name_ar')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en', 'name_ar')->orderBy('name_en')->orderBy('name_ar')->get();
        $products = DB::table('products')->where('id', $id)->first();

        return view('products.edit', compact('brands', 'subcategories', 'products'));
    }

    public function store(Request $request)
    {
        //    dd($request->all());

        $request->validate([

            "name_en" => ['required','max:512','string'],
            "name_ar" => ['required','max:512','string'],
            "code" => ['required', 'digits:6','numeric','unique:products'],
            "price" => ['required', 'numeric', 'between:1.00,99999.99'],
            "quantity" => ['nullable','integer', 'between:1,999'],
            "status" => ['required','integer','in:0,1'],
            "brand_id" => ['nullable', 'integer', 'exists:brands,id'],
            "subcategory_id" => ['required', 'integer', 'exists:subcategories,id'],
            "descEn" => ['required','string'],
            "descAr" => ['required','string'],
            "image" => ['required','max:1000', 'mimes:jpg,png,jpeg'],

        ]);
        // dd($request->all());
        $data= $request->except('_token', 'image');
        $photoName= $request->image-> hashName();
        $request->image->move(public_path("images\products") , $photoName);
        $data['image'] = $photoName;
        DB::table('products')->insert($data);
        return redirect()->route('dashboard.products.index')->with('success', 'product created successfully');
    }
}
