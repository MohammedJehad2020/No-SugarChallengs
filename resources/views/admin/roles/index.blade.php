<x-admin-layout>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الصلاحيات </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> الصلاحيات
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع الصلاحيات</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                         
                                <x-alert />
                                <div class="table-toolbar mb-3 ml-2">
                                    <a href="{{ route('admin.roles.create') }}" class="btn btn-info">إنشاء صلاحية</a>
                                    <a href="{{ route('admin.determineUserRole') }}" class="btn btn-success">تحديد
                                        صلاحية للمستخدم</a>

                                </div>
                           

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table display nowrap table-striped table-bordered ">
                                            <thead class="bg-warning">
                                                <tr>
                                                    <th>#</th>
                                                    <th>اسم الصلاحية</th>
                                                    <th>تاريخ الانشاء</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($roles as $role)
                                                <tr>
                                                    <td>{{ $role->id }}</td>
                                                    <td>{{ $role->name }}</a>
                                                    </td>
                                                    <td>{{ $role->created_at }}</td>

                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <div>
                                                                <form
                                                                    action="{{ route('admin.roles.edit', $role->id) }}"
                                                                    method="get">
                                                                    @csrf

                                                                    @method('edit')
                                                                    <button type="submit"
                                                                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</button>
                                                                </form>
                                                            </div>

                                                            <div class="me-1">
                                                                <form
                                                                    action="{{ route('admin.roles.destroy', $role->id) }}"
                                                                    method="post">
                                                                    @csrf

                                                                    @method('delete')
                                                                    <button type="submit"
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                @endforeach

                                            </tbody>
                                        </table>
                                        </table>
                                        {{ $roles->links() }}
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


</x-admin-layout>