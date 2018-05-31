<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FirstController extends Controller
{
    public function show()
    {

        /*'SELECT id, name, price, is_new FROM product '
        . 'WHERE status = "1" ORDER BY id DESC '
        . 'LIMIT :count'*/

        //$products = DB::select("SELECT * FROM products");*/
        $products = DB::table("products")->where("status", 1)->orderBy('id', 'desc')->limit(9)->get();
        //dump($products);

        /*SELECT id, name, price, is_new FROM product '
                . 'WHERE status = "1" AND is_recommended = "1" '
                . 'ORDER BY id DESC*/

        $sliderProducts =  DB::table("products")->select('id', 'name', 'price', 'is_new')
                                                ->where([['status', 1],['is_recommended', 1]])
                                                ->orderBy('id', 'desc')
                                                ->get();

        /*$result = $db->query('SELECT id, name FROM category WHERE status = "1" ORDER BY sort_order, name ASC');*/



        $categories = DB::table('categories')->select('id', 'name')->where('status', 1)->orderBy('sort_order', 'name', 'asc')->get();


        //dump($categories);


        //dump($sliderProducts);

        return view('shop.index-shop', ['products' => $products, 'categories'=>$categories, 'sliderProducts' => $sliderProducts]);
    }

}
