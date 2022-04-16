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
        background: blue;
        border: none;
        z-index: 1;
        border: 2px solid white;
        margin-left: 9px;
        font-size: 19px;
    }
    #btnajou:after{
        position: absolute;
        content: "";
        width: 100%;
        height: 0;
        top: 0;
        left: 0;
        z-index: -1;
        border-radius: 5px;
        background-color: #ffff00;
        background-image: linear-gradient(315deg, #eaf818 0%, #f6fc9c 74%);
        box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5);
        7px 7px 20px 0px rgba(0,0,0,.1),
        4px 4px 5px 0px rgba(0,0,0,.1);
        transition: all 0.3s ease;
    }
    #btnajou:hover {
        color: #000;
    }
    #btnajou:after {
        position: absolute;
        content: "";
        width: 100%;
        height: 0;
        top: 0;
        left: 0;
        z-index: -1;
        border-radius: 5px;
        background-color: #ffff00;
        background-image: linear-gradient(315deg, #eaf818 0%, #f6fc9c 74%);
        box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5);
        7px 7px 20px 0px rgba(0,0,0,.1),
        4px 4px 5px 0px rgba(0,0,0,.1);
        transition: all 0.3s ease;
    }
    #btnajou:hover {
         color: #000;
    }
    #btnajou:hover:after {
        top: auto;
        bottom: 0;
        height: 100%;
    }
    #btnajou:active {
        top: 19px;
}
</style>

@endsection

@section('content')
    <div class="card">
        <div class="card-body"  style="background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%); border-radius:7px;">
            <h3 style="color: white; text-align:center; font:bolder;" >Les enquetes_wilaya de <span style="color: rgb(255, 206, 60);text-decoration:underline">Constantine</span></h3>
            <img src="{{ asset('admin/img/338.jpg') }}" alt="main_logo" style="padding:0; margin-left:1096.9px;margin-top:0; width: 156px;margin-top: -3.44em;position:absolute">
            <livewire:add-enquete/> 
        </div>
    </div>
@endsection

@section('scripts')
@livewireScripts  
@endsection