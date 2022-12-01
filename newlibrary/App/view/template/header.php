<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        .table {
            text-align: center;
            margin-top: 20px;
        }

        body {
            margin: 0px;
            padding: 0px;
        }

        .container-fluid {
            display: grid;
            margin: 0px;
            padding: 0px;
            grid-template-columns: 250px auto;
            height: 100vh;
            width: 100%;
        }

        .content {
            display: grid;
            grid-template-rows: 50px auto;

        }

        .item {

            height: 40px;
            margin-top: 25px;
            width: 100%;
            border-radius: 10px;
            color: white;
            display: grid;
            padding-left: 60px;
            align-items: center;


        }

        .item:hover {
            background-color: #198754;
        }

        .top {
            background-color: #198754;
        }

        .brand {
            font-size: 25px;
            display: grid;
            justify-items: center;
            align-items: center;
            height: 100px;
            padding-top: 20px;
        }
        .card{
            border: 2px solid;
            padding-left: 20%;
            padding-right: 20%;
        }
        a,
        a:hover {
            color: white;
            text-decoration: none;
        }

        .active {
            background-color: #198754;
        }

        .bottom {
            padding: 30px 30px 0 30px;
        }
        .form-control, .form-select{
            border:1px solid  black;
           
        }
      .form-control:focus, .form-select:focus  {
        border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

    </style>
</head>

<body>
    <script>
        $(function() {
            $('.navigation a[href~="' + location.href + '"]').parents('div').addClass('active');
        });
    </script>
    <div class="container-fluid">

        <div class="navigation px-2" style="background-color:#141414">
            <div class="brand" style="color: white;">LIBRARY</div>
            <div class="item"><a href="<?= newlibrary\app\core\Router::Url("/public/Bookindex") ?>">Book</a></div>
            <div class="item"><a href="<?= newlibrary\app\core\Router::Url("/public/Subscriptionindex") ?>">Subscription</a></div>
            <div class="item"><a href="<?= newlibrary\app\core\Router::Url("/public/Memberindex") ?>">Member</a></div>
            <div class="item"><a href="<?= newlibrary\app\core\Router::Url("/public/librarianindex") ?>">Librarian</a></div>
            <div class="item"><a href="#">trx</a></div>
        </div>
        <div class="content">
            <div class="top">
                <div class="dropdown ms-auto mx-5 py-3" style="text-align: right;">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php if (isset($_SESSION['auth'])) { ?>

                            <img src="764.png">
                    </button>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>

                <?php } else { ?>
                    <a href="<?= newlibrary\app\core\Router::Url("/public/login") ?>">
                        LOGINN </a>
                    </button>
                <?php } ?>
                </div>
            </div>
            <div class="bottom">