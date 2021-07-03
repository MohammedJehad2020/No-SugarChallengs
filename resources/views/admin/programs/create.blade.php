<x-dashboard-layout title="إضافة برنامج جديد">

 <form action="{{ route('admin.programs.store') }}" method="post" enctype="multipart/form-data">
         @csrf

         @include('admin.programs._form', [
              'button_label' => 'اضافة'
         ])

     
 
 </form>
</x-dashboard-layout>