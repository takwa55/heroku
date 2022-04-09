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
    $Rapport,
    $user;
    public
    $photos,
    $udateMode = false,
    $show_table = true;

    public function render()
    {
        return view('livewire.add-wilaya',[
            'wilayas' => Wilaya::all(),
        ]);
    }


    public function showformadd()
    {
        $this->show_table = false;
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

    public function edit($id)
    {
        $this->show_table = false;
        $this->udateMode = true;

        $My_wilaya = Wilaya::where('id', $id)->first();
        $this->wilaya_id = $id;
        $this->N_Pension = $My_wilaya->N_Pension;
        $this->Nom = $My_wilaya->Nom;
        $this->Demande = $My_wilaya->Demande;
        $this->Reponse = $My_wilaya->Reponse;
        $this->Periode = $My_wilaya->Periode;
        $this->Emp = $My_wilaya->Emp;
        $this->Rapport = $My_wilaya->Rapport;
        $this->user = $My_wilaya->user;

    }

    public function submitForm_edit()
    {
        if ($this->wilaya_id){
            $wialayas = Wilaya::find($this->wilaya_id);
            $wialayas->update([
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
     return redirect()->to('/add-wilaya')->with('success','felicitation ! ');
    }

    public function delete($id)
    {
        $wialayas = Wilaya::findOrFail($id)->delete();
        return redirect()->to('/add-wilaya')->with('warning','felicitation ! ');
    }
   
  
}