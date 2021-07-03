<x-dashboard-layout title="البرامج">
    
<x-alert />

<div class="table-toolbar mb-3">
    <a href="{{ route('admin.programs.create') }}" class="btn btn-info">إنشاء</a>
</div>

<form action="{{ URL::current() }}" method="get" class="d-flex mb-3">
   <input type="text" name="name" class="form-control" placeholder="ادخل اسم البرنامج">
   <button type="submit" class="btn btn-secondary me-2">بحث</button>
 
</form>

    <table class="table">
        <thead class="bg-warning">
            <tr>
                <th>#</th>
                <th>الاسم</th>
                <th>الحالة</th>
                <th>تاريخ الانشاء</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($programs as $program)
            <tr>
                <td>{{ $program->id }}</td>
                <td>{{ $program->name }}</td>
                <td>{{ $program->status }}</td>
                <td>{{ $program->created_at }}</td>
                <td>
                    <div class="d-flex">
                        <div>
                            <form action="{{ route('admin.programs.edit', $program->id) }}" method="get">
                                @csrf

                                @method('edit')
                                <button type="submit" class="btn btn-sm btn-success">تعديل</button>
                            </form>
                        </div>
                   
                        <div class="me-1">
                            <form action="{{ route('admin.programs.destroy', $program->id) }}" method="post">
                                @csrf

                                @method('delete')
                                <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $programs->links() }}
</x-dashboard-layout>