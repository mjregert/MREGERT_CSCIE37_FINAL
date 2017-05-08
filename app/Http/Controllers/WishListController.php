<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all of the wishlists from the database, and return them as JSON data
        $wishlists = Wishlist::with(['wishitems'])->get();
        return response($wishlists, 200)
                  ->header('Content-Type', 'application/json');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate the user input here
        $wishlist = new Wishlist();

        $wishlist->locale = $request->locale;
        $wishlist->name = $request->name;
        $wishlist->description = $request->description;
        $wishlist->total = $request->total;
        $wishlist->saving = $request->saving;
        $wishlist->buyDate = $request->buyDate;

        $wishlist->save();

        // Get all of the wishlists from the database, and return them as JSON data
        $wishlists = Wishlist::with(['wishitems'])->get();
        return response($wishlists, 200)
                  ->header('Content-Type', 'application/json');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);

        $wishlist->locale = $request->locale;
        $wishlist->name = $request->name;
        $wishlist->description = $request->description;
        $wishlist->total = $request->total;
        $wishlist->saving = $request->saving;
        $wishlist->buyDate = $request->buyDate;

        $wishlist->save();

        // Get all of the wishlists from the database, and return them as JSON data
        $wishlists = Wishlist::with(['wishitems'])->get();
        return response($wishlists, 200)
                  ->header('Content-Type', 'application/json');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
