<h1>Orders Item</h1>
<p>
<table>
    Lenovo,
    UMIDIGI,
    Xiaomi Mi Band 2,
    Arduino,
    Sandisk,
    DOOGEE,
    Xiaomi,
    Flashlight,
    Led Bulb.
<tr><td>Дата</td><td>Товар</td><td>Описание</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Item'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	
?>
</table>
</p>
