<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Baiviet;
use App\Danhmuc;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $range = Carbon::now()->subDays(30);

        $stats = DB::table('bai_viet')
            ->where('created_at', '>=', $range)
            ->groupBy('created_at', 'title')
            ->orderBy('created_at', 'ASC')
            ->get([
                DB::raw('Date(created_at) as created_at'),
                // DB::raw('COUNT(*) as value'),
                DB::raw('Sum(luot_view) as value'),
                DB::raw('(title) as title'),
            ]);

        // ->toJSON();
        // dd($stats);


        $stats = json_encode($stats);



        $danhmuc = Danhmuc::all()->count();
        $baiviet = Baiviet::all()->count();
        $user = User::all()->count();
        // $baiviet->count();

        return view('home.home', ['danhmuc' => $danhmuc, 'baiviet' => $baiviet, 'user' => $user, 'stats' => $stats]);
    }
}
