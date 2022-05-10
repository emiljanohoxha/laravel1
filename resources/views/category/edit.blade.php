@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Update Category Key
                        <a href="{{ url('/category') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ route('category.update') }}" method="POST">
                        <input type="hidden" name="id" value="{{$category->id}}">
                        {{-- @dd($category); --}}
                        @csrf
                        @method('PUT')


                        <div class="form-group mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" readonly disabled value="{{$category->name}}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Extra</label>
                            <input type="text" name="extra" value="{{$category->extra}}" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
