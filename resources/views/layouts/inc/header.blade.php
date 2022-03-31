<!--
=========================================================
* Argon Dashboard 2 - v2.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/img/apple-icon.png') }}">
      <link rel="icon" type="image/png" href="{{ asset('admin/img/favicon.png') }}">
      <title>
        Traitement des enquetes
      </title>
    
      <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet" />
      <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet" />
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="{{ asset('admin/css/fontawesome.min.css') }}" type="text/css"> 
      <link rel="stylesheet" href="{{ asset('admin/css/all.min.css') }}" type="text/css"> 
     
      <link rel="stylesheet" href="{{ asset('admin/vendors/simple-line-icons/css/simple-line-icons.css') }}">        
      <link rel="stylesheet" href="{{ asset('admin/vendors/flags-icon/css/flag-icon.min.css') }}"> 
      <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet" />

     
      <!-- CSS Files -->
    
      <link id="pagestyle" href="{{ asset('admin/css/argon-dashboard.css') }}" rel="stylesheet" />
      
                                      {{-- datatables --}}
      <link href="{{asset('DataTables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('DataTables/datatables.min.js') }}"></script>
      
 
      <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

      @livewireStyles
      
      @yield('css')
    
  </head>