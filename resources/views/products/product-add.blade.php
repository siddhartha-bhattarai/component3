@extends('layouts.master')

@section('title')
Create Products
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-header">
                        <h3>Create Products</h3>
                    </div>
                    <div class="card-body"> 
                        <div class="row">
                            <div class="col-md-6">
                                 <form action="/product-create" method="POST">
                                     {{csrf_field() }}
                                     {{ method_field('PUT') }}

                                    <div class="form-group">
                                         <label>Product Name</label>
                                        <input type="text" name="title" value="" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                         <label>First Name</label>
                                        <input type="text" name="firstname" value="" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                         <label>Last Name</label>
                                        <input type="text" name="mainname" value="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                         <label>Price</label>
                                        <input type="text" name="price" value="" class="form-control">
                                    </div>  
                                    <div class="form-group">
                                         <label>Type</label>
                                        <!-- <input type="text" name="type" value="" class="form-control"> -->
                                        <select name="type" class="form-control">
                                            <option value="book">Book</option>
                                            <option value="cd">CD</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                         <label>Play/length</label>
                                        <input type="text" name="playlength" value="" class="form-control">
                                    </div> 
                                    
                                     <button type="submit" class="btn btn-success">Add</button>
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