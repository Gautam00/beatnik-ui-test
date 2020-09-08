<?php

namespace App\Http\Controllers;

use App\Discount;
use App\Appoinment;
use Illuminate\Http\Request;

class MainController extends Controller
{
    

	public function discount(Request $request) {

        $discount = Discount::create([

            'email' => $request['email']

        ]);

        return redirect()->back();

    }

    public function appoinment(Request $request) {

        $appoinment = Appoinment::create([

            'name' => $request['name'],
            'email' => $request['email']

        ]);

        return redirect('/');

    }

}
