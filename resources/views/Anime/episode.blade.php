<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <title>Episode List {{$data['anime']->judul}}</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="nav-item page-link" href="{{url('dataAnime/')}}">Kembali</a>
    </nav>
</header>
<div class="container">
    <form enctype="multipart/form-data">
        <div class="col-lg">
            @foreach($data['episode'] as $episode)
                <div class="row border rounded p-4 mt-3">
                    <ul class="list-group">
                        <li class="mt-3 list-unstyled"><span>Episode: {{$episode->episode}}</span></li>
                        <li class="mt-3 list-unstyled">
                            Current Link:
                            @if($episode->url != ""){{url('uploads/').'/'.$episode->url}} <a class="ml-4" href="{{url('uploads/').'/'.$episode->url}}">Download</a>
                            @else Tidak ada
                            @endif
                        </li>
                        <li class="mt-3 list-unstyled">Ubah Episode: <input type="text"><button class="float-lg-right btn btn-secondary" type="submit">Ubah</button></li>
                        <li class="mt-3 list-unstyled">Ubah File (Mengubah Link): <input type="file"><button class="float-lg-right btn btn-secondary" type="submit">Ubah</button></li>
                        <li class="mt-3 list-unstyled">Ubah Link: <input type="text"><button class="float-lg-right btn btn-secondary" type="submit">Ubah</button></li>
                    </ul>
                </div>
            @endforeach
        </div>
    </form>

    <form action="{{route('dataAnime.storeEpisode',['id_anime' => $data['anime']->id_anime])}}" method="post" class="border rounded p-4 mt-3" enctype="multipart/form-data">
        {{--{{url('dataAnime/'.$data['anime']->id_anime.'/episode')}}--}}
        @csrf
        <ul class="list-group">
            <span class="display-4">Tambah Episode</span>
            <li class="mt-3 list-unstyled">Id Anime: <input type="text" name="id_anime" readonly="true" value="{{$data['anime']->id_anime}}"></li>
            <li class="mt-3 list-unstyled">Episode: <input type="text" name="episode"></li>
            <li class="mt-3 list-unstyled">File Episode: <input type="file"></li>
            <button type="submit" class="mt-3 btn btn-primary">Tambah</button>
        </ul>
    </form>
</div>
</body>
</html>