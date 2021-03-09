@extends ('pages.master')

@section ('content')

<body>

    <br>
    <br>
    <main>
        <div class="row" style="justify-content: center;">
            <form class="form " action="/test" method="POST" id="registrationForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">

                    <div class="col-xs-6">
                        <label for="image">
                            <h4>Profile Image</h4>
                        </label>
                        <input type="file" class="form-control" id="image" name="image"
                            placeholder="" title="profile picture">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <button class="btn btn-lg btn-success" type="submit"><i
                                class="glyphicon glyphicon-ok-sign"></i> Update</button>
                        {{-- <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                            Reset</button> --}}
                    </div>
                </div>
            </form>
        </div>
    </main>

@endsection