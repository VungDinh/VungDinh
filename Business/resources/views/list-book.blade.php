@extends('layout.master')
@section('title', 'Đây là trang test')
@section('content')
<div class="container bg-light">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 text-primary">
                    Danh sach book table
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Date</th>
                  <th scope="col">Time</th>
                  <th scope="col">People</th>
                  <th scope="col">Message</th>
                </tr>
              </thead>
              <tbody>
                @foreach($listBook as $table)
                <tr>
                  <th scope="row">{{ $table->id }}</th>
                  <td>{{ $table->name }}</td>
                  <td>{{ $table->email }}</td>
                  <td>{{ $table->phone }}</td>
                  <td>{{ $table->date }}</td>
                  <td>{{ $table->time }}</td>
                  <td>{{ $table->people }}</td>
                  <td>{{ $table->message }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@stop