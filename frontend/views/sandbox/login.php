<?php
use yii\helpers\Url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>汇成基金接口测试工具</title>
<style type="text/css">
</style>
</head>
<body>
<form action="<?=Url::to('/sandbox/dologin')?>" method="post">
用户名:<input name="username" type="text">&nbsp;&nbsp;&nbsp;&nbsp;
密码:<input name="password" type="password">&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="提交">
</form>
</body>
</html>