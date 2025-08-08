@extends('personal.layouts.main')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('personal.comment.update', $comment->id) }}" method="POST" class="w-50">
                            @csrf
                            @method('PATCH')
                            <div>
                                <textarea class="form-control" name="message" cols="30" rows="10">{{$comment->message}}</textarea>

                                @error('message')
                                <div class="text-danger">Поле не может быть пустым</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-primary mt-3" value="Обновить">
                        </form>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->

        <!--end::App Content-->
    </main>
@endsection
