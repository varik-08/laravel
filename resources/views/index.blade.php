<html>
<head>
    <title>Tasks</title>
    @include('master')
</head>
<body>
    <table class="table" border="3">
        @php foreach ( $tasks as $task): @endphp
        <tr>
            <td>{{$task->id}}</td>
            <td><a href="/add/{{$count++}}">{{$task->name}}</a></td>
            <td>{{$task->counter}}</td>
        </tr>
        @php endforeach; @endphp
    </table>
</body>
</html>