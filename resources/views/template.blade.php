<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
       <nav>
      <a href="{{ route('students.index') }}">Students</a> |
      <a href="{{ route('courses.index') }}">Courses</a>
    </nav>
    <h1>Hello, world!</h1>
   <div class = "container">
    <div class = "row">
        <div class = "col">
            <h1>Laralms</h1>
        </div>
        <div class = "row">
            <div class = "col">
            @yield('content')
        </div>
    </div>
   </div>
  </body>
</html>