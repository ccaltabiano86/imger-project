<?php
// Upload
$upload = "active";
include './components/header.php'; 
include 'config.php';

$statusMsg = '';
$statusAlert = 'danger';
$backLink = 'You wil be redirect home in 3 seconds.<br/>If page does not redirect <a id="backHome" href="./">Click Here</a>.';
$targetDir = 'uploads/';
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'bmp', 'pdf');
    if(!file_exists($targetFilePath)) {
        if(in_array($fileType, $allowTypes)) {
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $insert = $db->query("INSERT into images_v2(file_name, uploaded_on) VALUES ('". $fileName ."', NOW())");
                if($insert) {
                    $statusMsg = 'The file "<em>'. $fileName .'</em>" has been uploaded succesfully. ';
                    $statusAlert = 'success';
                } else {
                    $statusMsg = 'File upload failed, please try again. ';
                }
            } else {
                $statusMsg = 'There was an error uploading your file. ';
            }
        } else {
            $statusMsg = print_r($allowTypes) .'<br/> Only file types listed in array supported. ';
        }
    } else {
        $statusMsg = 'The file <b>'. $fileName .'</b> already exist. ';
    }
} else {
    $statusMsg = 'Please select a file to upload. ';
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