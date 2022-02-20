<div class="form-group">
    <label for="">{{$label}}</label>
    <select name="{{$name}}" class="form-control form-control {{$class}}" id="{{$id}}">
        @if ($class == 'filter')
            <option value="">Semua</option>        
        @else
            <option value="" selected hidden>- Pilih Salah Satu -</option>        
        @endif
        {{$options}}
    </select>
    <span class="text-danger error-text {{$name}}-error"></span>
</div>