<?php
$total = rand(1,300);
$current = rand(1,$total);
$percent = round(($current/$total)*100,1);
echo $total;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Racking</title>
</head>
<body>

<style type="text/css">
.outter{
	height:25px;
	width:300px;
	border:solid 1px #000;

}
.inner{
	height:25px;
	width:<?php echo $total  ?>;
	border-right:solid 1px #000;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#d0e4f7+0,73b1e7+24,0a77d5+50,539fe1+79,87bcea+100;Blue+Pipe+%231 */
background: rgb(208,228,247); /* Old browsers */
background: -moz-linear-gradient(top, rgba(208,228,247,1) 0%, rgba(115,177,231,1) 24%, rgba(10,119,213,1) 50%, rgba(83,159,225,1) 79%, rgba(135,188,234,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(208,228,247,1) 0%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 50%,rgba(83,159,225,1) 79%,rgba(135,188,234,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(208,228,247,1) 0%,rgba(115,177,231,1) 24%,rgba(10,119,213,1) 50%,rgba(83,159,225,1) 79%,rgba(135,188,234,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d0e4f7', endColorstr='#87bcea',GradientType=0 ); /* IE6-9 */

}
</style>
<div class="outter">
	<div class="inner">
	</div>
</div>
</body>
</html>