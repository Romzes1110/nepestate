@extends('layouts.real-estate')

@section('content')
<div class="property-index">
  <div class="container-fluid">
  <section class="hero" style="background-image:url('{{asset('img/search-bg.jpg')}}');">
      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-6 mx-auto">
          <div class="hero-caption">
            <div>
              <h2 class="caption-text">Недвижимость <br> для жизни.</h2>
              <br>
              <form action="{{route('property.search')}}" method="GET">
                <div class="hero-search-bx">
                    <input type="text" placeholder="Псков" name="property" class="navbar-search-input" autofocus>
                    <button type="submit" class="hero-search-button">
                      <i class="fas fa-search"></i>
                    </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="feature-section py-5">
      <div class="container">
        <h2 class="feature-hdr page-header my-4 text-center">Как мы можем Вам помочь:</h2>
        <div class="row text-center">
          <div class="col-sm-12 col-md-4">
            <a class="feature-item card" href="#">
              <i class="fas fa-house-user fa-3x fa-primary w-auto"></i>
              <div class="card-body">
                <h3 class="card-title">Купить дом</h3>
                <p class="card-body">На сайте выставлено на продажу более сотни домов. Мы можем подобрать вам дом, который вы захотите назвать своим.</p>
                <button class="primary-btn">Выбрать дом</button>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-4">
            <a class="feature-item card" href="">
              <i class="fas fa-hotel fa-3x fa-primary"></i>
              <div class="card-body">
                <h3 class="card-title">Снять дом</h3>
                <p class="card-body">Благодаря более чем 23 фильтрам и пользовательскому поиску по ключевым словам мы поможем вам легко найти дом в аренду.</p>
                <button class="primary-btn">Найти в аренду</button>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md-4">
            <a class="feature-item card" href="">
              <i class="fas fa-people-carry fa-3x fa-primary"></i>
              <div class="card-body">
                <h3 class="card-title">Подобрать район</h3>
                <p class="card-body">Несколько десятков районов под потребности каждого. Вы несомненно найдёте для себя то окружение, в котором вам будет комфортно.</p>
                <button class="primary-btn">Далее</button>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="guides-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="guides-item">
              <p class="guides-hdr">Nepestate Guides</p>
              <p class="guides-text">Все, что Вам нужно знать<br>
                  при просмотре различных типов домов на продажу <br>
                  все в одном месте.
              </p>
              <br>
              <button class="secondary-btn">Путеводитель</button>
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="guides-list">
              <div class="guides-item">
                <div class="guides-row">
                  <div class="guides-col"><i class="fas fa-house-user fa-3x fa-primary w-auto"></i></div>
                  <div class="guides-col">  <p class="guides-hdr">Для покупателей</p>
                  <a href="{{route('property.index')}}" class="secondary-link">Как купить?
                    <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="guides-item">
                <div class="guides-row">
                  <div class="guides-col">
                    <i class="fas fa-hotel fa-3x fa-primary"></i>
                  </div>
                  <div class="guides-col">
                    <p class="guides-hdr">Для арендаторов</p>
                    <a href="{{route('property.index')}}" class="secondary-link">Как снять?
                    <i class="fas fa-arrow-right"></i></a></div>
                </div>
              </div>
              <div class="guides-item">
                <div class="guides-row">
                  <div class="guides-col"><i class="fas fa-people-carry fa-3x fa-primary"></i></div>
                  <div class="guides-col">
                    <p class="guides-hdr">Для продавцов</p>
                    <a href="{{route('property.index')}}" class="secondary-link">Как продать?
                    <i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection


@push('js')
@endpush


@push('css')
<style>

</style>
@endpush

