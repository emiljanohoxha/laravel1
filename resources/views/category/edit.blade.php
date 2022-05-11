@extends('layouts.app')

@section('content')
    <h1 style="display: flex;justify-content: center;">Edit Category Configuration Key </h1>


    <div class="container" style="background-color: #445893;
            color: white; padding: 25px;">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card">
                    <div class="card-header" style="background-color: #445893;
                    color: white; padding: 25px; border: 2px solid;">
                        <h4>Update Category Key
                            <a href="{{ url('/category') }}" class="btn btn-danger float-end"
                                style="background-color: #445893; border: 2px solid;">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body" style="background-color: #445893;
                    color: white; padding: 25px;">

                        <form action="{{ route('category.update') }}" method="POST">
                            <input type="hidden" name="id" value="{{ $category->id }}">
                            {{-- @dd($category); --}}
                            @csrf
                            @method('PUT')


                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" readonly disabled value="{{ $category->name }}"
                                    class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Extra</label>
                                <input type="text" name="extra" value="{{ $category->extra }}" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3"
                                style="background-color: #445893; border: 2px solid;">Update</button>


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
