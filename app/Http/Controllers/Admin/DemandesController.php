<?php

namespace App\Http\Controllers\Admin;

use App\Models\PDetail;
use App\Models\Demandes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DemandesController extends Controller
{
    public function index()
    {
        $demandes = Demandes::all();
        return view('page.instances-premier-paiement', compact('demandes'));
        
    }

    public function add()
    {
        return view('page.demande-p-paiement');
    }

    public function insert(Request $request)
    {
        foreach($request->N_Pension as $key=>$N_Pension){

            $data = new Demandes();
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

            $demande_id = Demandes::latest()->first()->id;
            PDetail::create([
                'N_Pension' => $N_Pension,
                'demande_id' =>$demande_id,              
                'Nom' => $request->Nom[$key],
                'wilaya' => $request->wilaya[$key],
            ]);
        }
       return redirect()->back()->with('success','felicitation');
    }

    public function Enquetes_update(Request $request)
    {
        $revisions = Demandes::findOrFail($request->id);
        $revisions->update([

            $revisions->N_Pension = $request->N_Pension,
            $revisions->Nom = $request->Nom,
            $revisions->Demande = $request->Demande,
            $revisions->Periode = $request->Periode,
            $revisions->Emp = $request->Emp,
        ]);
        return redirect()->back()->with('success','felicitation ! La modification est réussite'); 
  }

  public function Premier_destroy(Request $request)
  {
      $revisions = Demandes::findOrFail($request->id)->delete();
      return redirect()->back()->with('warning','felicitation !', 'La suppression est réussite');   
  }
   
}
