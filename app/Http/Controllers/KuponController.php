<?php

namespace App\Http\Controllers;

use App\Models\Kupon;
use Illuminate\Http\Request;

class KuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.kupon.index', [
            'kupons' => Kupon::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required',
            'value' => 'required',
        ]);

        Kupon::create($validatedData);

        return redirect('/dashboard/kupon')->with('success', 'Kupon telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kupon  $kupon
     * @return \Illuminate\Http\Response
     */
    public function show(Kupon $kupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kupon  $kupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Kupon $kupon)
    {
        return view('dashboard.kupon.edit', [
            'kupon' => $kupon,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kupon  $kupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kupon $kupon)
    {
        $validatedData = $request->validate([
            'code' => 'required',
            'value' => 'required',
        ]);

        Kupon::where('id', $kupon->id)
            ->update($validatedData);

        return redirect('/dashboard/kupon')->with('success', 'Kupon telah di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kupon  $kupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kupon $kupon)
    {
        Kupon::destroy($kupon->id);

        return redirect('/dashboard/kupon')->with('success', 'Kupon berhasil dihapus');
    }
}
