<?php

namespace App\Http\Controllers;

use App\Models\Pelaporan;
use App\Models\User;
use Illuminate\Http\Request;
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
    public function root()
    {
        //grp1
        if(auth()->user()->role_id == '1'){
            $counts = Pelaporan::select(DB::raw('COUNT(*) as count'))
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('MONTH(created_at)'))
            ->pluck('count')
            ->toArray();
            
            $grp1 = [];
            for ($i = 1; $i <= 12; $i++) {
                $grp1[] = isset($counts[$i - 1]) ? $counts[$i - 1] : 0;
            }
            
            // If you want to ensure there are 12 items even if some months have 0 counts:
            $grp1 = array_pad($grp1, 12, 0);
        }

        //grp2
        if(auth()->user()->role_id == '1'){
            $grp2 = Pelaporan::count();
        }else{
            $grp = '';
        }

        //grp3
        if(auth()->user()->role_id == '1'){
            $grp3 = User::where('role_id', 4)->count();
        }else{
            $grp = '';
        }

        //grp4
        if(auth()->user()->role_id == '1'){
            $grp4 = User::whereHas('getRole', function ($query) {
                $query->where('level_role', 5);
            })->count();
        }else{
            $grp = '';
        }


        //grp5
        if(auth()->user()->role_id == '1'){
            $grp5 = User::whereHas('getRole', function ($query) {
                $query->where('level_role', 6);
            })->count();
        }else{
            $grp = '';
        }

        //map1
        if(auth()->user()->role_id == '1'){
            $map1 = Pelaporan::select('lat_coor', 'lng_coor')->whereNotNull(['lat_coor', 'lng_coor'])->get();
        }else{
            $map1 = [];
        }

        return view('index', with([
            'grp1' => $grp1,
            'grp2' => $grp2,
            'grp3' => $grp3,
            'grp4' => $grp4,
            'grp5' => $grp5,
            'map1' => $map1,
        ]));
    }

    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }
        return view('errors.404');
    }
}
