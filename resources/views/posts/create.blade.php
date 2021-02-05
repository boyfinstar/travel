@extends ('pages.master')

@section ('content')

    <div class="col-md-6 card" style="margin: auto; margin-top: 120px; margin-bottom: 50px;">
        <h1>Create a Post</h1>
        <hr>

        <form method="POST" action="/store">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Blog:</label>
                <textarea class="ckeditor form-control" id="body" name="body"> </textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Post</button>
            </div>

            {{-- @include('partials.errors') --}}

        </form>
        {{-- <script>
            CKEDITOR.replace( 'body' );
        </script> --}}


        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('.ckeditor').ckeditor();
            });
        </script>
    </div>

@endsection