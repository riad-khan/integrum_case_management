<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserManagementController extends Controller
{
    public function index(){
        return view('Admin.user_management');
    }

    public function get_user_list(Request $request)
    {
        $draw = $request->draw;
        $limit = $request->length;
        $search_value = addslashes($request->search['value']);
        $start = $request->start;
        $order_by = $request->order[0]['dir'];
        $id = Auth::user()->id;

        $sql = "select a.*,GROUP_CONCAT(b.role_name) as role from users a join roles b on find_in_set(b.id,a.roles) ";

        if ($search_value) {
            $sql .= "where a.first_name like '{$search_value}%' or a.last_name like '{$search_value}%' or a.email like '{$search_value}%'";
        }
        $sql .= "GROUP by a.id order by a.first_name {$order_by} limit {$start}, {$limit}";
        $data = DB::select($sql);

        $rows = count($data);
        $sql = "select count(a.id) as row ,GROUP_CONCAT(b.role_name) as role 
        from users a join roles b on 
        find_in_set(b.id,a.roles)";
        if ($search_value) {
            $sql .= "where a.first_name like '{$search_value}%' or a.last_name like '{$search_value}%' or a.email like '{$search_value}%'";
        }
        $sql .= "GROUP by a.id";
        $total = DB::select($sql);
        $dataArray = array();
        foreach ($data as $thisData) {
            $dataArray[] = array(
                $thisData->id,
               
                $thisData->first_name,
                $thisData->last_name,
                $thisData->email,
                $thisData->role,


                '<a href="/edit/user-permissions/'. $thisData->id. '"  class="fas fa-paper-plane ms-text-primary"><i class="la la-pen"></i></a>
                <a href="/admin/faq/delete/' . $thisData->id . '" class="far fa-trash-alt ms-text-danger ml-1" onclick="return confirm(\'Are you confirm to delete?\')"><i class="la la-trash"></i></a>'
            );
        }
        echo '{
            "draw":' . $draw . ',
            "recordsTotal": ' . $total[0]->row . ',
            "recordsFiltered": ' . $total[0]->row . ',
            "data": ' . json_encode($dataArray) . '
          }';
    }

    public function edit($id){
        $findUser = DB::table('users')->where('id','=',$id)->get();
        $roles = DB::table('roles')->get();
        return view("Admin.edit-user",["details"=>$findUser,'role'=>$roles]);
    }

    public function update(Request $request, $id){
        $data = [];
    $data['first_name'] = $request->first_name;
    $data['last_name'] = $request->last_name;
    $data['date_of_birth'] = $request->date_of_birth;
    $data['language'] = $request->language;
    $data['website'] = $request->website;
    $data['phone_number'] = $request->phone_number;
    $data['location'] = $request->location;
    $data['email'] = $request->email;
    $data['roles'] = implode(',', (array) $request->input('roles', []));

    if($request->password){
        $data['password'] = Hash::make($request->password);
    }

    $update_profile = DB::table('users')->where('id','=',$id)->update($data);
    Alert::success('Case Created', 'Case Created successfully');
    return redirect()->to('/user-management');
    }
}

//STRICT_TRANS_TABLES,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION
