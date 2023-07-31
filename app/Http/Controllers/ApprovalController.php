<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;//add

class ApprovalController extends Controller
{
    public function index()
    {
        $users = User::where('approved', '!=', 'approved')->get();

        return view('approvals.index', compact('users'));
    }

    public function update(Request $request, User $approval)
    {
        $request->validate([
            'approved' => 'required|in:approved,rejected',
        ]);
        if ($request->approved === 'rejected') {
            $approval->delete(); // Delete the approval from the database
            return redirect('Dashboard')->with('success', 'Approval rejected and removed successfully.');
        }
        // Calculate the expiration date after a year
        $expirationDate = Carbon::now()->addYear();   //add

        $approval->update([
            'approved' => $request->approved,
            'expiration_date' => $expirationDate,//add
        ]);

        return redirect('Dashboard')->with('success', 'Approval status updated successfully.');
    }
}
