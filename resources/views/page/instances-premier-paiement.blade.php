@extends('layouts.admin')

@section('title')
    Revsion Instance/338
@endsection

@section('title1')
    
@endsection

@section('css')
<style>
   
    #example td{
        padding: 2px;
        font-size: 14px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background-color: white;
        font: bold;
        color: #000;
        
    }
    #example th{
        padding: 7px;
        font-size: 14px;
        font: bold;
        background-color: blue;
        color: white;
    }
    #example td:hover{
       
    }
    .table td{
        border-top: 2px solid;
    }
    .btn-group{
        display:inline-block;
    }
    .btn-secondary{
        background-color: blue;
    }
    button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
    cursor: pointer;
    background-color: blue;
    color: white;
    font-weight: 700;
    margin:-0.4em;
    text-align-last: center
    }
    
</style>
@endsection

@section('content')
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

    <div class="container-fluid site-width">
        <div class="card">
            <div class="card-header" style="background-color:blue">
                <h4 style="text-align: center; color:rgb(255, 255, 255); font-size:23px">Les Enquetes En Instances/Service Revision</h4> 
            </div>
            <div class="card-body">
            <table id="example" class="table table-bordered border-primar">
                <thead class="table-dark text-center">
                    <tr>
                        <th style="width: 65px">id</th>
                        <th style="width: 190px">N_Pension</th>
                        <th style="width: 310px">Nom</th>
                        <th style="width: 50px">Demande</th>
                        <th style="width: 150px">Periode</th>
                        <th style="width: 180px">Emp</th>
                        <th style="width: 140px">Utilisateur</th>
                        <th  style="width: 100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($demandes as $key=>$items) 
                    <tr>
                        <td class="text-center">{{ ++$key }}</td>  
                        <td class="text-center">{{ $items->N_Pension }}</td> 
                        <td class="text-center">{{ $items->Nom }}</td> 
                        <td class="text-center">{{ $items->Demande }}</td> 
                        <td class="text-center">{{ $items->Periode }}</td>
                        <td class="text-center">{{ $items->Emp }}</td> 
                        <td>{{ $items->user }}</td> 
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                            data-bs-target="#edit{{ $items->id }}"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-sm btn-danger"  data-bs-toggle="modal"
                            data-bs-target="#delete{{ $items->id }}"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>


                      <!-- Modal Update-->
                      <div class="modal fade" id="edit{{ $items->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-success" id="exampleModalLabel">Modifier Assuré</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <br>
                                <div class="card-body">
                                    <form action="{{ route('Enquetes_update','test') }}" method="POST">
                                        @csrf
                                        @method('post')
                                        <div class="row" style="font-size: 15px;">
                                            <div class="form-group col-sm-6">     
                                                <input id="id" type="hidden" name="id" class="form-control" value="{{ $items->id }}">                                          
                                                <input type="text" class="form-control text-center" name="N_Pension" id="N_Pension" value="{{ $items->N_Pension }}" onchange="this.setAttribute('value', this.value);">
                                                <label class="form-control-placeholder" style="font-size:19px">N_Pension</label>
                                            </div>                                                    
                                            <div class="form-group col-sm-6">                                                  
                                                <input type="text" class="form-control text-center" name="Nom" id="Nom" value="{{ $items->Nom }}" onchange="this.setAttribute('value', this.value);"  >
                                                <label class="form-control-placeholder" style="font-size:19px">Nom</label>    
                                            </div> 
                                            <div class="form-group col-sm-4">                                                  
                                                <input type="text" class="form-control text-center" name="Demande" id="Demande" value="{{ $items->Demande }}" onchange="this.setAttribute('value', this.value);"  >
                                                <label class="form-control-placeholder" style="font-size:19px">Demande</label>    
                                            </div>
                                            <div class="form-group col-sm-4">                                                  
                                                <input type="text" class="form-control text-center" name="Periode" id="Periode" value="{{ $items->Periode }}" onchange="this.setAttribute('value', this.value);"  >
                                                <label class="form-control-placeholder" style="font-size:19px">Periode</label>    
                                            </div>
                                                
                                            <div class="form-group col-sm-4">                                                
                                                <input type="text" class="form-control text-center" name="Emp" id="Emp" value="{{ $items->Emp }}" onchange="this.setAttribute('value', this.value);"  >
                                                <label class="form-control-placeholder" style="font-size:19px">Emp</label>    
                                            </div>
                                        </div>
                                        <br>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Modifier</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>                
                    </div>    
                    <!-- Modal delete-->
                    <div class="modal fade" id="delete{{ $items->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-success text-danger" id="exampleModalLabel">Suprimer Assuré</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <br>
                                <div class="card-body">
                                    <form action="{{ route('Premier_destroy','test') }}" method="POST">
                                        @csrf
                                        @method('post')
                                        <div class="row">
                                            <div class="form-group col-sm-6">     
                                                <input id="id" type="hidden" name="id" class="form-control" value="{{ $items->id }}">                                          
                                                <input type="text" class="form-control" name="N_Pension" id="N_Pension" value="{{ $items->N_Pension }}" onchange="this.setAttribute('value', this.value);">
                                                <label class="form-control-placeholder" for="username">N_Pension</label>
                                            </div>                                                    
                                            <div class="form-group col-sm-6">                                                  
                                                <input type="text" class="form-control" name="Nom" id="Nom" value="{{ $items->Nom }}" onchange="this.setAttribute('value', this.value);"  >
                                                <label class="form-control-placeholder" for="email">Nom</label>    
                                            </div> 
                                        </div>
                                        <br>
                                                
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-secondary">Suprimer</button>
                                            <button type="button" class="btn btn-info" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>                
                    </div>
                    @endforeach
                </tbody>  
            </table>
            </div> 
        </div>
    </div>   

@endsection

@section('scripts')
<script src="dist/vendors/datatable/js/jquery.dataTables.min.js"></script> 
<script src="dist/vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="dist/vendors/datatable/jszip/jszip.min.js"></script>
<script src="dist/vendors/datatable/pdfmake/pdfmake.min.js"></script>
<script src="dist/vendors/datatable/pdfmake/vfs_fonts.js"></script>
<script src="dist/vendors/datatable/buttons/js/dataTables.buttons.min.js"></script>
<script src="dist/vendors/datatable/buttons/js/buttons.bootstrap4.min.js"></script>
<script src="dist/vendors/datatable/buttons/js/buttons.colVis.min.js"></script>
<script src="dist/vendors/datatable/buttons/js/buttons.flash.min.js"></script>
<script src="dist/vendors/datatable/buttons/js/buttons.html5.min.js"></script>
<script src="dist/vendors/datatable/buttons/js/buttons.print.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- START: Page Script JS-->        
<script src="dist/js/datatable.script.js"></script>
@endsection
