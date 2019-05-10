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
			<a class = "btn btn-primary" type = "submit" href = "{{ url('/Anime/create') }}"> Tambah Data </a>
	<table class = "table table-hover">
		<tr>
			<th> No </th>			
			<th> Judul </th>
			<th> Episode </th>
			<th> Musim </th>
			<th> Tahun Rilis </th>
			<th> Studio </th>
			<th> Durasi </th>
            <th> Genre </th>
            <th> Score </th>
			<th colspan = "2" width = "auto"><center>Aksi</center><th>
		</tr>
        @foreach ($anime as $row)
        <tr>
            <td> {{ isset($i) ? ++$i : $i = 1 }} </td>        
            <td> {{ $row->judul }} </td>
            <td> {{ $row->episode }} </td>
            <td> {{ $row->musim_rilis }} </td>
            <td> {{ $row->tahun_rilis }} </td>
            <td> {{ $row->studio }} </td>
            <td> {{ $row->durasi }} </td>
            <td> {{ $row->genre }} </td>
            <td> {{ $row->score }} </td>
			<td>
				<a class = "btn btn-success" href = "{{ url('/Anime/' . $row->id . '/edit') }}">Edit</a>
			</td>
			<td>
				<form action = "{{ url('/Anime', $row->id) }}" method = "POST">
				@method('DELETE')
				@csrf
				<button class = "btn btn-danger" type = "submit">Delete</button>
			</td>
		</tr>
		@endforeach
	</table>
		</div>
	</body>
@endsection