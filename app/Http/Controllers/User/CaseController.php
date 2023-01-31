<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
            $insert = DB::table('cases')->insert([
                'case_title' => $request->case_title,
                'description' => $request->case_description,
                'user_id' => Auth::user()->id,
            ]);
            Alert::success('Case Created', 'Case Created successfully');
            return redirect()->back()->with('File uploaded sucessfully');
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
        $sql .= "order by a.case_title {$order_by} limit {$start}, {$limit}";
        $data = DB::select($sql);

        $rows = count($data);
        $sql = "select count(a.id) as row from cases a where a.user_id='" . $id . "'";
        if ($search_value) {
            $sql .= " and a.case_title like '{$search_value}%' ";
        }
        $total = DB::select($sql);
        $dataArray = array();
        foreach ($data as $thisData) {
            $dataArray[] = array(
                $thisData->id,
                $thisData->case_title,


                '<a href="/get-case-details/' . $thisData->id . '"  class="btn btn-primary btn-sm text-white"><i class="la la-pen"></i>Show Details</a>
                <a href="/admin/faq/delete/' . $thisData->id . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you confirm to delete?\')"><i class="la la-trash"></i>Delete Case</a>'
            );
        }
        echo '{
            "draw":' . $draw . ',
            "recordsTotal": ' . $total[0]->row . ',
            "recordsFiltered": ' . $total[0]->row . ',
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
            $seperateHyphen = str_replace("-", " ", $item->meta);
            $words = explode(' ', $seperateHyphen); // Break words into array
            $noofwords = count($words); // Find out how many
            unset($words[$noofwords - 1]); // remove the last one (-1 because of zero-index)
            $newstring = implode(' ', $words); //put back together

            $uploadedFiles[$newstring] = "yes";
        }










        return view('Admin.User.dashboard', ['details' => $getCaseDetails, 'case_files' => $uploadedFiles]);
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
        a.*,b.first_name
        FROM cases a inner Join users b on a.user_id = b.id
        where a.employee_id='" . $id . "' ";
        if ($search_value) {
            $sql .= "and a.case_title like '{$search_value}%' or b.first_name like '{$search_value}%' ";
        }
        $sql .= "order by a.case_title {$order_by} limit {$start}, {$limit}";
        $data = DB::select($sql);

        $rows = count($data);
        $sql = "select count(a.id) as row from cases a inner Join users b on a.user_id = b.id where a.employee_id='" . $id . "'";
        if ($search_value) {
            $sql .= " and a.case_title like '{$search_value}%' or  b.first_name like '{$search_value}%' ";
        }
        $total = DB::select($sql);
        $dataArray = array();
        foreach ($data as $thisData) {
            $dataArray[] = array(
                $thisData->id,
                $thisData->case_title,
                $thisData->first_name,


                '<a href="/get-case-details/' . $thisData->id . '"  class="fas fa-paper-plane ms-text-primary"><i class="la la-pen"></i></a>
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
}
