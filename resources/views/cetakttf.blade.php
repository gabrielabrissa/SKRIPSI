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
            list-style-type: circle;
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
        body {
            font-family: Arial, sans-serif;
        }

    </style>
</head>

<body>
@foreach($ttf as $t1)
        <img src="imc.jpg" width=100 height=40/> 
            <table border="0" align="center">
                <tr>            
                    <td align="center" style="font-family: Arial, Helvetica, sans-serif">
                    <font size="3"><b>TANDA TERIMA FAKTUR SEMENTARA</b></font><br>
                        <span style="font-size: x-small">Nomor TTF : {{$t1->TTF_NUM}}</span>
                    </td>
                </tr>
            </table>
            <br>
        <table border="0" align="center">
            <tr>            
                <td align="center">
                    {{-- {{$d}} --}}
                    <br><br>
                <font >BARCODE</font>
                </td>
            </tr>
            <tr>  
                <td style="font-family: monospace; font-size: xx-small" align="center"> <font size="3">{{$t1->TTF_NUM}}</font><br></td>
            </tr>
        </table>
        <br>
        <table rules="all" border="1" width="700px" align="center" style="font-family: Arial, Helvetica, sans-serif; font-size: x-small" >
            <tr>
                <th class="fw-semibold text-xs font-weight-bolder ">FAKTUR PAJAK</th>
                <th class="fw-semibold  text-xs font-weight-bolder ">TGL FP</th>
                <th class="fw-semibold  text-xs font-weight-bolder ">DPP FP</th>
                <th class="fw-semibold text-xs font-weight-bolder ">PPN FP</th>
                <th class="fw-semibold  text-xs font-weight-bolder ">NO BPB</th>
                <th class="fw-semibold text-xs font-weight-bolder ">TGL BPB</th>
                <th class="fw-semibold  text-xs font-weight-bolder ">DPP BPB</th>
                <th class="fw-semibold  text-xs font-weight-bolder ">PPN BPB</th>
                <th class="fw-semibold  text-xs font-weight-bolder ">KET</th>
            </tr>
            @foreach($ttf2 as $t2)
            <tr align="center">
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t2->TTF_NUM}}</span>
                </td>
                
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t2->FP_DATE}}</span>
                </td>
                <td class="align-middle text-center text-sm">{{$t2->FP_DPP_AMT}}</td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t2->FP_TAX_AMT}}</span>
                </td>
                
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t2->BPB_NUMBER}}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t2->BPB_DATE}}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t2->BPB_DPP}}</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{$t2->BPB_TAX}}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold"></span>
                  </td>
              </tr>
              @endforeach
              <tr align="center">
                <td colspan="6" class="align-middle text-center"align="center">
                    <span class="text-secondary text-xs font-weight-bold">TOTAL FAKTUR PAJAK</span>
                  </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t1->SUM_DPP_BPB}}</span>
                </td>
                
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t2->SUM_TAX_BPB}}</span>
                </td>
                <td class="align-middle text-center text-sm"></td>
              </tr>
              <tr align="center">
                <td rowspan="2" colspan="6" class="align-middle text-center" align="center">
                    <span class="text-secondary text-xs font-weight-bold">GRAND TOTAL</span>
                  </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t2->SUM_DPP_BPB}}</span>
                </td>
                
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$t2->SUM_TAX_BPB}}</span>
                </td>
                <td class="align-middle text-center text-sm"></td>
              </tr>
              <tr align="center">
                <td  colspan="2" class="align-middle text-center">
                    @php
                       $total= $t2->SUM_DPP_BPB + $t2->SUM_TAX_BPB;
                    @endphp
                  <span class="text-secondary text-xs font-weight-bold">{{$total}}</span>
                </td>
                <td class="align-middle text-center text-sm"></td>
              </tr>
        </table>
        <br><br>

        <ul class="a" style="font-family: Arial, Helvetica, sans-serif; font-size: x-small" >
            <li>Dicetak pada {{date('d-m-Y H:i:s')}}</li>
            <li>SYARAT DAN KETENTUAN BERLAKU</li> 
            <li>Jika ada perbedaan data antara dokumen tercetak dengan system IMC, maka data yang valid ada pada system IMC. </li> 
</ul>

   <br><br>
    <div text-align: left; float: right;>
        <table rules="all" border="1" align="right" style="font-family: Arial, Helvetica, sans-serif; font-size: x-small;"  >
            <th height="15" colspan="2" width="250px" class="fw-semibold text-xs font-weight-bolder ">Validation Notes</th>
            
            <tr align="left">
                <td class="align-middle text-center" height="25" >
                    <span class="text-secondary text-xs font-weight-bold">Tgl. Validasi/TTF :</span>
                </td>
                <td class="align-middle text-center" height="25">
                    <span class="text-secondary text-xs font-weight-bold"></span>
                </td>
            </tr>
            <tr align="left">
                <td class="align-middle text-center" height="25">
                    <span class="text-secondary text-xs font-weight-bold">Tgl. Cetak TTF :</span>
                </td>
                <td class="align-middle text-center" height="25">
                    <span class="text-secondary text-xs font-weight-bold"></span>
                </td>
            </tr>
            <tr align="left">
                <td class="align-middle text-center" height="25">
                    <span class="text-secondary text-xs font-weight-bold">Tgl. Kembali :</span>
                </td>
                <td class="align-middle text-center" height="25">
                    <span class="text-secondary text-xs font-weight-bold"></span>
                </td>
            </tr>
            <tr align="left">
                <td class="align-middle text-center" height="25">
                    <span class="text-secondary text-xs font-weight-bold">Paraf Petugas Validasi:</span>
                </td>
                <td class="align-middle text-center" height="25">
                    <span class="text-secondary text-xs font-weight-bold"></span>
                </td>
            </tr>
            <tr align="left">
                <td class="align-middle text-center" height="25">
                    <span class="text-secondary text-xs font-weight-bold">Nama Petugas :</span>
                </td>
                <td class="align-middle text-center" height="25">
                    <span class="text-secondary text-xs font-weight-bold"></span>
                </td>
            </tr>
            
              
        </table>
    </div>
       
 
    @endforeach
</body>
</html>
