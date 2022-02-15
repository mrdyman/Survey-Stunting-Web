
@extends('templates/dashboard')

@section('title-tab')Pengguna
@endsection

@section('title')
Pengguna
@endsection

@section('subTitle')
Master
@endsection

@push('style')

@endpush

@section('content')
<section>
    <div class="row mb-3">
        <div class="col">
            @component('components.buttons.add')
                @slot('href')
                    {{route('user.create')}}
                @endslot
            @endcomponent
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-striped yajra-datatable p-0 table-responsive">
                <thead>
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Nama Profil</th>
                        <th>Nama Pengguna</th>
                        <th>Password</th>                                   
                        <th>Role</th>          
                        <th>Status</th>                   
                        <th>Aksi</th> 
                    </tr>
                </thead>                    
            </table>
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
            text : "Data pengguna yang dipilih akan dihapus beserta profilnya!",
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
                    url: "{{url('user')}}" + '/' + id,
                    data: {
                        _token: _token
                    },
                    success: function (data) {
                        swal({
                            title: 'Berhasil!',
                            text: 'Data pengguna beserta profilnya berhasil dihapus',
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
            // responsive: true,
            // "autoWidth": true,

            ajax: {
                url: "{{ route('user.index') }}",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    className: 'text-center',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'nama_profil',
                    name: 'nama_profil'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'password',
                    name: 'password'
                },
                {
                    data: 'role',
                    name: 'role'
                },
                {
                    data: 'status_pengguna',
                    name: 'status_pengguna',
                    className: 'text-center'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                }
            ],
            
        });
    })


</script>
@endpush
