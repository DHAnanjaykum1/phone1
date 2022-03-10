<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>contact</td>
            <td>email</td>
            <td>action</td>
        </tr>
        @foreach ($contacts as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->contact }}</td>
            <td>{{ $item->email }}</td>
            <td>
                <a href="" class="btn btn-danger">X</a>
            </td>
        </tr>
            
        @endforeach
    </table>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</body>
</html>