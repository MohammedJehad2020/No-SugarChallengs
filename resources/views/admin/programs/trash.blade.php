<x-admin-layout>

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> المستخدمين </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> المستخدمين
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
                                    <h4 class="card-title"> المستخدمين المحذوفين</h4>
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
                                <!-- Alert Message -->
                                <x-alert />
                                <!-- table -->
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table display nowrap table-striped table-bordered ">
                                            <thead class="bg-warning">
                                                <tr>
                                                <tr>
                                                    <th>#</th>
                                                    <th>الاسم</th>
                                                    <th>الحالة</th>
                                                    <th>تاريخ الحذف</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
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
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <!-- زر الاسترجاع -->
                                                            <div>
                                                                @can('restore', $program)
                                                                <form
                                                                    action="{{ route('admin.programs.restore', $program->id) }}"
                                                                    method="post">
                                                                    @csrf

                                                                    @method('put')
                                                                    <button type="submit"
                                                                        class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">استرجاع</button>
                                                                </form>
                                                                @endcan
                                                            </div>

                                                            <!-- زر تاكيد الحذف -->
                                                            <div class="me-1">
                                                                @can('force-delete', $program)
                                                                <form
                                                                    action="{{ route('admin.programs.force-delete', $program->id) }}"
                                                                    method="post">
                                                                    @csrf

                                                                    @method('Delete')
                                                                    <button type="submit"
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</button>
                                                                </form>
                                                                @endcan
                                                            </div>

                                                        </div>
                                                    </td>
                                                </tr>

                                                @endforeach

                                            </tbody>
                                        </table>
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


    {{ $programs->links() }}
</x-admin-layout>