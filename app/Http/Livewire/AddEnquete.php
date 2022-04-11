<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Myparent;
use Livewire\WithFileUploads;
use App\Models\Models\Attachement;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;



class AddEnquete extends Component
{
    use WithFileUploads;

    public
    $N_Pension,
    $Nom,
    $Demande,
    $Reponse,
    $Periode,
    $Emp,
    $Rapport;
    public
    $photos,
    $udateMode = false,
    $show_table = true;

    public function render()
    {
        return view('livewire.add-enquete',[
            'enquetes' => Myparent::all(),
        ]);
       
    }

    public function showformadd()
    {
        $this->show_table = false;
    }

    public function submitForm(){      
            $My_Parent = new Myparent();
        
            $My_Parent->N_Pension = $this->N_Pension;
            $My_Parent->Nom = $this->Nom;
            $My_Parent->Demande = $this->Demande;
            $My_Parent->Reponse = $this->Reponse;
            $My_Parent->Periode = $this->Periode;
            $My_Parent->Emp = $this->Emp;
            $My_Parent->Rapport = $this->Rapport;
            $My_Parent ->user = (Auth::user()->name); 
            $My_Parent->save();

           if (!empty($this->photos)){
                foreach ($this->photos as $photo) {
                    $photo->storeAs($this->Nom, $photo->getClientOriginalName(), $disk = 'enquete_attachments');
                    
                    Attachement::create([
                        'file_name' => $photo->getClientOriginalName(),
                        'enquete_id' => Myparent::latest()->first()->id,
                    ]);
                }
            }
            $this->clearForm();
            return redirect()->to('add-enquete')->with('success','felicitation ! ');
        }

    public function clearForm()
    {
            $this->N_Pension = '';
            $this->Nom = '';
            $this->Demande = '';
            $this->Reponse = '';
            $this->Periode = '';
            $this->Emp = '';
            $this->Rapport = '';
    }

    public function edit($id)
    {
        $this->show_table = false;
        $this->udateMode = true;

        $My_Parent = Myparent::where('id', $id)->first();
        $this->enquete_id = $id;
        $this->N_Pension = $My_Parent->N_Pension;
        $this->Nom = $My_Parent->Nom;
        $this->Demande = $My_Parent->Demande;
        $this->Reponse = $My_Parent->Reponse;
        $this->Periode = $My_Parent->Periode;
        $this->Emp = $My_Parent->Emp;
        $this->Rapport = $My_Parent->Rapport;
        $this->user = $My_Parent->user;
    }
 public function submitForm_edit()
 {
    if ($this->enquete_id){
        $enquetes = Myparent::find($this->enquete_id);
        $enquetes->update([
            'N_Pension' => $this->N_Pension,
            'Nom' => $this->Nom,
            'Demande' => $this->Demande,
            'Reponse' => $this->Reponse,
            'Periode' => $this->Periode,
            'Emp' => $this->Emp,
            'Rapport' => $this->Rapport,
            'user' => $this->user,

        ]);
    }
    return redirect()->to('/add-enquete')->with('success','felicitation ! ');
 }

 public function delete($id)
 {
    $enquetes = Myparent::findOrFail($id)->delete();
    return redirect()->to('/add-enquete')->with('warning','felicitation ! ');
 }
   
}
