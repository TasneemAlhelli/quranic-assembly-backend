<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class CenterResource extends JsonResource 
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
      'email' => $this->email,
      'founder' => $this->founder,
      'supervisor' => $this->supervisor,
      'founded' => $this->founded,
      'city' => $this->city,
      'address' => $this->address,
      'instagram' => $this->instagram,
      'contacts' => CenterContactResource::collection($this->whenLoaded('contacts'))
    ];
  }
}