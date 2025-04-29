<?php

namespace App\Http\Controllers;

use App\Models\Movement;
use App\Models\Good;
use App\Enums\MovementStatus;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $incomings = Movement::where('status', MovementStatus::INCOMING)->count();
        $outcomings = Movement::where('status', MovementStatus::OUTCOMING)->count();
        $goods = Good::select('*')->whereRaw('stok < stok_alert')->get();
        $total = Good::all()->count();
        
        return view('dashboard', [
            'incomings' => $incomings,
            'outcomings' => $outcomings,
            'goods' => $goods,
            'total' => $total
        ]);
    }
}
