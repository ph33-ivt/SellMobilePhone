<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Cart;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBrand = Brand::orderBy('id')->get();

        if (Session::get('cart') !== null) {
            $a = Session::get('cart')->items;
            //$listProduct = array();
            //$qty = array();
            $prd_and_qty = array();
            foreach ($a as $product_id => $v) {
                //$qty[$product_id] = $v['qty'];
                //$listProduct[$product_id] = $v['item'];
                $prd_and_qty[$product_id]['sp'] = $v['item'];
                $prd_and_qty[$product_id]['sl'] = $v['qty'];
            }

            $total = 0;
            $discount = 0;
//            $payment = 0;
            foreach ($prd_and_qty as $product_id => $v) {
                //var_dump($k);
//                var_dump($v['sl']);
//                var_dump($v['sp']['current_price']);
//                var_dump($v['sp']['discount_percent']);

                $total += $v['sl'] * $v['sp']['current_price'];
                $discount += $v['sl'] * ($v['sp']['current_price'] * $v['sp']['discount_percent']);
                //var_dump($total);
                //var_dump($discount);
                //exit;
                /*foreach ($v as $kk=>$vv) {
                    var_dump($vv['name']);
                }*/
            }
//            $payment = $total - $discount;
//            echo($total)."<br>";
//            echo($discount)."<br>";
//            dd($payment)."<br>";
//            exit;

//            foreach ($listProduct as $product) {
//                dd($product->name);
//            }
//            exit;
            return view('cart.view_cart', compact('listBrand', 'prd_and_qty', 'total', 'discount'));
            //return view('cart.view_cart', compact('listBrand', 'listProduct'));
        } else {
            return view('cart.view_cart', compact('listBrand'));
        }
    }

    public function addProductToCart(Request $request, $id)
    {
        $product = Product::find($id);
        /*$data = $request->only('qty');*/

        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        //dd(Session::get('cart')->items);exit;

        if ($oldCart != null) {
            foreach (Session::get('cart')->items as $k => $v) {
                if ($id == $k) {
                    return response()->json(['message' => 'The product already exists!',], 200);
                }
            }
        }

        $cart = new Cart($oldCart);
        $cart->add($product->id, $product);
        $request->session()->put('cart', $cart);
        $c = $request->session()->get('cart');
        //dd($c);exit;
        //dd($c->items);exit;

        //dd($c);exit;
        $result = [sizeof($c->items), $c->totalPrice, $c->items];
        //$j = json_encode($result);

        return response()->json([
            'message' => 'The product has been added!',
            'num_price_product' => $result,
        ], 200);

        //return redirect()->route('homepage');
    }

    public function removeProductFromCart(Request $request, $id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        //dd(($oldCart->items)[$id]['item']->current_price);exit;

        if ($oldCart == null) {
            return response()->json(['message' => 'Cart is empty!',], 200);
        }

        $cart = new Cart($oldCart);
        $listQty= array();
        foreach ($cart->items as $product_id => $sub_key) {
            $listQty[$product_id] = $request->input('qty-product-' . $product_id);
        }
        //var_dump($listQty);
        foreach ($listQty as $product_id=>$qty) {
            if ($id == $product_id) {
                $cart->remove($id, $qty);
            }
        }
        //exit;
        $request->session()->put('cart', $cart);
        $c = $request->session()->get('cart');
        $result = [sizeof($c->items), $c->totalPrice, $c->items];
        /*return response()->json([
            'message' => 'The product has been removed!',
            'num_price_product' => $result,
        ], 200);*/
        return redirect()->back();
        //return redirect()->route('view-cart');
    }

    public function updateCart(Request $request)
    {
        //dd($request);exit;

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        //dd(($oldCart->items));exit;
        //dd(($oldCart->items)[$id]['qty']);exit;
        if ($oldCart == null) {
            return response()->json(['message' => 'Cart is empty!',], 200);
        }

        $cart = new Cart($oldCart);
        //dd($cart->items);

        /*$qty = array();
        foreach ($cart->items as $product_id=>$sub_key) {
            $qty[$product_id] = Input::get('qty-product-'.$product_id);
        }
        dd($qty);exit;*/

        foreach ($cart->items as $product_id => $sub_key) {
            $qty = $request->input('qty-product-' . $product_id);
            //echo $qty;
            //$qty = $qty[$product_id] = Input::get('qty-product-'.$product_id);
            $cart->update($product_id, $qty);
        }//exit;

        $request->session()->put('cart', $cart);
        $c = $request->session()->get('cart');
        //dd($c);

        $result = [sizeof($c->items), $c->totalPrice, $c->items];

        /*return response()->json([
            'message' => 'The cart has been updated!',
            'num_price_product' => $result,
        ], 200);*/

        return redirect()->back();
        //return redirect()->route('view-cart');
    }

    public function checkout(Request $request) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        if ($oldCart == null) {
            return response()->json(['message' => 'Cart is empty!',], 200);
        }
        $cart = new Cart($oldCart);

        dd($cart);exit;
        //create user if not exits
        // create order of user
        // create order details
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
