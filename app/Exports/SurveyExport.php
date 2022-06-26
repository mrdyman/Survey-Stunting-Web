<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SurveyExport implements FromView
{
    protected $kategori;
    protected $survey;
    protected $surveyor;
    protected $institusi;

    function __construct($kategori, $survey, $surveyor, $institusi)
    {
        $this->kategori = $kategori;
        $this->survey = $survey;
        $this->surveyor = $surveyor;
        $this->institusi = $institusi;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): view
    {
        $daftarKategori = $this->kategori;
        $daftarSurvey = $this->survey;
        $surveyor = $this->surveyor;
        $institusi = $this->institusi;
        return view('pages.survey.exportSurvey.export', compact('daftarKategori', 'daftarSurvey', 'surveyor', 'institusi'));
    }
}
