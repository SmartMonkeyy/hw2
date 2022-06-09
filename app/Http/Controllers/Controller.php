<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Session;
use App\Models\UserTable;
use App\Models\ArticleTable;
use App\Http\Controllers\Articles;

class Controller extends BaseController
{
    public function check_login(Request $request)
    {

        $user = UserTable::where('username', $request->username)->first();

        if($user == null){
            
            return redirect()->route('index')
                ->with("check", "name_false")
                ->withInput();

        }

        $hashedpass = hash('sha256', $user->salt . $request->password);

        if($hashedpass == $user->password){

            Session::put('username', $user->username);
            Session::put('user_id', $user->id);

            //check-root
            if(Session::get('username') == "root"){

                return redirect()
                    ->route('view.upload');
    
            }else{
    
                return redirect()
                    ->route('view.home');
    
            }
            
        }else{
            
            return redirect()->route('index')
                ->with("check", "pass_false")
                ->withInput();

        }        
    }

    public function register(Request $request)
    {

        $user = UserTable::where('username', $request->username)->first();
        if($user == null){

            $salt = rand(10000, 99999);
            $hashedpass = hash('sha256', $salt. $request->password);
    
            $newUser = new UserTable();
    
            $newUser->username = $request->username;
            $newUser->password = $hashedpass;
            $newUser->salt = $salt;
    
            $newUser->save();

            return redirect()->route('index')
                ->with("check", "register_ok");

        }else{

            return redirect()->route('index')
                ->with("check", "register_fail");

        }
    }

    public function check_logged($page)
    {

        if(Session::get('username') == null){

            return redirect()
                ->route('index')
                ->with('check', Session::get('check'));  

        }else{

            return Articles::get_articles($page);
            
        } 
        
    }

    public function logout()
    {

        Session::flush();
        return redirect()->route('index')
            ->with('check', Session::get('check'));

    }

    
    public function delete(Request $request)
    {

        $deleteUser = UserTable::where('username', $request->username)->first();

        $hashedpass = hash('sha256', $deleteUser->salt . $request->password);

        if($hashedpass == $deleteUser->password){

            $deleteUser->delete();

            Session::flush();
            return redirect()->route('index')
                ->with("check", "delete_ok");

        }else{

            return redirect()->route('view.delete')
                ->with("check", "delete_no");

        }        
    }

    public function upload(Request $request)
    {

        $newArticle = new ArticleTable();

        if(str_contains($request->logo->getClientOriginalName(), ".jpg")){

            $newArticle->img = str_replace(".jpg", "", $request->logo->getClientOriginalName());

        }else{

            $newArticle->img = str_replace(".jpeg", "", $request->logo->getClientOriginalName());

        }

        $newArticle->title = $request->title;

        $newArticle->heading = $request->heading;

        $newArticle->paragraph = $request->paragraph;

        $newArticle->type = $request->type;

        if(ArticleTable::where('img', $newArticle->img)->first() != null){

            return view('upload')
                ->with("upload_check", "img_false");

        }

        if($request->logo->storeAs('/public/article_img', $request->logo->getClientOriginalName()) && $newArticle->save()){
            
            return view('upload')
                ->with("upload_check", "ok");

        }else{
            
            return redirect()->route('view.upload')
                ->with("upload_check", "error")
                ->withInput();
                
        }
    }
}