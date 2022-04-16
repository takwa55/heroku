@can('Ajouter_wilaya')
    <button wire:click="showformadd" class="btn btn-info btn-sm" id="btnajou1" type="button">
    <img src="{{ asset('admin/img/plus-sign.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;"><span> Ajouter Assuré</span></button>
@endcan
<br> <br>
    <div class="row">
        <div class="col-12">
            <div class="card">
         
                <div class="table-responsive">
                    <table id="example" class="display table dataTable" style="width: 100%;" >
                        <thead class="table" style="text-align: center">
                            <tr>
                                <th scope="col" style="width: 75px">id</th>
                                <th style="width: 70px">N_Pension</th>
                                <th style="width: 310px">Nom</th>
                                <th style="width: 100px">Demande</th>
                                <th style="width: 100px">Reponse</th>
                                <th style="width: 150px">Periode</th>
                                <th style="width: 150px">Emp</th>
                                <th style="width: 50px">Rapport</th>
                                <th style="width: 100px">Utilisateur</th>
                                <th style="width: 100px">Operation</th>
                            </tr>
                        </thead>
                        <tbody class="" style="text-align: center">
                            <?php $i=0; ?>
                            @foreach ($wilayas as $wilaya)                                      
                                <tr style="">
                                    <?php $i++; ?> 
                                    <td>{{ $i }}</td>
                                    <td>{{ $wilaya->N_Pension }}</td>
                                    <td>{{ $wilaya->Nom }}</td>
                                    <td>{{ $wilaya->Demande }}</td>
                                    <td>{{ $wilaya->Reponse }}</td>
                                    <td>{{ $wilaya->Periode }}</td>
                                    <td>{{ $wilaya->Emp }}</td>
                                    <td>{{ $wilaya->Rapport }}</td>
                                    <td>{{ $wilaya->user }}</td>
                                    <td>
                                        @can('Modifier_wilaya')
                                            <button type="button" wire:click="edit({{$wilaya->id }})" class="btn btn-info btn-sm" style="background-color: blue" title="Modifier"><i class="fa fa-edit"></i></button>
                                        @endcan

                                        @can('Suprimer_wilaya')
                                            <button type="button" wire:click="delete({{$wilaya->id }})" class="btn btn-danger btn-sm" style="background-color: red; margin-left:4.5px;margin-right:0.1px" title="Suprimer"><i class="fa fa-trash"></i></button>
                                        @endcan

                                        <a href="{{ url('Attachement_wilaya')}}/{{ ($wilaya->id) }}" class="btn btn-warning btn-sm" title="Détail"><i class="fa fa-eye"></i></a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>   
