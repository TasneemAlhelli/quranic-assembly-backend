<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class CourseResource extends JsonResource 
{
  public function toArray(Request $request): array
  {
    if (is_null($this->resource)) {
      return parent::toArray(request());
    }

    return [
      'id' => $this->id,
      'name' => $this->name,
      'description' => $this->description,
      'image' => $this->image,
      'image_url' => $this->image_url,
      'type' => $this->type,
      'type_text' => $this->type_text,
      'place' => $this->place,
      'date' => $this->date,
      'content_heading' => $this->content_heading,
      'content' => $this->content,
      'subjects' => CourseSubjectResource::collection($this->whenLoaded('subjects')),
      'attendees' => CourseAttendeeResource::collection($this->whenLoaded('attendees')),
      'attachments' => CourseAttachmentResource::collection($this->whenLoaded('attachments'))
    ];
  }

}