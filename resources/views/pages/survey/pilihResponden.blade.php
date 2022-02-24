@extends('templates/dashboard')
@section('title-tab')Pilih Responden
@endsection

@section('title')
Pilih Responden
@endsection

@section('subTitle')
Survey
@endsection

@push('style')

@endpush

@section('content')

<section>
    <div class="row justify-content-center align-items-end">
        <div class="col-lg-7 col-md-7">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center align-items-end">
                        <div class="col-lg-10 col-md-9">
                            {{-- Pilih Responden --}}
                            @component('components.formGroup.select', [
                                'label' => 'Pilih Responden',
                                'name' => 'responden',
                                'id' => 'responden',
                                'class' => 'select2',
                                ])  
                                @slot('options')
                                    @foreach ($responden as $row)
                                        <option value="{{ $row->id }}">{{ $row->kartu_keluarga }}</option>
                                    @endforeach
                                @endslot
                            @endcomponent
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="form-group">
                                @component('components.buttons.add')
                                    @slot('href')
                                        #
                                    @endslot
                                    @slot('onClick')
                                        
                                    @endslot
                                    @slot('class')
                                        mb-2 float-right
                                    @endslot
                                    @slot('id')
                                        add-responden
                                    @endslot
                                @endcomponent   
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg col-md float-right">
                            <div class="form-group">
                                @component('components.buttons.next')
                                    @slot('href')
                                    #
                                    @endslot
                                    @slot('onClick')
                                        
                                    @endslot
                                    @slot('class')
                                        my-3 float-right
                                    @endslot
                                @endcomponent   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div>
</section>

<section class="d-none" id="formResponden">
    <div class="row mt-4 justify-content-center">
        <div class="col-lg-7 col-md-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Responden</div>
                </div>
                <div class="card-body">
                    @component('components.form.formResponden')
                        @slot('form_id', 'form_add_responden')
                        @slot('action', route('tambahResponden'))
                        @slot('method', 'POST')
                        @slot('back_url', route('pilihResponden'))      
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
<script>
$(function() {
    $('#add-responden').on('click', function() {
        $('#formResponden').removeClass('d-none');
        $("#form_add_responden").trigger("reset");
    })
});
</script>
@endpush
    <script>
        $('#form-tambah').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ url('/survey/cek-pilih-responden') }}",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    resetError();
                    if (response.status == "success") {
                        swal("Berhasil",
                            "Survey berhasil ditambahkan", {
                                button: false,
                                icon: "success",
                            });
                        setTimeout(
                            function() {
                                $(location).attr('href',
                                    '{{ url('/survey/pertanyaan-survey') . '/' }}' + response
                                    .id_survey + "/" + response.id_kategori);
                            }, 2000);
                    } else if (response.status == "error") {
                        swal("Gagal",
                            response.pesan, {
                                icon: "error",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-danger'
                                    }
                                },
                            });
                    } else {
                        printErrorMsg(response.error);
                    }
                },
                error: function(response) {
                    swal("Gagal",
                        "Nama survey gagal ditambahkan", {
                            icon: "error",
                            buttons: {
                                confirm: {
                                    className: 'btn btn-danger'
                                }
                            },
                        });
                }
            });
        })

        $(function() {
            $('#add-responden').on('click', function() {
                $('#formResponden').removeClass('d-none');
                $("#form_add_responden").trigger("reset");
            })
        });

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
