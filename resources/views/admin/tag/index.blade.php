@extends('admin.layouts.main')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Тэги</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Тэги</li>

                        </ol>

                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <a href="{{route('admin.tag.create')}}" class="btn btn-primary mb-2">Добавить</a>
                    </div>
                    <div class="col-8">

                        <div class="card mb-4">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered" role="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Название</th>
                                        <th colspan="3" class="text-center">Действие</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tags as $tag)
                                    <tr class="align-middle">
                                        <td>{{$tag->id}}</td>
                                        <td>{{$tag->title}}</td>
                                        <td class="text-center"><a href="{{route('admin.tag.show', $tag->id)}}"><i class="bi bi-eye"></i></a></td>
                                        <td class="text-center"><a href="{{route('admin.tag.edit', $tag->id)}}" class="text-success">
                                                <i class="bi bi-pencil"></i></a></td>
                                        <td>
                                            <form class="text-center" action="{{route('admin.tag.delete', $tag->id)}}" method="POST">
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

                <!--end::Row-->
            </div>

            <!--end::Container-->
        </div>

        <!--end::App Content Header-->

    </main>
@endsection
