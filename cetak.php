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
            .container {
                width: 100%;
                float: left;
                background: white;
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
            .download {
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
            input[type=file]::file-selector-button {
                margin-right: 20px;
                border: none;
                background: linear-gradient(122.06deg, #69C371 0%, #6AC46C 0.01%, #253F96 100.02%);
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
                padding: 10px 20px;
                border-radius: 100px;
                color: #fff;
                cursor: pointer;
                transition: background .2s ease-in-out;
                font-family: "Poppins";
                opacity: 0.9;
            }
            input[type=file]::file-selector-button:hover {
                opacity:1;
            }
            .form-group {
                padding: 15px;
                font-family: "Poppins";
            }
            img {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                border-radius: 10px;
                width: 30%;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Cetak Kartu Ujian</h1>
            <h3>Berkas Anda telah terverifikasi. Silahkan unduh dan cetak kartu ujian Anda !</h3>
        </header>
        <div class="container">
                <a href="kartu-peserta.pdf" download="kartu-peserta">
                    <img src="/kartu-peserta.png" alt="kartu-peserta">
                </a>
                <br>
                <a href="kartu-peserta.pdf" download="kartu-peserta">
                    <button type="button" class="download">Unduh</button>
                </a>
        </div>
    </body>
<html>