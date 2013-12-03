<html>
<head><title>Hello World PHP</title></head>
<body>
<?php
echo 'Today is '. date('Y-m-d') ."\n";
?>

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="QAS2CVD4Z4VUL">
<table>
<tr><td><input type="hidden" name="on0" value="Antal biljetter">Antal biljetter</td></tr><tr><td><select name="os0">
	<option value="1 vuxen">1 vuxen 150,00 SEK</option>
	<option value="2 vuxen">2 vuxen 300,00 SEK</option>
	<option value="3 vuxen">3 vuxen 450,00 SEK</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="SEK">
<input type="image" src="https://www.paypalobjects.com/sv_SE/SE/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – ett tryggt och smidigt sätt att betala på nätet!">
<img alt="" border="0" src="https://www.paypalobjects.com/sv_SE/i/scr/pixel.gif" width="1" height="1">
</form>

</body>
</html>