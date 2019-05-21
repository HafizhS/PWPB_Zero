<?php

namespace App\Http\Controllers;

use App\Anime;
use App\AnimeEpisode;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

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
//			'id_anime'=>'required|string',
            'judul' => 'required|string',
//            'episode' => 'required|string',
//            'musim_rilis' => 'required|string',
//            'tahun_rilis' => 'required|string',
//            'studio' => 'required|string',
//            'durasi' => 'required|string',
//            'genre' => 'required|string',
//            'score' => 'required|string',
//            'image_url'=>'nullable|string'
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        // unset($input['_token']);
        // $status = \DB::table('t_anime')->insert($input);

        // $status = \App\anime::create($input);
        $image = $request->file('cover');

        $anime = new \App\Anime;
//		$anime->id_anime = $input['id_anime'];
        $anime->judul = $input['judul'];
        $anime->episode = $input['episode'];
        $anime->musim_rilis = $input['musim_rilis'];
        $anime->tahun_rilis = $input['tahun_rilis'];
        $anime->studio = $input['studio'];
        $anime->durasi = $input['durasi'];
        $anime->genre = $input['genre'];
        $anime->score = $input['score'];
        if ($image != null) {
            $extension = $image->getClientOriginalExtension();
            Storage::disk('public')->put($image->getFilename() . '.' . $extension, \Illuminate\Support\Facades\File::get($image));
            $anime->image_url = $image->getFilename() . '.' . $extension;
        }
        $status = $anime->save();

        if ($status) {
            return redirect('/dataAnime')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect('/tambahdataAnime')->with('error', 'Data Gagal Ditambahkan');
        }
    }

    public function edit(Request $request, $id_anime)
    {
        $data['anime'] = \App\Anime::where('id_anime', $id_anime)->first();
        return view('Anime.edit', $data);
    }

    public function update(Request $request, $id_anime)
    {
        $rule = [
            'id_anime' => 'required|string',
            'judul' => 'required|string',
//            'episode' => 'required|string',
//            'musim_rilis' => 'required|string',
//            'tahun_rilis' => 'required|string',
//            'studio' => 'required|string',
//            'durasi' => 'required|string',
//            'genre' => 'required|string',
//            'score' => 'required|string',
        ];
        $this->validate($request, $rule);

        $input = $request->all();
        $status = \App\Anime::where('id_anime', $id_anime)->update($request->except('_token','_method'));
        // $status = $anime->update($input);/
//        $anime->id_anime = $input['id_anime'];
//        $anime->judul = $input['judul'];
//        $anime->episode = $input['episode'];
//        $anime->musim_rilis = $input['musim_rilis'];
//        $anime->tahun_rilis = $input['tahun_rilis'];
//        $anime->studio = $input['studio'];
//        $anime->durasi = $input['durasi'];
//        $anime->genre = $input['genre'];
//        $anime->score = $input['score'];
////        $anime->fill();
////        $status = $anime->save();
//        $status = $anime->update($request->except('_token','_method'));

        if ($status) {
            return redirect('/dataAnime')->with('success', 'Data Berhasil Diubah');
        } else {
            return redirect('/dataAnime/edit')->with('error', 'Data Gagal Diubah');
        }
    }

    public function destroy(Request $request, $id_anime)
    {
        $anime = \App\Anime::where('id_anime', $id_anime);
        $status = $anime->delete();

        // $status = \DB::table('anime')->where('id', $id)->delete();

        if ($status) {
            return redirect('/dataAnime')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('/dataAnime')->with('error', 'Data gagal dihapus');
        }
    }

    public function detail($id_anime)
    {
        $data['anime'] = \App\Anime::where('id_anime', $id_anime)->firstOrFail();
        $data['episode'] = AnimeEpisode::where('id_anime', $id_anime)->get();
        return \Illuminate\Support\Facades\View::make('DetailAnime')->with('anime', $data);
//        return view("DetailAnime",$data);
    }

    public function indexEpisode($id_anime)
    {
        $data['anime'] = Anime::where('id_anime', $id_anime)->firstOrFail();
        $status = $data['episode'] = AnimeEpisode::where('id_anime', $id_anime)->get();
        if ($data['episode'] == null) {
            print 'Episode masih 0';
        }
        return \Illuminate\Support\Facades\View::make('Anime.episode')->with('data', $data);
//        return \view('Anime.episode');
    }

    public function storeEpisode(Request $request)
    {
        $input = $request->all();
        $animeEpisode = new AnimeEpisode();
        $animeEpisode->id_anime = $input['id_anime'];
        $animeEpisode->episode = $input['episode'];
        $status = $animeEpisode->save();
        if ($status) {
//            return \Illuminate\Support\Facades\View::make();
            return redirect(route());
        } else {
            print 'gagal memasukkan data';
        }
    }
}
