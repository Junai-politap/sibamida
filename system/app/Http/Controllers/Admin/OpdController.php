<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Opd;

class OpdController extends Controller
{
    
    public function index()
    {
        $data['list_opd'] = Opd::all();
        return view('admin.opd.index', $data);
    }

    
    public function create()
    {
        return view('admin.opd.create');
    }

    
    public function store(Request $request)
    {
        $opd = New Opd();
        $opd->nama_opd = request('nama_opd');
        $opd->username = request('username');
        $opd->password = request('password');
        $opd->alamat = request('alamat');
        $opd->no_telp = request('no_telp');
        $opd->handleUploadLogo();

        $opd->save();

        return redirect('admin/opd');
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
