<?php

namespace App\Http\Controllers;

use App\Model\Log;
use App\Http\Controllers\Traits\HelpersTrait;
use Illuminate\Database\Eloquent\Model;
abstract class AbstractController extends Controller
{

    use HelpersTrait;

    public $model;
    protected  $log;
    protected $related;

    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->log = new Log();
    }
}
