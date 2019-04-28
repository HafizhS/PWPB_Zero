@extends('layouts.app')

@section('content')
<html>
<head>
    <title>Zero | The best site ever exist</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="style/style1.css">
    <link rel="icon" href="image/ZeroLogo2.png">
</head>
<body>
<main role="main" id="particles-js">
    <section class="jumbotron text-center">
        <div class="container m-auto">
            <h2 class="jumbotron-heading display-3">The Zero</h2>
            <p class="lead text-muted">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </section>
    <section class="container m-auto text-center p-3" style="background-color: #95a5a6">
        <div class="display-3">
            Banner Iklan
        </div>
    </section>
    <br>
    <h3 class="text-center display-4">Populer Sekarang!</h3>
    <div class="album py-p bg-light">
        <hr class="my-2">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="image/tate-no-yuusha3.png">
                        <div class="card-body">
                            <h4 class="card-title text-center">Tate no yuusha</h4>
                            <p class="card-text">
                                Iwatani Naofumi bersama tiga orang lainnya ditransfer ke dunia paralel untuk menjadi
                                Pahlawan. Masing-masing pahlawan memiliki senjata legendaris. Naofumi mendapatkan
                                senjata Legendary Shield. Namun karena kurangnya pengalaman, Naofumi dianggap sebagai
                                yang paling lemah dan dianggap selalu salah. Dengan berbagai masalah tersebut, Naofumi
                                memulai takdirnya di Dunia Paralel...
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Stream</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Download</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="image/boruto-naruto-next-generations1.jpg">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                Boruto : The Next Generation</h4>
                            <p class="card-text">
                                Beberapa tahun setelah berakhirnya Perang Shinobi, putra Naruto, Boruto, bersiap untuk
                                mengikuti ujian Chunin bersama Sarada Uchiha dan Mitsuki yang misterius.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Stream</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Download</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="image/one-punch-man-s2-1.jpg">
                        <div class="card-body">
                            <h4 class="card-title text-center">
                                One Punch Man Season 2</h4>
                            <p class="card-text">
                                Musim kedua dari pahlawan botak Saitama dan muridnya Genos.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Stream</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Download</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<br>
<footer>
    <div class="container" style="background-color: lightgray">

    </div>
</footer>
</body>
</html>
@endsection