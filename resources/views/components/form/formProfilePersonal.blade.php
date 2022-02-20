<form id="{{$form_id}}" action="#" method="POST" enctype="multipart/form-data">
    @csrf
    {{-- @if(isset($method) && $method == 'PUT')
        @method('PUT')
    @endif --}}

    <div class="row">
        <div class="col-lg col-md">
            {{-- Nama Lengkap--}}
            @component('components.formGroup.input', ['label' => 'Nama Lengkap', 'type' => 'text', 'class' => '', 'id' => 'nama-lengkap', 'name' => 'nama_lengkap', 'placeholder' => 'Masukkan', 'value' => $profile->nama_lengkap ?? null])
            @endcomponent
        </div>
        <div class="col-lg-4 col-md-4">
            {{-- Jenis Kelamin --}}
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                @component('components.formGroup.radio', ['label' => 'Laki-laki', 'id' => 'laki-laki', 'name' => 'jenis_kelamin', 'value' => 'Laki-laki', 'checked' => $profile->jenis_kelamin ?? null])
                @endcomponent
                @component('components.formGroup.radio', ['label' => 'Perempuan', 'id' => 'perempuan', 'name' => 'jenis_kelamin', 'value' => 'Perempuan', 'checked' => $profile->jenis_kelamin ?? null])
                @endcomponent
                <div>
                    <span class="text-danger error-text jenis_kelamin-error"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg col-md">
            {{-- Tempat Lahir --}}
            @component('components.formGroup.input', ['label' => 'Tempat Lahir', 'type' => 'text', 'class' => '', 'id' => 'tempat-lahir', 'name' => 'tempat_lahir', 'placeholder' => 'Masukkan', 'value' => $profile->tempat_lahir ?? null])
            @endcomponent
        </div>
        <div class="col-lg col-md">
            {{-- Tanggal Lahir --}}
            @component('components.formGroup.input', ['label' => 'Tanggal Lahir (contoh: 31-12-1992)', 'type' => 'text', 'class' => 'tanggal', 'id' => 'tanggal-lahir', 'name' => 'tanggal_lahir', 'placeholder' => 'Masukkan', 'value' => $profile->tanggal_lahir ?? null])
            @endcomponent
        </div>
    </div>

    {{-- alamat --}}
    @component('components.formGroup.textArea', ['label' => 'Alamat', 'class' => '', 'id' => 'alamat', 'name' => 'alamat', 'placeholder' => 'Masukkan', 'value' => $profile->alamat ?? null])
    @endcomponent

    <div class="row">
        <div class="col-lg col-md">
            {{-- Provinsi --}}
            @component('components.formGroup.select', [
                'label' => 'Provinsi',
                'name' => 'provinsi',
                'id' => 'provinsi',
                'class' => 'select2',
                'options' => '',
            ])  
            @endcomponent
        </div>
        <div class="col-lg col-md">
            {{-- Kabupaten / Kota --}}
            @component('components.formGroup.select', [
                'label' => 'Kabupaten / Kota',
                'name' => 'kabupaten_kota',
                'id' => 'kabupaten-kota',
                'class' => 'select2',
                'options' => '',
            ])  
            @endcomponent
        </div>
    </div>
    <div class="row">
        <div class="col-lg col-md">
            {{-- Kecamatan --}}
            @component('components.formGroup.select', [
                'label' => 'Kecamatan',
                'name' => 'kecamatan',
                'id' => 'kecamatan',
                'class' => 'select2',
                'options' => '',
            ])  
            @endcomponent
        </div>
        <div class="col-lg col-md">
            {{-- Desa / Kelurahan --}}
            @component('components.formGroup.select', [
                'label' => 'Desa / Kelurahan',
                'name' => 'desa_kelurahan',
                'id' => 'desa-kelurahan',
                'class' => 'select2',
                'options' => '',
            ])  
            @endcomponent
        </div>
    </div>

    <div class="row">
        <div class="col-lg col-md">
            {{-- Nomor HP --}}
            @component('components.formGroup.input', ['label' => 'Nomor HP', 'type' => 'text', 'class' => 'angka', 'id' => 'nomor-hp', 'name' => 'nomor_hp', 'placeholder' => 'Masukkan', 'value' => $profile->nomor_hp ?? null])
            @endcomponent
        </div>
        <div class="col-lg col-md">
            {{-- Email --}}
            @component('components.formGroup.input', ['label' => 'Email (optional)', 'type' => 'text', 'class' => '', 'id' => 'email', 'name' => 'email', 'placeholder' => 'Masukkan', 'value' => $profile->email ?? null])
            @endcomponent
        </div>
    </div>

    {{-- Submit --}}
    <div class="form-row mt-2">
        <div class="form-group ml-auto">
            @component('components.buttons.submit', ['label' => 'Simpan'])
            @endcomponent
        </div>
    </div>
</form>


@push('script')
<script>
    $(function() {
        if('{{$method}}' == 'PUT') {
            $('#user-id').attr('disabled', true);
        }
        $('#kabupaten-kota').attr('disabled', true);
        $('#kecamatan').attr('disabled', true);
        $('#desa-kelurahan').attr('disabled', true);

        fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`)
        .then(response => response.json())
            .then(provinces => $.each(provinces, function(key, val) {   
                if (val.id == '{{ $profile->provinsi ?? null }}' ) {
                    $('#provinsi').append(`<option value="${val.id}" selected>${val.name}</option>`);
                    $('#provinsi').trigger('change');
                } else {
                    $('#provinsi').append(`<option value="${val.id}">${val.name}</option>`);
                } 
            })
        );

        $("#provinsi").change(function() {
            if($("#provinsi").val() != ''){
                $("#kabupaten-kota").html('');
                $("#kabupaten-kota").append('<option value="">- Pilih Salah Satu -</option>')
                $('#kabupaten-kota').attr('disabled', false);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/regencies/`+$("#provinsi").val()+`.json`)
                .then(response => response.json())
                    .then(regencies => $.each(regencies, function(key, val) {
                        if (val.id == '{{ $profile->kabupaten_kota ?? null }}' ) {
                            $('#kabupaten-kota').append(`<option value="${val.id}" selected>${val.name}</option>`);
                            $('#kabupaten-kota').trigger('change');
                        } else {
                            $('#kabupaten-kota').append(`<option value="${val.id}">${val.name}</option>`);
                        }
                    })
                );
            }
        });

        $("#kabupaten-kota").change(function() {
            if($("#kabupaten-kota").val() != ''){
                $("#kecamatan").html('');
                $("#kecamatan").append('<option value="">- Pilih Salah Satu -</option>')
                $('#kecamatan').attr('disabled', false);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/districts/`+$("#kabupaten-kota").val()+`.json`)
                .then(response => response.json())
                    .then(districts => $.each(districts, function(key, val) {
                        if(val.id == '{{ $profile->kecamatan ?? null }}' ) {
                            $('#kecamatan').append(`<option value="${val.id}" selected>${val.name}</option>`);
                            $('#kecamatan').trigger('change');
                        } else {
                            $('#kecamatan').append(`<option value="${val.id}">${val.name}</option>`);
                        } 
                    })
                );
            }
        });

        $("#kecamatan").change(function() {
            if($("#kecamatan").val() != ''){
                $("#desa-kelurahan").html('');
                $("#desa-kelurahan").append('<option value="">- Pilih Salah Satu -</option>')
                $('#desa-kelurahan').attr('disabled', false);
                fetch(`http://www.emsifa.com/api-wilayah-indonesia/api/villages/`+$("#kecamatan").val()+`.json`)
                .then(response => response.json())
                    .then(villages => $.each(villages, function(key, val) {
                        if(val.id == '{{ $profile->desa_kelurahan ?? null }}' ) {
                            $('#desa-kelurahan').append(`<option value="${val.id}" selected>${val.name}</option>`);
                        } else {
                            $('#desa-kelurahan').append(`<option value="${val.id}">${val.name}</option>`);
                        }
                    })
                );
            }
        });

        $('#{{$form_id}}').submit(function(e) {
            $("#overlay").fadeIn(100);
            e.preventDefault();
            $('.error-text').text('');
            var formData = new FormData(this)
            $.ajax({
                type: "POST",
                url: "{{$action}}",
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                data: formData,
                cache : false,
                processData: false,
                contentType: false,
                success: function (data) {
                    console.log(data);
                    $("#overlay").fadeOut(100);
                    if ($.isEmptyObject(data.error)) {
                        if('{{$method}}' == 'PUT') {
                            swal({
                                title: "Berhasil!",
                                text: "Perubahan berhasil disimpan!",
                                icon: "success",
                                button: false
                            })
                        } else{
                            swal({
                                title: "Berhasil!",
                                text: "Data berhasil disimpan!",
                                icon: "success",
                                button: false
                            })
                        }
                        setTimeout(
                        function () {
                            window.location.href = "{{$back_url}}";
                        }, 2000);
                    
                    }
                    else{
                        swal({
                            title: "Terjadi Kesalahan!",
                            text: "Data gagal disimpan, silahkan cek kembali inputan anda.",
                            icon: "error",
                        });
                        printErrorMsg(data.error);
                    }
                },
            })

        })

        const printErrorMsg = (msg) => {
            $.each(msg, function (key, value) {
                $('.' + key + '-error').text(value);
            });
        }

       
    });

</script>
@endpush