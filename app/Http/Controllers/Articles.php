<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use App\Models\UserTable;
use App\Models\ArticleTable;

class Articles extends BaseController
{
    public function get_articles($page)
    {
      
      switch($page){

        case "home":{

          $guardianNews = Articles::guardianNews();
          $allArticles = ArticleTable::all();
          return view($page, ['allArticles' => $allArticles, 'guardianNews' => $guardianNews]);

        }

        case "business":{

          $guardianNews = Articles::guardianNews();
          $allArticles = ArticleTable::where('type', $page)->get();
          return view($page, ['allArticles' => $allArticles, 'guardianNews' => $guardianNews]);

        }

        default:{

          $allArticles = ArticleTable::where('type', $page)->get();
          return view($page, ['allArticles' => $allArticles]);

        }

      }
    }

    public function guardianNews()
    {

      $url = "https://content.guardianapis.com/search?order-by=newest&api-key=".env('GUARDIAN_API_TOKEN');

      return Http::get($url)->object()->response->results;

    }

    public function allArticle()
    {

      return ArticleTable::all();

    }
}