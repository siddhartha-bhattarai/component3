@extends('layouts.master')

@section('title')
        Registered Roles
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Users Roles</h4>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif    
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        id
                      </th>
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Edit
                      </th>
                      <th>
                        Delete
                      </th>
                    </thead>
                    <tbody>
                       @foreach ($users as $row) 
                      <tr>
                          <td>{{ $row->id }}</td>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->email }}</td>
                          <td>
                              <a href="/user-edit/{{ $row->id}}" class="btn btn-success">EDIT</a>
                          </td>
                          <td>
                              <form action="/user-delete/{{ $row->id}}" method="post">
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