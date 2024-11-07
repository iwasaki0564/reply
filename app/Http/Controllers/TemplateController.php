<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;

class TemplateController extends Controller
{
    public function index(){
        $templates = Template::all();
        return view('/templates/home', ['templates' => $templates,]);
    }
    public function createView(){
        return view('templates/create');
    }
    public function create(Request $request){
        $template = new Template();
        $template->facility_name = $request->facility_name;
        $template->room_number = $request->room_number;
        $template->template_name = $request->template_name;
        $template->japanese_template = $request->japanese_template;
        $template->english_template = $request->english_template;
        $template->save();
        return redirect('/');
    }
    public function editView($id){
        $template = Template::find($id);
        return view('templates/edit',['template' => $template]);
    }
    public function edit(Request $request){
        Template::find($request->id)->update([
            'facility_name' => $request->facility_name,
            'room_number' => $request->room_number,
            'template_name' => $request->template_name,
            'japanese_template' => $request->japanese_template,
            'english_template' => $request->english_template,
        ]);
        return redirect('/');
    }
    public function delete($id){
        Template::find($id)->delete();
        return redirect('/');
    }
}
