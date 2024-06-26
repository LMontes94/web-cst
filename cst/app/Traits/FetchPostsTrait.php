<?php

namespace App\Traits;

use App\Models\Post;

trait FetchPostsTrait
{
    public function getLatestPosts($sectionName)
    {
        return Post::whereHas('departments', function ($query) use ($sectionName) {
            $query->whereHas('section', function ($query) use ($sectionName) {
                $query->where('name', $sectionName);
            });
        })
            ->latest()
            ->take(3)
            ->get();
    }

    public function fetchPostsBySection($sectionName, $perPage = 10)
    {
        return Post::whereHas('departments', function ($query) use ($sectionName) {
            $query->whereHas('section', function ($query) use ($sectionName) {
                $query->where('name', $sectionName);
            });
        })->latest()->paginate($perPage);
    }
}
