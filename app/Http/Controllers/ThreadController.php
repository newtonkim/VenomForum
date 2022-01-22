<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads =Thread::paginate(15);

        return view('thread.index', compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('thread.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'subject' => 'required|min:5',
            'thread' => 'required|min:20',
            'type' => 'required'
        ]);

        // attach a user id when creating a thread

        auth()->user()->threads()->create($request->all());

        return back()->withMessage('Thread Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        return view('thread.show', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        return view('thread.edit', compact('thread'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        if (auth()->user()->id !== $thread->user_id) {
            abort(code: 401, message: "unauthorised");
        }

        $this->validate($request, [
            'subject' => 'required|min:10',
            'thread' => 'required|min:20',
            'type' => 'required'
        ]);



        $thread->update($request->all());

        return redirect()->route('thread.show', $thread->id)->withMessage('Thread Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        if (auth()->user()->id !== $thread->user_id) {
            abort(code: 401, message: "unauthorised");
        }

        $thread->delete();

        return redirect()->route('thread.index')->withMessage('Thread Deleted Successfully');
    }
}
