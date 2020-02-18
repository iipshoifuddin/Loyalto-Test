<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="color: #FF8FB2; font: bold;"><img src="logo.png" height="30"> Loyalto <b style="color: black">Biodata</b></h2>
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
            <div class="row">
                <form action="/biodata/store" method="post">
                    {{ csrf_field() }}
                    <div>Nama</div>
                    <div><input type="text" name="nama" required="required"> <br/></div>
                    <div>Alamat</div>
                    <div><textarea name="alamat" required="required"></textarea> <br/></div>
                    <div>Gender</div>
                    <div><input type="text" name="gender" required="required"> <br/></div>
                    <div>Tempat Lahir</div>
                    <div><input type="text" name="tempat_lahir" required="required"> <br/></div>
                    <div>Tanggal Lahir</div>
                    <div><input type="text" name="tanggal_lahir" required="required"> <br/></div>
                    <div>Agama</div>
                    <div><input type="text" name="agama" required="required"> <br/></div>
                    <div>Kota</div>
                    <div><input type="text" name="kota" required="required"> <br/></div>
                    <div>Kenegaraan</div>
                    <div><input type="text" name="kenegaraan" required="required"> <br/></div>
                    <div>No. Handphone</div>
                    <div><input type="text" name="handphone" required="required"> <br/></div>
                    <input type="submit" value="Simpan Data">
                </form>
            </div>
        </div>
    </body>
</html>
