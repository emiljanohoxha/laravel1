 @extends('layouts.app')



@section('content')
<div class="container p-5">

<div class="row">
            <div class="col-6 ">
                <form action="{{ route('category.create') }}">
                    <button type="submit" class="btn btn-secondary">Create Category Configuration Key</button>
                </form>
            </div>
            <div class="row mt-3">

<table class="table caption-top">
  <caption>List of keys</caption>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EXTRA</th>
      <th scope="col">EDIT</th>
    </tr>
  </thead>
  <tbody>

                        @foreach ($category as $cat)
                            <tr>
                                <td>{{ $cat->id }}</td>
                                <td>{{ $cat->name }}</td>
                                <td>{{ $cat->extra }}</td>
                                <td>

                                    <a href="{{ url('edit/'.$cat->id) }}" ><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 19 19" height="19px" id="Layer_1" version="1.1" viewBox="0 0 19 19" width="19px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M8.44,7.25C8.348,7.342,8.277,7.447,8.215,7.557L8.174,7.516L8.149,7.69   C8.049,7.925,8.014,8.183,8.042,8.442l-0.399,2.796l2.797-0.399c0.259,0.028,0.517-0.007,0.752-0.107l0.174-0.024l-0.041-0.041   c0.109-0.062,0.215-0.133,0.307-0.225l5.053-5.053l-3.191-3.191L8.44,7.25z" fill="#231F20"/><path d="M18.183,1.568l-0.87-0.87c-0.641-0.641-1.637-0.684-2.225-0.097l-0.797,0.797l3.191,3.191l0.797-0.798   C18.867,3.205,18.824,2.209,18.183,1.568z" fill="#231F20"/><path d="M15,9.696V17H2V2h8.953l1.523-1.42c0.162-0.161,0.353-0.221,0.555-0.293   c0.043-0.119,0.104-0.18,0.176-0.287H0v19h17V7.928L15,9.696z" fill="#231F20"/></g></svg>
                                    </a>

                                    <a href="{{ route('category.destroy',['id'=>$cat->id]) }}" onclick="return confirm('are you positive?')" > <?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new -0.5 -0.7 31 32" height="32px" version="1.1" viewBox="-0.5 -0.7 31 32" width="31px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs/><path clip-rule="evenodd" d="M29.8,8.3C29.8,8.3,29.8,8.3,29.8,8.3L29.8,8.3  C29.8,8.3,29.8,8.3,29.8,8.3z M27.8,10.3h-1v18c0,1.1-0.9,2-2,2h-19c-1.1,0-2-0.9-2-2v-18H2c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2h6.9  C9.2,2.8,12,0,15.4,0s6.3,2.8,6.5,6.3h5.8c1.1,0,2,0.9,2,2C29.8,9.4,28.9,10.3,27.8,10.3z M15.4,3.2c-1.8,0-3.2,1.3-3.4,3.1h6.9  C18.6,4.6,17.2,3.2,15.4,3.2z M23.8,11.5c0-0.5-0.2-0.9-0.5-1.1H7.3C7,10.6,6.8,11,6.8,11.5v14.7c0,0.9,0.7,1.6,1.6,1.6h13.8  c0.9,0,1.6-0.7,1.6-1.6V11.5z M18.8,12.3h3v14h-3V12.3z M13.8,12.3h3v14h-3V12.3z M8.8,12.3h3v14h-3V12.3z M0,8.3C0,8.3,0,8.3,0,8.3  C0,8.3,0,8.3,0,8.3L0,8.3z" fill="#0D0D0D" fill-rule="evenodd"/></svg>

                                    </a>

                                     </td>

                            </tr>
                        @endforeach
                        @if(Session::has('errorMessage'))
                        <div class="alert alert-danger"> {{ Session::get('errorMessage') }}</div>
                      @endif
  </tbody>
</table>
</div>
</div>

<div class="d-flex justify-content-first mt-2" >{!! $category->links() !!}</div>

@endsection



