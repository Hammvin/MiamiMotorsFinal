<?php include 'header.php';
require_once('FileUpload_ops.php');

$db = new Upload_ops();
?>

    <!--Taking the image to upload and its details-->
    <div class="container-fluid">
        <div class="row">
<!--            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2></div>-->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <?php $db->Grab_images(); ?>
                <form action="upload.php" method="post" enctype="multipart/form-data" >
                    Select image to upload:
                    <div class="form-group">
                        <input type="file" name="fileToUpload" id="fileToUpload" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="imgName" placeholder="Enter image-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" placeholder="Place value" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="5" cols="20" placeholder="Say something.." class="form-control"></textarea>
                    </div>
                    <input type="submit" value="Upload" name="submit" class="btn btn-info ">
                </form>

           </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="<?php echo $target_file?>" alt="">
            </div>
        </div>
<!--        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2></div>-->
    </div>

