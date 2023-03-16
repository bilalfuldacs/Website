<?php

namespace App\Http\Controllers\Admin;

use App\Models\homeadvertisement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminAdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home_ad_show()
    {
        $ad= homeadvertisement::where('id', 1)->first();
        return view('admin.layouts.advertisement_home_view', compact('ad'));
    }
    public function post_home_ad(Request $req)
    {
        $ad= homeadvertisement::where('id', $req->ad_id)->first();

        if ($req->hasFile('above_search_ad')!="") {
            $req->validate([
                'above_search_ad'=>'image|mimes:jpg,jpeg,png',
                'above_search_ad_url'=>'required',
              ]);
            unlink(public_path('uploads/'.$ad->above_search_at));
            $ext=$req->file('above_search_ad')->extension();

            $file_name='above_search_ad'. ' .'. $ext;
            $req->file('above_search_ad')->move(public_path('uploads/'), $file_name);
            $ad->above_search_at=$file_name;
            $ad->update();
        } if (($req->above_search_ad_url) != "" || ($req->status != "")) {
            $ad->above_search_url=$req->above_search_ad_url;
            $ad->above_search_ad_status=$req->status;
            $ad->update();
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminAdvertisementController  $adminAdvertisementController
     * @return \Illuminate\Http\Response
     */
    public function show(AdminAdvertisementController $adminAdvertisementController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminAdvertisementController  $adminAdvertisementController
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminAdvertisementController $adminAdvertisementController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminAdvertisementController  $adminAdvertisementController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminAdvertisementController $adminAdvertisementController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminAdvertisementController  $adminAdvertisementController
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminAdvertisementController $adminAdvertisementController)
    {
        //
    }
}