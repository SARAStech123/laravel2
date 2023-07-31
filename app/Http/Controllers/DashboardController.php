<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function graph()
    {
        $pendingSchools = User::where('approved', 'pending')->count();
        $approvedSchools = User::where('approved', 'approved')->count();
        $totalSchools = User::where('FName',null)->count();

        return view('/admin/AdminDashboard', compact('pendingSchools', 'approvedSchools', 'totalSchools'));
    }
}
