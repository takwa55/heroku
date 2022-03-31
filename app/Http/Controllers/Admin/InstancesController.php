<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Models\Instance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Support\Facades\Auth;

class InstancesController extends Controller
{
    public function index()
    {
        $instances = Instance::all();
        return view('page.instances-revision', compact('instances'));
    }

    public function add()
    {
        return view('page.instances');
    }


    public function insert(Request $request)

    {
        foreach($request->N_Pension as $key=>$N_Pension){

            $data = new Instance();
            $data->N_Pension = $N_Pension;
            $data ->Nom = $request->Nom[$key];
            $data ->Demande = $request->Demande[$key];
            $data ->Periode = $request->Periode[$key];
            $data ->Emp = $request->Emp[$key];
            $data ->wilaya = $request->wilaya[$key];
            $data ->user = (Auth::user()->name);  
            $data->save();
                 
        }
        foreach($request->N_Pension as $key=>$N_Pension){

            $instance_id = Instance::latest()->first()->id;
            Detail::create([
                'N_Pension' => $N_Pension,
                'instance_id' =>$instance_id,              
                'Nom' => $request->Nom[$key],
                'wilaya' => $request->wilaya[$key],
            ]);
        }
           
        return redirect()->back()->with('success'); 
    }  

    public function Enquete_update(Request $request)
    {
        $revisions = Instance::findOrFail($request->id);
        $revisions->update([

            $revisions->N_Pension = $request->N_Pension,
            $revisions->Nom = $request->Nom,
            $revisions->Demande = $request->Demande,
            $revisions->Periode = $request->Periode,
            $revisions->Emp = $request->Emp,
        ]);
        return redirect()->back()->with('success','felicitation ! La modification est réussite'); 
  }

  public function Revisions_destroy(Request $request)
  {
      $revisions = Instance::findOrFail($request->id)->delete();
      return redirect()->back()->with('warning','felicitation !', 'La suppression est réussite');   
  }
   
}

