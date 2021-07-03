

<x-dashboard-layout title="التعديل على الصلاحية">

@if (session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

<form action="{{ route('admin.roles.update', $role->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put') <!-- use to change post method to put method -->

    @include('admin.roles._form', [
           'button_lable' => 'تحديث',
        ])
</form>

</x-dashboard-layout>