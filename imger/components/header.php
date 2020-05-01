<?php


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{img}eR Image Uploader</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="components/custom.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/imger/">{img}eR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php echo $home; ?>">
                    <a class="nav-link" href="/imger/">Home</a>
                </li>
                <li class="nav-item <?php echo $view; ?>">
                    <a class="nav-link" href="/imger/view.php">View Images</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/imger/results.json">JSON File</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <span class="nav-item mx-1">
                    <a class="btn btn-outline-danger my-2 my-sm-0"  href="/imger/json.php">Generate JSON</a>
                </span>
                <span class="nav-item mx-1">
                    <a class="btn btn-success my-2 my-sm-0 <?php echo $upload; ?>"  href="/imger_v2/">Version 2</a>
                </span>
            </form>
        </div>
    </nav>
    <div class="container mt-5">
        <!-- Content here -->
