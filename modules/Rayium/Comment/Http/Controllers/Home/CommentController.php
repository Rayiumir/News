<?php

namespace modules\Rayium\Comment\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use modules\Rayium\Comment\Http\Requests\CommentRequest;
use modules\Rayium\Comment\Models\Comment;
use modules\Rayium\Comment\Service\CommentService;

class CommentController extends Controller
{
    public function store(CommentRequest $request, CommentService $commentService)
    {
        $commentService->store($request);

        $notification = array(
            'message' => 'نظر شما با موفقیت ثبت شد, پس از تایید در سایت نمایش داده می شود.',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}
