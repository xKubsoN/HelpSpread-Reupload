@extends('layouts.app')
@section('content')
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex justify-content-center">
                        <a class="logo" href="/" style="color:#03512b;">Help<span>Spread</span></a>
                    </div>
                    <h3 class="card-header text-center">Witamy ponownie,</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="active">
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="email" class="form-control" name="email" required
                                    autofocus>
                                    <label for="email">Adres e-mail</label>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    <label for="password">Hasło</label>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="mb-3 links">
                                    <a class="forget" href="#">Nie pamiętasz hasła?</a>
                                    <a class="register" href="/registration">Nie masz konta?</a>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Pamiętaj mnie
                                        </label>
                                    </div>
                                </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary">Zaloguj się</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection