@extends('templates/dashboard')

@section('title-tab')
    Lihat Survey
@endsection

@section('title')
    Survey
@endsection

@section('subTitle')
    Lihat Survey
@endsection

@push('style')
    <style>
        .form-group {
            padding-left: 0px;
            padding-right: 0px;
        }

        .form-check-input {
            margin-top: .3rem;
            margin-left: 0rem;
        }

        input.text-jawaban:disabled {
            background-color: white !important;
            opacity: 1 !important;
            border: 0px solid black;
        }

    </style>
@endpush

@section('content')
    <section>
        <div class="row mb-3 justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header fw-bold">
                        Nama Survey :
                        {{ $survey->namaSurvey->nama }}
                        {!! $survey->namaSurvey->tipe == 'Pre'
    ? ' <span class="badge badge-primary">PRE</span>'
    : ' <span
                        class="badge badge-success">POST</span>' !!}

                    </div>
                    <div class="card-body ">
                        <p class="card-text">Responden : {{ $survey->responden->kartu_keluarga }} <span
                                class="float-right">
                                {{ \Carbon\Carbon::parse($survey->created_at)->translatedFormat('d F Y') }}</span></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        @foreach ($daftarKategori as $kategori)
            <div class="row mb-3 justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <p class="fw-bold my-2">Kategori Soal : {{ $kategori->nama }}</p>
                        </div>
                        <div class="card-body">
                            @foreach ($kategori->soal as $soal)
                                @php
                                    $daftarJawaban = \App\Models\JawabanSurvey::with(['jawabanSoal'])
                                        ->where('kode_unik_survey', $kodeUnik)
                                        ->where('kategori_soal_id', $kategori->id)
                                        ->where('soal_id', $soal->id)
                                        ->get();
                                @endphp
                                <p class="{{ $loop->first ? '' : 'mt-4' }}">{{ $loop->iteration }} . {{ $soal->soal }}
                                </p>
                                @if ($soal->tipe_jawaban != 'Jawaban Singkat')
                                    @php
                                        if ($soal->tipe_jawaban == 'Pilihan Ganda') {
                                            $tipe = 'radio';
                                        } else {
                                            $tipe = 'checkbox';
                                        }
                                    @endphp
                                    @foreach ($daftarJawaban as $jawaban)
                                        @if ($jawaban->jawaban_soal_id != null)
                                            <div class='input-group my-2'>
                                                <div class='input-group-text'><input class='form-check-input mt-0'
                                                        type='{{ $tipe }}'
                                                        aria-label='Radio button for following text input' checked disabled
                                                        readonly />
                                                </div>
                                                <input type='text' class='form-control text-jawaban'
                                                    aria-label='Text input with radio button'
                                                    placeholder='{{ $jawaban->jawaban }}' disabled readonly
                                                    value="{{ $jawaban->jawabanSoal->jawaban }}" />
                                            </div>
                                        @else
                                            <div class='input-group my-2'>
                                                <div class='input-group-text'><input class='form-check-input mt-0'
                                                        type='{{ $tipe }}'
                                                        aria-label='Radio button for following text input' checked disabled
                                                        readonly />
                                                </div>
                                                <input type='text' class='form-control text-jawaban'
                                                    aria-label='Text input with radio button'
                                                    placeholder='{{ $jawaban->jawaban }}' disabled readonly
                                                    value="{{ $jawaban->jawaban_lainnya }}" />
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    <input type='text' class='form-control text-jawaban text-kotak-centang' disabled
                                        value='{{ $daftarJawaban[0]->jawaban_lainnya }}' />
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection

@push('script')
    <script>
    </script>
@endpush
