<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use Validator;

class FileController extends Controller
{
    
    public function upload(Request $request){

        $data = $request->all();
        //print_r ($data['file']);
        $validator = Validator::make($request->all(),[
            'file' => 'required|mimes:jpg,png,pdf,docx|max:5120',
        ]);

        if($validator->fails()){
            return response()->json(['error'=>$validator->error()], 401);
        }

        if ($file = $request->file('file')){ 

            $path = $file->store('public/files');
            $name = $file->getClientOriginalName();

            $save = new File();
            $save->name = $name;
            $save->path = $path."/".$name;
            $save->save();

            $file = $request->file->store('public/files');

            return response()->json(['success' => true, 'message' => 'Archivo subido exitosamente.', 'file' => $file]);
        }
    }
}
