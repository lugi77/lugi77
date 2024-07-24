<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userSection = Auth::user()->section;

        switch ($userSection) {
            case 0:
                // Admin section
                return view('admin.admindashboard');

            case 1:
                // Budget section
                return view('section.budget');

            case 2:
                // Accounting section
                return view('section.accounting');

            case 3:
                // Cash section
                return view('section.cash');

            default:
                // Default view if section is not found or invalid
                return redirect()->back();
        }
    }
}
