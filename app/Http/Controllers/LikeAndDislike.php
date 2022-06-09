<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\LikeTable;
use App\Models\ArticleTable;

class LikeAndDislike extends BaseController
{

  public function like_post()
  {

    $newLike = new LikeTable();

    $newLike->user = Session::get('user_id');
    $newLike->post = $_COOKIE['post_id'];

    $newLike->save();

    $total_likes = ArticleTable::select('total_likes')->where('id', $_COOKIE['post_id'])->first();

    return $total_likes->total_likes;

  }

  public function dislike_post()
  {
    
    LikeTable::select('*')->where('user', Session::get('user_id'))->where('post', $_COOKIE['post_id'])->delete();

    $total_likes = ArticleTable::select('total_likes')->where('id', $_COOKIE['post_id'])->first();

    return $total_likes->total_likes;

  }

  public function check_liked()
  {
    
    $total_likes = LikeTable::select('*')->where('user', Session::get('user_id'))->get()->all();

    return $total_likes;

  }


}