<?php

namespace App\Http\Controllers;

use App\Models\Accountings;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AccountingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $cars = Accountings::all();
        return view('accounting.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        if(Gate::forUser($user)->allows('createCar')){
            return view('accounting.create');
        }
        else {
            echo "403";
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $user = Auth::user();

        Accountings::create([
            //сюди дописати auth::user і передати id авторизованого користувача
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
        $car = Accountings::find($id);

        if ($car) {
            return view('accounting.show', ['car' => $car]);
        } else {
            return redirect()->route('cars.index')->with('error', 'Car not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Accountings::find($id);
        return view('accounting.edit', ['car' => $car]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $car = Accountings::find($id);
        $car->update([
            'ownerFullName' => $request->input('ownerFullName'),
            'carBrand' => $request->input('carBrand'),
            'carPlateNum' => $request->input('carPlateNum'),
            'carColor' => $request->input('carColor'),
        ]);
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $car = Accountings::find($id);

        if ($car) {
            $car->delete();
            return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
        } else {
            return redirect()->route('cars.index')->with('error', 'Car not found');
        }
    }
}
