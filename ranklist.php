<!DOCTYPE html>
<html>
    <head>
        <title>校花评比大赛</title>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatibl\e" content="IE=edge">
        <meta name="keywords" content="Campus campus Belle ranking selection">
        <meta name="description" content="校花评比">
    <link href="bootstrap.css" rel="stylesheet">
      <script src="jquery.js"></script>
    </head>
    <body>
    <div class="wrapper" id="wrapper">
        <nav class="navbar navbar-default navbar-static-top">
              <a class="navbar-brand" href="index.php">校花排名出来啦</a>
              <a class="navbar-brand btn btn-primary" href="upload.html">快来上传你心中的校花</a>
        </nav>
        <!-- ^ ?? -->
        		<div class="container ranklist">
			<table class="table">
		      <caption>校花得分列表</caption>
		      <thead>
		        <tr>
		          <th>序号</th>
		          <th>姓命</th>
		          <th>得分</th>
		        </tr>
		      </thead>
		      <tbody>
		      <?php 
              include_once("DBMysql.php");
              $query=new DBMysql();
              $i=0;
              $sql="select * from stugirl order by score desc;";
              $result=$query->query($sql);
              while($row=mysql_fetch_array($result))
                { 
                    $i++;
                ?>
		        <tr>
		          <th scope="row"><?php echo $i;?></th>
		          <td><a href="<?php echo $row["beauti"];?>"><?php echo $row["stu"];?></a></td>
		          <td><?php echo $row["score"];?></td>
		        </tr>
		        <?php }?>
		      </tbody>
		    </table>
        <button class="btn btn-success" id="rechoose">我还想再选一次！</button>
       
        </div>
        <!-- $ ?? -->
    </div>
    <script src="bootstrap.js"></script>
    <script type="text/javascript">
    $("#rechoose").on("click",function(){
       document.cookie="rankwomanper=0";
       window.location.href="./index.php";
    });
    </script>
    </body>
</html>