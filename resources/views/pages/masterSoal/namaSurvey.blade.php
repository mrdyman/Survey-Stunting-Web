@extends('templates/dashboard')

@section('title-tab')Nama Survey
@endsection

@section('title')
Nama Survey
@endsection

@section('subTitle')
Master Soal
@endsection

@push('style')
@endpush

@section('content')
<section>
    <div class="row mb-3">
        <div class="col">
            @component('components.buttons.add',[
            'href' => 'javascript:void(0);',
            'onClick' => 'tambah()',
            ])
            @endcomponent
        </div>
    </div>
</section>

<div class="row">
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr class="text-center  ">
                <th>No.</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

{{-- NOTE: Modal Tambah --}}
<div class="modal" tabindex="-1" role="dialog" id="modal-tambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Nama Survey</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-tambah">
                    {{-- Input Nama Survey --}}
                    @component('components.formGroup.input',[
                    'label' => 'Nama Survey',
                    'type' => 'text',
                    'class' => '',
                    'id' => 'nama',
                    'name' => 'nama',
                    'placeholder' => 'Masukkan',
                    'value' => '',
                    ])
                    @endcomponent

                    {{-- Input Tipe Survey --}}
                    @component('components.formGroup.select',[
                    'label' => 'Tipe Survey',
                    'name' => 'tipe',
                    'id' => 'tipe',
                    'class' => 'tipe',
                    ])
                    @slot('options')
                    <option value="Pre">Pre</option>
                    <option value="Post">Post</option>
                    @endslot
                    @endcomponent
            </div>
            <div class="modal-footer">
                @component('components.buttons.submit', ['label' => 'Simpan'])
                @endcomponent
            </div>
            </form>
        </div>
    </div>
</div>

{{-- NOTE: Modal Edit --}}
<div class="modal" tabindex="-1" role="dialog" id="modal-edit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Nama Survey</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-edit">
                    @method('PUT')
                    {{-- Input Nama Survey --}}
                    @component('components.formGroup.input',[
                    'label' => 'Nama Survey',
                    'type' => 'text',
                    'class' => '',
                    'id' => 'nama_edit',
                    'name' => 'nama',
                    'placeholder' => 'Masukkan',
                    'value' => '',
                    ])
                    @endcomponent

                    {{-- Input Tipe Survey --}}
                    @component('components.formGroup.select',[
                    'label' => 'Tipe Survey',
                    'name' => 'tipe',
                    'id' => 'tipe_edit',
                    'class' => 'tipe',
                    ])
                    @slot('options')
                    <option value="Pre">Pre</option>
                    <option value="Post">Post</option>
                    @endslot
                    @endcomponent
            </div>
            <div class="modal-footer">
                @component('components.buttons.submit', ['label' => 'Simpan'])
                @endcomponent
            </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    var idEdit = 0;

    function tambah() {
        resetForm();
        resetError();
        $("#modal-tambah").modal('show');
    }

    $('#form-tambah').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "{{ route('namaSurvey.store') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function (response) {
                resetError();
                if (response.status == "success") {
                    swal("Berhasil",
                        "Nama survey berhasil ditambahkan", {
                            icon: "success",
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            },
                        });
                    $('#modal-tambah').modal('hide');
                    table.draw();
                    resetForm();
                } else {
                    printErrorMsg(response.error);
                }
            },
            error: function (response) {
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

    $('#form-edit').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: "{{ url('namaSurvey') . '/' }}" + idEdit,
            type: "PUT",
            data: $(this).serialize(),
            success: function (response) {
                resetError();
                if (response.status == "success") {
                    swal("Berhasil",
                        "Nama survey berhasil diubah", {
                            icon: "success",
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            },
                        });
                    $('#modal-edit').modal('hide');
                    table.draw();
                    resetForm();
                } else {
                    printErrorMsg(response.error);
                }
            },
            error: function (response) {
                swal("Gagal",
                    "Nama survey gagal diubah", {
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

    function edit(id) {
        idEdit = id;
        $.ajax({
            url: "{{ url('namaSurvey') . '/' }}" + id + "/edit",
            type: "GET",
            success: function (response) {
                $('#nama_edit').val(response.data.nama);
                $('#tipe_edit').val(response.data.tipe);
                $('#modal-edit').modal('show');
            },
            error: function (response) {
                swal("Gagal",
                    "Nama survey gagal diedit", {
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

    function hapus(id) {
        swal({
            title: "Apakah anda yakin?",
            text: "Nama Survey akan dihapus secara permanen, seluruh data yang berhubungan dengan nama survey ini akan ikut terhapus",
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
                    url: "{{ url('namaSurvey') . '/' }}" + id,
                    type: "DELETE",
                    success: function (response) {
                        if (response.status == "success") {
                            swal("Berhasil",
                                "Nama survey berhasil dihapus", {
                                    icon: "success",
                                    buttons: {
                                        confirm: {
                                            className: 'btn btn-success'
                                        }
                                    },
                                });
                            table.draw();
                        } else {
                            swal("Gagal",
                                "Nama survey gagal dihapus", {
                                    icon: "error",
                                    buttons: {
                                        confirm: {
                                            className: 'btn btn-danger'
                                        }
                                    },
                                });
                        }
                    },
                    error: function (response) {
                        swal("Gagal",
                            "Nama survey gagal dihapus", {
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
    }

    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            url: "{{ route('namaSurvey.index') }}",
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
                data: 'tipe',
                name: 'tipe',
                className: 'text-center',
            },
            {
                data: 'action',
                name: 'action',
                className: 'text-center',
                orderable: true,
                searchable: true
            },
        ],
    });

    function printErrorMsg(msg) {
        $.each(msg, function (key, value) {
            $('.' + key + '-error').text(value);
        });
    }

    function resetError() {
        $('.nama-error').text('');
        $('.urutan-error').text('');
    }

    function resetForm() {
        $('#form-tambah')[0].reset();
    }

</script>
@endpush
