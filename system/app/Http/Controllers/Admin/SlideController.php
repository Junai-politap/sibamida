<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    
    public function index()
    {
        $data['list_slide'] = Slide::all();

        return view('admin.slide.index', $data);
    }

    
   
    public function store(Request $request)
    {
        $slide = New Slide();
        $slide->label = request('label');
        $slide->handleUploadFoto();
        $slide->save();

        return back()->with('success', 'Data Slide Berhasil di Tambahkan');
    }

    
   
    public function update($slide)
    {
        $slide = Slide::find($slide);
        $slide->label = request('label');
        $slide->handleUploadFoto();
        $slide->save();

        return back()->with('success', 'Data Slide Berhasil di Edit');
    }

    
    public function destroy(string $id)
    {
        //
    }
}
