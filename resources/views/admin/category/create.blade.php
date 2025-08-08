@extends('admin.layouts.main')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Добавление категории</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Категории</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Создание</li>

                        </ol>

                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.category.store')}}" method="POST" class="w-25">
                            @csrf
                            <div>
                                <input type="text" class="form-control mt-3" name="title" placeholder="Название категории">
                                @error('title')
                                <div class="text-danger">Поле не может быть пустым</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary mt-3" value="Добавить">
                        </form>
                    </div>
                </div>

                <!--end::Row-->
            </div>

            <!--end::Container-->
        </div>

        <!--end::App Content Header-->

    </main>
@endsection
