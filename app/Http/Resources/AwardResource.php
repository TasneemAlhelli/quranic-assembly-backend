<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class AwardResource extends JsonResource 
{
  
  public function toArray(Request $request): array
  {
    if (is_null($this->resource)) {
      return parent::toArray(request());
    }

    return [
      'id' => $this->id,
      'name' => $this->name,
      'date' => $this->date,
      'image' => $this->image,
      'image_url' => $this->image_url,
    ];
  }
}