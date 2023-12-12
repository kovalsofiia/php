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
        //для всіх зареєстрованих
        $cars = Accountings::all();
        if(Gate::allows('object-view-create')){
            return view('accounting.index', ['cars' => $cars]);
        } else  {
            dd("Block");
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //для всіх зареєстрованих
        if(Gate::allows('object-view-create')){
            return view('accounting.create');
        } else  {
            dd("Block");
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        //для всіх зареєстрованих
        $user = Auth::user();
        if(Gate::allows('object-view-create')){
            Accountings::create([
                'user_id' => $user->id,
                //DONE сюди дописати auth::user і передати id авторизованого користувача
                'ownerFullName' =>  $request -> input('ownerFullName'),
                'carBrand' =>  $request -> input('carBrand'),
                'carPlateNum' =>  $request -> input('carPlateNum'),
                'carColor' =>  $request -> input('carColor'),
            ]);
            return redirect(route('cars.index'));
        } else  {
            dd("Block");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //для всіх зареєстрованих
        $car = Accountings::find($id);
        if(Gate::allows('object-view-create') && $car){
            return view('accounting.show', ['car' => $car]);
        } else  {
            dd("Block");
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //для власного об*єкту створеного поточним користувачем
        $car = Accountings::find($id);
        if(Gate::allows('object-edit', $car)){
            return view('accounting.edit', ['car' => $car]);
        } else  {
            dd("Block");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        //для власного об*єкту створеного поточним користувачем
        $car = Accountings::find($id);
        if(Gate::allows('object-edit', $car)){
            $car->update([
                'ownerFullName' => $request->input('ownerFullName'),
                'carBrand' => $request->input('carBrand'),
                'carPlateNum' => $request->input('carPlateNum'),
                'carColor' => $request->input('carColor'),
            ]);
            return redirect()->route('cars.index');
        } else  {
            dd("Block");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //для власного об*єкту створеного поточним користувачем
        $car = Accountings::find($id);
        if(Gate::allows('object-delete', $car)){
            $car->delete();
            return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
        } else  {
            return redirect()->route('cars.index')->with('error', 'Car not found');
        }
    }
}
