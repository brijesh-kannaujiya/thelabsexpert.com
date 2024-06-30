<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Booking extends Controller
{
    public function __construct()
    {
        $this->middleware('can:view_booking',     ['only' => ['index', 'show', 'ajax']]);
        $this->middleware('can:create_booking',   ['only' => ['create', 'store']]);
        $this->middleware('can:edit_booking',     ['only' => ['edit', 'updae']]);
        $this->middleware('can:delete_booking',   ['only' => ['destroy', 'bulk_delete']]);
    }

    public function index()
    {
        return view('admin.bookings.index');
    }

    public function create()
    {
        return view('admin.bookings.create');
    }
}
