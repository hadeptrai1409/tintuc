<?php

namespace App\Http\Controllers;

use App\Baiviet;
use App\Http\Requests\DanhmucRequest;

use App\Danhmuc;

use Illuminate\Http\Request;

class DanhmucController extends Controller
{
    //
    public function index(Request $request)
    {

        if ($request->keyword) {
            $cates = Danhmuc::where('name', 'like', "%" . $request->keyword . "%")->paginate(10);
        } else {
            $cates = Danhmuc::paginate(10);
            $cates->withPath('?keyword=' . $request->keyword);
        }

        return view('danhmuc.index', [
            'cates' => $cates,
            'keyword' => $request->keyword
        ]);
    }

    public function add()
    {
        return view('danhmuc.add-danhmuc');
    }

    public function SaveAdd(DanhmucRequest $request)
    {
        $model = new Danhmuc();
        $model->name = $request->name;
        $model->logo = $request->logo;
        if ($request->has('logo')) {
            //kiem tra co ton tai file ten image k
            $file = $request->logo;

            $file->move('upload', $file->getClientOriginalName());
        }

        $model->logo = $request->logo->getClientOriginalName();
        $model->save();
        return redirect(route('danhmuc.index'));
    }

    public function edit($id)
    {
        $model = Danhmuc::find($id);
        return view('danhmuc.edit-danhmuc', ['model' => $model]);
    }

    public function SaveEdit(DanhmucRequest $request)
    {

        $id = $request->id;

        $model = Danhmuc::find($id);

        $model->fill($request->all());

        if ($request->has('logo')) {
            //kiem tra co ton tai file ten image k
            $file = $request->logo->getClientOriginalName();

            $request->logo->move('upload', $file);
            $model->logo = $request->logo->getClientOriginalName();
        } else {
            $hinhcu = $request->images_cu;
            $model->logo = $hinhcu;
        }

        $model->save();

        return redirect(route('danhmuc.index'));
    }

    public function remove($id)
    {
        // Danhmuc::destroy($id);
        // //cais nayf khi xoa phai xoa luon ben post mois dk
        // // vl phari vay a
        $model = Danhmuc::find($id);
        if ($model) {
            // đc vl
            Baiviet::where('danh_muc_id', $id)->delete();
            $model->delete();
        }
        return redirect(route('danhmuc.index'));
    }
}
