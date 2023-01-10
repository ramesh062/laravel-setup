<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function __construct()
    {
        $this->moduleName = "Users";
        $this->moduleRoute = route('admin.users.index');
        $this->moduleView = "admin.users";
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
        $result = Admin::with('role:id,name')->select('admins.id','admins.name', 'admins.email','created_at','role_id');
        if ($request['search']['value'] != '') {
            $search = $request['search']['value'];

            $result = $result->where(function ($where) use ($search) {
                $where->where('admins.id', 'like', "%$search%")
                    ->orWhere('admins.name', 'like', "%$search%")
                    ->orWhere('admins.email', 'like', "%$search%")
                    ->orWhereRaw('admins.created_at', 'like', "%$search%");
            });
        }
        $result = $result->groupBy('admins.id')->get();
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
        View::share('FormName', "Create User");
        $roles=Role::select("id","name")->pluck("name","id")->all();
        return View::make("admin.general.create",compact("roles"));
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
            "email"=>"required|email",
            "password"=>"required",
            "role_id"=>"required",
        ],$request->all());

        $data = $request->except(['_token','confirm_password']);
        try {
            $data["password"]=Hash::make($data["password"]);
            $isSaved = Admin::create($data);
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
    public function edit($id)
    {
        View::share('FormName', "Edit User");
        try {
            $result = Admin::findOrFail($id);
            $roles=Role::select("id","name")->pluck("name","id")->all();
            if($result) {
                return View::make("admin.general.edit", compact("result","roles"));
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
    public function update(Request $request, $id)
    {
        $data = $request->except(['_token']);
        $result = [];
        try {
            $update = Admin::findOrFail($id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = array();
        try {
            $res = Admin::findOrFail($id);
            if ($res) {
                $res->delete();
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
