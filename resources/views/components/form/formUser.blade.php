<form id="{{$id}}" action="#" method="{{$method}}">
    @csrf
    @if(isset($method) && $method == 'PUT')
        @method('PUT')
    @endif
    
    <div class="row">
        <div class="col-lg col-md">
            {{-- Username --}}
            @component('components.formGroup.input', ['label' => 'Nama Pengguna', 'type' => 'text', 'class' => '', 'id' => 'username', 'name' => 'username', 'placeholder' => 'Masukkan', 'value' => ''])
            @endcomponent
        </div>
        <div class="col-lg col-md">
            {{-- Password --}}
            @component('components.formGroup.input', ['label' => 'Kata Sandi', 'type' => 'text', 'class' => '', 'id' => 'password', 'name' => 'password', 'placeholder' => 'Masukkan', 'value' => ''])
            @endcomponent
        </div>
        <div class="col-lg col-md">
            {{-- Role --}}
            <div class="form-group">
                <label>Role</label><br>
                @component('components.formGroup.radio', ['label' => 'Admin', 'id' => 'admin', 'name' => 'role', 'value' => 'admin', 'checked' => '']) 
                @endcomponent
                @component('components.formGroup.radio', ['label' => 'Surveyor', 'id' => 'surveyor', 'name' => 'role', 'value' => 'surveyor', 'checked' => 'checked']) 
                @endcomponent
                <span class="text-danger error-text role-error"></span>
            </div>
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