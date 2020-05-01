<?php
// Delete
$delete = "active";
include './components/header.php'; 
include 'config.php';

$statusMsg = '';
$statusAlert = 'danger';
$backLink = 'You wil be redirect home in 3 seconds.<br/>If page does not redirect <a id="backHome" href="./">Click Here</a>.';
$deleteID = $_POST["delete"];
$imageURL = $_POST["imageURL"];

if(isset($_POST["submit"]) && !empty($_POST["delete"])) {
    $deleteImg = $db->query("DELETE FROM images_v2 WHERE id = ".$deleteID."");
    if($deleteImg) {
        if (file_exists($imageURL)) {
            $deleted= unlink($imageURL);
            if ($deleted) {
                $statusMsg = 'The file "<em>'. $imageURL .'</em>" has been deleted succesfully. ';
                $statusAlert = 'success';
            } else {
                $statusMsg = 'File delete failed, please try again. ';
            } 
        } else {
            $statusMsg = 'There was an error finding your file in the directory.';
        }
    } else {
        $statusMsg = 'There was an error finding your file in the database.';
    }
} else {
    $statusMsg = 'Please select a file to delete.';
}

?>

<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <div class="alert alert-<?=$statusAlert;?>">
                <strong><?=$statusMsg;?></strong>
            </div>
            <div class="jumbotron">
                <?php
                echo $backLink;
                ?>
            </div>
        </div>
    </div>
</div>
<?php
include './components/footer.php'; 

?>