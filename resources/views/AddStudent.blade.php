<html>

<head>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        id="bootstrap-css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        div.stars {
            display: inline-block;
        }

        input.star {
            display: none;
        }

        label.star {
            float: right;
            padding: 1px;
            font-size: 36px;
            color: #4A148C;
            transition: all .2s;
        }

        input.star:checked~label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        label.star:hover {
            transform: rotate(-15deg) scale(1.3);
        }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }
    </style>
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
            @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible">

                    {!! \Session::get('success') !!}
                </div>
            @endif

            <article class="card-body mx-auto mt-3" style="max-width: 400px;">
                <form action="{{ route('AddStudent') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <input name="name" class="form-control" placeholder="Student name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <input name="class" class="form-control" placeholder="Student Class" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <input name="date_of_birth" class="form-control" placeholder="Student DOB" type="date">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <input name="student_image" class="form-control" placeholder="Student Image" type="text">
                    </div> <!-- form-group// -->                   
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-text-width" aria-hidden="true"></i></span>
                        </div>
                        <select class="form-control" name="department_id">
                        @foreach($Depts as $Dept)
                        <option selected="{{$Dept->name}}">{{$Dept->id}}</option>
                        @endforeach                 
                        </select>
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Submit </button>
                        <a class="btn btn-primary btn-block" href="{{ route('StudentList') }}">Go Back</a>
                    </div> <!-- form-group// -->
                </form>
            </article>
        </div> <!-- card.// -->

    </div>
    <!--container end.//-->
</body>
<html>
