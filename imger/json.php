<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 

// Get image data from database ASC or DESC
$result = $db->query("SELECT * FROM images"); 
?>
<?php if($result->num_rows > 0){
    $emparray = array();
    while($row = $result->fetch_assoc()){ 
        $id = $row['id'];
        $image = base64_encode($row['image']);
        $uploaded = $row['uploaded'];
        $emparray[] = array('id'=>$id, 'image'=>$image, 'uploaded'=>$uploaded);
    } 
    }else{ ?> 
    <p class="status error">Nothing not found...</p> 
<?php } 


$json_data = json_encode($emparray);
file_put_contents('results.json', $json_data);

echo json_encode($emparray);

mysqli_close($db);

?>