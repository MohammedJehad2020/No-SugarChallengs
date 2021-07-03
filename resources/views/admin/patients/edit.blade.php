<x-dashboard-layout title="تعديل بيانات المستخدم">
    <x-alert />

    <form action="{{ route('admin.patients.update', $patient->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

        @include('admin.patients._form', [
               'button_lable' => 'تحديث'
            ])
    </form>

</x-dashboard-layout>