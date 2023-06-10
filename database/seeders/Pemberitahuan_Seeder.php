<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pemberitahuan_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemberitahuan')->insert([
            [
                'TANGGAL' => date("Y-m-d"),
                'SUBJEK' => 'Pemberitahuan Penyerahan Bukti Pemotongan PPh atas Pelunasan di tahun 2021',
                'DETAIL' => 'Berkaitan dengan tutup buku tahun 2021 dan tertib administrasi, maka bersama
                ini kami beritahukan bahwa penyerahan Bukti Pemotongan PPh atas Pelunasan
                di tahun 2021, adalah sebagai berikut
                
                A. Bukti Pemotongan Pph Pasal 23
                
                    Bukti Pemotongan PPh Pasal 23 atas pelunasan s/d bulan Desember 2021, baik
                    pelunasan yang dilakukan secara transfer/giro/tunai maupun melalui mekanisme Potong
                    Tagihan paling lambat sudah kami terima pada tanggal 31 Maret 2022 (Cap POS)
                    Penyerahan Surat Permintaan Refund (disertai copy Bukti Potongnya)
                    harap dilakukan bersamaan dengan penyerahan Bukti Pemotongan PPh Pasal 23 nya.
                
                
                
                B. Bukti Pemotongan Pph Final Pasal 4 (2)
                
                    Bukti Pemotongan Final Pasal 4 (2) atas pelunasan s/d bulan Desember 2021, baik
                    pelunasan yang dilakukan secara transfer/giro/tunai maupun melalui mekanisme Potong
                    Tagihan paling lambat sudah kami terima pada tanggal 31 Maret 2022 (Cap POS)
                    Penyerahan Surat Permintaan Refund (disertai copy Bukti Potongnya)
                    harap dilakukan bersamaan dengan penyerahan Bukti Pemotongan PPh Pasal 23 nya.'
            ],
            [
                
                'TANGGAL' => date("Y-m-d"),
                'SUBJEK' => 'Pengiriman dokumen ke kantor pusat Indogrosir',
                'DETAIL' => 'Kepada Yth: Seluruh Supplier PT. Inti Cakrawala Citra Dengan Hormat,
                Sebelumnya kami ucapkan terima kasih atas kerjasama yang sudah berjalan dengan baik selama ini.
                
                Bersama surat ini kami informasikan bahwa Kantor Pusat Indogrosir sejak bulan Desember 2020 telah menempati gedung baru di Menara Indomaret yang berlokasi di Pantai Indah Kapuk . Oleh sebab itu , per tanggal 1 Agustus 2021 (cap pos) agar pengiriman dokumen ke kantor pusat Indogrosir ditujukan ke:
                
                
                Nama : PT.Inti Cakrawala Citra
                Alamat : Menara Indomaret
                Jl.Pantai Indah Kapuk Boulevard No.1,Kamal Muara,Penjaringan
                Jakarta Utara - 14470
                Dokumen yang dikirimkan ke alamat lain selain yang tercantum diatas, kami anggap tidak diterima
                
                Demikian disampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih. '
            ],
        ]);
    }
}
