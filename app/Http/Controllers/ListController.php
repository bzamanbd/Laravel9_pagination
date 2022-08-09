<?php
namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class ListController extends Controller
{
    function showData(){
        $data =  Member::paginate(4);
        return view('list', ['members'=>$data]);
    }
}