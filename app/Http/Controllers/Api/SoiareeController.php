<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Soiaree;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SoiareeResource;

/**
 * Class SoiareeController
 * @package App\API\Controllers
 */
class SoiareeController extends Controller {
  public function index(): JsonResource {
    $soiarees = Soiaree::orderBy('created_at')->get();

    SoiareeResource::wrap('soiarees');
    
    return SoiareeResource::collection($soiarees); 
  }
}