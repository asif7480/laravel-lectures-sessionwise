<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="mx-auto col-10">
            <h2 class="text-center my-5">All Students Record</h2>
            <a class="mb-3 btn btn-primary" href="{{ url('add-student') }}">Add Student</a>
            
            <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($student as $student_data)
                    <tr>
                        <th scope="row">{{ $student_data->id }}</th>
                        <td>{{ $student_data->name }}</td>
                        <td>{{ $student_data->course }}</td>
                        <td>{{ $student_data->contact }}</td>
                        <td>
                            <a href="{{ url('edit-student/' . $student_data->id) }}" class="btn btn-info">Update</a>
                            <!-- <a href="{{ url('delete-student/'. $student_data->id) }}" class="btn btn-danger">Delete</a> -->
                            
                        </td>
                        <td>
                        <form action="{{ url('delete-student/' . $student_data->id) }}" method="post">
                                @csrf
                                @method('delete')

                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
                </table>
            </div>
        </div>
    </div>    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>