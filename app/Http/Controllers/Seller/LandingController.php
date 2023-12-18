<?php

namespace App\Http\Controllers\Seller;

class LandingController extends Controller
{
    public function index()
    {
        $data = [];

        return view('seller.landing', $data);
    }
}