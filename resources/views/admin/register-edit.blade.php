@extends('layouts.master')

@section('title')
        Edit Profile
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-header">
                        <h3>Edit Profile</h3>
                    </div>
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-md-6">
                                 <form action="/profile-update/{{ $users->id }}" method="POST">
                                     {{csrf_field() }}
                                     {{ method_field('PUT') }}

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="username" value="{{$users->name}}" class="form-control">
                                    </div> 
                                    
                                     <button type="submit" class="btn btn-success">Update</button>
                                    <a href="/rolereg" class="btn btn-danger">Cancel</a>
                                 </form>
                            </div>
                        </div>
                    </div> 
            </div>    
        </div>
    </div>    
</div>

@endsection 

@section('scripts')

@endsection