<div class="mb-4">
    <label class="block font-medium mb-1" for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $customer->first_name ?? '') }}"
           class="w-full border rounded px-3 py-2 @error('first_name') border-red-500 @enderror">
    @error('first_name')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block font-medium mb-1" for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $customer->last_name ?? '') }}"
           class="w-full border rounded px-3 py-2 @error('last_name') border-red-500 @enderror">
    @error('last_name')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block font-medium mb-1" for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email', $customer->email ?? '') }}"
           class="w-full border rounded px-3 py-2 @error('email') border-red-500 @enderror">
    @error('email')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block font-medium mb-1" for="phone">Phone</label>
    <input type="text" name="phone" id="phone" value="{{ old('phone', $customer->phone ?? '') }}"
           class="w-full border rounded px-3 py-2 @error('phone') border-red-500 @enderror">
    @error('phone')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>