<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="thumbnail">
        <a href="{{url('uploads/').'/'.$anime['anime']->image_url}}">
            <img src="{{url('uploads/').'/'.$anime['anime']->image_url}}" class="img-thumbnail" width="200px">
            <div class="caption">
                <p>{{$anime['anime']->judul}}</p>
            </div>
        </a>
        <span>Pilih Episode: </span>
        <select>
            @foreach($anime['episode'] as $episode)
                <option value="{{$episode->url}}">{{$episode->episode}}</option>
            @endforeach
        </select>
    </div>
    <div class="">
        @if($anime['episode']->first() || !$anime['episode']->isEmpty()))
        <video controls class="" width="720px">
            <source src="{{url('uploads/').'/'.$anime['episode'][0]->url}}">
        </video>
        @else
            <span>Video Tidak Ada</span>
        @endif
    </div>
</div>
</body>
</html>