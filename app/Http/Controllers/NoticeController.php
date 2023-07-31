<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function index()
    {
        $notices = Notice::latest('published_at')->get();

        return view('notices.index', compact('notices'));
    }

    public function create()
    {
        return view('notices.create');
    }

    public function store(Request $request)
    {
        $notice = new Notice();
        $notice->title = $request->input('title');
        $notice->content = $request->input('content');
        $notice->published_at = now();
        $notice->save();

        return redirect()->route('notices.index')->with('success', 'Notice created successfully!');
    }
}
