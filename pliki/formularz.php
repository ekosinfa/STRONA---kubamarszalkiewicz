<?php
<h3>Dzień</h3>
<p>Wybierz dzień.</p>
<form action="...">
	<select name="Dzień">
		<option>1<?php value=$d=1?></option>
		<option>2<?php value=$d=2?></option>
		(...)
	</select>
</form>
<h3>Miesiąc</h3>
<p>Wybierz miesiąc.</p>
<form action="...">
	<select name="Miesiąc">
		<option>styczeń</option>
		<option>luty</option>
		(...)
	</select>
</form>
<h3>Rok</h3>
<p>Wybierz rok.</p>
<form action="...">
	<select name="Rok">
		<option><?php $Y=2013>2013</option>
		<option>2014</option>
                <option>2015</option
		(...)
	</select>
</form>
<?php

$time1 = mktime(0, 0, 0, $m, $d, $Y);
$time2 = time();
$time = $time1 - $time2;
echo ceil($time / 86400);
echo ' dni';

?>
