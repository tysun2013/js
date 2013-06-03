<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>

<title>半透明</title>
<style>
body{
    background:red;
    margin:0px;
    padding:0px;
}

#div1{
    position:relative;
    margin:10px auto; 
    width:970px; 
    height:350px ; 
    text-align:center; 
    background:url("/images/poster_1.jpg");
    border:10px solid blue;
}
#div2{ 
    position:absolute;
    bottom:0px;
    left:0px;
    width:970px;
    height:40px; 
    filter:alpha(Opacity=30);
    opacity: 0.3;
    z-index:100; 
    background-color:#ffffff; 
}
</style>
</head>
<body>
<div id="div1"> 
 <div id="div2"></div>
</div>
</body>
</html>