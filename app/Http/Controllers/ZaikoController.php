<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZaikoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $zaikos = \App\Models\zaiko::all();
        $zaikos = \App\Models\zaiko::orderBy('created_at', 'desc')->paginate(10);
        return view('zaikos.index', ['zaikos' => $zaikos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zaikos.create');
    }

    public function createConfirm(\App\Http\Requests\ZaikoValidationRequest $request)
    {
        $data = $request->all();
        // return view('zaikos.createConfirm');
        // logger($data);
        return view('zaikos.createConfirm')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Studentオブジェクト生成
        $zaiko = new \App\Models\zaiko();
        // 値の登録
        $zaiko->sk = $request->sk;
        $zaiko->model = $request->model;
        $zaiko->itemNo = $request->itemNo;
        $zaiko->number = $request->number;
        // 保存
        $zaiko->save();
        // 一覧にリダイレクト
        return redirect()->to('zaikos/create');
    }
    public function delete($id)
    {
        //削除対象レコードを検索
        $user = \App\Models\zaiko::find($id);
        //削除
        $user->delete();
        //リダイレクト
        return redirect()->to('zaikos');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
