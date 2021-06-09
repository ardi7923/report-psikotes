<style>
    .text-bold {
        font-weight: bold;
    }

    .text-center {
        text-align: center;
    }
</style>
<table>
    <thead>
        <tr>
            <th class="text-bold text-center"> No </th>
            <th class="text-bold text-center"> Nama </th>
            <th class="text-bold text-center"> No. Tes </th>
            <th class="text-bold text-center"> Sekolah </th>
            <th class="text-bold text-center"> Tgl. Tes </th>
            <th class="text-bold text-center"> IQ </th>
            <th class="text-bold text-center"> Rekomendasi 1</th>
            <th class="text-bold text-center"> Rekomendasi 2</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $i => $d)
        <tr>
            <td> {{ $i+1 }} </td>
            <td> {{ $d->nama }} </td>
            <td> {{ $d->no_tes }} </td>
            <td> {{ $d->sekolah }} </td>
            <td> {{ $d->tanggal_tes }} </td>
            <td> {{ $d->iq }} </td>
            <td> {{ $d->rekom1 }} </td>
            <td> {{ $d->rekom2 }} </td>
        </tr>
        @endforeach
    </tbody>
</table>