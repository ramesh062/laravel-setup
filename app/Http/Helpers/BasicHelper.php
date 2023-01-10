<?php
function adminAccessRoute($search) {
    $user=auth()->guard('admin')->user();
    $permissions=[];
    if($user->has("role")){
        if($user->role->slug=='superadmin'){
            return true;
        }
        if(!empty($user->role->permissions))
            $permissions=$user->role->permissions;
    }
    $list = collect(config('permissions'))->pluck('access')->flatten()->intersect($permissions);

    if (is_array($search)) {
        $list = $list->intersect($search);
        if(0 < count($list)){
            return true;
        }
        return  false;
    } else {

        return $list->search(function($item) use ($search) {
            if($search == $item){
                return true;
            }
            return false;
        });
    }
}
function getCurrentUserRole(){
    if(auth()->guard("admin")->check())
        return optional(auth()->guard("admin")->role)->slug;
}
?>
