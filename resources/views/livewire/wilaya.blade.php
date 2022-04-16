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
    text-align-last: center;
    }
    #btnajou1{
        background: linear-gradient(0deg, rgb(0, 21, 255) 0%, rgb(2, 197, 251) 100%);
        line-height: 42px;
        padding: 0;
        border: 2px solid white;
        font-size: 21px;
        width: 250px;
        margin-left: 9px;
    }
    #btnajou1:before,
    #btnajou1:after {
        position: absolute;
        content: "";
        right: 0;
        bottom: 0;
        background: rgb(2, 251, 77);
        box-shadow:
        -7px -7px 20px 0px rgba(255,255,255,.9),
        -4px -4px 5px 0px rgba(255,255,255,.9),
        7px 7px 20px 0px rgba(0,0,0,.2),
        4px 4px 5px 0px rgba(0,0,0,.3);
        transition: all 0.3s ease;
    }
    #btnajou1:before{
        height: 0%;
        width: 2px;
    }
    #btnajou1:after {
        width: 0%;
        height: 2px;
    }
    #btnajou1:hover{
        color: rgb(255, 255, 7);
        background: transparent;
    }
    #btnajou1:hover:before {
        height: 100%;
    }
    #btnajou1:hover:after {
         width: 100%;
    }
    #btnajou1 span:before,
    #btnajou1 span:after {
        position: absolute;
        content: "";
        left: 0;
        top: 0;
        background: rgb(234, 251, 2);
        box-shadow:
        -7px -7px 20px 0px rgba(255,255,255,.9),
        -4px -4px 5px 0px rgba(255,255,255,.9),
        7px 7px 20px 0px rgba(0,0,0,.2),
        4px 4px 5px 0px rgba(0,0,0,.3);
        transition: all 0.3s ease;
    }
    #btnajou1 span:before {
        width: 2px;
        height: 0%;
    }
    #btnajou1 span:after {
        height: 2px;
        width: 0%;
    }
    #btnajou1 span:hover:before {
        height: 100%;
    }
    #btnajou1 span:hover:after {
        width: 100%;
}
    .row input,placeholder{
        font-weight: 700;
    }
    #back{
        background: rgb(131,58,180);
        background:linear-gradient(90deg,
        rgba(131,58,180,1) 0%,
        rgba(253,29,29,1) 50%,
        rgba(252,176,69,1) 100%);
    }
</style>
@endsection

@section('content')
    <div class="card">
        <div class="card-body" id="back"  style= "border-radius:7px;width:100%">
            <h3 style="color: white; text-align:center; font:bolder" >Les enquetes <span style="color: rgb(57, 255, 3);text-decoration:underline">Wilayas</span></h3>
            <img src="{{ asset('admin/img/338.jpg') }}" alt="main_logo" style="padding:0; margin-left:1096.9px;margin-top:0; width: 156px;margin-top: -3.44em;position:absolute">
            <livewire:add-wilaya/> 
        </div>
    </div>
@endsection

@section('scripts')
@livewireScripts  
@endsection