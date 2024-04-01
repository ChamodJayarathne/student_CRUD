@extends('layouts\app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Home Page</h1>
            </div>
            {{-- <div class="div col-lg-12 mt-5">
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Age</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->image }}</td>
                                    <td>{{ $task->age }}</td>
                                    <td>{{ $task->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 15vh;
            font-size: 5rem;
            color: #0d6efd;
        }
    </style>
@endpush
