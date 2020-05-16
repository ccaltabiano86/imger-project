<form action="upload.php" method="post" enctype="multipart/form-data">
            Select Image File to Upload:
            <input class="btn btn-sm btn-link border" type="file" name="file">
            <input class="btn btn-primary" type="submit" name="submit" value="upload">
        </form>
        <hr>
        <div class="row image-gallery">
            <?php
            include 'config.php';
            $query = $db->query("SELECT id, file_name FROM images_v2 ORDER BY uploaded_on DESC");
            if($query->num_rows > 0) {
                while($row = $query->fetch_assoc()) {
                    $imageURL = 'uploads/' . $row["file_name"];
                    $imageFullURL = 'http://react-js.local/imger_v2/' .$imageURL;
                    $imageID = $row["id"];
                ?>
                <div class="col-md-4 col-sm-12">
                    <div class="img-thumbnail div-flux">
                        <a href="#" data-toggle="modal" data-target="#modal_<?=$imageID;?>">
                            <div class="img-flux mx-auto d-block" style="background-image: url('<?=$imageURL;?>');"></div>
                        </a>
                    </div>


                    <input class="form-control input-small mt-2" type="text" readonly value="<?=$imageFullURL;?>" id="myInput_<?=$imageID;?>">
                    <div class="my-2 tooltipA">
                        <button class="btn btn-info" 
                            onclick="myFunction('<?=$imageID;?>')" 
                            onmouseout="outFunc('<?=$imageID;?>')" 
                            id="myTooltip_<?=$imageID;?>">Copy URL</button>
                    </div>
                    <form class="form-right my-2 d-inline" action="delete.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="delete" value="<?=$imageID;?>">
                        <input type="hidden" name="imageURL" value="<?=$imageURL;?>">
                        <input class="btn btn-outline-danger" type="submit" name="submit" value="Delete" onclick="deleteBtn();">
                    </form>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="modal_<?=$imageID;?>" tabindex="-1" role="dialog" aria-labelledby="modal_<?=$imageID;?>_title"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center bg-dark">
                                <img class="img-fluid" src="<?=$imageURL;?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Modal -->

                <?php 
                }
            } 
            ?>
        </div>