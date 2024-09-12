<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Soiree;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\SoireeResource;

/**
 * Class SoireeController
 * @package App\API\Controllers
 */
class SoireeController extends Controller {
  public function index(): JsonResource {
    $soirees = Soiree::orderBy('created_at')->get();

    SoireeResource::wrap('soirees');
    
    return SoireeResource::collection($soirees); 
  }
}