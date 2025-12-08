<?php

namespace App\Http\Controllers;

use App\Models\SocialSecurity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialSecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SocialSecurity $socialSecurity)
    {
        //
        if(Auth::user()->socialSecurity()->count()){

            return view('socials.view', compact('socialSecurity'));

        }

        return redirect()->back()->withErrors('ليس لديك استحقاق.');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SocialSecurity $socialSecurity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SocialSecurity $socialSecurity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SocialSecurity $socialSecurity)
    {
        //
    }
}
