@extends('layouts.app')

@section('title')Кейсы@endsection

@section('content')
<section class="mb-5">
  <div class="container rounded border shadow-lg">
    <div class="row p-3 pb-0 pe-lg-0 pt-lg-4 align-items-center">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 order-2 order-sm-1">
        <h1 class="display-4">Портфолио</h1>
        <p class="lead">Каждый проект - отдельная история</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-dark btn-lg px-4 me-sm-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Оставить заявку</button>
          <a href="#Projects" role="button" type="button" class="btn btn-outline-secondary btn-lg px-4 me-md-2">Подробнее</a>
        </div>
      </div>
      <div class="col-lg-5 p-0 overflow-hidden shadow order-1 order-sm-2">
        <img class="rounded-top" src="storage/images/Projects.png" alt="" width="540">
      </div>
    </div>
  </div>
</section>
<section class="mb-5" id="Projects">
  <div class="container rounded border shadow-lg">
    <nav aria-label="breadcrumb" class="py-3 pb-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}" class="link-dark">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">Портфолио</li>
      </ol>
    </nav>
  </div>
</section>

<section>
  <div class="container">
    <projects-component></projects-component>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <button type="button" name="button" class="btnBrief">Заполнить бриф</button>
      </div>
    </div>
  </div>
</section>

@endsection
