<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CenterService;
use App\Models\Center;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CenterResource;

/**
 * Class CenterController
 * @package App\API\Controllers
 */
class CenterController extends Controller {
  public function __construct (
    private readonly CenterService $centerService
  ) {

  }

  public function index(): JsonResource {
    $centers = Center::orderBy('created_at')->get();

    CenterResource::wrap('centers');
    
    return CenterResource::collection($centers); 
  }
}