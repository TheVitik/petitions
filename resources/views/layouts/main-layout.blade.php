<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>MyPetition | @yield('title')</title>
    <script src="https://kit.fontawesome.com/b2700bfb4b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="content">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <a class="flex clear" href="active">
                        <div class="logo"></div>
                        <div class="title">
                            <h3>MY PETITION</h3>
                            <h5>Change your future!</h5>
                        </div>
                    </a>
                </div>
                <div class="col-3">
                    <!-- if isset session -->
                    <a class="create-button" href="new">New petition</a>
                    <!-- endif -->
                </div>
                <div class="col-4">
                    <div class="d-flex justify-content-center">
                        <div class="search">
                            <form id="search" action="main" method="GET">
                                <input type="hidden" name="page" value="search">
                                <input type="text" class="search-input" placeholder="Search..." name="find">

                            <a href="javascript:;" onclick="document.getElementById('search').submit();" class="search-icon"><i class="fas fa-search"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="nav-menu">
        <div class="links">
            <a href="/active" class="nav-link">Active petitions</a>
            <a href="/closed" class="nav-link">Closed petitions</a>
            <!-- if isset session -->
            <a href="/my" class="nav-link">My petitions</a>
            <!-- endif -->
        </div>
        <div class="user">
            <!-- if !isset session -->
                    <a href="/login" class="nav-link">Login</a>
                    <a href="/register" class="nav-link">Register</a>
            <!-- endif else -->
                    <a href="/exit" class="nav-link">Exit</a>
            <!-- endif -->
        </div>
    </nav>
        <main>
            <div class="container">
                <h2 class="page-title">@yield('title') PETITIONS</h2>
                @yield('content')
            </div>
        </main>
    <footer>
        <div class="footer-info">
            <p class="text-center">&copy; 2021 MyPetition</p>
            <p class="text-center">Created by <a href="https://github.com/TheVitik">TheVitik</a></p>
        </div>
    </footer>
</div>
</body>
</html>
