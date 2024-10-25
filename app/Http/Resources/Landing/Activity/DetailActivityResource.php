<?php

namespace App\Http\Resources\Landing\Activity;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DetailActivityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $content = $this->content ?? null;

        return [
            'slug' => $this->slug,
            'title' => $this->title,
            'content' => $content,

            $this->mergeWhen($this->images->isNotEmpty(), [
                'thumbnail' => $this->images->first()?->url ?? null,
            ]),

            // Handle empty images when activity does not have any
            $this->mergeWhen($this->images->isEmpty(), [
                'thumbnail' => null,
            ]),

            'created_at' => $this->created_at ? date('Y-m-d', strtotime($this->created_at)) : null,
            'images' => $this->whenLoaded('images') ? ActivityImageResource::collection($this->images) : [],
        ];
    }
}
