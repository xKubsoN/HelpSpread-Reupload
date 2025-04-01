@extends('layouts.deafult')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col">
      
      {{ Auth::user()->name }}
      {{ Auth::user()->email }}

      <a href="/signout">Signout</a>

      <!-- tabela jeden -->
      @if( Auth::user()->role == "creator")
      <h1>Twoje wolontariaty</h1>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STATUS</th>
      <th scope="col">#</th>
      <th scope="col">Organizator</th>
      <th scope="col">Opisy</th>
      <th scope="col">Wiek</th>
      <th scope="col">Miejsca</th>
      <th scope="col">Data</th>
      <th scope="col">Godzina</th>
      <th scope="col">Adres</th>
  </thead>
  <tbody>
      @foreach($wolontariats as $w)
      @if( Auth::user()->email == $w->creator)
    <tr>
      <td>{{ $w->status }}</td>
      <th scope="col">{{ $w->id }}</th>
      <td>{{ $w->wolontariat_firma}}</td>
      <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$w->letterid?>">Podgląd</button>
            <div class="modal fade" id="exampleModal<?=$w->letterid?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Opis krótki</h5>
              </div>
              <div class="modal-body">      
                <?=$w->wolontariat_opisk?>
              </div>
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Opis długi</h5>             
              </div>
              <div class="modal-body">      
              <?=$w->wolontariat_opisd?>
              </div>
                <!-- <div class="modal-footer"> -->
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- </div> -->
                </div>
              </div>
              </div>
            </td>
            <td>{{ $w->wolontariat_wiek }}</td>
            <td>{{ $w->wolontariat_miejsca }}</td>
            <td><?=$w->wolontariat_datap. " - " .$w->wolontariat_datak?></td>
            <td><?=$w->wolontariat_godzp. " - " .$w->wolontariat_godzk?> </td>
            <td><?="ul. " .$w->wolontariat_adresu. " " .$w->wolontariat_adresn. ", " .$w->wolontariat_adresk. " " .$w->wolontariat_adresm?></td>
    </tr>
      @endif
      @endforeach
  </tbody>
</table>
@endif

<!-- tabela dwa -->
      <h1>Twoje aplikacje</h1>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STATUS</th>
      <th scope="col">#</th>
      <th scope="col">Imie</th>
      <th scope="col">Nazwisko</th>
      <th scope="col">Email</th>
      <th scope="col">Wiek</th>
      <th scope="col">Opis</th>
      <th scope="col">Target</th>
    </tr>
  </thead>
  <tbody>
      @foreach($applys as $a)
      @if( Auth::user()->email == $a->user)
    <tr>
      <td>{{ $a->status }}</td>
      <th scope="col">{{ $a->id }}</th>
      <td>{{ $a->imie }}</td>
      <td>{{ $a->nazwisko }}</td>
      <td>{{ $a->user }}</td>
      <td>{{ $a->wiek }}</td>
      <td>modal</td>
      <td>{{ $a->target }}</td>
    </tr>
      @endif
      @endforeach
  </tbody>
</table>


      </div>
    </div>
  </div>

@stop