@extends('layouts.app')

@section('content')
<html>
	<head>
		<title>List Anime</title>
			<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
		<div class = "container">
			@if(session('success'))
			<div class = "alert alert-success">
				{{ session('success') }}
			</div>
			@endif

			@if(session('error'))
				<div class = "alert alert-error">
					{{ session('error') }}
				</div>
			@endif
				<h1>List Anime</h1>
	<table class = "table table-hover">
		<tr>
			<th> No </th>
			<th> ID Anime </th>
			<th> Judul </th>
			<th> Episode </th>
			<th> Musim </th>
			<th> Tanggal Tayang </th>
			<th> Studio </th>
			<th> Durasi </th>
            <th> Genre </th>
            <th> Score </th>
            <th> Credit </th>
			<th colspan = "2" width = "auto"><center>Aksi</center><th>
		</tr>
        @foreach ($anime as $row)
        <tr>
            <td> {{ isset($i) ? ++$i : $i = 1 }} </td>
            <td> {{ $row->id_anime }} </td>
            <td> {{ $row->judul }} </td>
            <td> {{ $row->episode }} </td>
            <td> {{ $row->musim_rilis }} </td>
            <td> {{ $row->tanggal_tayang }} </td>
            <td> {{ $row->studio }} </td>
            <td> {{ $row->durasi }} </td>
            <td> {{ $row->genre }} </td>
            <td> {{ $row->score }} </td>
            <td> {{ $row->credit }} </td>
		</tr>
		@endforeach
	</table>
		</div>
	</body>
@endsection