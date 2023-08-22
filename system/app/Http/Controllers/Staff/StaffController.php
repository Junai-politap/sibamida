<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Bangunan;
use App\Models\Jembatan;
use App\Models\Peralatan;
use App\Models\Tanah;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    
    public function index()
    {
        $data['list_peralatan'] = Peralatan::all();
        $data['list_bangunan'] = Bangunan::all();
        $data['list_tanah'] = Tanah::all();
        $data['list_jembatan'] = Jembatan::all();
        return view('staff-administrasi.index', $data);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
