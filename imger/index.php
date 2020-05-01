<?php

// Header file
$home = "active";
include 'components/header.php'; 

?>
    <div class="row">
        <div class="col-md-12">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <label>Select Image File:</label>
                <input type="file" name="image">
                <input type="submit" name="submit" value="Upload">
            </form>
        </div>
    </div>