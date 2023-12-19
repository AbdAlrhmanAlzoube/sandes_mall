<?php

namespace App\Http\Controllers\Admin\Cashier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Cashier\StoreCashierRequest;
use App\Http\Requests\Admin\Cashier\UpdateCashierRequest;
use App\Models\Cashier;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    
    public function index()
    {
        $cashiers = Cashier::with('user')->get();

        return view('Admin.Cashier.index', compact('cashiers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();

        return view('admin.Cashier.add_cashier', compact('users'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCashierRequest $request)
    {
        $validatedData = $request->validated();

        Cashier::create($validatedData);

        return redirect()->route('cashiers.index')->with('success', 'Cashier created successfully');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cashier $cashier)
    {
        $users = User::all(); 

        return view('admin.Cashier.edit_cashier', compact('cashier', 'users'));
    }
    /**
     * Update the specified resource in storage.
     */
   
     public function update(UpdateCashierRequest $request, Cashier $cashier)
     {
         $validatedData = $request->validated();
 
         $cashier->update($validatedData);
 
         return redirect()->route('cashiers.index')->with('success', 'Cashier updated successfully');
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cashier $cashier)
    {
        $cashier->delete();

        return redirect()->route('cashiers.index')->with('delete', 'Cashier deleted successfully');
    }
}
