<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\user_borrows;
use Carbon\Carbon;
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
            "collections" => Book::where('status', '=', '1')->get(),
            "userborrows" => user_borrows::latest()->get(),
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
        $user = User::find($request->userid);
        $book = Book::find($request->bookid);
        $userborrow = user_borrows::create([
            'user_id' => $user->id,
            'book_id' => $book->id,
            'title' => $request->title,
            'borrowed_at' => Carbon::now(),
            'borrowed_end' => Carbon::now()->addDays(7)
        ]);

        $book->update([
            'status' => '0'
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
    public function update(Request $request, $id,)
    {
        //
        // $book = Book::find($user_borrows->book_id);
        $userborrow = user_borrows::find($id);
        $bookid = Book::find($userborrow->book_id);
        // dd($userborrow);
        $bookid->update([
            'status' => '1'
        ]);
        

        return redirect()->route('userborrow.index');
    
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_borrows  $user_borrows
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $userborrow = user_borrows::find($id);
        $bookid = Book::find($userborrow->book_id);
        // dd($userborrow);
        $bookid->update([
            'status' => '1'
        ]);
        // dd($userborrowid);

        $userborrow->delete();
        // $bookid = Book::find($userborrow->book_id);
        // $bookid->update([
        //     'status' => '1'
        // ]);
        
        return redirect()->route('userborrow.index');
        
    }

    
}
