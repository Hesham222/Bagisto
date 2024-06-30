<?php

namespace WebKul\Fawry\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Stripe\Stripe;
use Webkul\Fawry\Classes\FawryPayment;

class FawryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */

    public function payment_verify($id)
    {
        //return 'hesham';
        $payment = new FawryPayment();

        $payment->setUserId(1)
            ->setUserFirstName('Hesham')
            ->setUserLastName('Ashraf')
            ->setUserEmail('heshamashraf971@gmail.com')
            ->setUserPhone('01100531939')
            ->setCurrency(20)
            ->setAmount(50)
            ->pay();
    }



}
