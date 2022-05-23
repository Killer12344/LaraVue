<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function article(){

        return Article::with('user','category')->when(\request('search'),function ($query){
            $query->where('title','like','%'.request('search').'%')
                ->orWhere('description','like','%'.\request('search').'%')
                ->paginate(6);
        })->paginate(6);

//        if(\request('search')){
//            $articles = Article::where('title','like','%'.\request('search').'%')
//                ->with('user','category')->latest('id')->get();
//            return $articles;
//        }else{
//            $articles = Article::with('user','category')->latest('id')->paginate(6);
//            return $articles;
//        }


    }
    public function detail($id){
        $article = Article::where('id',$id)->with('user','category')->first();
        return response()->json($article);
    }

//    public function orderByCat($id){
//        $cat = Category::where('id',$id)->with('article.user','article.category')->paginate(6);
//        return response()->json($cat);
//    }

    public function category(){
        $cat = Category::all();
        return $cat;

    }
}
