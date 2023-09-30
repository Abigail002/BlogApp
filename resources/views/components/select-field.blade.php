<div class="">
    <label for="{{ $name }}" class="form-label fs-lg fw-medium mb-4">
        {{ $label }}
    </label>
    <div class="input-group with-icon">
        <span class="icon">
            {{ $slot }} </span>
        <select id="{{ $name }}" name="{{ $name }}" class="form-control rounded-2" required>
            @if (empty($options))
                <option disabled hidden>
                    No Data To Display
                </option>
            @else
                <option value="" disabled selected>Select Post Category</option>
                @foreach ($options as $key => $option)
                    <option value="{{ $key }}" @selected(old($name, $value) == $key)>{{ $option }}</option>
                @endforeach
            @endif
        </select>
        @error($name)
            <div @class(['d-one', 'is-valid' => $errors->has($name)])></div>
            <span class="invalid-feedback text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>
