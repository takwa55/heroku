 
<!-- Deleted inFormation Student -->
<div class="modal fade" id="delete_image{{$enquete->id}}" abindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Suprimer fichier</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('delete_locale')}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$enquete->id}}">

                    <input type="hidden" name="Nom" value="{{ $style->Nom }}">
                    {{-- <input type="hidden" name="enquete_id" value="{{$attachment->imageable->id}}"> --}}

                    <h5 style="font-family: 'Cairo', sans-serif;"></h5>
                    <input type="text" name="file_name" readonly value="{{$enquete->file_name}}" class="form-control">

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" style="background: blue;color:white;" data-bs-dismiss="modal">Fermer</button>
                        <button  class="btn btn-danger">Suprimer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>