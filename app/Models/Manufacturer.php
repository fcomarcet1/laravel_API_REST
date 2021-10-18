<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manufacturer extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'manufacturers';
    

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'address',
        'telephone',
    ];

     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * 1 manufacturer many planes
     *
     * @return HasMany
     */
    public function planes(): HasMany
	{	
		// 1 fabricante tiene muchos aviones
		// $this hace referencia al objeto que tengamos en ese momento de Fabricante.
		return $this->hasMany(Plane::class);
	}

}
