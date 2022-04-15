@extends('layouts.admin')
@section('css')
<style>
    #examples td{
        padding: 2px;
        font-size: 14px;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font: bold;
        
    }
    #examples th{
        padding: 7px;
        font-size: 14px;
        font: bold;
        background-color: rgb(73, 58, 153);
        color: white;
    }
    #examples td{
        padding:0cm;
        margin-top: 0;
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
      <div class="card-header" style="background-color: #35465c; border-radius:7px;">
        <h5 style="color: white; text-align:center; font:bolder" >Les Enquetes Effecues/Wilaya-Constantine</h5>
      </div>
  </div>

  <div class="card-body">
    <div class="tabs">
      <ul>
        <li class="active">
          <span class="icon">
            <i class="far fa-envelope"></i>
          </span>
          <span class="text">Letter</span>
        </li>
        <li>
          <span class="icon">
            <i class="fas fa-sms"></i>
          </span>
          <span class="text">SMS</span>
        </li>
        <li>
          <span class="icon">
            <i class="fas fa-phone-alt"></i>
          </span>
          <span class="text">Phone</span>
        </li>
        <li>
          <span class="icon">
            <i class="fas fa-mobile-alt"></i>
          </span>
          <span class="text">Smart Phone</span>
        </li>
      </ul>
    </div>
  
    <div class="content">
      <div class="tab_wrap" style="display: block;">
        <div class="tab_content">
          <table class="table" id="examples">
            <thead>
              <tr style="text-align: center">
                <th style="width: 70px">id</th>
                <th style="width: 70px">N_Pension</th>
                <th style="width: 310px">Nom</th>
                <th style="width: 70px">Wilaya</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach ($enquetes as $style)                                      
              <tr style="text-align: center">
                    <?php $i++; ?> 
            
                <td>{{ $i}}</td>
                <td>{{ $style->N_Pension }}</td>
                <td>{{ $style->Nom }}</td>
                <td>{{ $style->Wilaya }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab_wrap" style="display: none;">
        <div class="tab_content">
          <table class="table" id="examples">
            <thead>
              <tr style="text-align: center">
                <th style="width: 70px">id</th>
                <th style="width: 160px">N_Pension</th>
                <th style="width: 180px">Nom</th>
                <th style="width: 180px">Nom_Fichier</th>
                <th style="width: 180px">Operation</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach ($attachements as $enquete)                                      
              <tr style="text-align: center">
                <?php $i++; ?> 
          
                <td>{{ $i}}</td>
                <td>{{ $style->N_Pension }}</td>
                <td>{{ $style->Nom }}</td>
                <td>{{ $enquete->file_name }}</td>
                <td>
                  <a href="{{ url('download_locale') }}/{{ $style->Nom }}/{{ $enquete->file_name }}" class="btn btn-warning" role="button" title="Télécharger"><i class="fa fa-download"></i></a>
                  {{-- <a href="{{ url('delete') }}/{{ $style->Nom }}/{{ $enquete->file_name }}" class="btn btn-danger" role="button"><i class="fa fa-trash"></i></a> --}}
                  <a href="{{ url('view_locale') }}/{{ $style->Nom }}/{{ $enquete->file_name }}" class="btn btn-info" role="button" title=""><i class="fa fa-eye"></i></a>
                  <button type="button" class = "btn btn-danger" data-bs-toggle="modal" title="Suprimer" data-bs-target="#delete_image{{ $enquete->id }}"><i class="fa fa-trash"></i></button>
                </td>
              </tr>
              @include('page.delete')
              @endforeach
            </tbody>
          </table>
        
        </div>
      </div>
      <div class="tab_wrap" style="display: none;">
        <div class="title">Phone</div>
        <div class="tab_content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis alias, magni provident nulla recusandae odio consequatur praesentium officia non voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo. Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis alias, magni provident nulla recusandae odio consequatur praesentium officia non voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo. Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
        </div>
      </div>
      <div class="tab_wrap" style="display: none;">
        <div class="title">Smart Phone</div>
        <div class="tab_content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis alias, magni provident nulla recusandae odio consequatur praesentium officia non voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo. Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem inventore perspiciatis alias, magni provident nulla recusandae odio consequatur praesentium officia non voluptate voluptatum debitis consequuntur omnis incidunt fuga eaque sit aliquam nemo. Recusandae voluptatibus excepturi, voluptates inventore nulla aliquid porro a asperiores beatae quas quo incidunt at, cumque minima officiis error eius dignissimos animi ullam unde odit! Nobis aut animi quibusdam molestias libero, facere vel cum atque incidunt esse! Libero ipsam praesentium sit, enim corrupti quia nobis obcaecati nostrum voluptatem totam nulla delectus ipsa facilis optio quis iure unde repudiandae voluptas temporibus, ad veritatis dolorem, culpa maiores. Dicta, quod neque.</p>
        </div>
      </div>
    </div>
  </div> 
@endsection
