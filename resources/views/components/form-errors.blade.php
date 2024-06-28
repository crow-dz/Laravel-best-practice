@props(['name'])
@error($name)
<div class="mt-1">
    <p class="text-red-500"> {{ $message }}</p>
</div>
@enderror