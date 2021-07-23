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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif  
              </div>
              <div class="add" style="float:right;">
                <a href="/product-create" class="btn btn-success">Add Product</a>
                </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Product id
                      </th>
                      <th>
                        Product Name
                      </th>
                      <th>
                        First Name
                      </th>
                      <th>
                        Main Name
                      </th>
                      <th>
                        Type
                      </th>
                      <th>
                        Price
                      </th>
                      <th>
                        Pages/Length
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                        @foreach ($products as $row)

                      <tr>
                          <td>{{ $row->id }}</td>
                          <td>{{ $row->title }}</td>
                          <td>{{ $row->firstname }}</td>
                          <td>{{ $row->mainname }}</td>
                          <td>{{ $row->type }}</td>
                          <td>{{ $row->price }}</td>
                          <td>{{ $row->pageslength }}</td>
                          <td>
                            <a href="/productedit/{{ $row->id }}" class="btn btn-success">EDIT</a>
                          </td>
                          <td>
                          <form action="/product-delete/{{ $row->id}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                     <button type="submit" class="btn btn-danger">DELETE</button>
                              </form>
                          </td>
                      </tr>
                      @endforeach
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