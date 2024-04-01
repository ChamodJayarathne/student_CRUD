<form action="{{ route('student.update', $task->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="studentName">Name</label>
        <input type="text" value="{{ $task->name }}" class="form-control" name="name" id="studentName"
            placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="studentImage">Image URL</label>
        <input type="file" value="{{ $task->image }}" class="form-control" name="image" id="studentImage"
            placeholder="Enter Image URL">
    </div>
    <div class="form-group">
        <label for="studentAge">Age</label>
        <input type="number" value="{{ $task->age }}" class="form-control" name="age" id="studentAge"
            placeholder="Enter Age">
    </div>
    <div class="form-group">
        <label for="studentStatus">Status</label>
        <select class="form-control" id="studentStatus" name="status" value="{{ $task->status }}">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>
    <div class="col-lg-4">
        <button type="submit" class="btn btn-success" style="background: #2cb04b">Update
            Student</button>
    </div>
</form>
