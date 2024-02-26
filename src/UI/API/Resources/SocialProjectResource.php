<?php

namespace AdminKit\SocialProjects\UI\API\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SocialProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $locale = app()->getLocale();

        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'image' => $this->getFirstMediaUrl('image.'.$locale),
        ];
    }
}
