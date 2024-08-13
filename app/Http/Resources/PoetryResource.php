<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class PoetryResource extends JsonResource 
{
  public function toArray(Request $request): array
  {
    if (is_null($this->resource)) {
      return parent::toArray(request());
    }

    return [
      'id' => $this->id,
      'name' => $this->name,
      'founder' => $this->founder,
      'activity_type' => $this->activity_type,
      'founded' => $this->founded,
      'background' => $this->background,
      'goal' => $this->goal,
      'member' => $this->member,
      'phone_number' => $this->phone_number,
      'instagram' => $this->instagram,
    ];
  }
}