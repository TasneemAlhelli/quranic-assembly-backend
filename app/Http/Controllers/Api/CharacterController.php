<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\CharacterResource;

/**
 * Class CharacterController
 * @package App\API\Controllers
 */
class CharacterController extends Controller {
  public function __construct () {}

  public function index(): JsonResource {
    $characters = Character::orderBy('created_at')->get();

    CharacterResource::wrap('characters');
    
    return CharacterResource::collection($characters); 
  }
}