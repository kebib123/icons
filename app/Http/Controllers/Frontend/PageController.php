<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ForumTopic;

class PageController extends Controller
{
    protected $forum;

    public function __construct(ForumTopic $forumTopic)
    {
        $this->forum = $forumTopic;
    }

    public function index(Request $request)
    {
        if ($request->isMethod('get')) {
            $get = $this->forum;
//            dd($get);
            return view('icons.index');
        }
        return false;
    }
}
