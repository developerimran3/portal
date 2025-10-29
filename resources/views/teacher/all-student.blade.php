@extends('teacher.layouts.app')
@section('main')
    <div class="page-wrapper">
        <div class="content container-fluid">


            <!-- /Page Header -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="datatable table table-stripped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>phone</th>
                                            <th>skill</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img style="width: 80px"
                                                        src="{{ URL::to('/media/student/' . $item->photo) }}" alt="">
                                                </td>
                                                <td>{{ $item->name }}</td>
                                                <td>S{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>{{ $item->skill }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <form class="d-inline" action="" method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this Post?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            Delete
                                                        </button>
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

        </div>
    </div>
@endsection
