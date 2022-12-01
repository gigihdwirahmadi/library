<body>
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=newlibrary\app\core\Router::Url("/public/Bookindex") ?>">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=newlibrary\app\core\Router::Url("/public/Subscriptionindex") ?>">Subscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=newlibrary\app\core\Router::Url("/public/Memberindex") ?>">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=newlibrary\app\core\Router::Url("/public/librarianindex") ?>">Librarian</a>
                    </li>
                </ul>
               
            </div>
            <div class="dropdown ms-auto mx-5">
                <?php if(Isset($_SESSION['auth'])){ ?>
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="764.png">
                    </button>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </div>
                <?php } else{ ?>
                    <a href="<?=newlibrary\app\core\Router::Url("/public/login") ?>">
                        LOGINN </a>
                    </button>
                    <?php } ?>
        </div>
    </nav>