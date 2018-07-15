<?php

namespace App\Http\Controllers\TourPacket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destination;
use Carbon\Carbon;
use DB;

class ViewController extends Controller
{
    public function index()
    {
     
    }

    public function create()
    {
        $data['destination'] = Destination::get();
        $data['sidebar_active'] = "A";
        return view('tourpacket.create',$data);
    }

    public function single($id)
    {
    }

    public function edit($id)
    {
    }
}
