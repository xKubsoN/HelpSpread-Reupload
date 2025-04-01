@extends('layouts.app')
@section('content')
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex justify-content-center">
                        <a class="logo" href="/" style="color:#03512b;">Help<span>Spread</span></a>
                    </div>
                    <h3 class="card-header text-center">Witamy!</h3>
                    <div class="card-body">
                        <form action="{{ route('register.custom') }}" method="POST" id='register-form'>
                            @csrf
                            <div class="active n-1">
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="name" class="form-control" name="name"
                                    required autofocus>
                                    <label for="name">Nazwa uzytkownika</label>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                    <label for="email_address">Adres e-mail</label>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}fdfsd</span>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-space-between mx-auto links">
                                    <a class="register" href="/login">Masz juz konto?</a>
                                    <a class="btn btn-primary next-1">Dalej</a>
                                </div>
                            </div>
                            <div class="n-2">
                                <div class="form-group mb-3 input-field">
                                    <input type="password" id="password" class="form-control" name="password"
                                    required autofocus>
                                    <label for="password">Podaj hasło</label>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="password" id="password-confirm" class="form-control" name="password-confirm"
                                    required autofocus>
                                    <label for="password-confirm">Potwierdź hasło</label>
                                    @if ($errors->has('password-confirm'))
                                    <span class="text-danger">{{ $errors->first('password-confirm') }}</span>
                                    @endif
                                </div>       <div class="d-flex justify-content-between mx-auto">
                                    <a class="btn btn-secondary back-1"> Cofnij</a>
                                    <a class="btn btn-primary next-2">Dalej</a>
                                </div>
                            </div>
                            <div class="n-3 m-3">
                                <span>Na podany e-mail wysłaliśmy link potwierdzający załozenie konta na platformie<br/>Aby korzystać z HelpSpread potwierdz konto<br/>Dziękujemy!</span>
                                <div class="d-flex justify-content-end mt-3">
                                    <button type="confirm" class="btn btn-primary"> Zakończ</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection