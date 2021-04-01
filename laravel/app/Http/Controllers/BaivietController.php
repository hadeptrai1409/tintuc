<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaivietRequest;
use Illuminate\Http\Request;
use App\Baiviet;
use App\Danhmuc;
use Carbon\Carbon;


class BaivietController extends Controller
{
    //
    //
    public function index(Request $request)
    {
        $danhmuc = Danhmuc::all();

        if ($request->keyword) {
            $cates = Baiviet::where('title', 'like', "%" . $request->keyword . "%")->paginate(10);
        } else {
            $cates = Baiviet::paginate(10);
            $cates->withPath('?keyword=' . $request->keyword);
        }


        $cates->load('danhmuc');
        return view('baiviet.index', [

            'cates' => $cates,
            'keyword' => $request->keyword,
            'danhmuc' => $danhmuc

        ]);
    }

    public function add()
    {
        $cats = Danhmuc::orderBy('name', 'ASC')->select('id', 'name')->get();
        $danhmuc = Danhmuc::all();
        return view('baiviet.add-baiviet', ['danhmuc' => $danhmuc]);
    }

    public function SaveAdd(BaivietRequest $request)
    {
        $model = new Baiviet();
        $model->title = $request->title;
        $model->danh_muc_id = $request->danh_muc_id;
        $model->content = $request->content;
        $model->image = $request->image;
        $model->short_desc = $request->short_desc;
        $model->author = $request->author;
        $model->luot_view = 0;
        if ($request->has('image')) {
            //kiem tra co ton tai file ten image k
            $file = $request->image;

            $file->move('upload', $file->getClientOriginalName());
        }

        $model->image = $request->image->getClientOriginalName();
        $model->save();
        return redirect(route('baiviet.index'));
    }


    public function edit($id)
    {
        $danhmuc = Danhmuc::all();
        $model = Baiviet::find($id);
        return view('baiviet.edit-baiviet', ['model' => $model], ['danhmuc' => $danhmuc]);
    }

    public function SaveEdit(BaivietRequest $request)
    {
        $id = $request->id;
        $model = Baiviet::find($id);

        $model->fill($request->all());
        if ($request->has('image')) {
            //kiem tra co ton tai file ten image k
            $file = $request->image->getClientOriginalName();

            $request->image->move('upload', $file);
            $model->image = $request->image->getClientOriginalName();
        } else {
            $hinhcu = $request->images_cu;
            $model->image = $hinhcu;
        }

        $model->save();
        return redirect(route('baiviet.index'));
    }

    public function remove($id)
    {
        Baiviet::destroy($id);

        return redirect(route('baiviet.index'));
    }

    public function detail(Request $request)
    {

        $totalViews = Baiviet::where('danh_muc_id', $request->id)->sum('luot_view');

        $baiviet = Baiviet::find($request->id);
        $date = Carbon::now();
        $date->subDays(2);
        // $baiviet = Baiviet::all();
        $show_date = Baiviet::whereBetween('updated_at', [$date, Carbon::now()])->orderby('id', 'DESC')->take(10)->get();
        // dd($baiviet);
        $bv = Baiviet::all();
        // $baiviet->luot_view += 1;
        // $baiviet->save();
        // // return response()->json($baiviet);
        return view('frontend.chitiet', compact('baiviet', 'totalViews'), ['bv' => $bv, 'show_date' => $show_date]);
    }

    public function tangView(Request $request)
    {
        $baiviet = Baiviet::find($request->id);
        $baiviet->luot_view += 1;
        $baiviet->save();
        return response()->json($baiviet);
    }
}
