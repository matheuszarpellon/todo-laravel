<div class="input-area">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <input
    type="{{empty($type) ? 'text' : $type}}"
    name="{{$name}}" id="{{$name}}"
    placeholder="{{$placeholder ?? ''}}"
    value="{{$value ?? ''}}"
    {{!empty($required) ? 'required' : ''}}
    />
</div>
