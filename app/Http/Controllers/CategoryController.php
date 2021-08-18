<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $result['data']=Category::all();
        return view('admin/category',$result);
    }

    
    public function manage_category(Request $request, $id='')
    {
        if ($id>0){
            $arr=Category::where(['id'=>$id])->get();

            $result['category_name']=$arr['0']->category_name;
            $result['category_slug']=$arr['0']->category_slug;
        }else{
            $result['category_name']='';
            $result['category_slug']='';
        }
        return view('admin/manage_category', $result);
    }

    public function manage_category_process(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
            'category_slug'=>'required|unique:categories',
        ]);

        $model = new Category();
        $model ->category_name=$request->post('category_name');
        $model ->category_slug=$request->post('category_slug');
        $model->save();
        $request->session()->flash('message','Category Inserted');
        return redirect('admin/category');
    }

    public function delete(Request $request,$id){
        $model=Category::find($id);
        $model->delete();
        $request->session()->flash('message','Category Deleted');
        return redirect('admin/category');
    }
    
}
