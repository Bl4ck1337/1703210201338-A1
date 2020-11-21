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
                        <th>Dob</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($collection as $item)
                    <tr>

                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->gender }}</td>
                    <td>{{ $item->dob }}</td>
                    <td>{{ $item->address }}</td>


                    <td>
                    <a href="{{ URL::to('update/'.$item->id) }}" class="btn btn-secondary">Edit</a>

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#id{{ $item->id }}">
                            Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="id{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    ...
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ URL::to('delete/'.$item->id) }}" class="btn btn-denger">yes</a>
                                    <a  class="btn btn-secondary" data-dismiss="modal">Close</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                    </td>
                </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@endsection
