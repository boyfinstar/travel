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

    @include('partials.errors')

    <main role="main" class="container" style="padding-bottom: 20px; margin-top: 50px;">
      <div class="row">
        <div class="col-md-8 blog-main">
          
          <h3 class="pb-4 mb-4 font-italic border-bottom">
            <b> Recent Posts </b>
          </h3>

          <div class="blog-post">
            
            <h2 class="blog-post-title">{!! $postWithComments->title !!}</h2>
            <p class="blog-post-meta">Post by <a href="#">{{ $postWithComments->user->name }}</a> at {{ $postWithComments->created_at->toDayDateTimeString() }}</p>
            <div class="post-content">
                {!! $postWithComments->body !!}
            </div>
            <hr>
          </div>
          
          <div class="card shadow-sm" style="padding: 10px;">
            <h3 class="pb-4 mb-4 font-italic">
                Add a Comment
            </h3>

            <div>
                <form method="POST" action="/post/{{ $postWithComments->id }}/comment">

                  {{ csrf_field() }}

                <div class="form-group">
                  <label for="body">Commment</label>
                  <textarea class="ckeditor form-control" id="body" name="body"> </textarea>
                </div>

                <div class="form-group align-content">
                  <button type="submit" class="btn btn-primary mx-auto">Post</button>
                </div>

                </form>
            </div>
          </div>
          <br>
          <div class="card shadow-sm" style="padding: 10px;">
            <h3 class="pb-4 mb-4 font-italic">
                Comments
            </h3>

            @foreach ($postWithComments->comment as $com)

            {{-- {{ dd($com->toArray()) }} --}}

            {{-- {{ dd($com->user->toArray()) }} --}}

            {{-- {{ dd($com->user) }} --}}

            {{-- {{ $com->user->name }} --}}
                
            <div class="card" style="margin-bottom: 5px;">
              <p class="blog-post-meta">Comment by <a href="#"> boss </a> {!! $com->created_at->toDayDateTimeString() !!} </p>
              <div class="post-content">
                {!! $com->body !!}
              </div>
            </div>

            @endforeach

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

        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
@endsection