@extends('layouts.deafult')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Lista wolontariatów</h2>
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">STATUS</th>
              <th scope="col">#</th>
              <th scope="col">letterid</th>
              <th scope="col">Organizator</th>
              <th scope="col">Opisy</th>
              <th scope="col">Dodatkowe dane</th>
              <th scope="col">Adres</th>
              <th scope="col">Creator</th>
              <th scope="col">Manage</th>
            </tr>
          </thead>
          <tbody>
          @foreach($wolontariats as $w)
          <tr>
            <?php if($w->status=="active") { ?>
            <td style="color: green;">ACTIVE</td>
              <?php }elseif($w->status=="pending") {?>
                <td style="color: orange;">PENDING</td>
                <?php }elseif($w->status=="expired") {?>
                <td style="color: darkred;">EXPIRED</td>
                <?php }elseif($w->status=="denied") {?>
                <td style="color: red;">DENIED</td>
                <?php }else {?>
                <td style="color: darkgrey;">NONE</td>
                <?php }?>
            <td>{{ $w->id }}</td>
            <td>{{ $w->letterid }}</td>
            <td>{{ $w->wolontariat_firma }}</td>
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
            <td>
            <p><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Pokaz</a></p>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <p>Wiek: {{ $w->wolontariat_wiek }}</p>
                <p>Godzina: {{ $w->wolontariat_godzp }} - {{ $w->wolontariat_godzk}}</p>
                <p>Data: {{ $w->wolontariat_datap }} - {{$w->wolontariat_datak}}</p>
              </div>
            </div>
            </td>
            <td><?="ul. " .$w->wolontariat_adresu. " " .$w->wolontariat_adresn. ", " .$w->wolontariat_adresk. " " .$w->wolontariat_adresm?></td>
            <td>{{ $w->creator }}</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$w->wolontariat_firma?>">Zarządzaj</button>

            <div class="modal fade" id="exampleModal<?=$w->wolontariat_firma?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
              @if($w->status=="active")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: green;">ACTIVE</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">ZDEJMIJ</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @elseif($w->status=="pending")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: orange;">PENDING</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">AKCEPTUJ</button>
                  <button type="button" class="btn btn-primary">ODRZUC</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @elseif($w->status=="expired")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: darkred;">EXPIRED</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">PRZYWROC</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @elseif($w->status=="denied")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: red;">DENIED</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">PRZYWROC</button>
                  <button type="button" class="btn btn-primary">ZMIEN POWOD</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
                <div class="modal-header">
                  <a>Powód odrzucenia</a>
                </div>
                <div class="modal-body">
                  {{$w->reason}}
                </div>
              @else
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: grey;">NONE</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">AKCEPTUJ</button>
                  <button type="button" class="btn btn-primary">ODRZUC</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @endif
    </div>
  </div>
</div></td>
          </tr>
          @endforeach
      </tbody>
      </table>
      <h2>Lista uzytkowników</h2>
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">ROLA</th>
              <th scope="col">#</th>
              <th scope="col">UUID</th>
              <th scope="col">Nazwa</th>
              <th scope="col">E-Mail</th>
              <th scope="col">Creation</th>
              <th scope="col">Last update</th>
              <th scope="col">Manage</th>
            </tr>
          </thead>
          <tbody>
          @foreach($users as $u)
          <tr>
            <?php if($u->role=="admin") { ?>
            <td style="color: red;">ADMIN</td>
              <?php }elseif($u->role=="creator") {?>
                <td style="color: #249D9F;">CREATOR</td>
                <?php }elseif($u->role=="user") {?>
                <td style="color: grey;">USER</td>
                <?php }else {?>
                <td style="color: darkgrey;">NONE</td>
                <?php }?>
            <td>{{ $u->id }}</td>
            <td>tu bedzie UUID</td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->created_at }}</td>
            <td>{{ $u->updated_at }}</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$w->wolontariat_firma?>">Zarządzaj</button>

            <div class="modal fade" id="exampleModal<?=$w->wolontariat_firma?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
              @if($w->status=="active")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: green;">ACTIVE</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">ZDEJMIJ</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @elseif($w->status=="pending")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: orange;">PENDING</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">AKCEPTUJ</button>
                  <button type="button" class="btn btn-primary">ODRZUC</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @elseif($w->status=="expired")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: darkred;">EXPIRED</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">PRZYWROC</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @elseif($w->status=="denied")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: red;">DENIED</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">PRZYWROC</button>
                  <button type="button" class="btn btn-primary">ZMIEN POWOD</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
                <div class="modal-header">
                  <a>Powód odrzucenia</a>
                </div>
                <div class="modal-body">
                  {{$w->reason}}
                </div>
              @else
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: grey;">NONE</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">AKCEPTUJ</button>
                  <button type="button" class="btn btn-primary">ODRZUC</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @endif
    </div>
  </div>
</div></td>
          </tr>
          @endforeach
      </tbody>
      </table>
      <h2>Lista aplikacji</h2>
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">STATUS</th>
              <th scope="col">#</th>
              <th scope="col">letterid</th>
              <th scope="col">Imie</th>
              <th scope="col">Nazwisko</th>
              <th scope="col">Wiek</th>
              <th scope="col">Opis</th>
              <th scope="col">Utworzono</th>
              <th scope="col">Target</th>
              <th scope="col">User</th>
              <th scope="col">Manage</th>
            </tr>
          </thead>
          <tbody>
          @foreach($applys as $a)
          <tr>
            <?php if($a->status=="accepted") { ?>
            <td style="color: green;">ACCEPTED</td>
              <?php }elseif($a->status=="pending") {?>
                <td style="color: orange;">PENDING</td>
                <?php }elseif($a->status=="expired") {?>
                <td style="color: darkred;">EXPIRED</td>
                <?php }elseif($a->status=="denied") {?>
                <td style="color: red;">DENIED</td>
                <?php }else {?>
                <td style="color: darkgrey;">NONE</td>
                <?php }?>
            <td>{{ $a->id }}</td>
            <td>{{ $a->letterid }}</td>
            <td>{{ $a->imie }}</td>
            <td>{{ $a->nazwisko }}</td>
            <td>{{ $a->wiek }}</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$a->letterid?>">Podgląd</button>
            <div class="modal fade" id="exampleModal<?=$a->letterid?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Opis krótki</h5>
              </div>
              <div class="modal-body">      
                {{ $a->opis }}
              </div>
                <!-- <div class="modal-footer"> -->
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- </div> -->
                </div>
              </div>
              </div>
            </td>
            <td>{{ $a->created_at }}</td>
            <td>{{ $a->target }}</td>
            <td>{{ $a->user }}</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?=$w->wolontariat_firma?>">Zarządzaj</button>

            <div class="modal fade" id="exampleModal<?=$w->wolontariat_firma?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
              @if($w->status=="active")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: green;">ACTIVE</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">ZDEJMIJ</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @elseif($w->status=="pending")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: orange;">PENDING</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">AKCEPTUJ</button>
                  <button type="button" class="btn btn-primary">ODRZUC</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @elseif($w->status=="expired")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: darkred;">EXPIRED</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">PRZYWROC</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @elseif($w->status=="denied")
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: red;">DENIED</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">PRZYWROC</button>
                  <button type="button" class="btn btn-primary">ZMIEN POWOD</button>
                  <button type="button" class="btn btn-primary">AKTUALIZUJ</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
                <div class="modal-header">
                  <a>Powód odrzucenia</a>
                </div>
                <div class="modal-body">
                  {{$w->reason}}
                </div>
              @else
                <div class="modal-header">
                  id {{$w->id}}, {{$w->wolontariat_firma}}, ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}} <a style="color: grey;">NONE</a>
                </div>
                <div class="modal-body">      
                  <button type="button" class="btn btn-primary">AKCEPTUJ</button>
                  <button type="button" class="btn btn-primary">ODRZUC</button>
                  <button type="button" class="btn btn-primary">USUN</button>
                </div>
              @endif
    </div>
  </div>
</div></td>
          </tr>
          @endforeach
      </tbody>
      </table>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- @if (!Auth::guest())
    <span class="profile"><a role="button">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a></span>
    <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
    <span class="profile"><a role="button" href="/signout">Wyloguj się</a></span>
    @else
    <span class="profile"><a role="button" href="/login">Zaloguj sie</a></span>
    <span class="profile"><a role="button" href="/registration">Zarejestruj sie</a></span>
    @endif -->

@stop

<!-- <div class="row">
    <div class="col-8">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Imie" aria-label="Imie">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Nazwisko" aria-label="Nazwisko">
        </div>
      </div>
      <div class="row">
        <div class="col" style="width: 380px;">
        <div style="width: 227.8px; height= 38px">
          <input type="date" class="form-control date" placeholder="data urodzenia" aria-label="data urodzenia">
        </div>
        </div>
        <div class="col">
        <select class="col form-select" aria-label="Płeć">
          <option selected>płeć</option>
          <option value="1">Męczyzna</option>
          <option value="2">Kobieta</option>
          <option value="3">Osoba niebinarna</option>
        </select>
      </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Adres" aria-label="Adres">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Miasto" aria-label="Miasto">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="Adres2" aria-label="Adres2">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Kod pocztowy" aria-label="Kod pocztowy">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="number" class="form-control" placeholder="ilość dni udzuału" aria-label="ilość dni udzuału">
        </div>
        <div class="col"></div>
      </div>
      <div class="row">
        <div class="col">
          <label for="exampleFormControlTextarea1" class="form-label">Doświadczenie w wolontariacie</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nazwa@poczta.com.pl">
        </div>
          <div class="col">
            <input type="rel" class="form-control" placeholder="numer telefonu" aria-label="numer telefonu">
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->