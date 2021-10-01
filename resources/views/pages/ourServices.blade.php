@extends('layouts.app')

@section('title')Наши услуги и цены@endsection

@section('content')
<section class="mb-5">
  <div class="container">
    <div class="row p-3 pb-0 pe-lg-0 pt-lg-4 align-items-center rounded border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4">Услуги & Цены</h1>
        <p class="lead">От создания логотипа до разработки интернет-сервиса</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="#services" role="button" type="button" class="btn btn-dark btn-lg text-white px-4 me-md-2">Подробнее</a>
          <a href="{{route('welcome')}}" role="button" class="btn btn-outline-secondary btn-lg px-4">На главную</a>
        </div>
      </div>
      <div class="col-lg-5 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="storage/images/ourServices.png" alt="" width="540">
      </div>
    </div>
  </div>
</section>
<section class="mb-5" id="services">
  <div class="container rounded border shadow-lg">
    <nav aria-label="breadcrumb" class="py-3 pb-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}" class="link-dark">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">Услуги & Цены</li>
      </ol>
    </nav>
  </div>
</section>
<!-- <section class="mb-5">
  <div class="marquee" data-duration='10000' data-duplicated='true'>Услуги Услуги Услуги Услуги Услуги Услуги Услуги Услуги Услуги Услуги Услуги Услуги Услуги</div>
  <div class="marquee" data-duration='10000' data-duplicated='true' data-direction='right'>Цены Цены Цены Цены Цены Цены Цены Цены Цены Цены Цены Цены Цены</div>
</section> -->
<section class="mb-5">
  <div class="container py-2 rounded border shadow-lg mb-5">
    <h1 class="p-2 border-bottom"><i class="bi bi-box-seam"></i> Веб-дизайн</h1>
    <div class="row g-4 p-5 row-cols-1 row-cols-lg-3">
      <div class="col">
        <div>
          <p class="tagline">Логотипы</p>
          <p class="lead"><abbr title="Цена">от 200 $</abbr></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">Дизайн сайтов</p>
          <p class="lead"><abbr title="Цена">от 500 $</abbr></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">Фирменный стиль</p>
          <p class="lead"><abbr title="Цена">Индивидуально</abbr></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container py-2 rounded border shadow-lg mb-5">
    <h1 class="p-2 border-bottom"><i class="bi bi-diagram-3-fill"></i> Веб-сайты</h1>
    <div class="row g-4 p-5 row-cols-1 row-cols-lg-3">
      <div class="col">
        <div>
          <p class="tagline">Landing-page</p>
          <p class="lead"><abbr title="Цена">от 600 $</abbr></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">Корпоративные</p>
          <p class="lead"><abbr title="Цена">от 2000 $</abbr></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">Интернет-магазины</p>
          <p class="lead"><abbr title="Цена">от 3000 $</abbr></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">Порталы</p>
          <p class="lead"><abbr title="Цена">от 5000 $</abbr></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">Уникальные сайты</p>
          <p class="lead"><abbr title="Цена">Индивидуально</abbr></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">Обслуживание</p>
          <p class="lead"><abbr title="Цена в месяц">от 100 $</abbr></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container py-2 rounded border shadow-lg mb-5">
    <h1 class="p-2 border-bottom"><i class="bi bi-graph-up"></i> Маркетинг</h1>
    <div class="row g-4 p-5 row-cols-1 row-cols-lg-3">
      <div class="col">
        <div>
          <p class="tagline">Продвижение сайтов</p>
          <p class="lead"><abbr title="Цена">Индивидуально</abbr></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">Реклама сайтов</p>
          <p class="lead"><abbr title="Цена">от 200 $</abbr></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">SMM</p>
          <p class="lead"><abbr title="Цена за месяц">от 500 $</abbr></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container py-2 rounded border shadow-lg">
    <h1 class="p-2 border-bottom"><i class="bi bi-chat-square-dots"></i> Автоматизация</h1>
    <div class="row g-4 p-5 row-cols-1 row-cols-lg-3">
      <div class="col">
        <div>
          <p class="tagline">Telegram боты</p>
          <p class="lead"><abbr title="Цена">Индивидуально</abbr></p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
