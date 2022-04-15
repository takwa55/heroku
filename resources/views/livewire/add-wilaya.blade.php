@if (session('success-message') )
<div class="alert alert-success text-center">
    {{ session('success-message') }}
</div>
@endif

@if (session('warning-message') )
<div class="alert alert-warning text-center">
    {{ session('warning-message') }}
</div>
@endif
<div>
    @if($show_table)
    @include('livewire.wilaya_table')
    @else
        <div class="container-fluid site-width">
            <div class="row">
                <div class="card">
                    <div class="card-header" style="padding: 9px;">                               
                        <h2 class="card-title text-center" style="font-style: italic; color:blue; float: left; margin-top:3px; margin-left:19px;">Ajouter_assuré</h2>
                        <a href="{{ url('add-wilaya') }}" class="btn btn-primary" style="float: right; margin-top:9px; margin-right:15px;">
                            <img src="{{ asset('admin/img/verified.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;"> Lite des enquetes/wilaya</a>
                    </div>
                </div>   
                <!-- Modal Add-->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-sm-4">                                               
                            <input type="text" class="form-control text-center"  wire:model="N_Pension" id="N_Pension" placeholder="Numero_Pension">
                            
                        </div>                                                    
                        <div class="form-group col-sm-4">                                                  
                            <input type="text" class="form-control text-center" wire:model="Nom" id="Nom" placeholder="Nom_Prenom">  
                        </div> 
                        <div class="form-group col-sm-4">                                                  
                            <input type="date" class="form-control" wire:model="Demande" id="Demande">

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-3">                                               
                            <input type="date" class="form-control" wire:model="Reponse" id="Reponse">

                        </div>                                                    
                        <div class="form-group col-sm-2">                                                  
                            <input type="text" class="form-control text-center" wire:model="Periode" id="Periode" placeholder="La periode">

                        </div> 
                        <div class="form-group col-sm-2">                                                  
                            <input type="text" class="form-control text-center" wire:model="Emp" id="Emp" placeholder="Employeur">

                        </div>
                        <div class="form-group col-sm-2">                                                  
                            <input type="text" class="form-control text-center" wire:model="Rapport" id="Rapport" placeholder="Le rapport" value="N_Fait">
                        </div>
                        <div class="form-group col-sm-3"> 
                            <select class="form-control text-center"  wire:model="Wilaya" id="wilaya"> 
                                <option>-- Wilaya --</option>
                                <option>Adrar</option>
                                <option>Chlef</option>
                                <option>Oum El Bouaghi</option>
                                <option>Batna</option>
                                <option>Béjaïa</option>
                                <option>Biskra </option>
                                <option>Béchar</option>
                                <option>Bouira</option>
                                <option>Tamanrasset</option>
                                <option>Tébessa</option>
                                <option>Tlemcen</option>
                                <option>Tiaret</option>
                                <option>Tizi Ouzou</option>
                                <option>Alger-Centre</option>
                                <option>Alger-Est</option>
                                <option>Alger-Ouest</option>
                                <option>Alger-Nord</option>
                                <option>Djelfa</option>
                                <option>Jijel</option>
                                <option>Sétif</option>
                                <option>Saïda</option>
                                <option>Skikda</option>
                                <option>Sidi Bel Abbès</option>
                                <option>Annaba</option>
                                <option>Guelma</option>
                                <option>Constantine</option>
                                <option>Médéa</option>
                                <option>Mostaganem</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                                <option>Laghouat</option>
                            </select>                                                  
                        </div>
                    </div>
                    <br>
                    <p style="color:rgba(253,29,29,1); text-transform:uppercase; font-weight:700;background:rgb(255, 255, 255);width:360px;text-align:center;border-radius:7px;margin-left:21px;padding:7px;"><span style="text-transform: none; color:rgb(0, 0, 8); text-decoration:underline">Accept forme</span> : pdf - jpeg - jpg - png</p>
                    <div class="col-12 col-sm-6">
                        <label for="fileUpload4" class="file-upload btn btn-info btn-block"><i class="fa fa-upload mr-2"></i>
                            <input id="fileUpload4" type="file" wire:model="photos" accept=",pdf, jpg, png, image/jpeg, image/jpg, image/phg" multiple>
                        </label>
                    </div>
                    <br>
                    @if ($udateMode)
                    <div class="col-md-12">
                        <button class="btn btn-success" wire:click="submitForm_edit" type="button">
                            <img src="{{ asset('admin/img/edit.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;"> Modifier</button>
                    </div>
                    @else
                    <button class="btn btn-success" wire:click="submitForm" type="button" style="background-color: blue;margin-left:19px;
                    ">
                        <img src="{{ asset('admin/img/plus-sign.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;"> Ajouter</button>
                    @endif
                </div>
            </div>   
            <!-- END: Card DATA-->
        </div>
    @endif
</div>
