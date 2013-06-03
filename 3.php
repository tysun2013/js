<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
<title>事件</title>
<style type="text/css">
.both{
    clear:both;
    font-size:0.75em;
}
.wraper{
    margin:0 auto;
    padding:20px;
    border:1px solid #333;
    width:980px;
}
#switcher{
    float:right;
    border:1px solid #333;
    width:500px;
    background:#EEE;
    padding:10px;
}
#switcher h3{
    margin:0 0 10px 0;
    padding:0px;
    cursor:pointer;
}
.button{
    float:left;
    border:2px solid #333;
    background:#FFF;
    width:130px;
    margin-left:10px;
    padding:5px;
    text-align:center;
    cursor:pointer;
}
#switcher .selected{
    background:#AAA;
    font-weight:bold;
}
#switcher .hover{
    background:#AAA;
    cursor:pointer;
}
.contents{
    float:right;
    width:980px;
    margin:10px;
}
.chapter{
    border:1px solid #333;
    margin:10px;
    padding:10px;
}
.standard{
    border-top:1px solid #E00;
}

/* 特殊样式 */
body.large .chapter{
    font-size:1.25em;
}
body.narrow .chapter{
    width:400px;
}
.hidden{
    display:none;
}
</style>
<script language="javascript" src="jquery.js"></script>
<script language="javascript">
$(document).ready(function(){
    $('#switcher .button').click(function(){
        $('body').removeClass();
        if(this.id == 'switcher-large'){
            $('body').addClass('large');
        }
        if(this.id == 'switcher-narrow'){
            $('body').addClass('narrow');
        }
        $('#switcher .button').removeClass('selected');
        $(this).addClass('selected');
    });
    $('#switcher h3').click(function(){
        $('#switcher .button').toggleClass('hidden');
    });
    $('#switcher .button').hover(function(){
        $(this).toggleClass('hover');
    });
});


</script>
</head>
<body>
<div class="wraper">
  <div id="switcher" class="">
    <h3>Style Switcher</h3>
    <div id="switcher-normal" class="button selected">Normal</div>
    <div id="switcher-narrow" class="button">Narrow Column</div>
    <div id="switcher-large" class="button">Large Print</div>
  </div>
  <div id="" class="contents">
      <div id="" class="chapter">
        <p>this is some words!</p>
      </div>
      <div class="standard">
        <p style="font-size:14px;">14this is some words!</p>
        <p style="font-size:16px;">16this is other words and fontsize is different!</p>
        <p style="font-size:20px;">20this is other words and fontsize is different!</p>
        <p style="font-size:24px;">24this is other words and fontsize is different!</p>
      </div>
  </div>
  <div id="" class="both"></div>
</div>
</body>
</html>