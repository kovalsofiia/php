<?php

namespace App\Http\Controllers;

use App\Models\Accountings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View\View;

class AccountingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $accounting = Accountings::all();
        return view('accounting.index', [
            'accounting' => $accounting
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('accounting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        Accountings::create([
            'ownerFullName' =>  $request -> input('ownerFullName'),
            'carBrand' =>  $request -> input('carBrand'),
            'carPlateNum' =>  $request -> input('carPlateNum'),
            'carColor' =>  $request -> input('carColor'),
        ]);
return redirect(route('cars.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
