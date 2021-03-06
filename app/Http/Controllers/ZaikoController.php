<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ZaikoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $itenNoKeyword = $request->itenNoKeyword;
        $skKeyword = $request->skKeyword;

        $query = \App\Models\stock::query();
 
        if (!empty($itenNoKeyword)) {
            $query->where('itemNo', 'like', '%'.$itenNoKeyword.'%');
        }
        if (!empty($skKeyword)) {
            $query->orWhere('sk', 'like', '%'.$skKeyword.'%');
        }

        $stocks = $query->orderBy('created_at', 'desc')->paginate(10);
        return view('zaikos.index', ['stocks' => $stocks, 'request' => $request]);
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
        //在庫保存
        $stock = new \App\Models\stock();
        $stock->productionOrderId = $request->productionOrderId;
        $stock->itemNo = $request->itemNo;
        $stock->currentAmount = $request->currentAmount;
        $stock->updateUserId = Auth::user()->userId;
        $stock->save();

        //履歴保存


        return redirect()->to('zaikos/create');
    }
    public function delete($id)
    {
        $stock = \App\Models\stock::find($id);
        $stock->delete();
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
        return redirect()->to('zaikos')->with('flashmessage', '登録が完了いたしました。');
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
