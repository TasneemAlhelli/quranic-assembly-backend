<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class CenterContactResource extends JsonResource 
{
  
  public function toArray(Request $request): array
  {
    if (is_null($this->resource)) {
      return parent::toArray(request());
    }

    return [
      'id' => $this->id,
      'phone_number' => $this->phone_number,
      'center_id' => $this->center_id
    ];
  }
}