@extends('layouts.app')
@section('content')
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <div class="card">
                    <div class="d-flex justify-content-center">
                        <a class="logo" href="/" style="color:#03512b;">Help<span>Spread</span></a>
                    </div>
                    <h3 class="card-header text-center">Zgłoś wolontariat,</h3>
                    <div class="card-body">
                    <form method="POST" action="{{ route('creating') }}">
                            @csrf
                            <div class="active">
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_firma" class="form-control" name="wolontariat_firma" required
                                    autofocus>
                                    <label for="wolontariat_firma">Firma</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_opisk" class="form-control" name="wolontariat_opisk" required>
                                    <label for="wolontariat_opisk">Opis krotki</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <textarea id="wolontariat_opisd" class="form-control" name="wolontariat_opisd" placeholder="Opis dlugi" required></textarea>
                                    <!-- <label for="wolontariat_opisd">Opis dlugi</label> -->
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_wiek" class="form-control" name="wolontariat_wiek" required>
                                    <label for="wolontariat_wiek">Wymagany wiek</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_miejsca" class="form-control" name="wolontariat_miejsca" required>
                                    <label for="wolontariat_miejsca">Ilosc poszukiwanych osób</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="date" placeholder='' id="wolontariat_datap" class="form-control" name="wolontariat_datap" required>
                                    <label for="wolontariat_datap">Początek wolontariatu</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="date" id="wolontariat_datak" class="form-control" name="wolontariat_datak" required>
                                    <label for="wolontariat_datak">Koniec wolontariatu</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_adresu" class="form-control" name="wolontariat_adresu" required>
                                    <label for="wolontariat_adresu">Ulica</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_adresn" class="form-control" name="wolontariat_adresn" required>
                                    <label for="wolontariat_adresn">Numer budynku</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_adresm" class="form-control" name="wolontariat_adresm" required>
                                    <label for="wolontariat_adresm">Miasto</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_adresk" class="form-control" name="wolontariat_adresk" required>
                                    <label for="wolontariat_adresk">Kod pocztowy</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_godzp" class="form-control" name="wolontariat_godzp" required>
                                    <label for="wolontariat_godzp">Godzina poczatek</label>
                                </div>
                                <div class="form-group mb-3 input-field">
                                    <input type="text" id="wolontariat_godzk" class="form-control" name="wolontariat_godzk" required>
                                    <label for="wolontariat_godzk">Godzina koniec</label>
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