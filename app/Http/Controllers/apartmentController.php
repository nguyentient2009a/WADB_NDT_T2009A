<?php

namespace App\Http\Controllers;

use App\Models\apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apartmentController extends Controller
{
    //
    public function index(){
        $new = DB::table('apartments')->select('*');
        $new = $new->get();
        $pageName = 'Ten trang - new';
        $list = apartment::paginate(6);
        return view('apartment.index', compact('new', 'pageName'), ['list'=>$list]);
    }
}
