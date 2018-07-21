<html>
<head>
    <title>Tasks</title>
    @include('master')
</head>
<body>
    <table class="table" border="3">
        @foreach ( $tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td><a href="/add/{{$task->id}}">{{$task->name}}</a></td>
            <td>{{$task->counter}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>