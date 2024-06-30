<?php

namespace Webkul\Shop\Http\Controllers;


use Illuminate\Routing\Controller;

class StripeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function checkout()
    {
        return view('stripe::admin.index');
    }


}
