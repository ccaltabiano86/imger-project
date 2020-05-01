<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// Header file
$view = 'active';
include 'components/header.php'; 

// Get image data from database ASC or DESC
$result = $db->query("SELECT id, image FROM images ORDER BY uploaded ASC"); 
?>
<?php if($result->num_rows > 0){ ?> 
    <div class="gallery row"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <div class="col-md-2">
                <div class="item">
                    <img class="img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
                    <p class="text-center"><?php echo 'image id: '; echo $row['id']; ?></p>
                </div>
            </div>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>