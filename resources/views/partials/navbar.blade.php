<nav class="navbar navbar-expand-sm sticky-top" id="navbar">
  <div class="container bg-light rounded shadow">
    <div class="justify-content-start">
      <button class="btn btn-dark rounded my-1" type="button" id="contactIcon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
        <i class="bi bi-chat-left-dots text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom"></i>
      </button>
    </div>
    <div class="justify-content-center">
      <a class="navbar-brand nav justify-content-center text-muted" href="{{route('welcome')}}">
        <img src="storage/images/logo32.png" alt="" width="32" height="32">
      </a>
    </div>
    <div class="justify-content-end">
      <button class="btn btn-dark rounded my-1" id="humburgerIcon" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu">
        <i class="bi bi-three-dots text-white" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu"></i>

      </button>
    </div>

  </div>
</nav>
<div class="offcanvas offcanvas-end border-0" tabindex="-1" id="menu" aria-labelledby="menuLabel">
  <div class="offcanvas-header">
    <h1 class="brandLogo">МЕНЮ</h1>
    <button type="button" class="btn-close text-reset my-auto" id="menuClose" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="container">
      <div class="row g-2">
        <div class="col-sm-4 d-none d-sm-block">
          <p class="lead text-muted mt-4 mb-1">Номер телефона</p>
          <p><a href="tel:+79093751698" class="custom-link">+7 (909) 375 16 98</a></p>

          <p class="lead text-muted mb-1">Свяжитесь с нами!</p>
          <p><a href="mailto:info@webdino.ru" class="custom-link">info@webdino.ru</a></p>

          <p class="lead text-muted mb-1">Мы в соц. сетях</p>
          <p class="mb-1"><a href="#" class="custom-link me-2">Instagram</a> <a href="#" class="custom-link me-2">Telegram</a> <a href="#" class="custom-link">Github</a></p>
          <p><a href="#" class="custom-link me-2">Behance</a> <a href="#" class="custom-link me-2">LinkedIn</a> <a href="#" class="custom-link">Facebook</a></p>
        </div>
        <div class="col-sm-4">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Главная</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('aboutUs')}}">О студии</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('ourServices')}}">Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Projects')}}">Портфолио</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Contacts')}}">Контакты</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul class="nav flex-column submenu">
            <li class="nav-item">
              <a class="nav-link" href="{{route('workStages')}}">Этапы работ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Технологии</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Блог</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ</a>
            </li>
          </ul>
        </div>
      </div>
      <button type="button" name="button" class="btnBrief--offcanvas btnBrief">Заполнить бриф</button>
    </div>
  </div>
</div>
<div class="offcanvas offcanvas-bottom rounded-3 border-0" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
  <div class="offcanvas-header pb-0">
    <h2 class="offcanvas-title" id="offcanvasBottomLabel">Для связи с нами</h2>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body small">
    <div class="row">
      <div class="col-sm-6">
        <form class="" action="index.html" method="post">
          @csrf
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="name" placeholder="Сергей Петрович">
            <label for="name" class="lead"><i class="bi bi-person-square"></i> Ваше имя</label>
          </div>
          <div class="form-floating mb-2">
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email" class="lead"><i class="bi bi-envelope-fill"></i> E-mail</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" id="phone" placeholder="+79093751698">
            <label for="phone" class="lead"><i class="bi bi-telephone-forward-fill"></i> Ваш телефон</label>
          </div>
          <div class="form-floating mb-2">
            <textarea class="form-control resize-none" placeholder="Пишите все, что сочтете нужным" id="text" style="height: 100px"></textarea>
            <label for="text" class="lead"><i class="bi bi-chat-dots-fill"></i> Пожелания</label>
          </div>
          <div class="input-group d-flex justify-content-between align-items-center mb-2">
            <div>
              <a href="#" class="link-dark"><i class="bi bi-paperclip"></i>Скачать бриф на разработку сайта</a><br>
              <a href="#" class="link-dark"><i class="bi bi-paperclip"></i>Скачать бриф на разработку дизайна</a>
            </div>
            <div>
              <label class="custom-file-upload align-middle">
                  <input type="file" name="briefs[]" class="d-none" multiple/>
                  <i class="bi bi-file-earmark-plus h1"></i>
              </label>
            </div>
          </div>
          <div class="form-check mb-1">
            <input class="form-check-input" type="checkbox" value="" id="personality" required>
            <label class="form-check-label" for="personality">
              Согласие на отправку и обработку своих персональных данных
            </label>
          </div>
          <div class="form-check mb-1">
            <input class="form-check-input" type="checkbox" value="" id="subscribe" required>
            <label class="form-check-label" for="subscribe">
              Подписка на рассылку новостей
            </label>
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-dark btn-lg text-white" type="submit">Отправить</button>
          </div>
        </form>
      </div>
      <div class="col-sm-6">
        <div id="particles-js" class="d-none d-sm-block"></div>
        <div class="text-end p-2" style="position: absolute; right: 0; bottom:0;">
          <p class="lead"><a href="tel:79093751698" class="custom-link">+7 909 375 16 98</a></p>
          <p class="lead"><a href="mailto:info@webdino.ru" class="custom-link">info@webdino.ru</a></p>
          <p class="lead d-inline">
            <a href="#" class="custom-link"><i class="bi bi-instagram"></i></a>
            <a href="#" class="custom-link"><i class="bi bi-facebook"></i></a>
            <a href="#" class="custom-link"><i class="bi bi-whatsapp"></i></a>
            <a href="#" class="custom-link"><i class="bi bi-github"></i></a>
            <a href="#" class="custom-link"><i class="bi bi-telegram"></i></a>
          </p>
        </div>
      </div>
    </div>

  </div>
</div>
