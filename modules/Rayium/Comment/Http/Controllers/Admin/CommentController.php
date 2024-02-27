<?php

namespace modules\Rayium\Comment\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use modules\Rayium\Comment\Models\Comment;
use modules\Rayium\Comment\Repositories\CommentRepo;

class CommentController extends Controller
{
    public CommentRepo $repo;

    public function __construct(CommentRepo $commentRepo)
    {
        $this->repo = $commentRepo;
    }

    public function index()
    {
        $comments = $this->repo->index()->paginate(10);
        return view('Comment::Admin.index', compact('comments'));
    }

    public function destroy($id)
    {
        $this->repo->delete($id);

        $notification = array(
            'message' => 'نظرات با موفقیت حذف شد.',
            'alert-type' => 'success'
        );

        return to_route('comments.index')->with($notification);
    }

    public function active($id)
    {
        $this->repo->active($id, Comment::STATUS_ACTIVE);

        $notification = array(
            'message' => 'نظر فعال شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function inactive($id)
    {
        $this->repo->inactive($id, Comment::STATUS_INACTIVE);

        $notification = array(
            'message' => 'نظر غیر فعال شد.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
