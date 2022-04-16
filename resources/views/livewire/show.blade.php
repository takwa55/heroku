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
        background-color: rgb(28, 8, 255);
        border-radius: 25px;
        
        border: 2px solid rgb(255, 255, 255);
        transition: all 0.2s ease;
        padding: 5px;
        
    }
    #btnajou:hover{
        background:rgb(255, 73, 173);
        cursor: pointer;
        color: rgb(255, 255, 255);
    }
   

    
</style>

@endsection

@section('content')
    <div class="card">
        <div class="card-body"  style="background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%); border-radius:7px;">
            <h3 style="color: white; text-align:center; font:bolder" >Caisse Nationale des Retraites</h3>
            <img src="{{ asset('admin/img/338.jpg') }}" alt="main_logo" style="padding:0; margin-left:1096.9px;margin-top:0; width: 156px;margin-top: -3.44em;position:absolute">
            <livewire:add-enquete/> 
        </div>
    </div>
@endsection

@section('scripts')
@livewireScripts  
@endsection