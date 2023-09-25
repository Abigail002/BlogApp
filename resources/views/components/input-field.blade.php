<div class="text-start">
    <div class="input-group with-icon">
        <span class="icon">
                {{ $slot }}
            </span>
        <input name="{{ $name }}" type="{{ $type }}" class="form-control rounded-2 py-4 @error($name) is-invalid @enderror" placeholder="{{ $placeholder }}" />
        @error($name)
        <div id="validationServer03Feedback" class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
    </div>
</div>
