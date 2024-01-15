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
        if(session('role')->level_role != '4'){
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
        } else {
            $grp1 = [];
        }

        //grp2
        if(session('role')->level_role == '1' 
            || session('role')->level_role == '2'
            || session('role')->level_role == '3'
            || session('role')->level_role == '4'
            || session('role')->level_role == '5'
        ){
            $grp2 = Pelaporan::count();
        }else if(session('role')->level_role == '6'){
            $grp2 = Pelaporan::where('status_penanganan_id', [2,3])->whereHas('assignedPetugas', function ($query) {
                $query->where('user_id', session('user')->id);
            })->count();
        } else{
            $grp2 = '';
        }

        //grp3
        if(session('role')->level_role == '1' || session('role')->level_role == '3'){
            $grp3 = User::where('role_id', 4)->count();
        } else if(session('role')->level_role == '4'){
            $grp3 = Pelaporan::where('user_id', session('user')->id)->count();
        } else if(session('role')->level_role == '5'){
            $grp3 = Pelaporan::where('role_penanganan_id', session('role')->id)->count();
        } else if(session('role')->level_role == '2'){
            $grp3 = Pelaporan::where('status_penanganan_id', 1)->count();
        } else if(session('role')->level_role == '6'){
            $grp3 = Pelaporan::where('status_penanganan_id', 4)->whereHas('assignedPetugas', function ($query) {
                $query->where('user_id', session('user')->id);
            })->count();
        } 
        else{
            $grp3 = '';
        }

        //grp4
        if(session('role')->level_role == '1' || session('role')->level_role == '3'){
            $grp4 = User::whereHas('getRole', function ($query) {
                $query->where('level_role', 5);
            })->count();
        } else if(session('role')->level_role == '2'){
            $grp4 = Pelaporan::where('status_penanganan_id', [2,3])->count();
        } else if(session('role')->level_role == '5'){
            $grp4 = Pelaporan::where('role_penanganan_id', session('role')->id)->where('status_penanganan_id', 2)->orWhere('status_penanganan_id', 3)->count();
        } else{
            $grp4 = '';
        }


        //grp5
        if(session('role')->level_role == '1' || session('role')->level_role == '3'){
            $grp5 = User::whereHas('getRole', function ($query) {
                $query->where('level_role', 6);
            })->count();
        }else if(session('role')->level_role == '2'){
            $grp5 = Pelaporan::where('status_penanganan_id', 4)->count();
        }else if(session('role')->level_role == '5'){
            $grp5 = Pelaporan::where('role_penanganan_id', session('role')->id)->where('status_penanganan_id', 4)->count();
        }else{
            $grp5 = '';
        }

        //map1
        if(session('role')->level_role == '1' || session('role')->level_role == '3'){
            $map1 = Pelaporan::select('lat_coor', 'lng_coor', 'alamat_kejadian')->whereNotNull(['lat_coor', 'lng_coor'])->get();
        }else if(session('role')->level_role == '5'){
            $map1 = Pelaporan::select('lat_coor', 'lng_coor', 'alamat_kejadian')->where('role_penanganan_id', session('role')->id)->whereNotNull(['lat_coor', 'lng_coor'])->get();
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
