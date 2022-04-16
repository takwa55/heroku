@extends('layouts.admin')
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
        background-color: rgb(73, 58, 153);
        color: #000;
    }
   
    button:not(:disabled), [type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled) {
    cursor: pointer;
    background-color: blue;
    color: white;
    font-weight: 700;
    margin:-0.4em;
    text-align-last: center
    }
    #btnajou{
        margin-left: 5px;
        width: 190px;
        font-size: 15px;
        color: beige;
        font-weight: 700;
        background-color: rgb(28, 8, 255)
    }
</style>
    
@endsection
@section('content')
    <div class="card"style="background: linear-gradient(90deg, #FDBB2D 0%, #3A1C71 100%);>
        <div class="card-body"  style="background-color: #35465c; border-radius:7px;">
            <h5 style="color: white; text-align:center; font:bolder" >Constantine statistique</h5>
        </div>
    </div>
    <div class="card-body"style="background: linear-gradient(90deg, #FDBB2D 0%, #3A1C71 100%);>
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <form action="/Search_invoice" method="POST" role="search" autocomplete="off">
                        {{ csrf_field() }}
                                             
                        <div class="row"">
                            
                            <div class="form-group">
                                <label class="rdiobox">
                                    <input checked name="rdio" type="radio" value="1" id="type_div"><span> Recherche par utilisateur</span>
                                </label>
                            </div>     
                            <div class="form-group col-sm-3" style="position:absolute;margin-left:190px;">
                                <label class="rdiobox"><input name="rdio" value="2" type="radio"><span> Recherche par N_Pension</span>
                                </label>
                            </div>
                           
                            <div class="form-group col-sm-4" id="invoice_number">

                                <input type="text" class="form-control" id="N_Pension" name="N_Pension" placeholder="Saisie le N_Pension ">
    
                            </div>
                                
                            <div class="form-group col-sm-2" id="type">   
                                <select class="form-control select2" name="type" required>
                                    <option value="{{ $type ?? 'Utilisateur' }}" selected>
                                        {{ $type ?? '' }}
                                    </option>
                                    @foreach ($enquetes as $style)
                                        <option value="{{ $style->user }}">{{ $style->user }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-3"id="start_at">
                                <label for="">Du</label>
                                <input type="date" class="form-control"name="start_at"value="{{ $start_at ?? '' }}">
                            </div>

                            <div class="form-group col-sm-3"id="end_at">
                                <label for="">Au</label>
                                <input type="date" class="form-control"name="end_at"value="{{ $start_at ?? '' }}">
                            </div>
                            <div class="form-group col-sm-3" style="position:absolute;margin-top:90px;margin-left:832px;">
                                <button class="btn btn-primary">Chercher</button>
                            </div>
                        </div>
                    </form>
    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        @if (isset($details))
                        <table id="example" class="display table dataTable" style="width: 100%;" >
                                <thead style="text-align: center">
                                    <tr>
                                        <th class="border-bottom-0">#</th>
                                        <th class="border-bottom-0">N_Pension</th>
                                        <th class="border-bottom-0">Nom</th>
                                        <th class="border-bottom-0">Demande</th>
                                        <th class="border-bottom-0">Reponse</th>
                                        <th class="border-bottom-0">Periode</th>
                                        <th class="border-bottom-0">Emp</th>
                                        <th class="border-bottom-0">Rapport</th>
                                        <th class="border-bottom-0">user</th>
                                
                                    </tr>
                                </thead>
                                <tbody style="text-align: center">
                                    <?php $i = 0; ?>
                                    @foreach ($details as $invoice)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $invoice->N_Pension }} </td>
                                            <td>{{ $invoice->Nom }}</td>
                                            <td>{{ $invoice->Demande }}</td>
                                         {{--    <td><a
                                                    href="{{ url('InvoicesDetails') }}/{{ $invoice->id }}">{{ $invoice->section->section_name }}</a>
                                            </td> --}}
                                            <td>{{ $invoice->Reponse }}</td>
                                            <td>{{ $invoice->Periode }}</td>
                                            <td>{{ $invoice->Emp }}</td>
                                            <td>{{ $invoice->Rapport }}</td>
                                            <td>{{ $invoice->user }}</td>
                                           

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
    
                        @endif
                    </div>
                </div>
            </div>
        </div>
    
    </div>
  
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#invoice_number').hide();
        $('input[type="radio"]').click(function() {
            if ($(this).attr('id') == 'type_div') {
                $('#invoice_number').hide();
                $('#type').show();
                $('#start_at').show();
                $('#end_at').show();
            } else {
                $('#invoice_number').show();
                $('#type').hide();
                $('#start_at').hide();
                $('#end_at').hide();
            }
        });
    });
</script>
@endsection

   