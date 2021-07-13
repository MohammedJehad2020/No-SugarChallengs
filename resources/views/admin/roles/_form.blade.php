<div class="form-body">
    <h4 class="form-section"><i class="ft-home"></i> بيانات الصلاحية </h4>


    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="" class="card-title">اسم الصلاحية:</label>
            <input type="text" name="name" value="{{ old('name', $role->name) }}"
                class="form-control @error('name') is-invalid @enderror">
            @error('name')
            <p class="invalid-feedback">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group mb-3">
            <label for="" class="card-title">الصلاحيات:</label>
            <div>
                @foreach(config('abilities') as $key => $label)
                <div class="mb-1">
                    <label for="">
                        <input class="ml-1" type="checkbox" name="abilities[]" value="{{ $key }}" @if(in_array($key,
                            $role->abilities
                        ?? [])) checked @endif>
                        {{ $label }}
                    </label>
                </div>
                @endforeach
            </div>
            @error('abilities')
            <p class="invalid-feedback d-block">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>


<div class="form-actions col-md-6">
    <div class="col-1 mx-auto">
        <button type="submit" class="btn btn-primary"><i
                class="la la-check-square-o"></i>{{ $button_label ?? 'حفظ' }}</button>
    </div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- // Basic form layout section end -->
</div>
</div>
</div>


<!-- **************************************** -->

@push('css')
<link rel="stylesheet" href="{{ asset('js/tagify/tagify.css') }}">
@endpush