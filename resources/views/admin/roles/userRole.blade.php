<x-admin-layout>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> الصلاحيات </a>
                                </li>
                                <li class="breadcrumb-item active">تحديد صلاحية للمستخدم
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> تحديد صلاحية للمستخدم </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <alert />

                                <form action="{{ route('admin.storeUserRole') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-body">
                                        <h4 class="form-section"><i class="ft-home"></i> بيانات الصلاحية </h4>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="" class="mb-2" class="card-title">إسم المستخدم :</label>
                                                <select name="user_id"
                                                    class="form-control @error('user_id') is-invalid @enderror">
                                                    <option value="">اختار المستخدم :</option>
                                                    @foreach ($users as $user)
                                                    <option value="{{ $user->id }}" @if($user->id == old('user_id',
                                                        $user->user_id)) selected @endif>{{ $user->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('user_id')
                                                <p class="invalid-feedback d-block">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="" class="mb-2" class="card-title">إسم الصلاحية :</label>
                                                <select name="role_id"
                                                    class="form-control @error('role_id') is-invalid @enderror">
                                                    <option value="">اختار الصلاحية :</option>
                                                    @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}" @if($role->id == old('role_id',
                                                        $role->role_id)) selected @endif>{{ $role->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('role_id')
                                                <p class="invalid-feedback d-block">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- col-2 mx-auto -->
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
</x-admin-layout>

<!-- **************************************** -->

@push('css')
<link rel="stylesheet" href="{{ asset('js/tagify/tagify.css') }}">
@endpush