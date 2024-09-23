<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomerController extends Controller
{
    public function showCustomer()
    {
        $customers = DB::table('customers')->get();
        //return $customer;
        // foreach($customers as $customer){
        //     echo $customer->name ."<br>";
        // }
        return view('allcustomer', ['data' => $customers]);
    }
    public function singleCustomer(string $id)
    {
        $customer = DB::table('customers')->where('id', $id)->get();

        //return $customers;
        return view('customer', ['data' => $customer]);
    }
    public function addCustomer(Request $req)
    {
        //return $req;
        $customer = DB::table('customers')->insert([
            [
                'name' => $req->name,
                'email' => $req->email,
                'mobile' => $req->mobile,
                'city' => $req->city
            ]
        ]);

        if ($customer) {
            return redirect()->route('home');
        } else {
            echo "<h1>Data Not Added</h1>";
        }
    }
    public function updatePage(string $id)
    {
        $customer = DB::table('customers')->find($id);

        return view('update-customer', ['data' => $customer]);
    }
    public function updateCustomer(Request $res, $id)
    {
        $customer = DB::table('customers')->where('id', $id)->update([
            'name' => $res->name,
            'email' => $res->email,
            'mobile' => $res->mobile,
            'city' => $res->city


        ]);

        if ($customer) {
            return redirect()->route('home');
        } else {
            echo "<h1>Data Not update</h1>";
        }
    }
    public function deleteCustomer(string $id)
    {
        $customer = DB::table('customers')->where('id', $id)->delete();

        if ($customer) {
            return redirect()->route('home');
        }
    }
}
