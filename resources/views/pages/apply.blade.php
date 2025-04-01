@extends('layouts.app')
@section('content')
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex justify-content-center">
                        <a class="logo" href="/" style="color:#03512b;">Help<span>Spread</span></a>
                    </div>
                    <h3 class="card-header text-center">Aplikujesz na wolontariat ((nazwa wolontariatu na ktory sie aplikuje)),</h3>
                    <div class="card-body">
                    <form method="POST" action="{{ route('apply') }}">
                            @csrf
                            <div class="active">
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="imie" class="form-control" name="imie" required
                                    autofocus>
                                    <label for="imie">Imie</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="nazwisko" class="form-control" name="nazwisko" required>
                                    <label for="nazwisko">Nazwisko</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wiek" class="form-control" name="wiek" required>
                                    <label for="wiek">Wiek</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <select id="target" name="target">
                                        @foreach($wolontariats as $w)
                                        @if($w->status=="active")
                                        <option value="<?=$w->wolontariat_firma?>">{{ $w->wolontariat_firma }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    <!-- <label for="target">Wolontariat</label> -->
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <textarea id="opis" class="form-control" name="opis" placeholder="Opis" required></textarea>
                                    <!-- <label for="wolontariat_opisd">Opis dlugi</label> -->
                                </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary">Zatwierdz</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection