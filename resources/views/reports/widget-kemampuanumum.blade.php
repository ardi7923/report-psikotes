<table style="margin: 0 0 0 -5px">
    <tr>
        <td>
            <img src="{{ asset('assets-report/'.$image) }}" width="110px" height="110px">
        </td>
        <td>
            <div style="background-color:#dcdcdc; padding : 12px; width:630px; height:85px">
                <h4 style="color:#{{ $color_title }}; margin: -5px 0 0px 0;"><b>{{ $title }}</b></h4>

                <img style="width: 500px;" src="{{  asset(image_kemampuan($score)) }}"><br>

                <p style="margin : 5px 0 0 0; font-size: 12; text-align: justify; color:black">{{ description_kemampuan($score,$title) }}</p>
            </div>
        </td>
    </tr>
</table>
