<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class CompetitionResource extends JsonResource 
{
  
  public function toArray(Request $request): array
  {
    if (is_null($this->resource)) {
      return parent::toArray(request());
    }

    return [
      'id' => $this->id,
      'name' => $this->name,
      'section' => $this->section,
      'founder' => $this->founder,
      'founded' => $this->founded,
      'occurrence' => $this->occurrence,
      'supervisor' => $this->supervisor,
      'phone_number' => $this->phone_number,
      'age' => $this->age,
      'goal' => $this->goal,
      'reason' => $this->reason,
      'url' => $this->url,
      'image' => $this->image,
      'image_url' => $this->image_url
    ];
  }
}