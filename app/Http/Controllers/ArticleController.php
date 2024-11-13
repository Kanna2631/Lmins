<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Clinic;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{

    // 投稿一覧
    // public function index()
    // {
    //     $articles = Article::query()
    //         ->with(['clinic', 'likes', 'tags', 'comments'])
    //         ->orderBy('created_at', 'desc')
    //         ->paginate(15);

    //     $data = [
    //         'articles' => $articles,
    //     ];

    //     return view('articles.index', $data);
    // }

    // 投稿画面
    public function create()
    {
        $cities = config('city');

        $clinic = Auth::clinic();

        $data = [
            'clinic' => $clinic
        ];

        return view('articles.create', $data)->with(['cities' => $cities]);
    }

    // 投稿処理
    public function store(ArticleRequest $request, Article $article)
    {
        $article->clinic_id = $request->clinic()->id;
        $all_request = $request->all();
        $article->city_id = $request->city;
        $article->fill($all_request)->save();

        return redirect()->route('articles.index');
    }

    // 検索機能
    public function search(Request $request)
    {
        $query=$request['city'];

        $clinics=Clinic::where('address','LIKE','%' . $query . '%')->get();
        
        return view('articles.results')->with(['clinics' => $clinics]);
    }

    public function index()
    {
        return view('articles.nav');
    }


}
