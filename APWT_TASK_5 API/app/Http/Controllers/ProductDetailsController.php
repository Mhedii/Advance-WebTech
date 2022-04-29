<?php

namespace App\Http\Controllers;

use App\Models\productDetails;
use App\Http\Requests\StoreproductDetailsRequest;
use App\Http\Requests\UpdateproductDetailsRequest;

class ProductDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreproductDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreproductDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function show(productDetails $productDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(productDetails $productDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductDetailsRequest  $request
     * @param  \App\Models\productDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductDetailsRequest $request, productDetails $productDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productDetails  $productDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(productDetails $productDetails)
    {
        //
    }

    public function productDetails(){
        $productdetails = productDetails::all();

        // return view('pages.product.list')->with('productdetails', $productdetails);
        return ($productdetails);
        
    }

}
