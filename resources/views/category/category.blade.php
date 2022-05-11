@extends('layouts.app')

@section('content')
    <h1 style="display: flex;justify-content: center;">Category Configuration Keys</h1>

    <div class="container p-5">

        <div class="row" style="background-color:#0f3445 ;padding: 30px">
            <div class="col-6 ">
                <form action="{{ route('category.create') }}">
                    <button type="submit" class="btn btn-secondary"
                        style="background-color: #0f3445;border: 2px solid;">Create Category
                        Configuration Key</button>
                </form>
            </div>

            <form action="">

                <div class="row">
                    <div class=" d-flex justify-content-end">
                        <input type="text" name="name" class="form-control" placeholder="search name" style="width: 25%">
                        <button type="submit" class="btn btn-secondary"
                            style="background-color: #0f3445;border: 2px solid;">{{ __('Search') }}</button>
                    </div>
            </form>

            <div class="row mt-3 " style="background: #268fb2; padding: 20px;">

                <table class="table caption-top" style="font-size: large;">
                    <caption style="color:black; font-style: italic; font-size: larger;">List of keys</caption>
                    <thead>
                        <tr style="color: black">
                            <th scope="col">ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EXTRA</th>
                            <th scope="col">EDIT</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($category as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->extra }}</td>
                                <td>

                                    <a href="{{ url('edit/' . $cat->id) }}">
                                        <ion-icon name="create-outline" style="color: black; font-size:25px"></ion-icon>
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ route('category.destroy', ['id' => $cat->id]) }}" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <ion-icon name="archive-outline" style="color: black; font-size:25px">
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel" style="color: red">Are you
                                                sure you want to delete it?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>

                                        <div class="modal-footer">
                                            <form action="{{ route('category.destroy', ['id' => $cat->id]) }}">

                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        @if (Session::has('errorMessage'))
                            <div class="alert alert-danger"> {{ Session::get('errorMessage') }}</div>
                        @endif

                        @if (Session::has('successMessage'))
                            <div class="alert alert-danger"> {{ Session::get('successMessage') }}</div>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-first mt-2">{!! $category->links() !!}</div>
    @endsection
