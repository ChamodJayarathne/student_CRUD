@extends('layouts\app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Student Page</h1>
            </div>
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-8 mt-5">
                        <div class="form-group">
                            <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="studentName">Name</label>
                                    <input type="text" class="form-control" name="name" id="studentName"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="studentImage">Image URL</label>
                                    <input type="file" class="form-control" name="image" id="studentImage"
                                        placeholder="Enter Image URL">
                                </div>
                                <div class="form-group">
                                    <label for="studentAge">Age</label>
                                    <input type="number" class="form-control" name="age" id="studentAge"
                                        placeholder="Enter Age">
                                </div>
                                <div class="form-group">
                                    <label for="studentStatus">Status</label>
                                    <select class="form-control" id="studentStatus" name="status">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <button type="submit" class="btn btn-success" style="background: #2cb04b">Add
                                        Student</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div col-lg-12 mt-5">
                <div class="">
                    <table class="table table-striped table-success">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Age</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $task->id }}</td>
                                    <td>{{ $task->name }}</td>
                                    <td>{{ $task->image }}</td>
                                    <td>{{ $task->age }}</td>
                                    {{-- <td>{{ $task->status }}</td> --}}
                                    <td>
                                        @if ($task->status == 'active')
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('student.delete', $task->id) }}" class="btn btn-danger"><i
                                                class="fas fa-trash-alt"></i></a>
                                        <a href="javascript:void(0)" class="btn btn-info"><i class="fas fa-pencil"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Student Deatils</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="staticBackdropContent">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            font-size: 5rem;
            color: #2cb04b;
        }

        .col-lg-4 {
            margin-top: 5vh;
            text-align: center;

        }
    </style>
@endpush


{{-- onclick="taskEditModal({{ $task->id }})" --}}
{{--
@push('js')
    <script>
        function taskEditModal(task_id) {
            var data = {
                task_id: task_id,
            };
            s.ajax({
                // url: "{{ route('student.update') }}"
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                dataType: '',
                data: data,
                success: function(response) {
                    $('#staticBackdrop').modal('show');
                    $('#staticBackdropContent').html(response);

                }
            })
        }
    </script>
@endpush --}}
