@extends('layouts.app2')

<html>
<head>
    <title>Form Registrasi Data Anime</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>
<div class="container">
    @if(session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong> Perhatian </strong><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Data Anime</h1>
    <form action="{{ url('dataAnime', @$anime->id_anime) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(!empty($anime))
            @method('PATCH')
        @endif
        <div class="form-group">
            <label for="id_anime">ID Anime</label>
            <input type="text" class="form-control" name="id_anime" value="{{ old('id_anime', @$anime->id_anime) }}"
                   placeholder="Masukkan ID" readonly>
            <label for="judul">Judul Anime</label>
            <input type="text" class="form-control" name="judul" value="{{ old('judul', @$anime->judul) }}"
                   placeholder="Masukkan Judul">
            <label for="episode">Episode</label>
            <input type="text" class="form-control" name="episode" value="{{ old('episode', @$anime->episode) }}"
                   placeholder="Masukkan Episode">
        </div>
        <div class="form-group">
            <label for="musim_rilis">Musim Rilis</label><br>
            <select class="form-control" name="musim_rilis">
                <option value="" {{ old('musim_rilis', @$anime->musim_rilis) == '' ? 'selected' : '' }}> - Pilih Musim
                    Rilis -
                </option>
                <option value="Fall" {{ old('musim_rilis', @$anime->musim_rilis) == 'Fall' ? 'selected' : '' }}> Fall
                </option>
                <option value="Spring" {{ old('musim_rilis', @$anime->musim_rilis) == 'Spring' ? 'selected' : '' }}>
                    Spring
                </option>
                <option value="Summer" {{ old('musim_rilis', @$anime->musim_rilis) == 'Summer' ? 'selected' : '' }}>
                    Summer
                </option>
                <option value="Winter" {{ old('musim_rilis', @$anime->musim_rilis) == 'Winter' ? 'selected' : '' }}>
                    Winter
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="tahun_rilis">Tahun Rilis</label>
            <input type="text" class="form-control" name="tahun_rilis"
                   value="{{ old('tahun_rilis', @$anime->tahun_rilis) }}" placeholder="Masukkan Tahun Rilis">
            <label for="studio">Studio</label>
            <input type="text" class="form-control" name="studio" value="{{ old('studio', @$anime->studio) }}"
                   placeholder="Masukkan Studio">
            <label for="durasi">Durasi</label>
            <input type="text" class="form-control" name="durasi" value="{{ old('durasi', @$anime->durasi) }}"
                   placeholder="Masukkan Durasi">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" name="genre" value="{{ old('genre', @$anime->genre) }}"
                   placeholder="Masukkan Genre">
            <label for="score">Score</label>
            <input type="text" class="form-control" name="score" value="{{ old('score', @$anime->score) }}"
                   placeholder="Masukkan Score">
        </div>
        <div class="form-group">
            <label for="email">Cover</label>
            <div>
                <img width="100" height="100"/>
                <input type="file" class="uploads form-control" name="cover">
            </div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="SAVE">
        </div>
</body>
</html>