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
            <div class="mx-auto col-6">
                <h2 class="text-center my-5">Add Student Info</h2>
                <a class="mb-3 btn btn-primary" href="{{ url('students') }}">All Student</a>

                <form action="{{ url('store-student') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        Name:
                        <input class="form-control" type="text" name="name" >
                    </div>

                    <div class="mb-3">
                        Course:
                        <input class="form-control" type="text" name="course" >
                    </div>

                    <div class="mb-3">
                        Contact:
                        <input class="form-control" type="text" name="contact" >
                    </div>

                    <div class="mb-3">
                        <input class="btn btn-primary" type="submit" value="click to add">
                    </div>

                </form>
            </div>
        </div>
    </div>    
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>