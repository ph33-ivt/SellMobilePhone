<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function listProductOfBrand(Request $request, $brand_name) {
        $listBrand = Brand::orderBy('id')->get();
        //$p = 'D:/ProgramFiles/XAMPP/XAMPP-V7.3.7/htdocs/laravel/SellMobilePhone/public/';
        foreach ($listBrand as $brand) {
            //echo $brand->id;
            //echo strtolower($brand->name);
            if(strtolower($brand->name) == $brand_name) {
                $listProduct = Product::where('brand_id', $brand->id)->orderBy('current_price', 'DESC')->get();
                $path = 'img/products/' . strtolower($brand->name) .'/400/';
            }
        }

        $images = [];
        if ($dh = opendir($path)) {
            while (($title = readdir($dh)) !== false) {
                if (preg_match('/([a-zA-Z0-9\.\-\_\\s\(\)]+)\.([a-zA-Z0-9]+)$/', $title, $m)) {
                    //var_dump($m); die;
                    //echo $title . '<br />';
                    $images[] = $path.$title;
                }
            }
        }
        //dd($images);exit;
        //dd($listProduct);exit;
        //dd($brand_name);exit;
        return view('brand.product_list', compact('listBrand', 'listProduct', 'images'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
