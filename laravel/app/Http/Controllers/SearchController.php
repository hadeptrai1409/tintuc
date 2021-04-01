<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baiviet;
use Carbon\Carbon;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        $date = Carbon::now();
        $date->subDays(2);
        $show_date = Baiviet::whereBetween('updated_at', [$date, Carbon::now()])->orderby('luot_view', 'DESC')->take(10)->get();

        // dd($date);
        if ($request->keyword) {
            $cates = Baiviet::where('title', 'like', "%" . $request->keyword . "%")->paginate(10);
        } else {
            $cates = Baiviet::paginate(10);
            $cates->withPath('?keyword=' . $request->keyword);
        }

        return view('frontend.search', [
            'cates' => $cates,
            'keyword' => $request->keyword,
            'show_date' => $show_date
        ]);
    }
}
