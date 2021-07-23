@extends('layouts.master')

@section('title')
        Products Details
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Products Details</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <th>
                        Title
                      </th>
                      <th>
                        Firstname
                      </th>
                      <th>
                        Lastname
                      </th>
                      <th>
                        Type
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        PlayLength
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                      @foreach($products as $product)
                      <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->firstname}}</td>
                        <td>{{$product->mainname}}</td>
                        <td>{{$product->type}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->pageslength}}</td>
                      </tr>
                      @endforeach
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')

@endsection