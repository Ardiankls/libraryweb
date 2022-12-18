{{-- @dd($users) --}}

@extends('layouts.main')
@section('content')
    <h1>{{ $title }}</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        New Borrow
    </button>

    <table class="table mt-3">
        <thead>

            <tr>
                <th scope="col">id</th>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
                <th scope="col">Borrowed Date</th>
                <th scope="col">Return Date</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userborrows as $ub)
                <tr>
                    <th scope="row">{{ $ub->id }}</th>
                    <td>{{ $ub->borrowed->title }}</td>
                    <td>{{ $ub->borrows->firstname }} {{ $ub->borrows->lastname }}</td>
                    <td>{{ $ub->borrowed_at }} </td>
                    <td>{{ $ub->borrowed_end }} </td>

                    <td>
                        @if ($ub->borrowed->status == '1')
                            available
                        @else
                            borrowed
                        @endif
                    </td>
                    <td>
                        
                        <form action="{{ route('userborrow.update', $ub) }}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="PATCH">
                            <button class="btn btn-primary" type="submit" onclick="this.disabled=true; this.form.submit();">returned</button>
                        </form>
                        <form class="mt-3" action="{{ route('userborrow.destroy', $ub) }}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="PATCH">
                            <button class="btn btn-danger" type="submit" onclick="this.disabled=true; this.form.submit();">delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('userborrow.store') }}" id="dynamic" method="post">
                    @csrf
                    <div class="modal-body">
                        <label for="exampleDataList" class="form-label">Name</label>
                        <div class="form-group">
                            <select name="userid" class="custom-select">

                                @foreach ($users as $user)
                                    {{-- <option value="{{ $package->id }}">{{ $package->description }}</option> --}}
                                    {{-- <option value="">--Borrower Name--</option> --}}
                                    <option value="{{ $user->id }}">{{ $user->firstname }} {{ $user->lastname }}
                                    </option>
                                    {{-- <option value="3">3</option> --}}
                                @endforeach
                            </select>
                        </div>
                        <label for="exampleDataList" class="form-label">Book Title</label>
                        <div class="form-group">
                            <select name="bookid" class="custom-select">
                                @foreach ($collections as $book)
                                    {{-- <option value="{{ $package->id }}">{{ $package->description }}</option> --}}
                                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
