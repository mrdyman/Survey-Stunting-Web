
@extends('templates/dashboard')

@section('title-tab')Responden
@endsection

@section('title')
Responden
@endsection

@section('subTitle')
Master
@endsection

@push('style')
    <style>
        #DataTables_Table_0_wrapper{
            padding: 0 !important
        }
        #DataTables_Table_0{
            width: 100% !important
        }
    </style>
@endpush

@section('content')
<section>
    <div class="row mb-3">
        <div class="col">
            @component('components.buttons.add')
                @slot('href')
                    {{route('responden.create')}}
                @endslot
                @slot('onClick')
                    
                @endslot
            @endcomponent
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-bordered table-striped yajra-datatable">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Nomor KK</th>
                            {{-- <th>Alamat</th> --}}
                            <th>Desa/Kelurahan</th>
                            <th>Kecamatan</th>
                            <th>Kabupaten/Kota</th>                          
                            <th>Provinsi</th>                          
                            <th>Nomor HP</th>                      
                            <th>Aksi</th> 
                        </tr>
                    </thead>                    
                </table>
            </div>
        </div>
    </div>
</section>

@endsection

@push('script')
<script>
    function hapus(id) {
        var _token = "{{csrf_token()}}";
        swal({
            title : 'Apakah anda yakin?',
            text : "Data responden yang dipilih akan dihapus!",
            type : 'warning',
            icon : 'warning',
            buttons: {
                cancel: {
                    visible: true,
                    className: 'btn btn-danger',
                    text: 'Batal'
                },
                confirm: {
                    visible: true,
                    className: 'btn btn-success',
                    text: 'Ya'
                }
            }  
        }).then((result) => {
            if (result) {
                $.ajax({
                    type: "DELETE",
                    url: "{{url('responden')}}" + '/' + id,
                    data: {
                        _token: _token
                    },
                    success: function (data) {
                        swal({
                            title: 'Berhasil!',
                            text: 'Data responden berhasil dihapus',
                            type: 'success',
                            icon: 'success',
                            button: false
                        })        
                        setTimeout(
                        function () {
                            location.reload();
                        }, 2000);   
                    },
                })
            } else {
                swal.close();
            }
        })
    }

    $(function() {
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: "{{ route('responden.index') }}",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    className: 'text-center',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'kartu_keluarga',
                    name: 'kartu_keluarga'
                },
                // {
                //     data: 'alamat',
                //     name: 'alamat'
                // },
                {
                    data: 'desa_kelurahan',
                    name: 'desa_kelurahan'
                },
                {
                    data: 'kecamatan',
                    name: 'kecamatan'
                },
                {
                    data: 'kabupaten_kota',
                    name: 'kabupaten_kota'
                },
                {
                    data: 'provinsi',
                    name: 'provinsi'
                },
                {
                    data: 'nomor_hp',
                    name: 'nomor_hp'
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

    })
</script>
@endpush
