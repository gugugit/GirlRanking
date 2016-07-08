<?php
// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png");

$temp = explode(".", $_FILES["file"]["name"]);

$godname=trim($_POST['godname']);

$extension = end($temp);   // 获取文件后缀名

if ((($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png"))
    && ($_FILES["file"]["size"] < 204800)   // 小于 200 kb
    && in_array($extension, $allowedExts))
{
    if ($_FILES["file"]["error"] > 0)
    {
        echo "错误：: " . $_FILES["file"]["error"] . "<br>";
    }
    else
    {
        // 判断当期目录下的 upload 目录是否存在该文件
        // 如果没有 imgsrc 目录，你需要创建它，imgsrc 目录权限为 777
        if (file_exists("imgsrc/" . $_FILES["file"]["name"]))
        {
            echo $_FILES["file"]["name"] . " 文件已经存在。 ";
        }
        else
        {
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
            move_uploaded_file($_FILES["file"]["tmp_name"], "imgsrc/" . $_FILES["file"]["name"]);


            $url = "imgsrc/";

            $upName = $url.$_FILES["file"]["name"];

            $beauti = $upName;
            $stu = $godname;

            include_once("DBMysql.php");

            $query=new DBMysql();

            $sql="insert into stugirl (stu,beauti) values ('$stu','$beauti');";

            $result=$query->query($sql);

            var_dump($result);

            echo "<script>alert('恭喜您，上传成功！');</script>";


        }
    }
}
else
{
    echo "非法的文件格式";
}
?>