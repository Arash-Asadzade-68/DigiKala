<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::where('parent_id', 0)->paginate(5);
        $cat = true;
        $subcat=false;

        return view('admin.categories.index', compact('categories','cat','subcat'));
    }

    public function properties($id)
    {
        $category = Category::where('category_id', $id);
        return view('admin.categories.properties', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $result=$request->all();
        if($path=$request->file('path')){
            $name= time(). $path->getClientOriginalName();
            $path->move('images/category', $name);
            $result['path']=$name;
        }
        Category::create($result);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $flag=false;
        $cat = false;
        $subcat=false;
        $categories =Category::where('parent_id',$id)->paginate(5);

        $category= Category::findorFail($id);

        $parent = $category::where('id',$category->parent_id)->first();

        if($category->parent_id == 0){
            $flag = true;

        }

        if(!$cat and !$flag and  $parent->path !=null){
            $subcat=true;
        }
        return view('admin.categories.index',compact('categories','cat','id','flag','subcat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $result=$request->all();
        $category=Category::findOrFail($id);
        if($path=$request->file('path')){
            $name= time(). $path->getClientOriginalName();
            $path->move('images/category', $name);
            $result['path']=$name;
        }
        $category->update($result);
        Session::flash('Update_Category', 'عملیات ویرایش با موفقیت انجام گردید.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function subdelete($subcats)
    {

            foreach ($subcats as $subcat) {
                $subcats = Category::where('parent_id',$subcat->id)->get();
                if(!$subcats){
                    return 1;
                }
                if ($subcat->path) {
                    unlink(public_path() . '/images/category/' . $subcat->path);
                }
                $subcat->delete();
                $this->subdelete($subcats);
            }


    }

    public function categoriesDelete(Request $request)
    {
        if(!empty($request->checkboxArray)){

            $categories=Category::findorFail($request->checkboxArray);
            foreach ($categories as $subcats){
                $this->subdelete($subcats);
            }
            return redirect()->back();
        }else{
            Session::flash('Select_Cat','دسته یا زیر دسته مورد نظر انتخاب نشده است');
            return redirect('categories.index');
        }
    }
    public function destroy($id)
    {
        //

        $category = Category::findOrFail($id);
        $subcats = Category::where('parent_id',$category->id)->get();
        $this->subDelete($subcats);
//            foreach ($subcats as $subcat) {
//                if ($subcat->path) {
//                    unlink(public_path() . '/images/category/' . $subcat->path);
//                }
//                $subcat->delete();
//            }

        $category->delete();
        Session::flash('Delete_Category','عملیات حذف با موفقیت انجام گردید');
        return redirect()->back();
    }
}
