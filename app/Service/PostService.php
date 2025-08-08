<?php

namespace App\Service;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            if (isset($data['tag_id'])) {
                $tag = $data['tag_id'];
                unset($data['tag_id']);
            }

            $data['post_image'] = Storage::disk('public')->put('/images', $data['post_image']);

            $post = Post::firstOrCreate($data);
            if (isset($data['tag_id'])) {
                $post->tags()->attach($tag);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(404);
        }
    }

    public function update($data, $post)
    {
        try {
            DB::beginTransaction();
            if (isset($data['tag_id'])) {
                $tag = $data['tag_id'];
                unset($data['tag_id']);
            }

            if (isset($data['post_image'])) {
                $data['post_image'] = Storage::disk('public')->put('/images', $data['post_image']);
            }
            $post->update($data);
            if (isset($data['tag_id'])) {
                $post->tags()->sync($tag);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $post;
    }
}
