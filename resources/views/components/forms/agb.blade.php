<div>
    @error('agb')
        <p class="error-msg">{{ $message }}</p>
    @enderror
    <div class="inline-flex items-center shrink-0">
        <input type="checkbox" name="agb" id="agb" @checked(old('agb'))
            class="w-6" required>
        <label for="agb" class="pl-2">I accept the Terms and Conditions, including the
            cancellation and refund policy.</label>
    </div>
</div>