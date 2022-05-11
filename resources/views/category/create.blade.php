@extends('layouts.app')

@section('content')
    <h1 style="display: flex;justify-content: center;">Create Category Configuration Keys</h1>

    <div class="container" style="background-color: #005053;
            color: white; padding: 25px;">

        <div class="row mt-4">
            <h3>CREATE CATEGORY CONFIGURATION KEY</h3>
        </div>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Key name" name="name">
                @error('name')
                    <span class="invalid-feedback d-block" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="extra">Extra</label>
                <input type="text" class="form-control" id="extra" placeholder="Extras Json Format" name="extra"
                    value="{{ old('extra') }}">
                @error('extra')
                    <span class="invalid-feedback d-block" role="alert">
                        {{ $message }}
                    </span>
                @enderror

                @if (Session::has('errorMessageDuration'))
                    <div class="alert alert-danger"> {{ Session::get('errorMessageDuration') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-secondary mt-3"
                style="background-color: #005053; border: 2px solid;">Save</button>


        </form>
    </div>
@endsection
