<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;    //Form（=formsテーブル）モデルを使う
use App\Http\Requests\ValidateRequest;    //バリデーションを行うためのRequest


class FormController extends Controller
{
    //アドレス登録画面を表示
    public function post (){
        return view ('post');
    }

    //DBにデータを追加
    public function add (ValidateRequest $request){
        Form::create([
            'userName' => $request->userName,
            'tel' => $request->tel,
            'email' => $request->email,
        ]);

        //一覧画面にリダイレクト
        return redirect()->route('address.index');
    }

    //アドレス一覧画面表示
    public function index (){
        $data = Form::orderBy('userName', 'asc')->get();    //formsテーブルからデータを、名前の昇順に、すべて取り出して$dataに代入する

        return view('list', compact('data'));//このdataはコレクションのインスタンス
    }

    //アドレス登録編集画面表示
    public function edit ($id){    
        $data = Form::where('id', $id)->first();
        return view('edit', compact('data'));//このdataはモデルのインスタンス
    }

    //更新処理
    public function updata(ValidateRequest $request, $id){
        // idを条件にformsテーブルからレコードを取得
        $data = Form::find($id);

        $data->fill($request->all())
        ->save();
        // タスク一覧画面にリダイレクト
        return redirect()->route('address.index');
    }

     /**削除処理*/
    public function delete($id)
    {
        // idを条件にformsテーブルから該当レコードを削除
        $data = Form::destroy($id);

        // タスク一覧画面にリダイレクト
        return redirect()->route('address.index');
    }
}


  

