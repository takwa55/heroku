<?php

namespace App\Http\Livewire;

use App\Models\Wilaya;
use Livewire\Component;
use App\Models\AttachementWilaya;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AddWilaya extends Component
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
        return view('livewire.add-wilaya');
    }



    public function submitForm(){      
        $My_Parent = new Wilaya();
    
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
                $photo->storeAs($this->Nom, $photo->getClientOriginalName(), $disk = 'wilaya_attachments');
                
                AttachementWilaya::create([
                    'file_name' => $photo->getClientOriginalName(),
                    'wilaya_id' => Wilaya::latest()->first()->id,
                ]);
            }
        }
        $this->clearForm();
        return redirect()->to('add-wilaya')->with('success','felicitation ! ');
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

}
