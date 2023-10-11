<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index(): View
    {
        $pemain= Pemain::latest()->paginate(11);
        return view('pemain.index', compact('pemain'));
    }
}
