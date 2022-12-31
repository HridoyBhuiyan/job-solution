<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $role= Auth::user()->role;
        if($role=='1'){
            return view('admin.dashboard');
        }
        else{
        $datas=Job::get();
        $hotjobs=Job::where('category','Hot Jobs')->get();
        $tender=Job::where('category','Tender')->get();
        $govt=Job::where('category','Government')->get();
            return view('user.dashboard',compact('datas','hotjobs','tender','govt'));
        }
    }


    
    public function govJob(){
        $govt=Job::where('category','Government')->get();
        return view('user.job.govjob',compact('govt'));

    }
}
