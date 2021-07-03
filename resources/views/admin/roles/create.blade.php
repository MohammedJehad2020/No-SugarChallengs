

<x-dashboard-layout title="إضافة صلاحية جديدة">


@if (session()->has('success'))
    <div class="alert alert-success">
        <?= session()->get('success') ?>
    </div>
@endif 

<form action="{{ route('admin.roles.store') }}" method="post" enctype="multipart/form-data">
    @csrf   
    @include('admin.roles._form', [
           'button_lable' => 'إضافة',
        ])

</form>
</x-dashboard-layout>