@extends('admin.layouts.main')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Добавление пользователя</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Создание</li>

                        </ol>

                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.user.store')}}" method="POST" class="w-25">
                            @csrf
                            <div>
                                <input type="text" class="form-control mt-3" name="name" placeholder="Имя пользователя">
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="text" class="form-control mt-3" name="email" placeholder="Email">
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label>Выберите роль</label>
                                <select class="form-select" name="role">
                                    @foreach($roles as $id => $role)
                                        <option value="{{$id}}"
                                            {{$id == old('role') ? 'selected' : ''}}
                                        >{{$role}}</option>
                                    @endforeach

                                </select>
                                @error('role')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div>
                                <input type="text" class="form-control mt-3" name="password" placeholder="Пароль">
                                @error('password')
                                <div class="text-danger">{{$message}}</div>
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
