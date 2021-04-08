<!DOCTYPE html>
<html>
<head>
    <title>Image Upload Results</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
        <h3>Congratulations, the image has successfully been uploaded</h3>
        <p>Click here to view the image you just uploaded
            <!-- anchor('images/'.$image_metadata['file_name'] 執行後會變成 "http://localhost/codeigniter/images/Screenshot_2021-01-15-18-18-40-124_com_Slack3.jpg" -->
            <!-- 連結到 /images 資料夾底下的照片檔-->
            <?=anchor('images/'.$image_metadata['file_name'], 'View My Image!')?>
            <?= $image_metadata['file_name']?>
        </p>

        <p>
            <?php echo anchor('upload-image', 'Go back to Image Upload'); ?>
        </p>
    </div>
</body>
</html>