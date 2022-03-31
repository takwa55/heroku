@extends('layouts.admin')

@section('css')
<style>
    .error {
        color: red;
        border-color: red;
    }
</style>
<script src="{{ asset('js/Frontend/validate.js') }}"></script>
@endsection
@section('content')


        <span id="message_error"></span>
        <hr><br>
        <div class="repeater">
            <div data-repeater-list="List_Classes">
                <div class="data-repeater-item">
                    <form id="validate" action="{{ url('insert-revision') }}" method="POST">
                        @csrf 
                        
                        <table id="emptbl" class="table table-bordered border-primar">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th style="width: 190px">N_Pension</th>
                                    <th style="width: 300px">Nom</th>
                                    <th style="width: 40px">Demande</th>
                                    <th style="width: 150px">Periode</th>
                                    <th style="width: 180px">Emp</th>
                                    <th style="width: 120px">Wilaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr> 
                                    <td id="col0"><input type="text" class="form-control text-center" name=" N_Pension[]" required></td> 
                                    <td id="col1"><input type="text" class="form-control text-center" name=" Nom[]" required></td> 
                                    <td id="col2"><input type="date" class="form-control text-center" name=" Demande[]" required></td> 
                                    <td id="col3"><input type="text" class="form-control text-center" name=" Periode[]" required></td>
                                    <td id="col4"><input type="text" class="form-control text-center" name=" Emp[]" required></td> 
                                    
                                    <td id="col5"> 
                                        <select class="form-control text-center" name="wilaya[]"required> 
                                            <option selected disabled>-- Choisir --</option> 
                                            <option>Adrar</option>
                                            <option>Chlef</option>
                                            <option>Oum El Bouaghi</option>
                                            <option>Batna</option>
                                            <option>Béjaïa</option>
                                            <option>Biskra </option>
                                            <option>Béchar</option>
                                            <option>Bouira</option>
                                            <option>Tamanrasset</option>
                                            <option>Tébessa</option>
                                            <option>Tlemcen</option>
                                            <option>Tiaret</option>
                                            <option>Tizi Ouzou</option>
                                            <option>Alger-Centre</option>
                                            <option>Alger-Est</option>
                                            <option>Alger-Ouest</option>
                                            <option>Alger-Nord</option>
                                            <option>Djelfa</option>
                                            <option>Jijel</option>
                                            <option>Sétif</option>
                                            <option>Saïda</option>
                                            <option>Skikda</option>
                                            <option>Sidi Bel Abbès</option>
                                            <option>Annaba</option>
                                            <option>Guelma</option>
                                            <option>Constantine</option>
                                            <option>Médéa</option>
                                            <option>Mostaganem</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                            <option>Laghouat</option>
                                        </select> 
                                    </td> 
                                </tr>
                            </tbody>  
                        </table> 
                        <table>
                            <br>
                            <tr> 
                                <td><button type="button" class="btn btn-sm btn-info" onclick="addRows()">Add</button></td>
                                <td><button type="button" class="btn btn-sm btn-danger" onclick="deleteRows()">Remore</button></td>
                                <td><button type="submit" class="btn btn-sm btn-success">Save</button></td> 
                            </tr>  
                        </table> 
                    </form>
                </div>
            </div> 
        </div>       
    <script>
        function addRows()
        { 
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            var cellCount = table.rows[0].cells.length; 
            var row = table.insertRow(rowCount);
            for(var i =0; i <= cellCount; i++)
            {
                var cell = 'cell'+i;
                cell = row.insertCell(i);
                var copycel = document.getElementById('col'+i).innerHTML;
                cell.innerHTML=copycel;
                if(i == 5)
                { 
                    var radioinput = document.getElementById('col2').getElementsByTagName('input'); 
                    for(var j = 0; j <= radioinput.length; j++)
                    { 
                        if(radioinput[j].type == 'radio')
                        { 
                            var rownum = rowCount;
                            radioinput[j].name = 'gender['+rownum+']';
                        }
                    }
                }
            }
        }

        function deleteRows()
        {
            var table = document.getElementById('emptbl');
            var rowCount = table.rows.length;
            if(rowCount > '2')
            {
                var row = table.deleteRow(rowCount-1);
                rowCount--;
            }else{
                alert('There should be atleast one row');
            }
        }
    </script>
    <!-- alert blink text -->
    <script>
        function blink_text()
        {
            $('#message_error').fadeOut(700);
            $('#message_error').fadeIn(700);
        }
        setInterval(blink_text,1000);
    </script>
    <!-- script validate form -->
    <script>
        $('#validate').validate({
            reles: {
                'N-Pension[]': {
                    required:true,
                },
                'Nom[]': {
                    required:true,
                },
                'Demande[]': {
                    required:true,
                },
                'Periode[]': {
                    required:true,
                },
                'Emp[]': {
                    required:true,
                },
                'User[]': {
                    required:true,
                },
            },
            messages: {
                'N-Pension[]' : "Please input file*",
                'Nom[]' : "Please input file*",
                'Demande[]' : "Please input file*",
            },
        });
    </script>

@endsection
@section('scripts')
    
@endsection