<h1>Authorization page</h1>
<p>
<form action="" method="post">
<table class="login">
	<tr>
		<th colspan="2">Authorization</th>
	</tr>
	<tr>
		<td>Login:</td>
		<td><input type="text" name="login"></td>
	</tr>
	<tr>
		<td>Passw:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<th colspan="2" style="text-align: right">
	<input type="submit" value="Войти" name="btn"
	style="width: 150px; height: 30px;"></th>
</table>
</form>
</p>

<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Authorization was successful.</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Login or password are entered incorrectly.</p>
<?php } ?>
