<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $title ="Dedicated To Quality";
        $news = News::latest()->paginate(4);
        return view('user.index',compact('title','news'));
    }
    public function aboutUs(){
        $title ="About Us";
        return view('user.aboutus',compact('title'));
    }
    public function background(){
        $title ="Iteco Backgroud";
        return view('user.background',compact('title'));
    }
    public function biography(){
        $title ="Iteco Biography";
        return view('user.biography',compact('title'));
    }
    public function companyProfile(){
        $title ="Iteco Profile";
        return view('user.companyprofile',compact('title'));
    }
    public function contactUs(){
        $title ="Contact Us";
        return view('user.contacts',compact('title'));
    }
    public function extensionNumber(){
        $title ="Extension Number";
        return view('user.extensionnumbers',compact('title'));
    }
    public function holiday(){
        $title ="Iteco Holiday News";
        return view('user.holidays',compact('title'));
    }
    public function oraganization(){
        $title ="Organization";
        return view('user.organization',compact('title'));
    }
    public function projects(){
        $projects = Project::all();
        $transProj = Project::where('sectors','transportation')->get();
        $hydroProj = Project::where('sectors','hydropower')->get();
        $waterProj = Project::where('sectors','water_resources')->get();
        $otherProj = Project::where('sectors','other')->get();
        $title ="Iteco Projects";
        return view('user.projects',compact('title','projects','transProj','hydroProj','waterProj','otherProj'));
    }
    public function services(){
        $title ="Iteco Services";
        return view('user.service',compact('title'));
    }

    public function news($id){
        $title ="Iteco";
        $projects = Project::find($id);
        if($projects){
            return view('user.project_details',compact('title','projects'));
        }
        else {
            return redirect('/iteco/projects');
        }
    }

    public function page1(){
        $title ="Dedicated To Quality";
        return view('user.page1',compact('title'));
    }
    public function page2(){
        $title ="Dedicated To Quality";
        return view('user.page2',compact('title'));
    }
    public function page3(){
        $title ="Dedicated To Quality";
        return view('user.page3',compact('title'));
    }
    public function page4(){
        $title ="Dedicated To Quality";

        return view('user.page4',compact('title'));
    }
    public function page5(){
        $title ="Dedicated To Quality";
        return view('user.page5',compact('title'));
    }
    public function page6(){
        $title ="Dedicated To Quality";
        return view('user.page6',compact('title'));
    }


}
