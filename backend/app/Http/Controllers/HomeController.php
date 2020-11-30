<?php

namespace App\Http\Controllers;

use App\Http\Models\Customer;
use App\Http\Models\Partner;
use App\Http\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $services = Service::all();
        $partners = Partner::all();
        $customers = Customer::all();
        return view('homepage')->with(['services' => $services, 'partners' => $partners, 'customers' => $customers]);
    }

    public function service(){
        $services = Service::all();
        return view('service')->with(['services' => $services]);
    }
}
