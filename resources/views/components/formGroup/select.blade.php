<div class="form-group">
    <label for="">{{$label}}</label>
    <select name="{{$name}}" class="form-control form-control {{$class}}" id="{{$id}}">
        @if ($options != null)
            <option value="">- Pilih Salah Satu -</option>
            @foreach ($options as $option)
                <option value="{{$option->id}}" {{$option->id == $value ? 'selected' : ''}}>{{$option->username}}</option>
            @endforeach
        @else
            <option value="">- Pilih Salah Satu -</option>
        @endif
    </select>
    <span class="text-danger error-text {{$name}}-error"></span>
</div>