<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*$listBrandId = Brand::pluck('id');*/
        $listBrand = Brand::orderBy('id')->get();

        /*$a = array();
        foreach ($listBrand as $brand) {
            $a[] = (object)['id' => $brand->id, 'name' => $brand->name];
            //var_dump($brand->id);
            //var_dump($brand->name);
        }
        var_dump($a);
        $encode = json_encode($a);
        $decode = json_decode($encode);
        var_dump($encode);
        var_dump($decode);;
        exit;*/
        //var_dump($listBrand);//exit;
        /*$json = response()->json($listBrand, 200);
        $decode = json_decode($json);
        var_dump($decode);exit;*/

       // $listProduct = array();

        foreach ($listBrand as $brand) {
            /*$listProduct[] = $brand->name;*/
            $listProduct[] = Product::where('brand_id', $brand->id)->orderBy('current_price')->take(7)->get();
        }
        //dd($listProduct);exit;
        /*foreach ($listProduct as $listProductOfBrand) {
            foreach ($listProductOfBrand as $product) {
                var_dump($product->name);
            }exit;
        }
        exit;*/

        $titles = array();
        $images = array();
        $imagesProduct = array();
        //$path = 'img/product/iPhone/400';
        $p = 'D:/ProgramFiles/XAMPP/XAMPP-V7.3.7/htdocs/laravel/SellMobilePhone/public';
        foreach ($listProduct as $listProductOfBrand) {
            foreach ($listBrand as $brand) {
                foreach ($listProductOfBrand as $product) {
                    if ($brand->id == $product->brand_id) {
                        if ($brand->name == 'N/A') {
                            $path = $p . '/' . $product->image . '/accessories/400';
                            if ($dh = opendir($path)) {
                                while (($title = readdir($dh)) !== false) {
                                    if (preg_match('/([a-zA-Z0-9\.\-\_\\s\(\)]+)\.([a-zA-Z0-9]+)$/', $title, $m)) {
                                        //var_dump($m); die;
                                        //echo $title . '<br />';
                                        $titles[] = $title;
                                        $imagesProduct[$product->brand_id][] = $images[] = $product->image . '/accessories' . '/400/' . $title;
                                    }
                                }
                            }
                        } else {
                            $path = $p . '/' . $product->image . '/' . strtolower($brand->name) . '/400';
                            if ($dh = opendir($path)) {
                                while (($title = readdir($dh)) !== false) {
                                    if (preg_match('/([a-zA-Z0-9\.\-\_\\s\(\)]+)\.([a-zA-Z0-9]+)$/', $title, $m)){
                                        //var_dump($m); die;
                                        //echo $title . '<br />';
                                        $titles[] = $title;
                                        $imagesProduct[$product->brand_id][] = $images[] = $product->image . '/' . strtolower($brand->name) . '/400/' . $title;
                                    }
                                }
                            }
                        }
                    }
                    break;
                }
            }
            //$imagesProduct[] = $images;
            //var_dump($titles); exit;
        }
        //dd($images);exit;
        /*foreach ($listBrand as $brand){
            //echo ($imagesProduct[4][array_rand($imagesProduct[4],1)]);
            echo $brand->id .': '. $brand->name ."<br>";
        }exit;*/
        //dd($imagesProduct); exit;
        //dd($imagesProduct[0][array_rand($imagesProduct[0],1)]); exit;
        //dd($images);exit;
        //var_dump($titles); echo $titles[array_rand($titles,1)];
        //var_dump($images); echo $images[array_rand($images,1)];
        //exit;
        //return view('home');
        return view('index', compact('listProduct', 'listBrand', 'imagesProduct'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}