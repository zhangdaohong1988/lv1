<?php
/**
 * Created by PhpStorm.
 * User: edz
 * Date: 2019-04-19
 * Time: 17:40
 */

namespace Onlyus\Helloworld;


use App\Http\Controllers\Controller;

class HelloworldController extends Controller
{

    public function index()
    {
        return 'hello world';
    }

}
