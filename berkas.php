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
                text-align: center;
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
            <h1>Upload Berkas</h1>
            <h3>Silahkan Upload Berkas Anda !</h3>
        </header>
        <form>
            <div class="form-group row">
                <label for="foto" class="col-sm-2 col-form-label"><b>Foto Diri (4x6)</b></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="foto" >
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="ijazah" class="col-sm-2 col-form-label"><b>Ijazah</b></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="ijazah">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="cv" class="col-sm-2 col-form-label"><b>CV</b></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="cv">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="transkipNilai" class="col-sm-2 col-form-label"><b>Transkip Nilai</b></label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="transkipNilai">
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="sertifikat" class="col-sm-2 col-form-label"><b>Sertifikat Akreditasi</b></label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control" id="sertifikat">
                </div>
            </div>
            <br>
            <button type="submit" class="submit">Simpan</button>
        
        </form>
        </div>
    </body>
<html>