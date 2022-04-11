<button wire:click="showformadd" class="btn btn-info btn-sm" id="btnajou" type="button">
    <img src="{{ asset('admin/img/plus-sign.png') }}" alt="main_logo" style="width: 27px; margin-right:9px;"> Ajouter Assuré</button>
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
                            @foreach ($enquetes as $enquete)                                      
                                <tr style="">
                                    <?php $i++; ?> 
                                    <td>{{ $i }}</td>
                                    <td>{{ $enquete->N_Pension }}</td>
                                    <td>{{ $enquete->Nom }}</td>
                                    <td>{{ $enquete->Demande }}</td>
                                    <td>{{ $enquete->Reponse }}</td>
                                    <td>{{ $enquete->Periode }}</td>
                                    <td>{{ $enquete->Emp }}</td>
                                    <td>{{ $enquete->Rapport }}</td>
                                    <td>{{ $enquete->user }}</td>
                                    <td>
                                        <button type="button" wire:click="edit({{$enquete->id }})" class="btn btn-info btn-sm" style="background-color: blue" title="Modifier"><i class="fa fa-edit"></i></button>
                                        <button type="button" wire:click="delete({{$enquete->id }})" class="btn btn-danger btn-sm" style="background-color: red; margin-left:4.5px;margin-right:0.1px" title="Delete"><i class="fa fa-trash"></i></button>
                                        
                                        <a href="{{ url('Attachement')}}/{{ ($enquete->id) }}" class="btn btn-warning btn-sm" title="Détail"><i class="fa fa-eye"></i></a>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>   
