<div class="input-area">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input
    type="checkbox"
    name="{{$name}}" id="{{$name}}"
    value="1"
    {{!empty($required) ? 'required' : ''}}
    {{$checked ? 'checked' : ''}}
    />
</div>
