<?php

namespace App\Http\Controllers\Frontend\forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ForumTopic;

class ForumController extends Controller
{
    public function index()
    {
        $forum = ForumTopic::where('status','=',1)->get();
        $this->data('forum', $forum);
        return view('icons.forum.index', $this->data);
    }

    public function new_topic(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'topic' => 'required|min:3|max:200'
        ], ['category.required' => 'Please choose Category']);

        $data['topic'] = $request->topic;
        $data['category_id'] = $request->category;

        $create = ForumTopic::create($data);
        if ($create) {
            {
                return redirect()->back()->with('success', 'Waiting for Approval');
            }
        }
        return true;

    }

}
