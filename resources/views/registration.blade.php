<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
    <div class="container">






        <div class="card bg-light mt-5">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible">

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (\Session::has('failed'))
                <div class="alert alert-danger alert-dismissible">

                    {!! \Session::get('failed') !!}
                </div>
            @endif

            <article class="card-body mx-auto mt-3" style="max-width: 400px;">
                <form action="{{ route('registration') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="name" class="form-control" placeholder="Full name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <select class="form-control" name="department_id">
                        @foreach($Depts as $Dept)
                        <option selected="{{$Dept->id}}">{{$Dept->id}}</option>
                        @endforeach                 
                        </select>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input name="password" class="form-control" placeholder="Create password" type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                    </div> <!-- form-group// -->
                    <p class="text-center">Have an account? <a href="{{ route('login') }}">Log In</a> </p>
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->
</body>
<html>
