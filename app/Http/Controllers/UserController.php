<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Auth;

class UserController extends Controller
{
    public function create()
    {
        return View('user.create');
    }

    public function store(Request $request)
    {
        // バリデーション

        $this->validate($request, [
          'userId' => 'required|unique:users',
          'userName' => 'required'
        ]);
       
        // DBインサート
        $user = new user([
          'userId' => $request->input('userId'),
          'userName' => $request->input('userName'),
          'password' => ''
        ]);
       
        // 保存
        $user->save();
       
        // リダイレクト
        return view('user.create');
    }

    public function getLogin()
    {
        return View('user.login');
    }
    
    public function postLogin(Request $request)
    {
        // $this->validate($request, [
        //     'userId' => 'required'
        //     ]);
           
        if (Auth::attempt(['userId' => $request->input('userId'), 'userName' => 'qqq', 'password' => ''])) {
            return redirect()->route('/zaikos/index');
        }
        return redirect()->back();
    }
}
