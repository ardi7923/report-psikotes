<table style="margin: 0 0 10px -5px">
    <tr>
        <td>
            <img src="{{ asset('assets-report/'.$image) }}" width="110px" height="122px">
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
