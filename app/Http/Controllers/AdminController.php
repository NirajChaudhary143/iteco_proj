<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class AdminController extends Controller
{
    public function index(){
    $page_category='Dashboard';
    $category_name = '';
    $page_title = 'Dashboard';
        return view('admin.index',compact('page_category','category_name','page_title'));
    }

    public function viewProject(){
        $projects_details = Project::latest()->get();
        $page_category='Projects Settings';
        $category_name = 'View Projects';
        $page_title = 'View Projects';
        return view('admin.project_details',compact('page_category','category_name','page_title','projects_details'));
    }

    public function project(){
        $page_category='Projects Settings';
        $category_name = 'Add Projects';
        $page_title = 'Add Projects';
        return view('admin.addProject',compact('page_category','category_name','page_title'));
    }
    public function addProject(Request $request){
        $project = new Project();
        $project->project_title = $request['projectName'];
        $project->description = $request['description'];
        $project->client_name = $request['client'];
        $project->uv_association = $request['uv'];
        $project->start_date = $request['startingDate'];
        $project->complete_date = $request['completionDate'];
        $project->status = $request['status'];
        $project->sectors = $request['sectors'];

        if($request->hasFile('image')){
            $fileName = time().'_iteco_project_'.'.'.$request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('iteco_projects',$fileName,'public');

            $project->image = '/storage/'.$path;

        }
        $result = $project->save();
        if($result){
          return redirect('/view-project');
        }
    }

    public function editProjectForm($id){
        $project = Project::find($id);
        $page_category='Projects Settings';
        $category_name = 'Edit Projects';
        $page_title = 'Edit Projects';
        return view('admin.editProject',compact('project','page_category','category_name','page_title'));
    }

    public function deleteProject($id){
        Project::find($id)->delete();
        return redirect('/view-project');
    }

    public function updateProject(Request $request, $id){
        $project = Project::where('id',$id)->first();

        $project->project_title = $request['projectName'];
        $project->description = $request['description'];
        $project->client_name = $request['client'];
        $project->uv_association = $request['uv'];
        $project->start_date = $request['startingDate'];
        $project->complete_date = $request['completionDate'];
        $project->status = $request['status'];
        $project->sectors = $request['sectors'];

        if($request->hasFile('image')){
            $fileName = time().'_iteco_project_'.'.'.$request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('iteco_projects',$fileName,'public');

            $project->image = '/storage/'.$path;

        }

        $result = $project->save();
        if($result){
          return redirect('/view-project');
        }
    }

    // News

    public function news(){
        $page_category='News Settings';
        $category_name = 'Add News';
        $page_title = 'Add News';
        $btn = 'Add';
        return view('admin.addNews',compact('page_category','category_name','page_title','btn'));
    }

    public function addNews(Request $request){
        // echo "<pre>";
        // print_r($request->toArray());

        $news = new News();
        $news->title = $request['title'];
        $news->description = $request['description'];

        $fileName = time().'_iteco_project_'.'.'.$request->file('image')->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('iteco_projects',$fileName,'public');

        $news->image = '/storage/'.$path;

        $result = $news->save();
        if($result){
            return redirect('/view-news');
        }
    }
    public function viewNews(){
        $news = News::latest()->paginate(4);
        $page_category='News Settings';
        $category_name = 'View News';
        $page_title = 'View News';
        return view('admin.showNews',compact('page_category','category_name','page_title','news'));
    }

    public function deleteNews($id){
        News::find($id)->delete();
        return redirect('/view-news');
    }

    public function editNewsForm($id){
        $news = News::find($id);
        $page_category='News Settings';
        $category_name = 'Edit News';
        $page_title = 'Edit News';
        $btn = 'Update';
        return view('admin.editNews',compact('btn','news','page_category','category_name','page_title'));
    }

    public function updateNews(Request $request, $id){
        $news = News::where('id',$id)->first();

        $news->title = $request['title'];
        $news->description = $request['description'];

        if($request->hasFile('image')){
            $fileName = time().'_iteco_project_'.'.'.$request->file('image')->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('iteco_projects',$fileName,'public');

            $news->image = '/storage/'.$path;
        }

        $result = $news->save();
        if($result){
          return redirect('/view-news');
        }
    }
    public function ongoingProjects(){
        $title = "Ongoing Projects";
        $ongoingProjects = Project::where('status','0')->latest()->get();
        return view('user.ongoing',compact('ongoingProjects','title'));
    }
    public function completedProjects(){
        $title = "Completed Projects";
        $projects = Project::where('status', '1')->latest()->get();
        $transProj = Project::where('sectors', '1')->where('status', '1')->latest()->get();
        $hydroProj = Project::where('sectors', '2')->where('status', '1')->latest()->get();
        $waterProj = Project::where('sectors', '3')->where('status', '1')->latest()->get();
        $otherProj = Project::where('sectors', '4')->latest()->get();
        // $completedProjects = Project::where('status','1')->get();
        return view('user.completedProjects',compact('title','projects','transProj','hydroProj','waterProj','otherProj'));
    }

}
