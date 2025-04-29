<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Operator extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $table = 'operators';
    protected $guarded = ['id'];

    public $fillable = [
        'nama_operator',
        'id_operator',
        'factory',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function getRouteKeyName(): string
    {
        return 'nama_operator';
    }

    public function movement() :HasMany
    {
        return $this->hasMany(Movement::class);
    }
}
