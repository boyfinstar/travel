@extends ('pages.master')

@section ('content')

  <body>

    <!--==========================
      Header
      ============================-->
    <header id="header" class="fixed-top">
      <div class="container">

        <div class="logo float-left">
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
          <a href="index" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
        </div>

        <div>
          @include('partials.nav')
        </div>


      </div>
    </header><!-- #header -->

    <!--==========================
        Intro Section
      ============================-->
    <section id="intro" class="clearfix">
      <div class="container">

        <div class="intro-img">
          <img src="img/intro-img.svg" alt="" class="img-fluid">
        </div>

        <div class="intro-info">
          <h2>We provide<br><span>solutions</span><br>for your business!</h2>
          <div>
            <a href="about" class="btn-get-started scrollto">Get Started</a>
            <a href="services" class="btn-services scrollto">Our Services</a>
          </div>
        </div>

      </div>
    </section><!-- #intro -->

    <main role="main" class="container" style="padding-bottom: 20px;">
      <div class="row">
        <div class="col-md-8 blog-main">
          
          <h3 class="pb-4 mb-4 font-italic border-bottom">
            <b> Recent Posts </b>
          </h3>
          @foreach ($posts as $post)

          <div class="blog-post">

            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at }} <a href="#">{{ $post->user->name }}</a></p>
            <p class="blog-post-body">{!! $post->body !!}</p>

            <hr>
          </div>

          @endforeach
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
          </nav>
        </div>

        <!-- /.blog-post -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-4 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit
              amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div>

          <div class="p-4">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="#">March 2014</a></li>
              <li><a href="#">February 2014</a></li>
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-4">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->
    </main>

@endsection