<?php

namespace App\Http\Controllers\Club;

class ClubController
{
    public function index()
    {
        return view('club.index');
    }

    public function add()
    {
        return view('club.add');
    }

    public function edit(){
            return view('club.edit');
    }
}
