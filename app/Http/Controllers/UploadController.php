<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UploadFile;


class UploadController extends Controller
{
    //
     public function index()
    {
        return view('upload');
    }

    /*public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,pdf|max:2048',
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName);

        $uploadFile = new UploadFile();
        $uploadFile->name = $fileName;
        $uploadFile->file_path = $filePath;
        $uploadFile->save();

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }*/

    public function store(Request $request)
{
    $request->validate([
        'uploadOption' => 'required|in:yes,no',
        'file' => 'nullable|mimes:jpg,png,pdf|max:2048',
    ]);

    if ($request->uploadOption === 'yes') {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName);

            $uploadFile = new UploadFile();
            $uploadFile->name = $fileName;
            $uploadFile->file_path = $filePath;
            $uploadFile->save();

            return redirect()->back()->with('success', 'File uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'Please choose a file to upload.');
        }
    } else {
        $uploadFile = new UploadFile();
        $uploadFile->name = 'No File';
        $uploadFile->file_path = '';
        $uploadFile->save();

        return redirect()->back()->with('success', 'No file uploaded.');
    }
}


}
