<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Style\Border;

use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithProperties;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;

use App\Models\Movement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class MovementExport implements 
    FromView, 
    ShouldAutoSize, 
    WithMapping, 
    WithHeadings, 
    FromCollection,
    WithStyles,
    WithProperties,
    WithDrawings,
    WithCustomStartCell
{
    use Exportable;

    public function __construct()
    {
        
    } 
}
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(){
        $request =  
    }
    public function view(): View
    {
        return view('exports.movements', [
            'movements' => Movement::all()
        ]);
    }
}
