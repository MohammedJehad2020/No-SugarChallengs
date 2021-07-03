<x-dashboard-layout title="انشاء مستخدم جديد">

    <x-alert />


    <form action="{{ route('admin.patients.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        @include('admin.patients._form', [
               'button_lable' => 'اضافة',
            ])
    </form>


</x-dashboard-layout>