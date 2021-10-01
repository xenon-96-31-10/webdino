@extends('layouts.app')

@section('title')О студии с душой@endsection

@section('content')
<section class="mb-5">
  <div class="container rounded border shadow-lg">
    <div class="row p-3 pb-0 pe-lg-0 pt-lg-4 align-items-center">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 order-2 order-sm-1">
        <h1 class="display-4">О студии</h1>
        <p class="lead">Немного нашей истории</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="#aboutUs" role="button" type="button" class="btn btn-dark btn-lg text-white px-4 me-md-2">Подробнее</a>
          <a href="{{route('welcome')}}" role="button" class="btn btn-outline-secondary btn-lg px-4">На главную</a>
        </div>
      </div>
      <div class="col-lg-5 p-0 overflow-hidden shadow-lg order-1 order-sm-2">
        <img class="rounded-top" src="storage/images/aboutUs.jpg" alt="" width="540">
      </div>
    </div>
  </div>
</section>
<section class="mb-5" id="aboutUs">
  <div class="container rounded border shadow-lg">
    <nav aria-label="breadcrumb" class="py-3 pb-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}" class="link-dark">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">О студии</li>
      </ol>
    </nav>
  </div>
</section>

<section class="mb-5">
  <div class="container py-2 rounded border shadow-lg">
    <h2 class="p-2 border-bottom">Мы</h2>
    <div class="row">
      <div class="col">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container my-3 px-4 py-4 rounded-3 border shadow-lg" id="hanging-icons">
    <h2 class="p-2 border-bottom">Почему мы</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <i class="bi bi-calendar-event-fill display-4"></i>
        </div>
        <div>
          <p class="tagline">Featured title</p>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <i class="bi bi-calendar-event-fill display-4"></i>
        </div>
        <div>
          <p class="tagline">Featured title</p>
          <p>Paragraph of text beneath the heading to explain the heading.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <i class="bi bi-calendar-event-fill display-4"></i>
        </div>
        <div>
          <p class="tagline">Featured title</p>
          <p>Paragraph of text beneath the heading to explain the heading. </p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <i class="bi bi-calendar-event-fill display-4"></i>
        </div>
        <div>
          <p class="tagline">Featured title</p>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <i class="bi bi-calendar-event-fill display-4"></i>
        </div>
        <div>
          <p class="tagline">Featured title</p>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <i class="bi bi-calendar-event-fill display-4"></i>
        </div>
        <div>
          <p class="tagline">Featured title</p>
          <p>Paragraph of text beneath the heading to explain the heading. </p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
