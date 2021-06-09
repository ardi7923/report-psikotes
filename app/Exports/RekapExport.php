<?php

namespace App\Exports;

use App\Models\Result;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class RekapExport implements FromView, WithStyles,ShouldAutoSize
{
    public function __construct($school_name)
    {
        $this->school_name = $school_name;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        $datas =  Result::where('sekolah', $this->school_name)->get();

        return view('exports.rekap', compact('datas'));
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1   => ['font' => ['bold' => true,'align' => 'center']],
            'A' => ['font' => ['bold' => true]],
        ];
    }
}
