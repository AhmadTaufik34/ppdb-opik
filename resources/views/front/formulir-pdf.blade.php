<html>
<head>
    <title>Formulir Pendaftaran</title>
    <style>
        @page {
                margin: 1cm;
            }
            body, td{
                font-size: 14px;
                margin-top: 15px;
                margin-bottom: 0;
            }
            h4{
                font-size: 14px;
                margin-top: 15px;
                margin-bottom: 0;
            }
            h5{
                font-size: 12px;
                margin-top: 10px;
                margin-bottom: 0;
            }
            .page-break{
                page-break-after: always;
            }
        </style>
    </head>
    <body>
        <h2 align="center">FORMULIR PENDAFTARAN</h2>
        <table class="table">
            <tr><td colspan="2"><h4>A. Data Pribadi</h4></td></tr>

            <tr><td width="30%"> Nama </td><td>: {{ $pendaftar->periode->tahun.substr('0000'.$pendaftar->no_pendaftar,-4)}}</td></tr>
            <tr><td> Nama </td><td>: {{$pendaftar->nama }}</td></tr>
            <tr><td> Nisn </td><td>: {{$pendaftar->nisn }}</td></tr>
            <tr><td> Tempat Lahir </td><td>: {{$pendaftar->tempat_lahir }}</td></tr>
            <tr><td> Tanggal Lahir </td><td>: {{$pendaftar->tanggal_lahir }}</td></tr>
            <tr><td> Jenis Kelamin </td><td>: {{$pendaftar->jenis_kelamin }}</td></tr>
            <tr><td> Anak Ke </td><td>: {{$pendaftar->anak_ke }}</td></tr>
            <tr><td> Hobi </td><td>: {{$pendaftar->hobi }}</td></tr>
            <tr><td> Cita Cita </td><td>: {{$pendaftar->cita_cita }}</td></tr>
            
            <tr><td colspan="2"> <h4>B. Data Tempat Tinggal</h4></td></tr>

            <tr><td> Alamat </td><td>: {{$pendaftar->alamat }}</td></tr>
            <tr><td> Desa </td><td>: {{$pendaftar->desa }}</td></tr>
            <tr><td> Jumlah Saudara </td><td>: {{$pendaftar->jumlah_saudara }}</td></tr>
            <tr><td> Anak Ke </td><td>: {{$pendaftar->anak_ke }}</td></tr>
            <tr><td> Propinsi </td><td>: {{$pendaftar->propinsi }}</td></tr>
            <tr><td> Rt </td><td>: {{$pendaftar->rt }}</td></tr>
            <tr><td> Rw </td><td>: {{$pendaftar->rw }}</td></tr>
            <tr><td> Kode Pos </td><td>: {{$pendaftar->kode_pos }}</td></tr>
            <tr><td> Jarak </td><td>: {{$pendaftar->jarak }}</td></tr>
            <tr><td> Transportasi </td><td>: {{$pendaftar->transportasi }}</td></tr>
            
            <tr><td colspan="2"> <h4>C. Data Keluarga</h4></td></tr>

            <tr><td colspan="2"> <h5>1. Kepala Keluarga</h5></td></tr>
            <tr><td> No Kk </td><td>: {{$pendaftar->no_kk }}</td></tr>
            <tr><td> Nama Kk </td><td>: {{$pendaftar->nama_kk }}</td></tr>   
            
            <tr><td colspan="2"> <h5>2. Ayah</h5></td></tr>
            <tr><td> Nama Ayah </td><td>: {{$pendaftar->nama_ayah }}</td></tr>
            <tr><td> Nik Ayah </td><td>: {{$pendaftar->nik_ayah }}</td></tr>
            <tr><td> Tahun Lahir Ayah </td><td>: {{$pendaftar->tahun_lahir_ayah }}</td></tr>
            <tr><td> Status Ayah </td><td>: {{$pendaftar->status_ayah }}</td></tr>
            <tr><td> Pekerjaan Ayah </td><td>: {{$pendaftar->pekerjaan_ayah }}</td></tr>
            <tr><td> Penghasilan Ayah </td><td>: {{$pendaftar->penghasilan_ayah }}</td></tr>
            <tr><td> Pendidikan Ayah </td><td>: {{$pendaftar->pendidikan_ayah }}</td></tr>
            
            
            <tr><td colspan="2"> <h5>3. Ibu</h5></td></tr>
            <tr><td> Nama Ibu </td><td>: {{$pendaftar->nama_ibu }}</td></tr>
            <tr><td> Nik Ibu </td><td>: {{$pendaftar->nik_ibu }}</td></tr>
            <tr><td> Tahun Lahir Ibu </td><td>: {{$pendaftar->tahun_lahir_ibu }}</td></tr>
            <tr><td> Status Ibu </td><td>: {{$pendaftar->status_ibu }}</td></tr>
            <tr><td> Pekerjaan Ibu </td><td>: {{$pendaftar->pekerjaan_ibu }}</td></tr>
            <tr><td> Penghasilan Ibu </td><td>: {{$pendaftar->penghasilan_ibu }}</td></tr>
            <tr><td> Pendidikan Ibu </td><td>: {{$pendaftar->pendidikan_ibu }}</td></tr>
            
            <tr><td colspan="2"> <h5>4. Wali</h5></td></tr>
            <tr><td> Nama Wali </td><td>: {{$pendaftar->nama_wali }}</td></tr>
            <tr><td> Nik Wali </td><td>: {{$pendaftar->nik_wali }}</td></tr>
            <tr><td> Tahun Lahir Wali </td><td>: {{$pendaftar->tahun_lahir_wali }}</td></tr>
            <tr><td> Status Wali </td><td>: {{$pendaftar->status_wali }}</td></tr>
            <tr><td> Pekerjaan Wali </td><td>: {{$pendaftar->pekerjaan_wali }}</td></tr>
            <tr><td> Penghasilan Wali </td><td>: {{$pendaftar->penghasilan_wali }}</td></tr>
            <tr><td> Pendidikan Wali </td><td>: {{$pendaftar->pendidikan_wali }}</td></tr>
            <tr><td> Hp Wali </td><td>: {{$pendaftar->hp_wali }}</td></tr>
            
            <tr><td colspan="2"> <h5>5. Kepemilikan Kartu</h5></td></tr>
            <tr><td> No Kks </td><td>: {{$pendaftar->no_kks }}</td></tr>
            <tr><td> No Pkh </td><td>: {{$pendaftar->no_pkh }}</td></tr>
            <tr><td> No Kip </td><td>: {{$pendaftar->no_kip }}</td></tr>

            <tr><td colspan="2"> <h4>D. Data Sekolah</h4></td></tr>

            <tr><td> Nama Sekolah </td><td>: {{$pendaftar->nama_sekolah }}</td></tr>
            <tr><td> Jenjang Sekolah </td><td>: {{$pendaftar->jenjang_sekolah }}</td></tr>
            <tr><td> Status Sekolah </td><td>: {{$pendaftar->status_sekolah }}</td></tr>
            <tr><td> Lokasi Sekolah </td><td>: {{$pendaftar->lokasi_sekolah }}</td></tr>
            <tr><td> Tahun Lulus </td><td>: {{$pendaftar->tahun_lulus }}</td></tr>
            <tr><td> No Un </td><td>: {{$pendaftar->no_un }}</td></tr>
            <tr><td> Prestasi </td><td>: {{$pendaftar->prestasi }}</td></tr>
        </table>

        <br><br><br><br><br>

        <table>
            <tr>
                <td width="300">&nbsp;</td>
                <td width="150" align="center">
                    Pendaftar <br><br><br><br>
    
                    <b> {{$pendaftar->nama}} </b>
                </td>
            </tr>
        </table>
    </body>
</html>