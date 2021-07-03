<x-dashboard-layout title="تعديل البرنامج">


<form action="{{ route('admin.programs.update', $program->id) }}" method="post" enctype="multipart/form-data">
   @csrf
   @method('put')

   @include('admin.programs._form', [
        'button_label' => 'تحديث'
    ])


</form>


</x-dashboard-layout>
