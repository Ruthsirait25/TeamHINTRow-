@extends('layouts/app')

@section('container')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/styleappointment.css">
        <title>Membuat Appoinment</title>
    </head>

    <body>
        <p><u> Kami berdedikasi untuk memberikan perawatan yang terbaik kepada pasien
                yang didukung oleh layanan dan fasilitas lengkap sebagaimana telah kami sediakan</u></p>
        <div class="container">
            <div id="header">
                <img src="images/logo.PNG" width="100px" height="100px">
                <h1>Form Membuat Appoinment</h1>
                <p>Silakan isi form secara lengkap</p>

                <div class="form-container"
                    style="top: 100px;left: 200px;margin-top: 30px;border-top-width: 10px;border-left-width: 10px;border-right-width: 10px;padding-top: 40px;width: 900px;height: 1200px;">
                    <form action="action.php" method="post" autocomplete="on" id="form1">
                        <fieldset>
                            <legend>Klinik Dokter Gigi</legend>
                            <div class="form-grup">
                                <div class="label">
                                    <label>Nama Lengkap Anda</label>
                                </div>
                                <div class="input">
                                    <input type="text" name="nama" placeholder="Isi nama lengkap Anda" maxlength="5"
                                        autofocus style="width: 200px;height: 30px;">
                                </div>
                            </div>
                            <div class="form-grup">
                                <div class="label">
                                    <label>Alamat Email Anda</label>
                                </div>
                                <div class="input">
                                    <input type="email" name="email" placeholder="mis. email@gmail.com" maxlength="20"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="form-grup">
                                <div class="label">
                                    <label>Jenis Kelamin Anda</label>
                                </div>
                                <div class="input">
                                    <input type="radio" name="gender" value="1"> Laki-laki <br>
                                    <input type="radio" name="gender" value="2"> Perempuan
                                </div>
                                <div class="form-grup">
                                    <div class="label">
                                        <label>Pilih Dokter Anda</label>
                                    </div>
                                    <div class="input">
                                        <select name="dokter">
                                            <option value="Miss Mia" selected>Miss Mia</option>
                                            <option value="Nona Nurul" selected>Nona Nurul</option>
                                            <option value="Mam Kimberly" selected>Mam Kimberly</option>
                                            <option value="Miss Kim" selected>Mis Kim</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </fieldset>



                        <fieldset>
                            <legend>Klinik Dokter Gigi</legend>
                            <div class="form-grup">
                                <div class="label">
                                    <label>Tanggal Janji Anda</label>
                                    <input class="date" type="date" name="date">
                                </div>
                                <label>Pukul Berapa</label>
                                <input class="time" type="time" name="time">
                            </div>

                            <div class="form-grup">
                                <div class="label">
                                    <label>Foto Anda</label>
                                </div>
                                <div class="input">
                                    <label for="file-upload" class="upload-foto">
                                        Upload Foto
                                    </label>
                                    <input id="file-upload" type="file" name="foto">
                                </div>


                                <label>Pesan</label>
                                <input class="textarea" type="textarea" name="text">
                        </fieldset>
                        <div class="form-grup">
                            <button type="submit"><img src="images/buttonsubmit.PNG"> SUBMITED</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
