@extends('layouts.app')

@section('title')Добро пожаловать@endsection

@section('content')
<section>
  <div class="container py-5 d-flex align-items-center">
    <div class="row rounded border shadow-lg my-5 p-5">
      <h1 class="display-4">Dinosaur - Digital Creative Agency</h1>
      <div class="col">
        <p class="lead mb-4" align="justify">
          Занимаемся созданием <span class="fw-bold">сайтов</span> и их продвижением, разработкой <span class="fw-bold">ботов</span> и <span class="fw-bold">дизайна</span> с 2019 года
        </p>
      </div>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-start">
        <button type="button" class="btn btn-dark btn-lg text-white px-4 me-sm-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Оставить заявку</button>
        <a href="{{route('ourServices')}}" role="button" class="btn btn-outline-secondary btn-lg px-4" ><font style="vertical-align: inherit;">Услуги & Цены</font></a>
      </div>
    </div>
  </div>
</section>
<section class="mt-5 pt-5">
  <div class="marquee" data-duration='10000' data-duplicated='true'>Проекты Проекты Проекты Проекты Проекты Проекты Проекты Проекты Проекты Проекты Проекты</div>
</section>
<section>
  <div class="container">
    <projects-component></projects-component>
  </div>
</section>
@endsection
