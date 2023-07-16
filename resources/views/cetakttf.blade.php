<!DOCTYPE html>

<head>
    <title>Tanda Tukar Faktur</title>
    <meta charset="utf-8">
    <style>
        #judul{
            text-align:center;
            text-transform: uppercase;
        }

        #halaman{
            text-align:justify;
            width: auto;
            height: auto;
            position: absolute;
            padding-top: 40px;
            padding-left: 50px;
            padding-right: 50px;
            padding-bottom: 60px;
        }
        ul.a {
            list-style-type: square;
            font-size: 9;
        }
        #kata{
            font-family: 'Times New Roman';
            font-size: 10;
        }
        .tab1 {
            display: inline-block;
            margin-left: 40px;
        }
        .tab2 {
            display: inline-block;
            margin-left: 80px;
        }
        .tab3 {
            display: inline-block;
            margin-left: 70px;
        }
        .tab4 {
            display: inline-block;
            margin-left: 49px;
        }
        .tab5 {
            display: inline-block;
            margin-left: 9px;
        }
        td.spasi {
            padding-left: 50px;
            padding-right : 50px;
        }

    </style>
</head>

<body>
@foreach($ttf as $s1)
@foreach($ttf as $s2)
        <table border="0" align="justify">
            <tr>
            <td><img src="favicon.png" width=60 height=80/></td>
            <td>
                {{-- <font size="3">UNIVERSITAS KRISTEN DUTA WACANA</font><br>
                <font size="3"><b>FAKULTAS TEKNOLOGI INFORMASI</b></font>
                <ul class="a">
                <li>PROGRAM STUDI INFORMATIKA</li>
                <li>PROGRAM STUDI SISTEM INFORMASI</li> --}}
    </ul>
            </td>
            </tr>

        </table>
    <div id=halaman>
    <p id=judul><u><b>{{$s1->TTF_NUM}}</b></u><br>{{$s1->TTF_DATE}}</p>
{{-- 
        <p>Dengan hormat, </p> --}}
        <p>
            {{-- <span class="tab1"></span>{!! $s1->ket_kegiatan !!} yang dilaksanakan pada : <br><br>
            Tanggal<span class="tab3"></span>: {{date('d F Y', strtotime($s1->tgl_kegiatan))}}<br>
            Waktu<span class="tab2"></span>: {{date('H:i A', strtotime($s1->j_mulai_keg))}} - {{date('H:i A', strtotime($s1->j_selesai_keg))}}
            <br>
            Tempat<span class="tab3"></span> : {{ $s1->tempat_kegiatan }}<br>
            Nama Acara<span class="tab1"></span> : {{ $s1->nama_kegiatan }}<br> --}}
        {{-- </p>
        <p> <span class="tab1"></span>Demikian surat ini kami buat, atas perhatiannya kami ucapkan terima kasih. </p> <br><br>
        {{-- <center><p>Yogyakarta, {{ date('d F Y', strtotime($s1->Tgl_sah)) }}</p></center> --}}
        <table align="center">
        <tr>
            {{-- <td><center><p> {{ $s2->jabatan }}, </p></center></td>
            <td><center><p> Ketua Pelaksana</p></center></td>
        </tr>
        <tr> --}}
            {{-- <td class="spasi" ><center><img src="images/{{ $s2->ttd_pejabat }}" width=180 height=120/></center></td> --}}
            <td class="spasi" ><center></td>
        </tr>
        <tr>
            {{-- <td class="spasi" ><center><p>({{ $s2->nama_lengkap }})</p></center></td> --}}
            <td class="spasi" ><center><p>( .................................... ) </p></center></td>
        </tr> --}}
        <tr>
            {{-- <td class="spasi"><div text-align: left; float: right; id=kata> NIK : {{ $s2->nim_nidn }}</div></td> --}}
        </tr>
        </table>

    </div>
    @endforeach
    @endforeach
</body>
</html>
