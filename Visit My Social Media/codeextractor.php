<html>
<head><title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script type='text/javascript'>
$(document).ready(function(){
$("#extract").click(function(){
var divHtml = $('.extractMe').prop('outerHTML');
$('textarea').val(divHtml);
});
});
</script>

</head>

<body>
<div class="extractMe" style="text-align:center;">
<span style="margin: 5px;">
<a target="_new" href="http://www.googleplus.com/">
<img width="38" height="38" src="icons/default/googleplus.png">
</a>
</span>
<span style="margin: 5px;">
<a target="_new" href="http://www.instagram.com/">
<img width="38" height="38" src="icons/default/instagram.png">
</a>
</span>
<span style="margin: 5px;">
<a target="_new" href="http://www.linkedin.com/">
<img width="38" height="38" src="icons/default/linkedin.png">
</a>
</span>
</div>

<textarea></textarea>

<div id="extract">Get Code</div>
</body>
</html>