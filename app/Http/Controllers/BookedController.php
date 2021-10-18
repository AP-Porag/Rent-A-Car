<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookedController extends Controller
{
    public function booked()
    {
        $vehicles=Book::all();
        return view('admin/booked-vehicle',compact ('vehicles'));
    }
}
