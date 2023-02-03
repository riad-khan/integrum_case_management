<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Jobs\FileUploadNotificationJob;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class FileUploadController extends Controller
{
    public function upload(Request $request){
        

        $file = $request->file('myFile');
        $file_original = $file->getClientOriginalName();
        $filename = pathinfo($file_original, PATHINFO_FILENAME);
        $extension = pathinfo($file_original, PATHINFO_EXTENSION);
        $FinalFileName = $filename .'.'.$extension;
        $upload_dir = 'uploads/';
        $final_name = $upload_dir . $FinalFileName;

        $file->move($upload_dir,$final_name);

        $insert = DB::table('file_uploads')->insert([
            'title'=>$request->title,
            'file'=>$final_name,
            'file_extention'=>$extension,
            'user_id'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);

        dispatch(new FileUploadNotificationJob());

        Alert::success('File uploaded', 'File uploaded sucessfully');
            return redirect()->back()->with('File uploaded sucessfully');

       

    }
}
