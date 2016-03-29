<?php
require_once("business/imageservice.php");
$service = new ImageService();
$imagelijst = $service->toonAlleImages();
?>

<style>
    table {
    }    

    tr {display: block;
        float: left;
    width: auto;
    box-sizing: border-box;} 

    
    td:nth-child(2n+1){
        width: 20px;
    }

    tr:nth-child(2n+1) {
        background: lightgrey;
    }
    
    tr{border: 1px black solid;}

    body{background: rgba(235,233,249,1);
background: -moz-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 50%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(235,233,249,1)), color-stop(50%, rgba(216,208,239,1)), color-stop(51%, rgba(206,199,236,1)), color-stop(100%, rgba(193,191,234,1)));
background: -webkit-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 50%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
background: -o-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 50%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
background: -ms-linear-gradient(top, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 50%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
background: linear-gradient(to bottom, rgba(235,233,249,1) 0%, rgba(216,208,239,1) 50%, rgba(206,199,236,1) 51%, rgba(193,191,234,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ebe9f9', endColorstr='#c1bfea', GradientType=0 );}
</style>

<!DOCTYPE html>
<html>
    <body>
        <a style="float: right" href="refreshdb.php"><img src="img/refresh.png"></a>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="file" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

        <table>
            <?php
            foreach ($imagelijst as $image) {
                ?>
                <tr>
                    <td>
    <?php print($image->getId()); ?>
                    </td>
                    <td>
                        <img src="uploads/<?php print($image->getFilename()); ?>" height="200" width="200">
                    </td>
                    <td>
                        <a href="deleteimage.php?id=<?php print($image->getId());?>"><img src="img/delete.gif"></a>
                    </td>
                </tr>
    <?php
}
?>
        </table>
        

        
    </body>
</html>

