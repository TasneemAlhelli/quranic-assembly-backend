<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class CharacterResource extends JsonResource 
{
  
  public function toArray(Request $request): array
  {
    if (is_null($this->resource)) {
      return parent::toArray(request());
    }

    return [
      'id' => $this->id,
      'name' => $this->name,
      'cv' => $this->cv,
      'cv_url' => $this->cv_url,
    ];
  }
}