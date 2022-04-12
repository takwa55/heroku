<?php

namespace App\Http\Controllers\Admin;

use App\Models\Myparent;
use Illuminate\Http\Request;
use App\Models\Models\Attachement;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class UploadsController extends Controller
{
    public function index($id)
    {
        $enquetes = Myparent::where('id',$id)->get();
        /* $enquetes = DB::table('enquetes')->get()->sortBy('N_Pension')->toArray(); */

       /*  $enquetes = DB::table('enquetes')
        ->select('N_Pension','Nom', DB::raw('COUNT(*) as `count`'))
        ->groupBy('N_Pension','Nom')
        ->having('count', '>', 1)
        ->get(); */
  
        $attachements = Attachement::where('enquete_id',$id)->get();
      return view('page.detail',compact('enquetes','attachements'));
    }

    public function download($Nom, $file_name)
    {
      return response()->download(storage_path('app\enquete_attachments/'.$Nom.'/'.$file_name));
      return $this->detail->download($Nom, $file_name);
    }
    public function view($Nom, $file_name)
    {
      return response()->file(storage_path('app\enquete_attachments/'.$Nom.'/'.$file_name));
      return $this->detail->file($Nom, $file_name);
    }


   public function delete(Request $request)
    {

   /*    if (Storage::exists('app/enquete_attachments/')) {
        Storage::delete('app/enquete_attachments/');
      } */
      Storage::disk('enquete_attachments')->delete('app/enquete_attachments/'.$request->Nom,'/'.$request->file_name);


      Attachement::where('id',$request->id)->where('file_name', $request->file_name)->delete();
      
      return redirect()->back();
    }



}

