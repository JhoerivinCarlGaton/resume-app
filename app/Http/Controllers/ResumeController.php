<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;

public function index()
{
    $resume = Resume::first(); // Fetch the first resume entry
    return view('resume', compact('resume'));
}

