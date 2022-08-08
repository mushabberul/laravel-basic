<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home',[
            'page_name' => 'Home Page',
            'name' => 'Sabbir Mia',

        ]);
    }
    public function about()
    {
        $page_name = 'About Page From Route';
        $product_count = "38";
        $color = '';
        $products = [
            1 =>[
                'name' => 'Bag',
                'color' => 'red',
                'price' => 34,
            ],
            2 =>[
                'name' => 'sunglass',
                'color' => 'yellow',
                'price' => 200,
            ],
            3 =>[
                'name' => 'BodySprae',
                'color' => 'red',
                'price' => 240,
            ],
        ];
        return view('about',compact('page_name','product_count','color','products'));
    }
    public function service()
    {
        $services = ['Web Design','Web Development','App Development','Graph Design','Flutter Development'];
        $page_name = 'Service Name from route';
        return view('service',compact("services",'page_name'));
    }

}
