<html>
<head>
    <title>Tasks</title>
    @include('master')
</head>
<body>


@php
use \App\Models\Task;
    if($id != null)
    {
        switch ($id)
        {
            case 1:
                $c = Task::where('id','=','1')->value('counter');
                DB::update('update tasks set counter = '.++$c.' where id = 1');
                DB::table('logs')->insert(['task_id'=>'1','status'=>'0']);
                break;
             case 2:
                $c = Task::where('id','=','2')->value('counter');
                DB::update('update tasks set counter = '.++$c.' where id = 2');
                DB::table('logs')->insert(['task_id'=>'2','status'=>'0']);
                break;
              case 3:
                $c = Task::where('id','=','3')->value('counter');
                DB::update('update tasks set counter = '.++$c.' where id = 3');
                DB::table('logs')->insert(['task_id'=>'3','status'=>'0']);
                break;
               case 4:
                $c = Task::where('id','=','4')->value('counter');
                DB::update('update tasks set counter = '.++$c.' where id = 4');
                DB::table('logs')->insert(['task_id'=>'4','status'=>'0']);
                break;
        }
    }

    $tasks = Task::all();

    echo '<table class="table" border="3">';
    $count=1;
    foreach ($tasks as $task )
    {
        echo '<tr>';
         echo '<td>'. $task->id .'</td>';
         echo '<td><a href="/'.$count.'">'. $task->name .'</a></td>';
         echo '<td>'. $task->counter .'</td>';
        echo '</tr>';
        $count++;
    }

    echo '</table>';


@endphp

</body>
</html>