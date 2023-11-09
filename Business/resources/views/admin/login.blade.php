<html>

<head>
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            padding: 50px;
            font-family: 'Roboto', sans-serif;
            background-color: #F5F5F5;
        }

        /*Sign In Form*/
        .signin {
            position: relative;
            width: 500px;
            margin: auto;
            box-shadow: 0px 30px 125px -5px #000;
        }

        /*Background Img*/
        .back-img {
            position: relative;
            width: 100%;
            height: 250px;
            background: url('https://www.omnihotels.com/-/media/images/hotels/nycber/destinations/nyc-aerial-skyline.jpg?h=660&la=en&w=1170')no-repeat center center;
            background-size: cover;
        }

        .layer {
            background-color: rgba(33, 150, 243, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .active {
            padding-left: 25px;
            color: #fff;
        }

        .nonactive {
            color: rgba(255, 255, 255, 0.6);
        }

        .sign-in-text {
            top: 175px;
            position: absolute;
            z-index: 1;
        }

        h2 {
            padding-left: 15px;
            font-size: 25px;
            text-transform: uppercase;
            display: inline-block;
            font-weight: 300;
        }

        .point {
            position: absolute;
            z-index: 1;
            color: #fff;
            top: 235px;
            padding-left: 50px;
            font-size: 20px;
        }

        /*form-section*/
        .form-section {
            padding: 70px 90px 70px 90px;
        }

        .keep-text {
            font-size: 15px;
            color: #BDBDBD;
        }

        .forgot-text {
            font-size: 12px;
            color: #BDBDBD;
            text-align: right;
        }

        /*sign-in-btn*/
        .sign-in-btn {
            width: 100%;
            height: 75px;
            position: absolute;
            bottom: 0;
            border-radius: 0px;
            background-color: rgba(63, 78, 191, 1);
        }
    </style>
</head>

<body>
    <div class="signin">
        <div class="back-img">
            <div class="sign-in-text">
                <h2 class="active">Sign In</h2>
                <h2 class="nonactive">Sign Up</h2>
            </div><!--/.sign-in-text-->
            <div class="layer">
            </div><!--/.layer-->
            <p class="point">&#9650;</p>
        </div><!--/.back-img-->
        <div class="form-section">
        @if(session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{ route('login') }}" method="post">
                @csrf()
                <!--Email-->
                <div class="input-group">
                    <span class="input-group-text">Email</span>
                    <input type="text" aria-label="Email" name="email" class="form-control">
                </div>
                <br />
                <br />
                <!--Password-->
                <div class="input-group">
                    <span class="input-group-text">Password</span>
                    <input type="password" aria-label="Password" name="password" class="form-control">
                </div>
                <br />
            </div><!--/.form-section-->

            <button type="submit" class="sign-in-btn mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored">
                Sign In
            </button><!--/button-->
        </form>

    </div><!--/.signin-->
</body>

</html>
