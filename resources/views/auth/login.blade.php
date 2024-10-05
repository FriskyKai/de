@extends('layouts.layout')

@section('title', 'Авторизация')

@section('content')
    <section class="vh-100">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-5 text-center">
                            <h3>Вход в систему</h3>

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            @endif

                            <form action="{{ route('login') }}" method="post">
                                <div class="form-outline mb-4">
                                    @csrf
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="text" name="login" class="form-control form-control-lg" placeholder="Логин..." required>
                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Пароль..." required>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg">Войти</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
