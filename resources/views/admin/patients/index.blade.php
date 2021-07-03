<x-dashboard-layout title="المستخدمين">

    <x-alert />

    <div class="table-toolbar mb-3">
        <a href="{{ route('admin.patients.create') }}" class="btn btn-info">إنشاء</a>
    </div>

    <form action="{{ URL::current() }}" method="get" class="d-flex mb-3">
        <input type="text" name="name" class="form-control " placeholder="ادخل الاسم">
        <button type="submit" class="btn btn-secondary me-2">بحث</button>

    </form>


    <table class="table">
        <thead class="bg-warning">
            <tr>
                <th>#</th>
                <th>الاسم</th>
                <th>اسم البرنامج</th>
                <th>تاريخ الميلاد</th>
                <th>الجوال</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->id }}</td>
                <td>{{ $patient->name }}</td>
                <td>{{ $patient->program->name}}</td>
                <td>{{ $patient->DOB }}</td>
                <td>{{ $patient->phone }}</td>
                <td>
                    <div class="d-flex">
                        <div >
                            <form action="{{ route('admin.patients.edit', $patient->id) }}" method="get">
                                @csrf

                                @method('edit')
                                <button type="submit" class="btn btn-sm btn-success">تعديل</button>
                            </form>
                        </div>

                        <div class="me-1">
                            <form action="{{ route('admin.patients.destroy', $patient->id) }}" method="post">
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
    {{ $patients->links() }}

</x-dashboard-layout>