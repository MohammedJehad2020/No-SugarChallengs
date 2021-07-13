

<div class="card-content collapse show">
    <div class="card-body">
        <form class="form" action="" method="POST" enctype="multipart/form-data">

            <div class="form-body">
                <h4 class="form-section"><i class="ft-home"></i> بيانات المستخدم </h4>

                <!-- *** -->

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">الاسم :</label>
                        <input type="text" name="name" value="{{ old('name', $patient->name) }}"
                            class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">الايميل :</label>
                        <input type="email" name="email" value="{{ old('email', $patient->email) }}"
                            class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">البرنامج :</label>
                        <select name="program_id" class="form-control @error('program_id') is-invalid @enderror">
                            <option value="">اختار البرنامج :</option>
                            @foreach ($programs as $program)
                            <option value="{{ $program->id }}" @if($program->id == old('program_id',
                                $patient->program_id)) selected
                                @endif>{{ $program->name }}</option>
                            @endforeach
                        </select>
                        @error('program_id')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">الجنس :</label>
                        <div>
                            <label class="card-title ml-1">
                                <input type="radio" name="gender" value="male" @if (old('gender', $patient->gender) ==
                                'male') checked
                                @endif >
                                ذكر
                            </label>
                            <label class="card-title ml-1">
                                <input type="radio" name="gender" value="female" @if (old('gender', $patient->gender) ==
                                'female') checked
                                @endif >
                                انثى
                            </label>
                        </div>
                        @error('gender')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="" class="card-title">تاريخ الميلاد :</label>
                        <input type="date" name="birthday" value="{{ old('birthday', $patient->DOB) }}"
                            class="form-control @error('birthday') is-invalid @enderror">
                        @error('birthday')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">الجوال :</label>
                        <input type="text" name="phone" value="{{ old('phone', $patient->phone) }}"
                            class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">الوزن :</label>
                        <input type="text" name="weight" value="{{ old('weight', $patient->weight) }}"
                            class="form-control @error('weight') is-invalid @enderror">
                        @error('weight')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">الطول :</label>
                        <input type="text" name="height" value="{{ old('height', $patient->height) }}"
                            class="form-control @error('height') is-invalid @enderror">
                        @error('height')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">نسبة السكر :</label>
                        <input type="text" name="sugar_level" value="{{ old('sugar_level', $patient->sugar_level) }}"
                            class="form-control @error('sugar_level') is-invalid @enderror">
                        @error('sugar_level')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">الدولة :</label>
                        <input type="text" name="country" value="{{ old('country', $patient->country) }}"
                            class="form-control @error('country') is-invalid @enderror">
                        @error('country')
                        <p class="invalid-feedback d-block">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


            </div>

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


<!-- -------------------------------- -->

@push('css')
<link rel="stylesheet" href="{{ asset('js/tagify/tagify.css') }}">
@endpush
@push('js')
<script src="{{ asset('js/tagify/tagify.min.js') }}"></script>
@endpush