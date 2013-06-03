<script language="javascript" src="jquery.js"></script>
<script language="javascript">
(function($){
    $.fn.pluginName = function(options) {
        alert('sdf');
        var color = this.name;
        this.each(function() {

        });
        alert(color);
        return this;
    }
})(jQuery)
$(document).ready( function(){
    $(".wc").pluginName();
});
</script>

<div class="wc">
sdfsf
</div>