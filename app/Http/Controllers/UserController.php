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
    public function index()
    {
        $tasks = Task::all();
        return view('index',compact(['tasks']));
    }
    public function add($id)
    {
        $c = Task::find($id);
        Task::where('id', $id)->update(['counter' => ++$c->counter]);
        Log::insert(['task_id' => $id]);
        return redirect('/');
    }
}