<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume; // Make sure to import your Resume model

class ResumeController extends Controller
{
    public function index()
    {
        $resume = Resume::first(); // Fetch the first resume record from the database

        return view('resume', compact('resume')); // Pass the resume data to the view
    }
}


