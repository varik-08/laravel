<html>
<head>
    <title>Tasks</title>
    @include('master')
</head>
<body>

@php
    use \App\Models\Task;
    $tasks = Task::all();

    echo '<table class="table" border="3">';
    $count=1;
    foreach ($tasks as $task )
    {
        echo '<tr>';
         echo '<td>'. $task->id .'</td>';
         echo '<td><a href="/add/'.$count.'">'. $task->name .'</a></td>';
         echo '<td>'. $task->counter .'</td>';
        echo '</tr>';
        $count++;
    }
    echo '</table>'
@endphp
</body>
</html>