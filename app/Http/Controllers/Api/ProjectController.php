<?php

namespace App\Http\Controllers\Api;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller ;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $projects = User::find($id)->projects ;

        return $projects ;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $project= new Project() ;
       $project->title=$request->title;
       $project->sub_title=$request->sub_title ;
       $project->description=$request->description ;
       $project->status=$request->status ;
       $project->user_id=$request->user_id ;

       $project->save() ;

       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::where('id' ,$id)->first();

        return $project ;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);

        $project->title= $request->title ;
        $project->sub_title= $request->sub_title ;
        $project->description= $request->description ;
        $project->status= $request->status ;

        $project->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id) ;
    }
}
