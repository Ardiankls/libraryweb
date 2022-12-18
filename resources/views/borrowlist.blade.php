{{-- @dd($users) --}}

@extends('layouts.main')
@section('content')
    <h1>{{ $title }}</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        New Borrow
    </button>

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
                            <select name="id" class="custom-select">
                                
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
                            <select name="id" class="custom-select">
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
