<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/posts')->body();
        $data = json_decode($data);
        return view('admin.fakedata.index', ['data'=>$data]);
    }


}
