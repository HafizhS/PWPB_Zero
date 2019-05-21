<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
    <title>Browse Anime</title>
</head>
<body>
{{--{{var_dump($data['anime'][0]->judul)}}--}}
<div class="container">
    <div>
        <form action="{{route('browse.search')}}" method="get">
            <input type="text" name="judul">
            <button type="submit">Cari</button>
        </form>
    </div>
    <ul class="list-unstyled list-inline">
        @foreach($data['anime'] as $anime)
            <li class="list-inline-item m-3"><a class="" href="{{url('anime/').'/'.$anime->id_anime}}">{{$anime->judul}}</a></li>
        @endforeach
    </ul>
</div>
</body>
</html>