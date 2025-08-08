@extends('admin.layouts.main')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Добавление поста</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Посты</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Создание</li>

                        </ol>

                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <input type="text" class="form-control mt-3" name="title" placeholder="Название поста"
                                       value="{{old('title')}}"
                                >
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror

                                <div class="input-group mt-3">
                                    <span class="input-group-text">Добавить текст</span>
                                    <textarea class="form-control" aria-label="With textarea" name="content"
                                              style="height: 66px;">
                                        {{old('content')}}
                                    </textarea>
                                </div>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror

                            </div>
                            <div class="input-group mt-3">
                                <input type="file" class="form-control" name="post_image">
                                <label class="input-group-text" for="inputGroupFile02">Добавить</label>
                            </div>
                            @error('post_image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <div class="form-group mt-3">
                                <label>Выберите категорию</label>
                                <select name="category_id" class="form-control mt-3" >
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                        {{$category->id == old('category_id') ? 'selected' : ''}}>
                                            {{$category->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('category_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

                            <div class="form-group mt-3">
                                <label>Выберите тэги</label>
                                <select class="form-select" name="tag_id[]" multiple aria-label="Multiple select example">
                                    @foreach($tags as $tag)
                                        <option {{is_array(old('tag_id')) && in_array($tag->id,old('tag_id')) ? 'selected' : ''}} value="{{ $tag->id }}"
                                            >{{$tag->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                            @error('tag_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror

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
