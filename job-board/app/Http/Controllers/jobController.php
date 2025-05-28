<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class jobController extends Controller
{
    function index()
    {
        $data = Job::all();
        return view('job/index', ['data' => $data, 'name' => 'Yahia']);
    }
}
