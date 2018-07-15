<?php

namespace App\Http\Controllers\TourPacket;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TourPacket;
use Carbon\Carbon;
use DB;

class PostController extends Controller
{
    public function index()
    {
     
    }

    public function create(Request $request)
    {
        $data = new TourPacket;
        $data->name = $request->input('name');
        $data->destination_id = $request->input('destination_id');
        $data->price = $request->input('price');
        $data->slot = $request->input('slot');
        $data->start_date = $request->input('start_date');
        $data->end_date = $request->input('end_date');
        $data->notes = $request->input('notes');
        $data->save();
        return redirect('tourpacket/new');
    }

    public function single($id)
    {
    }

    public function edit($id)
    {
    }
}
