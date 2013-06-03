<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
<title>事件</title>
<style type="text/css">
#dictionary {
    color:red;
}
.button {
    border:1px solid #000;
    width:200px;
    height:50px;
    line-height:50px;
    text-align:center;
}
</style>
<script language="javascript" src="jquery.js"></script>
<script language="javascript">
$(document).ready( function(){
    $('#letter-a .button').click( function(){
        $('#dictionary').load('a.html');
    });
});

</script>
</head>
<body>
<div id="dictionary"></div>
<div class="letters">
    <div class="letter" id="letter-a">
        <h3>A</h3>
        <div class="button">Load</div>
    </div>
    <div class="letter" id="letter-b">
        <h3>B</h3>
        <div class="button">Load</div>
    </div>
    <div class="letter" id="letter-c">
        <h3>C</h3>
        <div class="button">Load</div>
    </div>
    <div class="letter" id="letter-d">
        <h3>D</h3>
        <div class="button">Load</div>
    </div>
</div>
</body>
</html>