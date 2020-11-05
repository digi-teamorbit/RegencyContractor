<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Subcategory;
use App\Childcategory;
use Illuminate\Http\Request;
use Image;
use File;

class ChildcategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('childcategory','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $childcategory = Childcategory::where('name', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $childcategory = Childcategory::paginate($perPage);
            }

            return view('admin.childcategory.index', compact('childcategory'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('childcategory','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $items = Category::pluck('name', 'id');
            $subitems = Subcategory::pluck('subcategory', 'id');
            return view('admin.childcategory.create',compact('items','subitems'));
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('childcategory','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            

            $childcategory = new childcategory($request->all());
            $childcategory->category = $request->input('item_id'); 
            $childcategory->subcategory = $request->input('subitem_id'); 

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $childcategory_path = 'uploads/childcategorys/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($childcategory_path) . DIRECTORY_SEPARATOR. $profileImage);

                $childcategory->image = $childcategory_path.$profileImage;
            }
            
            $childcategory->save();

            return redirect('admin/childcategory')->with('flash_message', 'Childcategory added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('childcategory','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $childcategory = Childcategory::findOrFail($id);
            return view('admin.childcategory.show', compact('childcategory'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('childcategory','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
             $items = Category::pluck('name', 'id');
            $subitems = Subcategory::pluck('subcategory', 'id');
            $childcategory = Childcategory::findOrFail($id);
            return view('admin.childcategory.edit', compact('childcategory','items','subitems'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('childcategory','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            
            $requestData = $request->all();
            $requestData['category'] = $request->input('item_id');
          $requestData['subcategory'] = $request->input('subitem_id'); 

        if ($request->hasFile('image')) {
            
            $childcategory = childcategory::where('id', $id)->first();
            $image_path = public_path($childcategory->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/childcategorys/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/childcategorys/'.$fileNameToStore;               
        }


            $childcategory = Childcategory::findOrFail($id);
             $childcategory->update($requestData);

             return redirect('admin/childcategory')->with('flash_message', 'Childcategory updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('childcategory','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Childcategory::destroy($id);

            return redirect('admin/childcategory')->with('flash_message', 'Childcategory deleted!');
        }
        return response(view('403'), 403);

    }
}
