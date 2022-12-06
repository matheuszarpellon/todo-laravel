<div class="input-area">
    <label for="{{ $name }}">
        {{ $label ?? '' }}
    </label>
    <select name="{{ $name }}" id="{{ $name }}" placeholder="{{ $placeholder ?? '' }}"
        {{ !empty($required) ? 'required' : '' }}>
        <option value="1" selected disabled>Selecione a categoria</option>
        {{$slot}}
    </select>
</div>
