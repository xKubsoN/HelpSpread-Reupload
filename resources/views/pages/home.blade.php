@extends('layouts.app')
@section('content')
<div class="container-fluid">
<!-- <h1>tu kiedys bedzie mapka</h1> -->
<div id="map"></div>
              
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBh7E_bxX-1Q--SfX0J_Qbut-Yhz3KF80Q&callback=initMap&v=weekly" defer></script>
</div>

<div class="sidebar position-absolute h-100 top-0 pe-4">
  <div class="section-logo d-flex justify-content-between">
    <a class="navbar-brand logo d-flex align-items-center" href="#" style="color:#03512b;">Help<span>Spread</span></a>
    <a role="button" id="sidebar-button" class="btn sidebar-button d-flex justify-content-center overflow-hidden">
      <img id="sidebar-button-image" class="sidebar-button-image position-relative" src="gfx/open.svg" alt="">
    </a>
  </div>
  <div class="section-list">
    <div class="input-group section-list-search">
      <input type="search" class="form-control section-list-search-bar rounded" placeholder="Szukaj" aria-label="Search" aria-describedby="search-addon" />
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
  @foreach ($wolontariats as $w)
  @if($w->status=="active")
          <div class="accordion-item" data-address="<?=$w->wolontariat_adresu. " " .$w->wolontariat_adresn. " " .$w->wolontariat_adresk. " " .$w->wolontariat_adresm?>" data-name="<?=$w->wolontariat_firma?>" id="item-<?=$w->letterid?>">
            <h2 class="accordion-header" id="flush-heading<?=$w->letterid?>">
              <button class="accordion-button collapsed" href="#<?=$w->wolontariat_firma?>" data-address="<?=$w->wolontariat_adresu. " " .$w->wolontariat_adresn. " " .$w->wolontariat_adresk. " " .$w->wolontariat_adresm?>" id="a" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?=$w->letterid?>" aria-expanded="false" aria-controls="flush-collapse<?=$w->letterid?>">
                <div class='d-flex flex-column gap-1'>
                  <span class="accordion-button--title">
                    {{ $w->wolontariat_firma }}
                  </span>
                  <span class='accordion-button--date'>
                    ul. {{$w->wolontariat_adresu}} {{$w->wolontariat_adresn}}, {{$w->wolontariat_adresk}} {{$w->wolontariat_adresm}}
                  </span>
                </div>
  </button>
            </h2>
            <div id="flush-collapse<?=$w->letterid?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?=$w->letterid?>" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body px-5 gap-3">
                <div class="accordion-body--info">
                  {{$w->wolontariat_opisd}}
                </div>
                <div class="accordion-body--date">
                  {{$w->wolontariat_datap}} - {{$w->wolontariat_datak}}
                </div>
                <div class="accordion-body--hours">
                  {{$w->wolontariat_datap}} - {{$w->wolontariat_godzp}}
                </div>
                <div class="accordion-body--slots">
                  Zapotrzebowanie: {{$w->wolontariat_miejsca}}
                </div>
                <span class="accordion-body--buttons mx-0">
                  <!-- <button class="btn btn-primary rounded">mapa</button>  -->
                  <a type='button' href="/apply" class="btn btn-secondary rounded">aplikuj</a>
                </span>
              </div>
            </div>
          </div>
        @endif
        @endforeach
        </div>
  </div>
  <div class="section-profile">
    <img class="profile-image" src="gfx/profile-placeholder.jpg" alt="">
    @if (!Auth::guest())
    <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  {{ Auth::user()->name }}
  </a>
  @if(Auth::user()->hasRole('admin'))
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/admin">Admin panel</a>
    <a class="dropdown-item" href="/creating">Zglos wolontariat</a>
    <a class="dropdown-item" href="/profile">Profil</a>
    <a class="dropdown-item" href="/signout">Signout</a>
  </div>
  @elseif(Auth::user()->hasRole('creator'))
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/creating">Zglos wolontariat</a>
    <a class="dropdown-item" href="/profile">Profil</a>
    <a class="dropdown-item" href="/signout">Signout</a>
  </div>
  @else
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="/profile">Profil</a>
    <a class="dropdown-item" href="/signout">Signout</a>
  </div>
  @endif
</div>
    <!-- <span class="profile"><a role="button" href="/signout">Wyloguj się</a></span> -->
    @else
    <span class="profile"><a role="button" href="/login">Zaloguj sie</a></span>
    <span class="profile"><a role="button" href="/registration">Zarejestruj sie</a></span>
    @endif
  </div>
    
</div>
        @stop