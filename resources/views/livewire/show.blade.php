@extends('layouts.admin')
@section('title')
    liste
@endsection
@section('css')
<style>
    #example td{
        padding: 2px;
        font-size: 14px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font: bold;
        
    }
    #example th{
        padding: 7px;
        font-size: 14px;
        font: bold;
        background-color: rgb(73, 58, 153);
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
  
</style>
@endsection

@section('content')
    <div class="card">
        <div class="card-body"  style="background-color: #35465c; border-radius:7px.7px;">
            <h3 style="color: white; text-align:center; font:bolder" >Caisse Nationale des Retraites</h3>
            <livewire:add-enquete/> 
        </div>
    </div>
@endsection

@section('scripts')
@livewireScripts  
@endsection