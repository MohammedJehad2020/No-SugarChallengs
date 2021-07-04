<x-dashboard-layout title=" البرامج المحذوفة">

    <x-alert />



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
                <th>تاريخ الحذف</th>
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
                <td>{{ $program->deleted_at }}</td>
                <td>
                    <div class="d-flex">
                        <!-- زر الاسترجاع -->
                        <div class="me-1">
                            @can('restore', $program)
                            <form action="{{ route('admin.programs.restore', $program->id) }}" method="post">
                                @csrf

                                @method('put')
                                <button type="submit" class="btn btn-sm btn-primary">استرجاع</button>
                            </form>
                            @endcan
                        </div>
                        <!-- زر تاكيد الحذف -->
                        <div class="me-1">
                            @can('force-delete', $program)
                            <form action="{{ route('admin.programs.force-delete', $program->id) }}" method="post">
                                @csrf

                                @method('Delete')
                                <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $programs->links() }}
</x-dashboard-layout>