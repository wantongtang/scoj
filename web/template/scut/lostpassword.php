<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $view_title?></title>
        <link rel=stylesheet href='./template/<?php echo $OJ_TEMPLATE?>/<?php echo isset($OJ_CSS)?$OJ_CSS:"hoj.css" ?>' type='text/css'>
</head>
<body>
 <?php require_once("oj-header.php");?>
<div class="container">
<div class="row">
<div class="hero-unit">
        <form action="lostpassword.php" method="post">
        <center>
        <table width=400 algin="center">
                <tr>
                        <td width='200'><?php echo $MSG_USER_ID?>:</td>
                        <td width='200'><input name="user_id" type="text" size='20'></td>
                </tr>
                <tr>
                        <td><?php echo $MSG_EMAIL?>:</td>
                        <td><input name="email" type="text" size=20></td>
                </tr>
                
                <tr>
                        <td><?php echo $MSG_VCODE?>:</td>
                        <td>
                                <input name="vcode" size=4 type=text>
                                <img alt="click to change" src=vcode.php onclick="this.src='vcode.php#'+Math.random()">*
                        </td>
                </tr>
                        
                <tr>
                        <td></td>
                        <td>
                                <input name="submit" type="submit" size=10 value="Submit">
                        </td>
                </tr>
        </table>
</form>

</div>
</div>
</div>
<div id="foot">
        <?php require_once("oj-footer.php");?>
</div><!--end foot-->

</body>
</html>
