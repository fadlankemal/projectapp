<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\MovementStatus;

class Movement extends Model
{

    use HasFactory;

    protected $table = 'movements';
    protected $guarded = ['id_proses'];


    protected $fillble = [
        'jumlah',
        'operator_id',
        'barang_id',
    ];

    protected $casts = [
        'status' => MovementStatus::class,
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
    
    public function barang(): BelongsTo
    {
        return $this->belongsTo(Good::class);
    }
    public function operator(): BelongsTo
    {
        return $this->belongsTo(Operator::class);
    }
}
