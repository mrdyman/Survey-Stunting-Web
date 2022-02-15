
@extends('templates/dashboard')

@section('title-tab')Lihat Profil
@endsection

@section('title')
Lihat Profil
@endsection

@section('subTitle')
Profil
@endsection

@push('style')

@endpush

@section('content')
<section>
    <div class="row mb-3 justify-content-center">
        <div class="col-lg-6 col-md-6 text-center">
            <div class="card card-pricing">
                <div class="card-header">
                    <h4 class="card-title">{{$profile->nama_lengkap}}</h4>
                </div>
                <div class="card-body">
                    <ul class="specification-list">
                        <li>
                            <span class="name-specification">Jenis Kelamin</span>
                            <span class="status-specification">{{$profile->jenis_kelamin}}</span>
                        </li>
                        <li>
                            <span class="name-specification">Tempat Lahir</span>
                            <span class="status-specification">{{$profile->tempat_lahir}}</span>
                        </li>
                        <li>
                            <span class="name-specification">Tanggal Lahir</span>
                            <span class="status-specification">{{ date('d-m-Y', strtotime($profile->tanggal_lahir))}}</span>
                        </li>
                        <li>
                            <span class="name-specification">Alamat</span>
                            <span class="status-specification">{{$profile->alamat}}</span>
                        </li>
                        <li>
                            <span class="name-specification">Desa / Kelurahan</span>
                            <span class="status-specification" id="desa_kelurahan"></span>
                        </li>
                        <li>
                            <span class="name-specification">Kecamatan</span>
                            <span class="status-specification" id="kecamatan"></span>
                        </li>
                        <li>
                            <span class="name-specification">Kabupaten / Kota</span>
                            <span class="status-specification" id="kabupaten_kota"></span>
                        </li>
                        <li>
                            <span class="name-specification">Provinsi</span>
                            <span class="status-specification" id="provinsi"></span>
                        </li>
                        <li>
                            <span class="name-specification">Nomor HP</span>
                            <span class="status-specification">{{$profile->nomor_hp}}</span>
                        </li>
                        <li>
                            <span class="name-specification">Email</span>
                            <span class="status-specification">{{$profile->email}}</span>
                        </li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="{{route('profile.edit', $profile->id)}}" id="btn-edit" class="btn btn-warning btn-sm mr-1 my-1 w-100"><i class="fas fa-edit"></i> Ubah Data</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('script')
<script>
    fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
    .then(response => response.json())
        .then(provinces => $.each(provinces, function(key, val) {   
            if (val.id == '{{ $profile->provinsi }}' ) {
                $('#provinsi').html(val.name);
                return false;
            } 
        })
    );

    fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/regencies/`+'{{$profile->provinsi}}'+`.json`)
    .then(response => response.json())
        .then(regencies => $.each(regencies, function(key, val) {
            if (val.id == '{{ $profile->kabupaten_kota }}' ) {
                $('#kabupaten_kota').html(val.name);
                return false;
            } 
        })
    );

    fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/districts/`+'{{$profile->kabupaten_kota}}'+`.json`)
    .then(response => response.json())
        .then(districts => $.each(districts, function(key, val) {
            if (val.id == '{{ $profile->kecamatan }}' ) {
                $('#kecamatan').html(val.name);
                return false;
            } 
        })
    );

    fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/villages/`+'{{$profile->kecamatan}}'+`.json`)
    .then(response => response.json())
        .then(villages => $.each(villages, function(key, val) {
            if (val.id == '{{ $profile->desa_kelurahan }}' ) {
                $('#desa_kelurahan').html(val.name);
                return false;
            } 
        })
    );
</script>
@endpush
