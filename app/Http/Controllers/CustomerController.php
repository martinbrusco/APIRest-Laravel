<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Resources\CustomerCollection;
use App\Filters\CustomerFilter;
<<<<<<< HEAD
use App\Http\Resources\CustomerResource;
=======
>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0
use Illuminate\Http\Request;




class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $filter= new CustomerFilter();
        $queryItems= $filter->transform($request);
        $includeInvoices= $request->query('includeInvoices');
        $customer= Customer::where($queryItems);

        if ($includeInvoices) {
             $customer = $customer->with('invoices');
        }
        return new CustomerCollection ($customer->paginate()->appends ($request->query()));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        //
<<<<<<< HEAD
        return new CustomerResource(Customer::create($request->all()));
=======
>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
<<<<<<< HEAD
        $includeInvoices= request()->query('includeInvoice');
        if ($includeInvoices){
            return new CustomerResource($customer->loadMissing('invoices'));
        }

        return new CustomerResource($customer);
=======
        //
>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
<<<<<<< HEAD
        $customer->update($request->all());
=======
>>>>>>> 098bc7f83705b979a71eebf2d9d5fd62c493e5d0
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
