<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DynamicDependentcityhospital extends Controller
{
    public function index()
    {
        $city_list = DB::table('city_hospital')
                    ->groupBy('city')
                    ->get();
                    
        return view('create')->with('city_list',$city_list);
    }

    public function fetch(Request $request)
    {
        $select = $request->get('select');
        $value = $request->get('value');
        $dependent = $request->get('dependent');
        $data = DB::table('city_hospital')
                ->where($select, $value)
                ->groupBy($dependent)
                ->get();
        $output = '<option value="">選擇醫院 '.ucfirst($dependent).'</option>';
        foreach($data as $row)
        {
            $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
        }
        echo $output;
    }
}

?>