<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SurveyExport implements FromView
{
    protected $kategori;
    protected $survey;

    function __construct($kategori, $survey)
    {
        $this->kategori = $kategori;
        $this->survey = $survey;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): view
    {
        $daftarKategori = $this->kategori;
        $daftarSurvey = $this->survey;
        return view('pages.survey.exportSurvey.export', compact('daftarKategori', 'daftarSurvey'));
    }
}
