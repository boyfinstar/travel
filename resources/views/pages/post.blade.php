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

    <br>
    <br>
    <br>

    <main role="main" class="container" style="padding-bottom: 20px; margin-top: 50px;">
      <div class="row">
        <div class="col-md-8 blog-main">
          
          <h3 class="pb-4 mb-4 font-italic border-bottom">
            <b> Recent Posts </b>
          </h3>
          {{-- @foreach ($posts as $post) --}}

          <div class="blog-post">

            <h2 class="blog-post-title">{!! $post->title !!}</h2>
            <p class="blog-post-meta">Post by <a href="#">{{ $post->user->name }}</a> at {{ $post->created_at->toDayDateTimeString() }}</p>
            <div class="post-content">
                {!! $post->body !!}
            </div>
            <hr>
          </div>

          {{-- @endforeach --}}
          
          <div class="card shadow-sm" style="padding: 10px;">
            <h3 class="pb-4 mb-4 font-italic">
                Comments
            </h3>


            <div>

                <p class="blog-post-meta">Comment by <a href="#"> Baddo </a> at Monday 6, October 2021</p>
                <div class="post-content">
                    Wetin be this thing wey you type so
                </div>

            </div>
          </div>
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