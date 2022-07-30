@extends('templates/dashboard')

@section('title-tab')
    Export Survey
@endsection

@section('title')
    Export Survey
@endsection

@section('subTitle')
    Dashboard
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
    <form action="{{ url('/exportSurvey/exportExcel') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg">
                @component('components.formGroup.select',
                    [
                        'label' => 'Pilih Nama Survey',
                        'name' => 'nama_survey_id',
                        'id' => 'nama_survey_id',
                        'class' => 'select2 filter',
                    ])
                    @slot('options')
                        @if (count($namaSurvey) > 0)
                            @foreach ($namaSurvey as $row)
                                <option value="{{ $row->id }}">{{ $row->nama }} | {{ $row->tipe }}</option>
                            @endforeach
                        @endif
                    @endslot
                @endcomponent
            </div>
            @if (in_array(Auth::user()->role, ['Admin', 'Institusi']))
                @if (Auth::user()->role == 'Admin')
                    <div class="col-lg">
                        @component('components.formGroup.select',
                            [
                                'label' => 'Pilih Institusi',
                                'name' => 'institusi_id',
                                'id' => 'institusi_id',
                                'class' => 'filter select2',
                            ])
                            @slot('options')
                                <option value="semua">Semua</option>
                                @if (count($institusi) > 0)
                                    @foreach ($institusi as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama }}</option>
                                    @endforeach
                                @endif
                            @endslot
                        @endcomponent
                    </div>
                @endif
                <div class="col-lg">
                    @component('components.formGroup.select',
                        [
                            'label' => 'Pilih Supervisor / DPL',
                            'name' => 'supervisor_id',
                            'id' => 'supervisor_id',
                            'class' => 'filter select2',
                        ])
                        @slot('options')
                        @endslot
                    @endcomponent
                </div>
            @endif
            @if (in_array(Auth::user()->role, ['Supervisor', 'Institusi']))
                <div class="col-lg">
                    @component('components.formGroup.select',
                        [
                            'label' => 'Pilih Surveyor',
                            'name' => 'surveyor_id',
                            'id' => 'surveyor_id',
                            'class' => 'filter select2',
                        ])
                        @slot('options')
                            <option value="semua">Semua</option>
                            @if (count($surveyor) > 0)
                                @foreach ($surveyor as $row)
                                    <option value="{{ $row->id }}">{{ $row->nama_lengkap }}</option>
                                @endforeach
                            @endif
                        @endslot
                    @endcomponent
                </div>
            @endif
            <div class="col-lg-12">
                @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class='my-0'>
                            <span class="text-danger error-text">{{ $error }}</span>
                        </p>
                    @endforeach
                @endif
                @if (session('error'))
                    <p class='my-0'>
                        <span class="text-danger error-text">{{ session('error') }}</span>
                    </p>
                @endif
            </div>
            <div class="col-lg-12 mt-3 d-flex justify-content-end">
                @component('components.buttons.next',
                    [
                        'label' => 'Export',
                        'class' => '',
                    ])
                @endcomponent
            </div>
        </div>


    </form>

    <div class="row mt-4">
        <div class="table-responsive">
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr class="text-center  ">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Institusi</th>
                        <th>Supervisor / DPL</th>
                        <th>Tipe</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var idInstitusi = "{{ Auth::user()->profile->institusi_id }}";
        getSupervisor(idInstitusi);
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            searching: false,
            serverSide: true,
            responsive: true,
            ajax: {
                url: "{{ url('/exportSurvey') }}",
                data: function(d) {
                    d.surveyor_id = $('#surveyor_id').val();
                    d.supervisor_id = $('#supervisor_id').val();
                    d.nama_survey_id = $('#nama_survey_id').val();
                    d.institusi_id = $('#institusi_id').val();
                    d.search = $('input[type="search"]').val();
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    className: 'text-center',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'institusi',
                    name: 'institusi',
                    className: 'text-center',
                },
                {
                    data: 'supervisor',
                    name: 'supervisor',
                },
                {
                    data: 'tipe',
                    name: 'tipe',
                    className: 'text-center',
                },
                {
                    data: 'tanggal',
                    name: 'tanggal',
                    className: 'text-center',
                },
            ],
        });

        $('.filter').change(function() {
            table.draw();
        })

        $('#institusi_id').change(function() {
            if ("{{ Auth::user()->role }}" == "Admin") {
                var idInstitusi = $(this).val();
            }
            getSupervisor(idInstitusi);
        })

        function getSupervisor(idInstitusi) {
            $('#supervisor_id').html('');
            $.ajax({
                url: "{{ url('list/supervisor') }}",
                type: 'GET',
                data: {
                    '_token': '{{ csrf_token() }}',
                    idInstitusi: idInstitusi
                },
                success: function(response) {
                    if (response.length > 0) {
                        $('#supervisor_id').append("<option></option>");
                        $('#supervisor_id').append("<option value='semua'>Semua</option>");
                        for (var i = 0; i < response.length; i++) {
                            $('#supervisor_id').append('<option value="' + response[i].id + '">' +
                                response[
                                    i]
                                .nama_lengkap +
                                '</option>');
                        }
                    }
                }
            })
        }

        $('.select2').change(function() {
            $('.error-text').text('');
        })
    </script>
@endpush
