<x-dashboard-layout title="تحديد صلاحية للمستخدم">

<alert />

<form action="{{ route('admin.storeUserRole') }}" method="post" enctype="multipart/form-data">
    @csrf  

<div class="form-group mb-3">
    <label for="" class="mb-2">إسم المستخدم :</label>
    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
        <option value="">اختار المستخدم :</option>
        @foreach ($users as $user)
        <option value="{{ $user->id }}" @if($user->id == old('user_id', $user->user_id)) selected @endif>{{ $user->name }}</option>
        @endforeach
    </select>
    @error('user_id')
    <p class="invalid-feedback d-block">{{ $message }}</p>
    @enderror
</div>

<div class="form-group mb-3">
    <label for="" class="mb-2">إسم الصلاحية :</label>
    <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
        <option value="">اختار الصلاحية :</option>
        @foreach ($roles as $role)
        <option value="{{ $role->id }}" @if($role->id == old('role_id', $role->role_id)) selected @endif>{{ $role->name }}</option>
        @endforeach
    </select>
    @error('role_id')
    <p class="invalid-feedback d-block">{{ $message }}</p>
    @enderror
</div>


<div class="form-group mb-3">
    <button class="btn btn-primary" type="submit">{{ $button_lable ?? 'حفظ' }}</button>
</div>

</form>

</x-dashboard-layout>