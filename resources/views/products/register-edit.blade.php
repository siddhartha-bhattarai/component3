@extends('layouts.master')

@section('title')
Edit Products Details
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-header">
                        <h3>Edit Products</h3>
                    </div>
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-md-6">
                                 <form action="/product-update/{{ $products->id }}" method="POST">
                                     {{csrf_field() }}
                                     {{ method_field('PUT') }}

                                    <div class="form-group">
                                         <label>Product Name</label>
                                        <input type="text" name="title" value="{{$products->title}}" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                         <label>First Name</label>
                                        <input type="text" name="firstname" value="{{$products->firstname}}" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                         <label>Last Name</label>
                                        <input type="text" name="mainname" value="{{$products->mainname}}" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                         <label>Price</label>
                                        <input type="number" name="price" value="{{$products->price}}" class="form-control">
                                    </div> 
                                    
                                     <button type="submit" class="btn btn-success">Update</button>
                                    <a href="/product-edit" class="btn btn-danger">Cancel</a>
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