@extends('templates/dashboard')

@section('title-tab')
    Pertanyaan
@endsection

@section('title')
    Pertanyaan
@endsection

@section('subTitle')
    Survey
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
                <form id="form-tambah" method="POST">
                    {{-- <form id="form-tambah" method="POST"
                        action="{{ url('/survey/cek-jawaban/' . $idSurvey . '/' . $kategori->id) }}"> --}}
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <p class="fw-bold my-2">Kategori Soal : {{ $kategori->nama }}</p>
                        </div>
                        <div class="card-body">
                            <input type="text" value="{{ $kategori->id }}" name="kategori_soal_id" hidden readonly>
                            @foreach ($kategori->soal as $soal)
                                @php
                                    $index = $loop->iteration;
                                @endphp
                                <input type="text" value="{{ $soal->id }}" name="id[]" hidden readonly>
                                <input type="text" value="{{ $soal->tipe_jawaban }}" name="tipe_jawaban[]" hidden
                                    readonly>
                                <p class="{{ $loop->first ? '' : 'mt-4' }}">{{ $loop->iteration }} .
                                    {{ $soal->soal }}
                                </p>
                                @if ($soal->tipe_jawaban != 'Jawaban Singkat')
                                    @php
                                        if ($soal->tipe_jawaban == 'Pilihan Ganda') {
                                            $tipe = 'radio';
                                        } else {
                                            $tipe = 'checkbox';
                                        }
                                    @endphp
                                    @foreach ($soal->jawabanSoal as $jawaban)
                                        @if ($jawaban->jawaban != 'Lainnya')
                                            @php
                                                $selected = '';
                                                $jawabanSurveyBukanLainnya = $jawabanSurvey->where('jawaban_soal_id', $jawaban->id);
                                                if (!$jawabanSurveyBukanLainnya->isEmpty()) {
                                                    $selected = 'checked';
                                                }
                                            @endphp
                                            <div class='input-group my-2'>
                                                <div class='input-group-text'><input class='form-check-input mt-0'
                                                        type='{{ $tipe }}' name='jawaban-{{ $index }}[]'
                                                        value='{{ $jawaban->id }}'
                                                        aria-label='Radio button for following text input'
                                                        {{ $selected }} />
                                                </div>
                                                <input type='text' class='form-control text-jawaban'
                                                    aria-label='Text input with radio button'
                                                    placeholder='{{ $jawaban->jawaban }}' disabled />
                                            </div>
                                        @else
                                            @php
                                                $selected = '';
                                                $value = '';
                                                $jawabanSurveyLainnya = $jawabanSurvey
                                                    ->where('soal_id', $soal->id)
                                                    ->where('jawaban_soal_id', null)
                                                    ->toArray();
                                                if (count($jawabanSurveyLainnya) > 0) {
                                                    $selected = 'checked';
                                                    $value = reset($jawabanSurveyLainnya);
                                                    $value = $value['jawaban_lainnya'];
                                                }
                                            @endphp
                                            <div class='input-group'>
                                                <div class='input-group-text'><input class='form-check-input mt-0'
                                                        type='{{ $tipe }}' name='jawaban-{{ $index }}[]'
                                                        value='Lainnya' aria-label='Radio button for following text input'
                                                        {{ $selected }} />
                                                </div>
                                                <input type='text' class='form-control text-jawaban'
                                                    aria-label='Text input with radio button' placeholder='Lainnya'
                                                    name='jawaban-lainnya-{{ $index }}'
                                                    value="{{ $value }}" />
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    @php
                                        $selected = '';
                                        $value = '';
                                        $jawabanSurveyLainnya = $jawabanSurvey->where('soal_id', $soal->id)->toArray();
                                        if (count($jawabanSurvey) > 0) {
                                            $selected = 'checked';
                                            $value = reset($jawabanSurveyLainnya);
                                            $value = $value['jawaban_lainnya'];
                                        }
                                    @endphp
                                    <input type='text' class='form-control text-jawaban text-kotak-centang'
                                        placeholder='Masukkan Jawaban Anda' name="jawaban-{{ $index }}"
                                        value="{{ $value }}" />
                                @endif
                                <div class="mt-3"><span
                                        class='text-danger error-text jawaban-{{ $index }}-error'></span></div>
                            @endforeach
                            <div class="mt-4">
                                @if ($tombolSebelumnya != '')
                                    <div class="float-left">
                                        @component('components.buttons.previous', [
                                            'label' => 'Sebelumnya',
                                            'href' => $urlSebelumnya,
                                            'onClick' => '',
                                            'class' => '',
                                            ])
                                        @endcomponent
                                    </div>
                                @endif

                                <div class="float-right">
                                    @component('components.buttons.next', [
                                        'label' => $tombolSelanjutnya,
                                        'class' => '',
                                        ])
                                    @endcomponent
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#form-tambah').submit(function(e) {
                e.preventDefault();
                resetError();
                // create swal with confirmation
                swal({
                    title: "Apakah anda yakin?",
                    text: "Jawaban Pertanyaan Akan Disimpan",
                    icon: "warning",
                    buttons: {
                        confirm: {
                            text: "Ya",
                            className: 'btn btn-success'
                        },
                        cancel: {
                            visible: true,
                            text: "Tidak",
                            className: 'btn btn-danger'
                        }
                    },
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "{{ url('/survey/cek-jawaban' . '/' . $idSurvey) }}",
                            type: "POST",
                            data: $(this).serialize(),
                            success: function(response) {
                                if (response.status == "success") {
                                    swal("Berhasil",
                                        "Jawban Pertanyaan Berhasil Disimpan", {
                                            button: false,
                                            icon: "success",
                                        });
                                    setTimeout(
                                        function() {
                                            $(location).attr('href',
                                                response.url
                                            );
                                        }, 2000);
                                } else {
                                    printErrorMsg(response.error);
                                }
                            },
                            error: function(response) {
                                swal("Gagal",
                                    "Soal gagal ditambahkan", {
                                        icon: "error",
                                        buttons: {
                                            confirm: {
                                                className: 'btn btn-danger'
                                            }
                                        },
                                    });
                            }
                        });
                    }
                });
            })
        })

        function printErrorMsg(msg) {
            $.each(msg, function(key, value) {
                $('.' + key + '-error').text(value);
            });
        }

        function resetError() {
            $('.error-text').text('');
        }
    </script>
@endpush
