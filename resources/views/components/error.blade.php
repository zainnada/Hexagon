@props(['name'])

@error($name)
<p class="error-message">{{ $message }}</p>
@enderror
<style>
    .error-message {
        margin-top: 8px;
        font-size: 12px;
        color: red;
        font-weight: bold;
    }
</style>
