@extends('client.layouts.master')
@section('content')
<!-- start of banner -->
<div class="banner text-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <h1 class="mb-5">What Would You <br> Like To Read Today?</h1>
        <ul class="list-inline widget-list-inline">
          <li class="list-inline-item"><a href="{{ route('thoisu') }}">Thời sự</a></li>
          <li class="list-inline-item"><a href="{{ route('thethao') }}">Thể thao</a></li>
          <li class="list-inline-item"><a href="{{ route('nghethuat') }}">Nghệ thuật</a></li>

        </ul>
      </div>
    </div>
  </div>


  <svg class="banner-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306" stroke-miterlimit="10" />
    <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
    <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306" stroke-miterlimit="10" />
  </svg>

  <svg class="banner-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g filter="url(#filter0_d)">
      <path class="path" d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
      <path d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z" stroke="#040306" stroke-miterlimit="10" />
    </g>
    <defs>
      <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix" />
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
        <feOffset dy="4" />
        <feGaussianBlur stdDeviation="2" />
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
      </filter>
    </defs>
  </svg>


  <svg class="banner-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306" stroke-miterlimit="10" />
    <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
    <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306" stroke-miterlimit="10" />
  </svg>


  <svg class="banner-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1" stroke-width="2" />
  </svg>
</div>
<!-- end of banner -->
<section class="section pb-0">
  <div class="container">
    <div class="row">
      @foreach($articles as $article)
      <div class="col-lg-4 mb-5">
        <h2 class="h5 section-title">Editors Pick</h2>
        <article class="card">
          <div class="post-slider slider-sm">
            <img src="{{ asset('images/' . $article->image) }}" class="card-img-top" alt="post-thumb">
          </div>

          <div class="card-body">
            <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">{{ $article->title }}</a></h3>
            <ul class="card-meta list-inline">
              <li class="list-inline-item">
                <a href="author-single.html" class="card-meta-author">
                  <img src="client/images/john-doe.jpg">
                  <span>Charls Xaviar</span>
                </a>
              </li>
              <li class="list-inline-item">
                <i class="ti-timer"></i>2 Min To Read
              </li>
              <li class="list-inline-item">
                <i class="ti-calendar"></i>14 jan, 2020
              </li>
              <li class="list-inline-item">
                <ul class="card-meta-tag list-inline">
                  <li class="list-inline-item"><a href="tags.html">Color</a></li>
                  <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                  <li class="list-inline-item"><a href="tags.html">Fish</a></li>
                </ul>
              </li>
            </ul>
            <p>{{ $article->content }}</p>
            <a href="" class="btn btn-outline-primary">Read More</a>
          </div>
        </article>
      </div>

      <div class="col-lg-4 mb-5">
        <h2 class="h5 section-title">Trending Post</h2>
        @foreach($views as $view)
        <article class="card mb-4">
          <div class="card-body d-flex">
            <img class="card-img-sm" src="{{ asset('images/' . $view->image) }}">
            <div class="ml-3">
              <h4><a href="post-details.html" class="post-title">{{ $view->title }}</a></h4>
              <ul class="card-meta list-inline mb-0">
                <li class="list-inline-item mb-0">
                  <i class="ti-calendar"></i>14 jan, 2020
                </li>
                <li class="list-inline-item mb-0">
                  <i class="ti-timer"></i>2 Min To Read
                </li>
              </ul>
            </div>
          </div>
        </article>
        @endforeach
      </div>

      <div class="col-lg-4 mb-5">
        <h2 class="h5 section-title">New Post</h2>
        @foreach($oneNews as $oneNew)
        <article class="card">
          <div class="post-slider slider-sm">
            <img src="{{ asset('images/' . $oneNew->image) }}" class="card-img-top" alt="post-thumb">
          </div>
          <div class="card-body">
            <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">{{ $oneNew->title }}</a></h3>
            <ul class="card-meta list-inline">
              <li class="list-inline-item">
                <a href="author-single.html" class="card-meta-author">
                  <img src="client/images/kate-stone.jpg" alt="Kate Stone">
                  <span>Kate Stone</span>
                </a>
              </li>
              <li class="list-inline-item">
                <i class="ti-timer"></i>2 Min To Read
              </li>
              <li class="list-inline-item">
                <i class="ti-calendar"></i>14 jan, 2020
              </li>
              <li class="list-inline-item">
                <ul class="card-meta-tag list-inline">
                  <li class="list-inline-item"><a href="tags.html">City</a></li>
                  <li class="list-inline-item"><a href="tags.html">Food</a></li>
                  <li class="list-inline-item"><a href="tags.html">Taste</a></li>
                </ul>
              </li>
            </ul>
            <p>…{{ $oneNew->content }}</p>
            <a href="{{ route('detail', $oneNew->id) }}" class="btn btn-outline-primary">Read More</a>
          </div>
        </article>
        @endforeach
      </div>
      @endforeach
      <div class="col-12">
        <div class="border-bottom border-default"></div>
      </div>

    </div>
  </div>
</section>

<section class="section-sm">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8  mb-5 mb-lg-0">
        <h2 class="h5 section-title">BÀI VIẾT GẦN ĐÂY</h2>
        @foreach($News as $New)
        <article class="card mb-4">
          <div class="post-slider">
            <img src="{{ asset('images/' . $New->image) }}" class="card-img-top" alt="post-thumb">
          </div>
          <div class="card-body">
            <h3 class="mb-3"><a class="post-title" href="post-elements.html">{{ $New->title }}.</a></h3>
            <ul class="card-meta list-inline">
              <li class="list-inline-item">
                <a href="author-single.html" class="card-meta-author">
                  <img src="client/images/john-doe.jpg" alt="John Doe">
                  <span>John Doe</span>
                </a>
              </li>
              <li class="list-inline-item">
                <i class="ti-timer"></i>3 Min To Read
              </li>
              <li class="list-inline-item">
                <i class="ti-calendar"></i>15 jan, 2020
              </li>
              <li class="list-inline-item">
                <ul class="card-meta-tag list-inline">
                  <li class="list-inline-item"><a href="tags.html">Demo</a></li>
                  <li class="list-inline-item"><a href="tags.html">Elements</a></li>
                </ul>
              </li>
            </ul>
            <p>{{ $New->content }}.</p>
            <a href="{{ route('detail', $New->id) }}" class="btn btn-outline-primary">Read More</a>
          </div>
        </article>
        @endforeach
        <!-- phân trang -->
        <ul class="pagination justify-content-center">
          <li class="page-item page-item active ">
            <a href="#!" class="page-link">1</a>
          </li>
          <li class="page-item">
            <a href="#!" class="page-link">2</a>
          </li>
          <li class="page-item">
            <a href="#!" class="page-link">&raquo;</a>
          </li>
        </ul>
      </div>
      <aside class="col-lg-4 sidebar-home">
        <!-- Search -->
        <div class="widget">
          <h4 class="widget-title"><span>Search</span></h4>
          <form action="{{ route('tintuc') }}" method="GET" class="widget-search">
            <input class="mb-3" id="search-query" name="query" type="search" placeholder="Type &amp; Hit Enter...">
            <i class="ti-search"></i>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
          </form>
        </div>

        <!-- categories -->
        <div class="widget widget-categories">
          <h4 class="widget-title"><span>Categories</span></h4>
          <ul class="list-unstyled widget-list">
            <li><a href="{{ route('thoisu') }}" class="d-flex">Thời sự <small class="ml-auto">(4)</small></a></li>
            <li><a href="{{ route('thethao') }}" class="d-flex">Thể thao <small class="ml-auto">(4)</small></a></li>
            <li><a href="{{ route('nghethuat') }}" class="d-flex">Nghệ thuật <small class="ml-auto">(4)</small></a></li>
            
          </ul>
          <!-- recent post -->
          <div class="widget">
            <h4 class="widget-title">Recent Post</h4>

            <!-- post-item -->
            @foreach($News as $New)
              <article class="widget-card">
                <div class="d-flex">
                  <img class="card-img-sm" src="{{ asset('images/' . $New->image) }}">
                  <div class="ml-3">
                    <h5><a class="post-title" href="post/elements/">{{ $New->title}}</a></h5>
                    <ul class="card-meta list-inline mb-0">
                      <li class="list-inline-item mb-0">
                        <i class="ti-calendar"></i>{{ $New->created_at}}
                      </li>
                    </ul>
                  </div>
                </div>
              </article>
            @endforeach
            
          </div>

          <!-- Social -->
          <div class="widget">
            <h4 class="widget-title"><span>Social Links</span></h4>
            <ul class="list-inline widget-social">
              <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
            </ul>
          </div>
      </aside>
    </div>
  </div>
</section>
@endsection