<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'title' => $this->title,
            'slug' => $this->slug,
            'published' => $this->created_at->diffForHumans(),
            'subject' => $this->subject->name,
            'author' => $this->user->name,

        ];
        //   return parent::toArray($request); //menampilan semua field
    }
    public function with($request)
    {
        return ['status' => 'success'];
    }
}
