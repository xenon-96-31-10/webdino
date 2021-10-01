@extends('layouts.app')

@section('title')Много способов, чтобы связаться с нами@endsection

@section('content')
<section class="mb-5">
  <div class="container rounded border shadow-lg">
    <div class="row p-3 pb-0 pe-lg-0 pt-lg-4 align-items-center">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 order-2 order-sm-1">
        <h1 class="display-4">Контакты</h1>
        <p class="lead">Простые способы для связи с нами</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <a href="#Contacts" role="button" type="button" class="btn btn-dark btn-lg text-white px-4 me-md-2">Подробнее</a>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4 me-sm-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Оставить заявку</button>

        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg order-1 order-sm-2">
        <img class="rounded" src="storage/images/s5-imgdino.png" alt="" width="540">
      </div>
    </div>
  </div>
</section>
<section class="mb-5" id="Contacts">
  <div class="container rounded border shadow-lg">
    <nav aria-label="breadcrumb" class="py-3 pb-0">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('welcome')}}" class="link-dark">Главная</a></li>
        <li class="breadcrumb-item active" aria-current="page">Контакты</li>
      </ol>
    </nav>
  </div>
</section>

<section>
  <div class="container py-2 rounded border shadow-lg mb-5">
    <h1 class="p-2 border-bottom"><i class="bi bi-reception-4"></i> Всегда на связи</h1>
    <div class="row g-4 p-5 row-cols-1 row-cols-lg-3">
      <div class="col">
        <div>
          <p class="tagline">По почте</p>
          <p class="lead"><a href="mailto:info@webdino.ru" class="link-dotted" title="Просто напишите нам, свой вопрос">info@webdino.ru</a></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">По телефону</p>
          <p class="lead"><a href="tel:+79093751698" class="link-dotted" title="Позвоните или напишите в WA">+7 (909) 375 16 98</a></p>
        </div>
      </div>
      <div class="col">
        <div>
          <p class="tagline">Социальные сети</p>
          <p class="lead mb-1"><a href="#" class="link-dotted me-2" title="Наша страничка с красивым контентом">Instagram</a> <a href="#" class="link-dotted me-2" title="Канал с интересными статьями">Telegram</a> <a href="#" class="link-dotted" title="Почему бы и нет? Мы же Digital Agency">Github</a></p>
          <p class="lead"><a href="#" class="link-dotted me-2" title="Наши презентации">Behance</a> <a href="#" class="link-dotted me-2" title="И тут мы есть">LinkedIn</a> <a href="#" class="link-dotted" title="Кому не удобен WA">Facebook</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mb-5">
  <div class="container py-2 rounded border shadow-lg">
    <h2 class="p-2 border-bottom">Главное правило</h2>
    <div class="row">
      <div class="col">
        <p class="lead">
          Мы всегда стараемся быть на связи, а в экстренных случаях даже, когда все спят мы готовы прийти на помощь. Будем рады пообщаться с Вами!
        </p>
      </div>
    </div>
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
