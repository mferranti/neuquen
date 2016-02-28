<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Module",
 *      required={name, anesthesia, duration},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="anesthesia",
 *          description="anesthesia",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="duration",
 *          description="duration",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="price",
 *          description="price",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="additional",
 *          description="additional",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Module extends Model
{
    use SoftDeletes;

    public $table = "modules";
    
	protected $dates = ['deleted_at'];

    
    public $fillable = [
        "name",
		"anesthesia",
		"duration",
		"price",
		"additional"
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"anesthesia" => "string",
		"duration" => "integer",
		"price" => "float",
		"additional" => "float"
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        "name" => "required",
		"anesthesia" => "required",
		"duration" => "required"
    ];
}
