<!-- /************************************** */ -->

<!-- alert message -->
<div class="card-content collapse show">
    <div class="card-body">
        <form class="form" action="" method="POST" enctype="multipart/form-data">

            <div class="form-body">
                <h4 class="form-section"><i class="ft-home"></i> بيانات البرنامج </h4>

                <!-- *** -->
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">اسم البرنامج :</label>
                        <input type="text" name="name" value="{{ old('name', $program->name) }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">الوصف :</label>
                        <textarea name="description"
                            class="form-control @error('description') is-invalid @enderror">{{ old('description', $program->description) }}</textarea>
                        @error('description')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">الصورة :</label>
                        <div class="mb-2">
                            <img src="{{ $program->image_url }}" height="200" alt="">
                        </div>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- status -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="" class="card-title ml-1">الحالة:</label>
                            <div class="form-check">
                                <label class="card-title ml-1">
                                    <input type="radio" name="status" value="فعال" @if(old('status', $program->status)
                                    == 'فعال') checked @endif>
                                    فعال
                                </label>
                                <label class="card-title ml-1">
                                    <input type="radio" name="status" value="غير فعال" @if(old('status',
                                        $program->status) == 'غير فعال') checked @endif>
                                    غير فعال
                                </label>
                            </div>
                            @error('status')
                            <p class="invalid-feedback d-block">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!--  -->

            </div>

            <!-- col-2 mx-auto -->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary"><i
                        class="la la-check-square-o"></i>{{ $button_label ?? 'حفظ' }}</button>
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