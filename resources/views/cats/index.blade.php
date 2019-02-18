<!DOCTYPE html>
<html>
    <head>
        <title>Cats</title>
    </head>
    <body>
        <h1>Cats</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Description</th>
        </tr>
        @foreach ($cats as $cat)
        <tr>
            <td>{{$cat ->id}}</td>
            <td>{{$cat ->name}}</td>
            <td>{{$cat ->description}}</td>
        </tr>
        @endforeach
    </table>
    </body>
</html>