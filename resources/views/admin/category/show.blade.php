@extends('admin.layouts.main')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row mb-3">
                    <div class="col-sm-12 d-flex">
                        <div class="col-sm-6 d-flex align-items-center">
                            <h3 class="mb-0">{{ $category->title }}</h3>
                            <a href="{{route('admin.category.edit', $category->id)}}" class="text-success"><i class="bi bi-pencil"></i></a>
                            <form action="{{route('admin.category.delete', $category->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="bi bi-trash text-danger" role="button"></i>
                                </button>
                            </form>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-6">

                        <div class="card mb-4">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered" role="table">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$category->id}}</td>

                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{$category->title}}</td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->

                        </div>
                    </div>
                </div>

                <!--end::Row-->
            </div>

            <!--end::Container-->
        </div>

        <!--end::App Content Header-->

    </main>
@endsection
