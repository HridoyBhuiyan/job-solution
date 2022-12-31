<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\Job;
use App\Models\Category;
use App\Models\Category as ModelsCategory;

class JobsController extends Controller
{
   
    public function addjob(){
        $categories= Category::get();
        return view('admin.job.jobAdd', compact('categories'));
    }

    public function jobsave (Request $request){
        $validatedData= $request->validate([
            'Cname'=>'required|max:255',

        ]);
            $Add_job=new Job;
           $Add_job->Cname=$request->Cname;
           $Add_job->JPname=$request->JPname;
           $Add_job->category=$request->category;
           
           $Add_job->Vacancy=$request->vacancy;
           $Add_job->Jdescription=$request->Jdescription;
           $Add_job->Estatus=$request->Estatus;
           $Add_job->workplace=$request->workplace;
           $Add_job->Erequirements=$request->Erequirements;
           $Add_job->Experience=$request->Experience;
           $Add_job->Jlocation=$request->Jlocation;
           $Add_job->Salary=$request->Salary;
           $Add_job->Obenefits=$request->Obenefits;
           $Add_job->Pdate=$request->Pdate;
           $Add_job->Ldate=$request->Ldate;
           if($request->hasfile('logo'))
           {
               $file=$request->file('logo');
               $extension=$file->getClientOriginalExtension();
               $filename=time().'.'.$extension;
               $file->move('image/logo/',$filename);
               $Add_job->logo= $filename;
           }

           $Add_job->save();
           return redirect()->route('jobList');     
    }
    public function joblist(){

        $jobs=Job::get();
        return view('admin.job.jobList',compact('jobs'));
    }

    public function addcategory(){

        return view('admin.job.jobCategory');
    }

    public function categorySave(Request $request){
        $validatedData= $request->validate([
            'Category_name'=>'required|max:255',

        ]);
        $Add_category=new Category;
        $Add_category->Category_name=$request->Category_name;
        $Add_category->save();
        $categories= Category::get();
        return view('admin.job.jobAdd', compact('categories'));
    }

    public function jobEdit($id){

        $data=Job::find($id);
        $categories=Category::get();
        return view('admin.job.jobEdit',compact('data','categories'));

    }

    public function jobUpdate(Request $request,$id){

        $data=Job::find($id);
        $data['Cname']=$request->Cname;
        $data['JPname']=$request->JPname;
        $data['category']=$request->category;
        $data['vacancy']=$request->vacancy;
        $data['Jdescription']=$request->Jdescription;
        $data['Estatus']=$request->Estatus;
        $data['workplace']=$request->workplace;
        $data['Erequirements']=$request->Erequirements;
        $data['Experience']=$request->Experience;
        $data['Jlocation']=$request->Jlocation;
        $data['Salary']=$request->Salary;
        $data['Obenefits']=$request->Obenefits;
        $data['Pdate']=$request->Pdate;
        $data['Ldate']=$request->Ldate;
        if($request->hasfile('logo'))
        {
            $destination='image/logo/'.$data->logo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file=$request->file('logo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('image/logo/',$filename);
            $data->logo= $filename;
        }

        $data->update();
        return redirect()->route('jobList'); 
    
    
    }

    public function jobDetails($id){

        $data=Job::find($id);
        $categories=Category::get();
        return view('admin.job.jobDetails',compact('data','categories'));

    }

    public function jobdelete($id){
        $datas=Job::find($id);
        $destination='image/logo/'.$datas->logo;
               if(File::exists($destination))
               {
                   File::delete($destination);
               }
        $datas=Job::find($id);
        $datas->delete();
        //return view('dashbords.view');

       return redirect()->back();

    }

}