<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
		return view('front.upload');
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'product_image' => 'required',
			'product_name' => 'required',
            'product_cathegory' => 'required',
            'product_price' => 'required',
            'product_description' => 'required'
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';
 
        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';
 
        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';
 
        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';
 
        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();
 
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
 
        // upload file
		$file->move($tujuan_upload,$file->getClientOriginalName());
	}
}
