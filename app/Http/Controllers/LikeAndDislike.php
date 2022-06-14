<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;
use App\Models\LikeTable;
use App\Models\ArticleTable;

class LikeAndDislike extends BaseController
{

  public function like_post($post_id)
  {

    $newLike = new LikeTable();

    $newLike->user = Session::get('user_id');
    $newLike->post = $post_id;

    $newLike->save();

    $total_likes = ArticleTable::select('total_likes')->where('id', $post_id)->first();

    $info = ["total_likes" => $total_likes->total_likes, "post_id" => $post_id];

    return $info;

  }

  public function dislike_post($post_id)
  {
    
    LikeTable::select('*')->where('user', Session::get('user_id'))->where('post', $post_id)->delete();

    $total_likes = ArticleTable::select('total_likes')->where('id', $post_id)->first();

    $info = ["total_likes" => $total_likes->total_likes, "post_id" => $post_id];

    return $info;

  }

  public function check_liked()
  {
    
    $total_likes = LikeTable::select('*')->where('user', Session::get('user_id'))->get()->all();

    return $total_likes;

  }


}