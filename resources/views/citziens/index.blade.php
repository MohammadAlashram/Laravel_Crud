@extends('citziens.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('citziens.create') }}"> Create New Citzien</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>City</th>
            <th>NID</th>
            <th>Mobile</th>
            <th>Address</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($citziens as $citzien)
        <tr>
            <td>{{ $citzien->id}}</td>
            <td>{{ $citzien->citzien_full_name}}</td>
            <td>{{ $citzien->citzien_gender}}</td>
            <td>{{ $citzien->citzien_city}}</td>
            <td>{{ $citzien->citzien_nid}}</td>
            <td>{{ $citzien->citzien_mobile}}</td>
            <td>{{ $citzien->citzien_address}}</td>
            <td>
                <form action="{{ route('citziens.destroy',$citzien->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('citziens.show',$citzien->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('citziens.edit',$citzien->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
@endsection