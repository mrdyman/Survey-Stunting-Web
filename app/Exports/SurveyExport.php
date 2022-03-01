<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SurveyExport implements FromView
{
    protected $kategori;
    protected $survey;
    protected $surveyor;

    function __construct($kategori, $survey, $surveyor)
    {
        $this->kategori = $kategori;
        $this->survey = $survey;
        $this->surveyor = $surveyor;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): view
    {
        $daftarKategori = $this->kategori;
        $daftarSurvey = $this->survey;
        $surveyor = $this->surveyor;
        return view('pages.survey.exportSurvey.export', compact('daftarKategori', 'daftarSurvey', 'surveyor'));
    }
}
