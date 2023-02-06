<?php

namespace App\Http\Controllers\User;

use App\Events\CaseCreatedEvent;
use App\Http\Controllers\Controller;
use App\Jobs\CaseEmailJob;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class CaseController extends Controller
{
    public function create_case(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'case_title' => 'required|string',
            'case_description' => 'required'
        ]);

        if ($validator->passes()) {

            event(new CaseCreatedEvent($request->case_title,$request->case_description,Auth::user()->id,Auth::user()->first_name));
            Alert::success('Case Created', 'Case Created successfully');
            dispatch(new CaseEmailJob());
            return redirect()->back();
        }
    }

    public function getCaseList(Request $request)
    {

        $draw = $request->draw;
        $limit = $request->length;
        $search_value = addslashes($request->search['value']);
        $start = $request->start;
        $order_by = $request->order[0]['dir'];
        $id = Auth::user()->id;

        $sql = "SELECT
        a.*
        FROM cases a
        where a.user_id='" . $id . "' ";
        if ($search_value) {
            $sql .= "and a.case_title like '{$search_value}%' ";
        }
        $sql .= "order by a.id {$order_by} limit {$start}, {$limit}";
        $data = DB::select($sql);

        $rows = count($data);
        $sql = "select count(a.id) as total from cases a where a.user_id='" . $id . "'";
        if ($search_value) {
            $sql .= " and a.case_title like '{$search_value}%' ";
        }
        $total = DB::select($sql);
        $dataArray = array();
        foreach ($data as $thisData) {
            $dataArray[] = array(
                $thisData->id,
                $thisData->case_title,


                '<a onclick="editCase('.$thisData->id.')" data-toggle="modal" data-target="#edit-notes-modal"  class="fas fa-pen ms-text-primary"><i class="la la-pen"></i></a>
                <a href="/get-case-details/' . $thisData->id . '"  class="fas fa-paper-plane ms-text-primary"><i class="la la-pen"></i></a>
                <a href="/user-case-delete/' . $thisData->id . '" class="far fa-trash-alt ms-text-danger ml-1" onclick="return confirm(\'Are you confirm to delete?\')"><i class="la la-trash"></i></a>'
            );
        }
        echo '{
            "draw":' . $draw . ',
            "recordsTotal": ' . $total[0]->total . ',
            "recordsFiltered": ' . $total[0]->total . ',
            "data": ' . json_encode($dataArray) . '
          }';
    }
    public function getDetails($id)
    {

        $getCaseDetails = DB::table('cases')->where('id', '=', $id)->get();
        $caseFiles = DB::table('case_files')->where('case_id', '=', $id)->get();

        $uploadedFiles = [
            "Verkbeiðni" => 'no',
            "Tjónstilkynning" => 'no',
            "Lögregluskýrslur" => 'no',
            "Áverkavottorð" => "no",
            "Skýrsla sjúkraþjálfara" => "no",
            "Matsbeiðni" => "no",
            "Útlagður kostnaður" => "no",
            "Matsgerð" => "no",
            "Lokauppgjör" => "no",

        ];

        foreach ($caseFiles as $item) {


            $uploadedFiles[$item->meta] = "yes";
        }







       // $lattestCase = DB::table('cases')->where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->get();
        $time_line = DB::table('timeline')->where('case_id','=',$id)->get();


        return view('Admin.User.dashboard', ['details' => $getCaseDetails, 'case_files' => $uploadedFiles,'time_line'=>$time_line,'id'=>$id]);
    }

    public function assaigned_cases(Request $request)
    {
        $draw = $request->draw;
        $limit = $request->length;
        $search_value = addslashes($request->search['value']);
        $start = $request->start;
        $order_by = $request->order[0]['dir'];
        $id = Auth::user()->id;

        $sql = "SELECT
        a.*,b.first_name,b.email,b.phone_number
        FROM cases a inner Join users b on a.user_id = b.id
        where a.employee_id='" . $id . "' ";
        if ($search_value) {
            $sql .= "and a.case_title like '{$search_value}%' or b.first_name like '{$search_value}%' or a.id like '{$search_value}%' or b.email like '{$search_value}%' or b.phone_number like '{$search_value}%' ";
        }
        $sql .= "order by a.case_title {$order_by} limit {$start}, {$limit}";
        $data = DB::select($sql);

        $rows = count($data);
        $sql = "select count(a.id) as total from cases a inner Join users b on a.user_id = b.id where a.employee_id='" . $id . "'";
        if ($search_value) {
            $sql .= " and a.case_title like '{$search_value}%' or b.first_name like '{$search_value}%' or a.id like '{$search_value}%' or b.email like '{$search_value}%' or b.phone_number like '{$search_value}%'";
        }
        $total = DB::select($sql);
        $dataArray = array();
        foreach ($data as $thisData) {
            $dataArray[] = array(
                $thisData->id,
                $thisData->case_title,
                $thisData->first_name,
                $thisData->email,
                $thisData->phone_number,


                '<a href="/case-edit/' . $thisData->id . '"  class="fas fa-pen ms-text-primary"><i class="la la-pen"></i></a>
                <a  onclick="showDetails('.$thisData->id.')" class="fas fa-paper-plane ms-text-primary"><i class="la la-pen"></i></a>
                <a href="/case/delete/' . $thisData->id . '" class="far fa-trash-alt ms-text-danger ml-1" onclick="return confirm(\'Are you confirm to delete?\')"><i class="la la-trash"></i></a>'
            );
        }
        echo '{
            "draw":' . $draw . ',
            "recordsTotal": ' . $total[0]->total . ',
            "recordsFiltered": ' . $total[0]->total . ',
            "data": ' . json_encode($dataArray) . '
          }';
    }

    public function case_manage(){
        return view('Admin.Case-management.case');
    }

    public function Admin_case_list(Request $request){
        $draw = $request->draw;
        $limit = $request->length;
        $search_value = addslashes($request->search['value']);
        $start = $request->start;
        $order_by = $request->order[0]['dir'];
        $id = Auth::user()->id;

        $sql = "select a.case_title,a.id,a.description,a.created_at,b.first_name,b.email,b.phone_number,b.last_name as user_lastName,c.first_name as employee_firstName,c.last_name as employee_last_name from cases a LEFT join users b on a.user_id = b.id LEFT Join users c on a.employee_id = c.id ";
        if ($search_value) {
            $sql .= "where a.case_title like '{$search_value}%' or a.id like '{$search_value}%' or b.first_name like '{$search_value}%' or b.email like '{$search_value}%' or b.phone_number like '{$search_value}%' ";
        }
        $sql .= "order by a.case_title {$order_by} limit {$start}, {$limit}";
        $data = DB::select($sql);

        $rows = count($data);
        $sql = "select count(a.id) as total from cases a LEFT join users b on a.user_id = b.id
        LEFT Join users c on a.employee_id = c.id";
        if ($search_value) {
            $sql .= " where a.case_title like '{$search_value}%' or a.id like '{$search_value}%' or b.first_name like '{$search_value}%' or b.email like '{$search_value}%' or b.phone_number like '{$search_value}%' ";
        }
        $total = DB::select($sql);
        $dataArray = array();
        foreach ($data as $thisData) {
            $employee_name='';
            if($thisData->employee_firstName){
                $employee_name = $thisData->employee_firstName." ".$thisData->employee_last_name;
            }else{
                $employee_name='<i style="cursor:pointer" onclick="setId('.$thisData->id.')" data-toggle="modal" data-target="#notes-modal" class="flaticon-pencil"></i>';
            }
            $dataArray[] = array(
                $thisData->id,
                $thisData->case_title,
                $thisData->phone_number,
                $thisData->email,
                $employee_name,



                '<a href="/case-edit/' . $thisData->id . '"  class="fas fa-pen ms-text-primary"></a>
                <a  onclick="showDetails('.$thisData->id.')" class="fas fa-paper-plane ms-text-primary"><i class="la la-pen"></i></a>
                <a href="/case/delete/' . $thisData->id . '" class="far fa-trash-alt ms-text-danger ml-1" onclick="return confirm(\'Are you confirm to delete?\')"></a>'
            );
        }
        echo '{
            "draw":' . $draw . ',
            "recordsTotal": ' . $total[0]->total . ',
            "recordsFiltered": ' . $total[0]->total . ',
            "data": ' . json_encode($dataArray) . '
          }';
    }

    public function edit_Case_Admin($id){

        $findCase = DB::table('cases')->where('id','=',$id)->get();
        $employees = DB::select('SELECT users.first_name,users.last_name,users.id FROM `users` WHERE find_in_set(2,`roles`)');

        $case_files = DB::table('case_files')->join('users','users.id','=','case_files.employee_id')
        ->select('case_files.id','case_files.case_id','case_files.created_at','case_files.meta','case_files.employee_id','users.first_name','users.last_name')
        ->where('case_id','=',$id)->get();

        $timeLineData = DB::table('timeline')
        ->where('case_id','=',$id)
        ->get();

        $timeLine = [
            "Mál stofnað" =>"",
            "Tjónsstilkynning send"=>"",

            "Lögregluskýrsla barst" => "",
            "Áverkavottorð sent" => "",

        ];

        foreach($timeLineData as $item){
                $timeLine[$item->title] = $item->approve_date;
        }

        $uploadedFiles = [
            "Verkbeiðni" => 'no',
            "Tjónstilkynning" => 'no',
            "Lögregluskýrslur" => 'no',
            "Áverkavottorð" => "no",
            "Skýrsla sjúkraþjálfara" => "no",
            "Matsbeiðni" => "no",
            "Útlagður kostnaður" => "no",
            "Matsgerð" => "no",
            "Lokauppgjör" => "no",

        ];
        $approvedBy = [
            "Verkbeiðni" => '',
            "Tjónstilkynning" => '',
            "Lögregluskýrslur" => '',
            "Áverkavottorð" => "",
            "Skýrsla sjúkraþjálfara" => "",
            "Matsbeiðni" => "",
            "Útlagður kostnaður" => "",
            "Matsgerð" => "",
            "Lokauppgjör" => "",

        ];
        $created_at = [
            "Verkbeiðni" => '',
            "Tjónstilkynning" => '',
            "Lögregluskýrslur" => '',
            "Áverkavottorð" => "",
            "Skýrsla sjúkraþjálfara" => "",
            "Matsbeiðni" => "",
            "Útlagður kostnaður" => "",
            "Matsgerð" => "",
            "Lokauppgjör" => "",

        ];

        foreach($case_files as $item){
                $uploadedFiles[$item->meta] = "yes";
                $approvedBy[$item->meta] = $item->first_name.' '. $item->last_name;
                $created_at[$item->meta] = $item->created_at;
        }



        return view('Admin.Case-management.edit',['case'=>$findCase,'employees'=>$employees,'case_files'=>$uploadedFiles,'approves'=>$approvedBy,'creates'=>$created_at,'timelines'=>$timeLine]);
    }

    public function update_Case_Admin(Request $request,$id){
        $caseUpdate = DB::table('cases')->where('id','=',$id)->update([
            'case_title'=>$request->case_title,
            'description'=>$request->description,
            'employee_id'=>$request->employee,
            'case_score'=>$request->score,
        ]);






        for($i = 0; $i < count($request->title); $i++){
            $findData = DB::table('timeline')->where('title','=',$request->title[$i])->where('case_id','=',$id)->first();
           if(!isset($findData->id)){
                $insert = DB::table('timeline')->insert([
                    "case_id"=>$id,
                    "title"=>$request->title[$i],
                    "approve_date"=>$request->date[$i]
                ]);
           }else{
                $update = DB::table('timeline')->where('title','=',$request->title[$i])->where('case_id','=',$id)
                ->update([
                    "case_id"=>$id,
                    "title"=>$request->title[$i],
                    "approve_date"=>$request->date[$i]

                ]);
           }
        }

              Alert::success('Case Updated', 'Case Updated successfully');
         return redirect()->back();

    }
    public function case_delete($id){
        $delete = DB::table('cases')->where('id','=',$id)->delete();
        Alert::success('Case Trashed', 'Case Deleted successfully');
        return redirect()->back();
    }

    public function assign_case_api(Request $request){
        $update = DB::table('cases')->where('id','=',$request->case_id)->update([
                "employee_id"=>$request->employee_id
        ]);
        return response()->json('updated successfully');
    }

    public function update_case_file_list(Request $request, $id){
        if($request->status === false){
            $findAndDelete = DB::table('case_files')->where('case_id','=',$request->case_id)
            ->where('meta','=',$request->case_file)
            ->delete();
        }else{
            $insert = DB::table('case_files')->insert([
                "case_id"=>$request->case_id,
                "meta"=>$request->case_file,
                "employee_id"=>$request->approved_by
            ]);
        }
    }

    public function get_uploaded_files($page,$user_id){
        $limit = 1;
        $offset = $page * $limit ;
        $count =DB::table('file_uploads')->where('user_id','=',$user_id)->count();
        $user = DB::select('select * from file_uploads where user_id = '.$user_id.'  LIMIT '.$offset.','.$limit.'');

        //
        return response()->json(['uploaded_files'=>$user,'total'=>$count]);
    }

    public function user_case_delete($id){
        $delete = DB::table('cases')->where('id','=',$id)->delete();
        Alert::success('Case Deleted', 'Case Deleted successfully');
        return redirect()->back();
    }

    public function edit_case_details_api($id){
        $findCase = DB::table('cases')->where('id','=',$id)->first();
        return response()->json($findCase);
    }
    public function update_case_details_api(Request $request,$id){
        $update = DB::table('cases')->where('id','=',$id)->update([
            "case_title"=>$request->case_title,
            "description"=>$request->case_description,
            "updated_at"=>Carbon::now()
        ]);


    }

    public function case_details_employee($id){
        $sql = 'select a.case_title,a.description,a.case_score,a.created_at,b.first_name as user_first,b.last_name as user_last,c.first_name,c.last_name from cases a LEFT JOIN users b on a.user_id = b.id LEFT JOIN users c on a.employee_id = c.id where a.id = '.$id.'';
        $data = DB::select($sql);
        return response()->json($data);
    }
}
