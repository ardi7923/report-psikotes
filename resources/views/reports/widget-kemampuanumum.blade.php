<table style="margin: 0 0 10px -2px">
    <tr>
        <td>
            <img src="{{ asset('assets-report/'.$image) }}" width="120px" height="120px">
        </td>
        <td>
            <div style="background-color:#dcdcdc; padding : 12px">
                <h4 style="color:#{{ $color_title }}; margin: 0 0 5px 0;"><b>{{ $title }}</b></h4>

                <img style="width: 500px;" src="{{ asset('assets-report/ket1.png')}}"><br>

                <p style="margin : 5px 0 0 0; font-size: 11; text-align: justify; color:black">{{ $description }}</p>
            </div>
        </td>
    </tr>
</table>

<!-- <div class="row">
    <div class="col-md-2 col-sm-4 col-lg-2"><img src="{{ asset('assets-report/'.$image) }}" width="100%"></div>
    <div class="col-md-10 col-sm-8 col-lg-10" style="background-color:#dcdcdc;">
        <h4 style="color:#a5bd07"><b>{{ $title }}</b></h4>
        <img src="{{ asset('assets-report/ket1.png')}}"><br>
        <h6>{{ $description }}</h6>
    </div>
</div> -->