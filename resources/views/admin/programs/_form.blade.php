
<div class="form-group mb-3">
    <label for="">اسم البرنامج :</label>
    <input type="text" name="name" value="{{ old('name', $program->name) }}" class="form-control @error('name') is-invalid @enderror">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">الوصف :</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $program->description) }}</textarea>
    @error('description')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">الصورة :</label>
    <div class="mb-2">
        <img src="{{ $program->image_url }}" height="200" alt="">
    </div>    
    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
    @error('image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="">الحالة:</label>
    <div>
        <label><input type="radio" name="status" value="فعال" @if (old('status', $program->status) == 'فعال') checked @endif>
            فعال</label>
        <label><input type="radio" name="status" value="غير فعال" @if (old('status', $program->status) == 'غير فعال') checked @endif>
            غير فعال </label>
    </div>
    @error('status')
    <p class="invalid-feedback d-block">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'حفظ' }}</button>
</div>

@push('css')
<link rel="stylesheet" href="{{ asset('js/tagify/tagify.css') }}">
@endpush
