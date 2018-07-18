<?php
/**
 * Created by PhpStorm.
 * User: varik
 * Date: 04.07.2018
 * Time: 23:06
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\View\View;
use App\Models\Task;
use App\Models\Log;

class UserController extends BaseController
{
    public function index($id = null)
    {
        if($id != null)
        {
            switch ($id)
            {
                case 1:
                    $c = Task::where('id','=','1')->value('counter');
                    Task::where('id','1')->update(['counter'=>++$c]);
                    Log::insert(['task_id'=>'1','status'=>'0']);
                    break;
                case 2:
                    $c = Task::where('id','=','2')->value('counter');
                    Task::where('id','2')->update(['counter'=>++$c]);
                    Log::insert(['task_id'=>'2','status'=>'0']);
                    break;
                case 3:
                    $c = Task::where('id','=','3')->value('counter');
                    Task::where('id','3')->update(['counter'=>++$c]);
                    Log::insert(['task_id'=>'3','status'=>'0']);
                    break;
                case 4:
                    $c = Task::where('id','=','4')->value('counter');
                    Task::where('id','4')->update(['counter'=>++$c]);
                    Log::insert(['task_id'=>'4','status'=>'0']);
                    break;
            }
        }
        return view('index', compact('id'));
    }
}