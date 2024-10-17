<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BCA Study Hub</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: black;
        }

        body header {
            background-color: rgb(58, 57, 57);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            border-top: 0.5rem solid #ec4141;
            /* border-bottom: 0.5rem solid #ec4141; */
        }

        nav {
            display: flex;
            height: 90px;
        }

        nav .logo {
            color: white;
            width: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            font-weight: bolder;
            font-family: 'Quicksand', sans-serif;
        }


        nav .logo span {
            color: #ec4141;
            font-size: 25px;
            margin-left: 5px;
        }

        nav ul {
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;


        }

        nav ul li {
            list-style: none;

        }

        nav ul li a {
            text-decoration: none;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            font-size: 14px;
            padding: 1rem 1.2rem;
            margin: 0 0.3rem;
            color: white;
        }

        nav ul li a.active {
            border-bottom: 2px solid #ec4141;
            color: #ec4141;

        }

        nav ul li a:hover {
            border-bottom: 2px solid #ec4141;
            color: #ec4141;

        }
		.search-form {
            display: flex;
			
        }
		.search-bar {
			display: flex;
			align-items: center;
		}
        .search-bar input {
            padding: 0.5rem 2rem;
			border-top-left-radius: 5px;
			border-bottom-left-radius: 5px;
            border: 1px solid #ccc;
            font-family: 'Quicksand', sans-serif;
            font-size: 14px;
            outline: none;
        }

        .search-bar button {
            padding: 0.5rem 1rem;
            background-color: #ec4141;
            color: white;
            border: none;
            cursor: pointer;
            font-family: 'Quicksand', sans-serif;
            font-size: 14px;
            border-radius: 0 5px 5px 0;
        }

        .header-container {
            position: relative;
            display: block;
            width: 40%;
            top: 25%;
            left: 2%;
        }

        .header-container h1 {
            color: white;
            font-size: 45px;
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            letter-spacing: 2px;

        }

        .text-primary {
            color: #ec4141;

        }

        .header-container h1 .border-bottom {
            border-bottom: 2px solid #ec4141;

        }


        .btn {
            padding: 0.6rem 1.5rem;
            cursor: pointer;
            outline: none;
            border: 1.4px solid black;

        }

        .btn-primary {
            text-transform: uppercase;
            font-family: 'Quicksand', sans-serif;
            letter-spacing: 2px;
            margin-top: 2rem;
            color: white;
            background-color: #ec4141;
            border: 1.4px solid #ec4141;
            border-radius: 5px;
            font-size: 18px;
            transition: all 0.5s linear;
        }

        .btn-primary:hover {
            background-color: transparent;
        }

        h4 {
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo"><i class="fa-solid fa-book"></i><span> BCA Study Hub</span></div>
			 <!-- Search Bar -->
			 <div class="search-bar">
				<form action="/search" method="GET" class="search-form">
					<input type="text" name="search" placeholder="Search..." required>
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/notes">Notes</a></li>
                <li><a href="/syllabus">Syllabus</a></li>
                <li><a href="/questions">Past Questions</a></li>
               
                <div class="userinfo d-flex">
                    <li>
                        @guest
                            @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user fa-2xl"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item " href="/userinfo">My Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </li>
                </div>
            </ul>
			
        </nav>
    </header>
    @yield('content')

    <div class="footer">
        <footer class="text-center text-lg-start text-white bg-dark">
            <div class="container p-4 pb-0">
                <section class="">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                <div class="logo"><i class="fa-solid fa-book"></i><span> BCA Study Hub</span></div>
                            </h6>
                            <p>
                                The harder you work and the more prepared you are for something, you’re going to be able
                                to persevere through anything.
                            </p>
                        </div>
                        <hr class="w-100 clearfix d-md-none" />

                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Our Services</h6>
                            <p>
                                <a class="text-white">Effictive Notes</a>
                            </p>
                            <p>
                                <a class="text-white">Syllabus Guides</a>
                            </p>
                            <p>
                                <a class="text-white">Past Questions collections</a>
                            </p>
                            <p>
                                <a class="text-white">BCA Notices</a>
                            </p>
                        </div>

                        <hr class="w-100 clearfix d-md-none" />

                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                Useful links
                            </h6>
                            <p>
                                <a class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a class="text-white">Help</a>
                            </p>
                        </div>

                        <hr class="w-100 clearfix d-md-none" />

                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i> Sundarharincha-10, Morang</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                    </div>
                </section>

                <hr class="my-3">

                <section class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <div class="p-3">
                                © 2024 Copyright:
                                <a class="text-white" href="https://mdbootstrap.com/">BCA Study HUb.com</a>
                            </div>
                        </div>

                        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                            <!-- Facebook -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </section>
            </div>
        </footer>
    </div>
    <!-- End of .container -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>


</html>
