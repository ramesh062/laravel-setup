<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->moduleName = "Categories";
        $this->moduleRoute = route('admin.categories.index');
        $this->moduleView = "admin.shop.categories";
        View::share('moduleName', $this->moduleName);
        View::share('moduleRoute', $this->moduleRoute);
        View::share('moduleView', $this->moduleView);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return $this->getDatatable($request);
        }
        else{
            return view("$this->moduleView.index");
        }
    }

    public function getDatatable(Request $request)
    {
        $result = Category::select('id','name','created_at');
        if ($request['search']['value'] != '') {
            $search = $request['search']['value'];

            $result = $result->where(function ($where) use ($search) {
                $where->where('id', 'like', "%$search%")
                    ->orWhere('name', 'like', "%$search%")
                    ->orWhereRaw('created_at', 'like', "%$search%");
            });
        }
        $result = $result->groupBy('id')->get();
        $datatable = DataTables::of($result)->filter(function() { });
        return $datatable->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        View::share('FormName', "Create Category");
        return View::make("admin.general.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
        ],$request->all());

        $data = $request->except(['_token']);
        try {
            $isSaved = Category::create($data);
            if (!empty($isSaved->id)) {
               return redirect($this->moduleRoute)->with("success", __($this->moduleName) . " " . __("admin/general.added_msg"));
            }
            return redirect($this->moduleRoute)->with("error", __("admin/general.default_error"));

        } catch (\Exception $e) {
            return redirect($this->moduleRoute)->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        View::share('FormName', "Edit Category");
        try {
            $result = $category;
            if($result) {
                return View::make("admin.general.edit", compact("result"));
            }
            return redirect($this->moduleRoute)->with("error", __("admin/general.sorry") . ", " . __($this->moduleName) . " " . __("admin/general.not_found"));
        } catch (\Exception $e) {
            return redirect($this->moduleRoute)->with('error', $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->except(['_token']);
        $result = [];
        try {
            $update = $category;
            if ($update) {
                $isSaved = $update->update($data);
                if ($isSaved) {
                    return redirect($this->moduleRoute)->with("success", __($this->moduleName) . " " . __("admin/general.updated_msg"));
                }
            } else {
                return redirect($this->moduleRoute)->with("error", __("admin/general.default_error"));
            }

        } catch (\Exception $e) {
            return redirect($this->moduleRoute)->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $result = array();
        try {
            if ($category) {
                $category->delete();
                $result['message'] = __($this->moduleName) . " " . __("admin/general.deleted_msg");
                $result['code'] = 200;
            } else {
                $result['code'] = 400;
                $result['message'] = __("admin/general.default_error");
            }
        } catch (\Exception $e) {
            $result['message'] = $e->getMessage();
            $result['code'] = 400;
        }
        return response()->json($result, $result['code']);
    }
}
