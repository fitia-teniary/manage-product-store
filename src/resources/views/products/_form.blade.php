<div class="mb-4">
    <label class="block font-medium mb-1" for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}"
           class="w-full border rounded px-3 py-2 @error('name') border-red-500 @enderror">
    @error('name')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block font-medium mb-1" for="description">Description</label>
    <textarea name="description" id="description" rows="4"
              class="w-full border rounded px-3 py-2 @error('description') border-red-500 @enderror">{{ old('description', $product->description ?? '') }}</textarea>
    @error('description')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block font-medium mb-1" for="price">Price</label>
    <input type="number" step="0.01" min="0" name="price" id="price" value="{{ old('price', $product->price ?? '') }}"
           class="w-full border rounded px-3 py-2 @error('price') border-red-500 @enderror">
    @error('price')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="mb-4">
    <label class="block font-medium mb-1" for="stock_quantity">Stock Quantity</label>
    <input type="number" min="0" name="stock_quantity" id="stock_quantity" value="{{ old('stock_quantity', $product->stock_quantity ?? 0) }}"
           class="w-full border rounded px-3 py-2 @error('stock_quantity') border-red-500 @enderror">
    @error('stock_quantity')
        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>