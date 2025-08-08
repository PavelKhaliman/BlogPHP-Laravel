@extends('personal.layouts.main')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Избранное</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">

                        <li class="breadcrumb-item active" aria-current="page">Избранное</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <!--begin::Col-->
                <div class="col-6">
                    <!--begin::Small Box Widget 1-->



                        <div class="row">

                            <div class="col-12">

                                <div class="card mb-4">

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered" role="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Название</th>
                                                <th colspan="2" class="text-center">Действие</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($posts as $post)
                                                <tr class="align-middle">
                                                    <td>{{$post->id}}</td>
                                                    <td>{{$post->title}}</td>
                                                    <td class="text-center"><a href="{{route('admin.post.show', $post->id)}}"><i class="bi bi-eye"></i></a></td>
                                                    <td>
                                                        <form class="text-center" action="{{route('personal.liked.delete', $post->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="border-0 bg-transparent">
                                                                <i class="bi bi-trash text-danger" role="button"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->

                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end::Small Box Widget 1-->
                </div>
                <!--end::Col-->
                <div class="col-lg-3 col-6">
                    <!--begin::Small Box Widget 2-->

                    <!--end::Small Box Widget 2-->
                </div>
                <!--end::Col-->

                <!--end::Col-->

                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->

            <!-- /.row (main row) -->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
@endsection
