<?php

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/imger_v2/">{img}eR v2</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo $home; ?>">
                <a class="nav-link" href="/imger_v2/">Home</a>
            </li>
            <li class="nav-item dropdown <?php echo $upload; echo $delete; ?>">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Troubleshooting
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item <?php echo $upload; ?>" href="/imger_v2/upload.php">Upload</a>
                    <a class="dropdown-item <?php echo $delete; ?>" href="/imger_v2/delete.php">Delete</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <span class="nav-item mx-1">
                <a class="btn btn-outline-danger my-2 my-sm-0" href="/imger/">Version 1</a>
            </span>
        </form>
    </div>
</nav>