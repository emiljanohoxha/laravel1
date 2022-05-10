@extends('layouts.app')

@section('content')

<h1>Configuration Key Creation</h1>

<div class="container">
    <div class="row mt-4">
        <h3>CREATE CATEGORY CONFIGURATION KEY</h3>
    </div>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group mt-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Key name" name="name" >
            @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            {{$message}}
                        </span>
                        @enderror
          </div>
          <div class="form-group mt-2">
            <label for="extra">Extra</label>
            <input type="text" class="form-control" id="extra" placeholder="Extras Json Format" name="extra" value="{{old('extra')}}">
            @error('extra')
                        <span class="invalid-feedback d-block" role="alert">
                            {{$message}}
                        </span>
                        @enderror

                        @if(Session::has('errorMessageDuration'))
                        <div class="alert alert-danger"> {{ Session::get('errorMessageDuration') }}</div>
                      @endif
          </div>
          <button type="submit" class="btn btn-primary mt-3">Save</button>


    </form>
</div>



@endsection
