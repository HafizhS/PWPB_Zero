<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['anime'] = \App\Anime::orderBy('id_anime')->get();
		return view('dataAnime', $data);
    }

    public function create()
	{
		return view('Anime.form');
	}
	
	public function store(Request $request)
	{
		$rule = [
			'id_anime'=>'required|string',
			'judul'=>'required|string',
			'episode'=>'required|string',
            'musim_rilis'=>'required|string',
            'tahun_rilis'=>'required|string',
            'studio'=>'required|string',
            'durasi'=>'required|string',
            'genre'=>'required|string',
            'score'=>'required|string',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		// unset($input['_token']);
		// $status = \DB::table('t_anime')->insert($input);
		
		// $status = \App\anime::create($input);
		$anime = new \App\Anime;
		$anime->id_anime = $input['id_anime'];
		$anime->judul = $input['judul'];
		$anime->episode = $input['episode'];
        $anime->musim_rilis = $input['musim_rilis'];
        $anime->tahun_rilis = $input['tahun_rilis'];
        $anime->studio = $input['studio'];
        $anime->durasi = $input['durasi'];
        $anime->genre = $input['genre'];
        $anime->score = $input['score'];
		$status = $anime->save();
		
		if ($status) {
			return redirect('/dataAnime')->with('success', 'Data Berhasil Ditambahkan');
		} else {
			return redirect('/tambahdataAnime')->with('error', 'Data Gagal Ditambahkan');
		}
	}
	
	public function edit(Request $request, $id_anime)
	{
		$data['anime'] =\App\Anime::where('id_anime',$id_anime)->first();
		return view('Anime.edit', $data);	
	}
	
	public function update(Request $request, $id_anime)
	{
		$rule = [
			'id_anime'=>'required|string',
			'judul'=>'required|string',
			'episode'=>'required|string',
            'musim_rilis'=>'required|string',
            'tahun_rilis'=>'required|string',
            'studio'=>'required|string',
            'durasi'=>'required|string',
            'genre'=>'required|string',
            'score'=>'required|string',
		];
		$this->validate($request, $rule);
		
		$input = $request->all();
		$anime = \App\Anime::where('id_anime',$id_anime);
		// $status = $anime->update($input);/
		$anime->id_anime = $input['id_anime'];
		$anime->judul = $input['judul'];
		$anime->episode = $input['episode'];
        $anime->musim_rilis = $input['musim_rilis'];
        $anime->tahun_rilis = $input['tahun_rilis'];
        $anime->studio = $input['studio'];
        $anime->durasi = $input['durasi'];
        $anime->genre = $input['genre'];
        $anime->score = $input['score'];
		$status = $anime->update();
		
		if ($status) {
			return redirect('/dataAnime')->with('success', 'Data Berhasil Diubah');
		} else {
			return redirect('/dataAnime/edit')->with('error', 'Data Gagal Diubah');
		}
	}
	
	public function destroy(Request $request, $id_anime)
	{
		$anime = \App\Anime::where('id_anime',$id_anime);
		$status = $anime->delete();
		
		// $status = \DB::table('anime')->where('id', $id)->delete();
		
		if ($status) {
			return redirect('/dataAnime')->with('success', 'Data berhasil dihapus');
		} else {
			return redirect('/dataAnime')->with('error', 'Data gagal dihapus');
		}
	}
}
