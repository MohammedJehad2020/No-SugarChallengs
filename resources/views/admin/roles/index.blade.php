
<x-dashboard-layout title="الصلاحيات">

<x-alert />

<div class="table-toolbar mb-3">
    <a href="{{ route('admin.roles.create') }}" class="btn btn-info">إنشاء صلاحية</a>
    <a href="{{ route('admin.determineUserRole') }}" class="btn btn-success">تحديد صلاحية للمستخدم</a>

</div>


<!-- 
@if (session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif -->


<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>اسم الصلاحية</th>
            <th>تاريخ الانشاء</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td><a href="{{ route('admin.roles.edit', $role->id) }}"><?= $role->name ?></a></td>
            <td>{{ $role->created_at }}</td>
            <td>
                <form action="{{ route('admin.roles.destroy', $role->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</x-dashboard-layout>