<?php

namespace modules\Rayium\Post\Services;

use Illuminate\Support\Facades\Storage;
use modules\Rayium\Post\Models\Post;

class PostService
{
    public function store($request, $user_id, $imageName, $imagePath)
    {
        return Post::query()->create([
            'user_id' => $user_id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $this->makeSlug($request->title),
            'time_to_read' => $request->time_to_read,
            'imageName' => $imageName,
            'imagePath' =>$imagePath,
            'score' => $request->score,
            'keywords' => $request->keywords,
            'description' => $request->description,
            'body' => $request->body,
            'status' => $request->status,
            'type' => $request->type
        ]);
    }

    public function update($request, $id, $imageName, $imagePath)
    {
        return Post::query()->whereId($id)->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $this->makeSlug($request->title),
            'time_to_read' => $request->time_to_read,
            'imageName' => $imageName,
            'imagePath' =>$imagePath,
            'score' => $request->score,
            'keywords' => $request->keywords,
            'description' => $request->description,
            'body' => $request->body,
            'status' => $request->status,
            'type' => $request->type
        ]);
    }

    private function makeSlug($title)
    {
        $url = str_replace('_', '', $title);
        return preg_replace('/\s+/', '-', $url);
    }

    public function uploadImage($file): array
    {
        $name = time() . '.' . $file->getClientOriginalExtension();

        Storage::disk('public')->putFileAs('images', $file, $name);

        $path = asset('storage/images/' . $name);

        return [$path, $name];
    }

    public function deleteImage($post)
    {
        if (Storage::disk('public')->exists('images/' . $post->imageName)) {
            return Storage::disk('public')->delete('images/' . $post->imageName);
        }

        return null;
    }

    public function changeStatus($post)
    {
        if ($post->status === Post::STATUS_ACTIVE) {
            return $post->update(['status' => Post::STATUS_INACTIVE]);
        }

        return $post->update(['status' => Post::STATUS_ACTIVE]);
    }
}
