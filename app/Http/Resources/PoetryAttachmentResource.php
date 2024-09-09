<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Request;

class PoetryAttachmentResource extends JsonResource 
{
  
  public function toArray(Request $request): array
  {
    if (is_null($this->resource)) {
      return parent::toArray(request());
    }

    return [
      'id' => $this->id,
      'attachment' => $this->attachment,
      'attachment_url' => $this->attachment_url,
      'poetry_id' => $this->poetry_id
    ];
  }
}