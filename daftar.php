<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Ujian</title>
        <style>
            body {
                font-family: "Poppins";
                background: white;
            }

        * {box-sizing: border-box}
            form {
                width: 100%;
                float: left;
                background: white;
                padding: 50px;
                margin: auto;
            }
            h1 {
                text-align: center;
                background: linear-gradient(122.06deg, #69C371 0%, #6AC46C 0.01%, #253F96 100.02%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                text-fill-color: transparent;
            }
            h3 {
                text-align: center;
                font-weight: normal;
            }
            /* Removes the clear button from date inputs */
            input[type="date"]::-webkit-clear-button {
                display: none;
            }

            /* Removes the spin button */
            input[type="date"]::-webkit-inner-spin-button { 
                display: none;
            }

            /* Always display the drop down caret */
            input[type="date"]::-webkit-calendar-picker-indicator {
                color: #2c3e50;
            }
            input[type=text], input[type=password], input[type=date] {
                width: 100%;
                padding: 15px;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                background: #f1f1f1;
                border-radius: 100px;
                font-family: "Poppins";
                color: grey;
            }
            input[type=text]:focus, input[type=password], input[type=date]:focus {
                background-color: #ddd;
                outline: none;
                font-family: "Poppins";
            }
            fieldset {
                border: none;
            }
            button {
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 100px;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 13%;
                opacity: 0.9;
                font-family: "Poppins";
                font-weight: bold;
                font-size: medium;
            }
            button:hover {
                opacity:1;
            }
            .submit {
                padding: 14px 20px;
                background: linear-gradient(122.06deg, #69C371 0%, #6AC46C 0.01%, #253F96 100.02%);
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                border-radius: 100px;
            }
            .multiple {
                width: 100%;
                margin: 5px 0 22px 0;
                display: inline-block;
                border: none;
                border-radius: 100px;
                font-family: "Poppins";
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Daftar Ujian</h1>
            <h3>Silahkan lengkapi data diri Anda !</h3>
        </header>
        <form>
            <div class="container">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" placeholder="Nama">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik" placeholder="NIK">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempatLahir" placeholder="Tempat Lahir">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggalLahir" placeholder="Tempat Lahir">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="multiple">
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pendidikan" class="col-sm-2 col-form-label">Kualifikasi Pendidikan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="pendidikan" placeholder="Kualifikasi Pendidikan">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="telepon" placeholder="Nomor Telepon">
                    </div>
                </div>
                <button type="submit" class="submit">Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </body>
<html>