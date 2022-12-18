<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\user_borrows;
use Illuminate\Http\Request;

class UserBorrowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view ('borrowlist', [
            "users" => User::all(),
            "title" => "borrowlist",
            "collections" => Book::all(),
            // ini buat sort terbaru
            // "posts" => Post::latest()->get()

            // return view('borrowlist')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = User::find($request->id);
        $book = Book::find($request->id);

        $userborrow = user_borrows::create([
            'user_id' => $user->id,
            'book_id' => $book->id,
            'title' => $request->title,
        ]);
        return redirect()->route('userborrow.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user_borrows  $user_borrows
     * @return \Illuminate\Http\Response
     */
    public function show(user_borrows $user_borrows)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_borrows  $user_borrows
     * @return \Illuminate\Http\Response
     */
    public function edit(user_borrows $user_borrows)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_borrows  $user_borrows
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_borrows $user_borrows)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_borrows  $user_borrows
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_borrows $user_borrows)
    {
        //
    }
}
