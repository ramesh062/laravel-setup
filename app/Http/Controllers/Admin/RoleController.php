<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->moduleName = "Roles";
        $this->moduleRoute = url(env("ADMIN_PREFIX","admin").'/roles');
        $this->moduleView = "admin.role";
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
        $data['title'] = 'Manage Roles';
        if($request->ajax()){
            return $this->getDatatable($request);
        }
        return view('admin.role.index', $data);
    }

    public function getDatatable(Request $request)
    {
        $result = Role::select('id','name','created_at');
        if ($request['search']['value'] != '') {
            $search = $request['search']['value'];

            $result = $result->where(function ($where) use ($search) {
                $where->where('id', 'like', "%$search%")
                    ->orWhere('name', 'like', "%$search%");
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
    public function create(Request $request)
    {
        View::share('FormName', "Create Role");
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
        $this->validate($request,[
            'name' => 'required|max:191|unique:roles,name',
        ]);

        $data = $request->except(['_token']);

        try {
            $data['permissions'] = (isset($request->access)) ? explode(',',join(',',$request->access)) : [];
            $isSaved = Role::create($data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        View::share('FormName', "Edit Role");
        try {
            if($role) {
                $result=$role;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request,[
            'name' => 'required|max:191|unique:roles,name,'.$role->id,
        ]);

        $data = $request->except(['_token']);
        $result = [];
        try {
            if ($role) {
                $data['permissions'] = (isset($request->access)) ? explode(',',join(',',$request->access)) : [];
                $isSaved = $role->update($data);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $result = array();
        try {
            if ($role) {
                $role->delete();
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
