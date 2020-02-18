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
                    <h2 style="color: #FF8FB2; font: bold;"><img src="logo.png" height="35"> Loyalto <b style="color: black">Biodata</b></h2>
                </div>
            </div>
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <table class="table table-bordered" border="1" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Alamat</th>
                      <th>Gender</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Agama</th>
                      <th>Kota</th>
                      <th>Kenegaraan</th>
                      <th>No Handphone</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($biodata as $a => $b)
                    <tr>
                        <td>{{ $a+1 }}</td>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->alamat }}</td>
                        <td>{{ $b->gender }}</td>
                        <td>{{ $b->tempat_lahir }}</td>
                        <td>{{ $b->tanggal_lahir }}</td>
                        <td>{{ $b->agama }}</td>
                        <td>{{ $b->kota }}</td>
                        <td>{{ $b->kenegaraan }}</td>
                        <td>{{ $b->handphone }}</td>
                    </tr>
		            @endforeach
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>

