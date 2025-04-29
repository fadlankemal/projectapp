<?php

namespace App\Models;

use Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\MovementStatus;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movement extends Model
{

    use SoftDeletes;

    protected $table = 'movements';
    protected $guarded = ['id'];


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

    protected $dates = ['deleted_at'];

    static public function getRecord()
    {
        $return = self::select('movements.*');

        if (!empty(Request::get('status'))) {
            $return = $return->where('status', '=', Request::get('status'));
        }

        if (!empty(Request::get('start_date')) && !empty(Request::get('end_date'))) {
            $return = $return->where('movements.created_at', '>=', Request::get('start_date'))
                ->where('movements.created_at', '<', Request::get('end_date'));
        }

        $return = $return->orderBy('id', 'desc');

        return $return;
    }

    public function barang(): BelongsTo
    {
        return $this->belongsTo(Good::class);
    }
    public function operator(): BelongsTo
    {
        return $this->belongsTo(Operator::class);
    }
}
