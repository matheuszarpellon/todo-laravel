<div class="input-area">
    <label for="{{$name}}">
        {{$label ?? ''}}
    </label>
    <textarea name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder ?? ''}}"
        {{!empty($required) ? 'required' : ''}}
    >
        {{$value ?? ''}}
    </textarea>
</div>
