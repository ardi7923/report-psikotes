<div class="modal-header">
    <h4 class="modal-title" id="exampleModalLabel"> Download Hasil Ujian </h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>

<div class="modal-body">

    <div style="color:red">
        <strong> Hasil Ujian Dibagi menjadi beberapa Bagian</strong>
    </div>
    <br>

    <div style="margin : 10px 10px 10px 10px;">
        @for ($i = 0 ; $i < count($url); $i++) <a href="{{ $url[$i] }}" target="_blank">
            <button class="btn btn-danger" style="margin-right:20px"> <i class="fa fa-download"></i> Part {{ $i+1 }} </button>
            </a>
            @endfor
    </div>
</div>