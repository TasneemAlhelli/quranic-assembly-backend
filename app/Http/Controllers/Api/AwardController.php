<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AwardResource;

/**
 * Class AwardController
 * @package App\API\Controllers
 */
class AwardController extends Controller {
  public function __construct () {}

  public function index(): JsonResource {
    $awards = Award::orderBy('created_at')->get();

    AwardResource::wrap('awards');
    
    return AwardResource::collection($awards); 
  }
}