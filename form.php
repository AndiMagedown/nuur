<?php
require 'navbar.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran Santri Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container p-3 my-3 border">
        <h1 class="text-center">Form Pendaftaran Santri Baru</h1>
        <?php
        include "config.php";
       ?>

        <form id="form" method="post">
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Panggilan:</label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenjang Sekolah:</label>
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="1">PAUD / Pra TK</option>
                            <option value="2">TK / RA</option>
                            <option value="3">SD / MI</option>
                            <option value="4">SMP / MTs</option>
                            <option value="5">SMA / MA</option>
                        </select>
                    </div>
                </div>
            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Orang Tua:</label>
                        <input type="text" name="nama_orangtua" class="form-control" placeholder="Masukan Nama Ibu Kandung">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Pekerjaan Orang Tua:</label>
                        <input type="text" name="pekerjaan_orangtua" class="form-control" placeholder="Masukan Pekerjaan Orang Tua">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Handphone:</label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor Handphone">
                    </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nomor Handphone Orang Tua (WA):</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Nomor Handphone">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Alamat Orang Tua:</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukan Alamat">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Kesanggupan</strong>
            </div>
            <div class="row">
                <div class="col-sm-3">
                <label>Infak Bulanan : </label>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio1">Rp. 50.000</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">Rp. 70.000</label>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                    <label>Apakah Anda sanggup mentaati tata tertib TPQ An-Nuur? </label>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio1">Ya</label>
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btnradio2">Tidak</label>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button class="btn btn-utama" type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>