<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
<script language="javascript" src="jquery.js"></script>
<script language="javascript" src="jquery.hoveraccordion.js"></script>
<script language="javascript">
$(document).ready(function(){ 
   $('#example1').hoverAccordion({ 
      keepHeight: false, 
      speed: 'fast' ,
      onClickOnly : true
   }); 
});
</script>
<style type="text/css">
#example1 {
    margin: 0;
    padding: 0;
    width: 200px;
    list-style-type: none;
    line-height: 150%;
}
#example1 li {
    margin: 0;
    padding: 0;
    list-style-type: none;

    color: white;
}

#example1 .closed, #example1 .opened {
    padding-right: 10px;
    background-position: 98% 50%;
    background-repeat: no-repeat;
}
.closed{
    background: url(http://misc.360buyimg.com/201007/skin/df/i/20130412B.png) no-repeat;    
}
.opened {
    background: url(http://misc.360buyimg.com/201007/skin/df/i/20130412A.png) no-repeat;   
}
</style>
</head>
<body>
<ul id="example1">
            <li>
                <a href="#" class="header">Item 1</a>
            </li>
            <li>
                <a href="#" class="header closed">Item 2</a>
                <ul style="">
                    <li style="">
                        <a href="index.php?id=2a#ex1">Subitem 2a</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=2b#ex1">Subitem 2b</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=2c#ex1">Subitem 2c</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=2d#ex1">Subitem 2d</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=2e#ex1">Subitem 2e</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="header">Item 3</a>
            </li>
            <li>
                <a href="#" class="header">Item 4</a>
            </li>
            <li>
                <a href="#" class="header opened">Item 5</a>
                <ul style="">
                    <li style="display: list-item;">
                        <a href="index.php?id=5a#ex1">Subitem 5a</a>
                    </li>
                    <li style="display: list-item;">
                        <a href="index.php?id=5b#ex1">Subitem 5b</a>
                    </li>
                    <li style="display: list-item;">
                        <a href="index.php?id=5c#ex1">Subitem 5c</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="header">Item 6</a>
            </li>
            <li>
                <a href="#" class="header closed">Item 7</a>
                <ul style="">
                    <li style="">
                        <a href="index.php?id=7a#ex1">Subitem 7a</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=7b#ex1">Subitem 7b</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=7c#ex1">Subitem 7c</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=7d#ex1">Subitem 7d</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="header closed">Item 8</a>
                <ul>
                    <li style="">
                        <a href="index.php?id=8a#ex1">Subitem 8a</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8b#ex1">Subitem 8b</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8c#ex1">Subitem 8c</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8d#ex1">Subitem 8d</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8e#ex1">Subitem 8e</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8f#ex1">Subitem 8f</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8a#ex1">Subitem 8a</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8b#ex1">Subitem 8b</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8c#ex1">Subitem 8c</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8d#ex1">Subitem 8d</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8e#ex1">Subitem 8e</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=8f#ex1">Subitem 8f</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="header closed">Item 9</a>
                <ul>
                    <li style="">
                        <a href="index.php?id=9a#ex1">Subitem 9a</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=9b#ex1">Subitem 9b</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=9c#ex1">Subitem 9c</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=9d#ex1">Subitem 9d</a>
                    </li>
                    <li style="">
                        <a href="index.php?id=9e#ex1">Subitem 9e</a>
                    </li>
                </ul>
            </li>
        </ul>
</body>

</html>