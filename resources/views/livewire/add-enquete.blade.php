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
    @include('livewire.enquete_table')
    @else
        <div class="container-fluid site-width">
            <div class="row">
                <div class="card">
                    <div class="card-header" style="padding: 9px;">                               
                        <h2 class="card-title text-center" style="font-style: italic; color:blue; float: left; margin-top:3px; margin-left:19px;">Ajouter-assuré</h2>
                        <a href="{{ url('add-enquete') }}" class="btn btn-primary" style="float: right; margin-top:9px; margin-right:15px;">
                            <img src="{{ asset('admin/img/verified.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;"> Lite des enquetes</a>
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
                        <div class="form-group col-sm-3">                                                  
                            <input type="text" class="form-control text-center" wire:model="Periode" id="Periode" placeholder="La periode">

                        </div> 
                        <div class="form-group col-sm-3">                                                  
                            <input type="text" class="form-control text-center" wire:model="Emp" id="Emp" placeholder="Employeur">

                        </div>
                        <div class="form-group col-sm-3">                                                  
                            <input type="text" class="form-control text-center" wire:model="Rapport" id="Rapport" placeholder="Le rapport" value="N_Fait">
                        </div>
                    </div>
                    <br>
                    <p style="color:rgb(255, 255, 255); text-transform:uppercase; font-weight:700"><span style="text-transform: none; color:rgb(254, 254, 255); text-decoration:underline">Accept forme</span> : pdf - jpeg - jpg - png</p>
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
                    <button class="btn btn-success" wire:click="submitForm" type="button" style="background-color: blue">
                        <img src="{{ asset('admin/img/plus-sign.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;">Ajouter</button>
                    @endif
                </div>
            </div>   
            <!-- END: Card DATA-->
        </div>
    @endif
</div>
