<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        // $zaikos = \App\Models\zaiko::all();
        $stocks = \App\Models\stock::orderBy('created_at', 'desc')->paginate(10);
        return view('zaikos.index', ['stocks' => $stocks]);
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
        $stock->updateUserId = 'user';
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
