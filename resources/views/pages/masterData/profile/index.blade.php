
@extends('templates/dashboard')

@section('title-tab')Profil
@endsection

@section('title')
Profil
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
                    {{route('profile.create')}}
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
            <div class="row">
                <div class="col-lg-4 col-md-4 px-1">
                    @component('components.formGroup.select', [
                        'label' => 'Role',
                        'name' => 'role_filter',
                        'id' => 'role-filter',
                        'class' => 'filter',
                        ])  
                        @slot('options')
                            @foreach ($role as $item)
                                <option value="{{$item}}">{{$item}}</option>
                            @endforeach
                        @endslot
                    @endcomponent
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped yajra-datatable">
                    <thead>
                        <tr class="text-center">
                            <th>No.</th>
                            <th>Nama Pengguna</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>                    
                            {{-- <th>Alamat</th>                                                 --}}
                            <th>Nomor HP</th>                                                
                            <th>Email</th>       
                            <th>Role</th>                      
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
            text : "Data profil yang dipilih akan dihapus, tetapi akun pengguna yang bersangkutan tetap aktif",
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
                    url: "{{url('profile')}}" + '/' + id,
                    data: {
                        _token: _token
                    },
                    success: function (data) {
                        swal({
                            title: 'Berhasil!',
                            text: 'Data profil berhasil dihapus',
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
                url: "{{ route('profile.index') }}",
                data: function(d){
                    d.role = $('#role-filter').val();                    
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
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'nama_lengkap',
                    name: 'nama_lengkap'
                },
                {
                    data: 'jenis_kelamin',
                    name: 'jenis_kelamin'
                },
                {
                    data: 'tempat_lahir',
                    name: 'tempat_lahir'
                },
                {
                    data: 'tanggal_lahir',
                    name: 'tanggal_lahir'
                },
                // {
                //     data: 'alamat',
                //     name: 'alamat'
                // },
                {
                    data: 'nomor_hp',
                    name: 'nomor_hp'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'role',
                    name: 'role',
                    className: 'text-center'
                },
                {
                    data: 'action',
                    name: 'action',
                    className: 'text-center',
                    orderable: true,
                    searchable: true
                },
            ],
            columnDefs: [
                {
                    targets: 5,
                    render: function(data) {
                        return moment(data).format('DD-MM-YYYY');
                    }
                }
            ],
        });

        $('#role-filter').change(function () {
            table.draw();            
        })
    })
</script>
@endpush
