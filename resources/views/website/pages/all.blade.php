@extends('website.layouts.defaults')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header text-center">
            <h1><strong style="font-size: 28px">Students Info</strong></h1>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Date of birth</th>
                        <th>status</th>
                        <th>salary</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($collection as $item)
                    <tr>

                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->date_of_birth }}</td>
                    <td>{{ $item->status }}</td>


                </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@endsection
