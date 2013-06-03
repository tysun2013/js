<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
<title>插件</title>
<style type="text/css">

</style>
<script language="javascript" src="jquery.js"></script>

<script language="javascript">
$(document).ready(function(){
    jQuery.myPlugin = ({
        foo: function(){
            alert('this is foo');
        },
        bar: function(param){
            alert('this is ' + param);
        }
    });
    jQuery.fn.showAlert = function(){
        this.each(function(){
            alert('You called this method on ' + this + '.');
        });
    };
    $('.xyz').showAlert();
});


</script>
</head>
<body>
  <div id="xyz" class="xyz">
  sdf
  </div>
  <div id="xyz2" class="xyz">
  sdf
  </div>
</body>
</html>