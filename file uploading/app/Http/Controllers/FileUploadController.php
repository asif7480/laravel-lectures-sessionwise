<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function form(){
        return view('upload');
    }

    public function upload(Request $request){
        $request->validate([
           'file' => 'required|file|max:10240'
        ]);

        $uploadedFile = $request->file('file');
        $path = $uploadedFile->store('uploads', 'public');

        $file = new File();
        $file->original_name = $uploadedFile->getClientOriginalName();
        $file->file_path = $path;
        $file->save();

        // return redirect('/')
        return view("upload", compact("path"));

    }
}
