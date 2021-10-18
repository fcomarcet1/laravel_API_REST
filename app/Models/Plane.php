<?php

namespace App\Models;

use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Plane extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'planes';
    // change id to serie
    protected $primaryKey = 'serie';

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'model',
        'capacity',
        'length',
        'speed',
        'autonomy',
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

    //  ORM Relations
    /**
     * Ejemplos de relaciones:
     * 1 usuario tiene 1 teléfono   ->hasOne() Relación 1:1
     * 1 teléfono pertenece a 1 usuario   ->belongsTo() Relación 1:1 inversa a hasOne()
     * 1 post tiene muchos comentarios  -> hasMany() Relación 1:N
     * 1 comentario pertenece a 1 post ->belongsTo() Relación 1:N inversa a hasMany()
     * 1 usuario puede tener muchos roles  ->belongsToMany()
     */

    
    /**
     *  1 avión pertenece a un Fabricante.
     *
     * @return belongsTo
     */ 
    public function manufacturer(): belongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }
    
  
}
