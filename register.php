<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

	<?php
	include("includes/header.php");
	?>
	<script type="text/javascript">
		<!== 
			function check_empty()
		{
			var username=";
			username=document.getElementById("username").value;
			if(username==")
			   alert('وارد کردن نام کاربری الزامی است');
			else
				{
					
					var r = confirm("از صحت اطلاعات وارد شده اطمنیان دارید؟");
					if(r== true){
						document.register.submit();
					}
				}
		}
	</script>
	<br/>									
	<from name="register" action="action_register.php" method="POST">
		
		<table style="width: 50%" border="0" style="margin-left: auto;margin-right:auto;">
			<tr>
				<td style="width: 40%;">نام واقعی <span style="color: red;">*</span></td>
				<td style="width: 60%;"><input type="text" id="realname" name="realname"/></td>
			</tr>
			
			<tr>
			<td>نام کاربری <span style="color: red;">*</span></td>
			<td><input type="text" style="text-align: left;" id="username" name="username"/></td>
			</tr>
			
			<tr>
			<td>کلمه عبور <span style="color: red;">*</span></td>
			<td><input type="passaword" style="text-align: left;" id="repassword" name="repassword"/></td>
			</tr>
			
			<tr>
			<td>تکرار کلمه عبور <span style="color: red;">*</span></td>
			<td><input type="passaword" style="text-align: left;" id="repassword" name="repassword"/></td>
			</tr>
			
			<tr>
			<td>پست الکترونیکی <span style="color: red;">*</span></td>
			<td><input type="text" style="text-align: left;" id="email" name="email"/></td>
			</tr>
			
			<tr>
				<td><br/><br/></td>
				<td> <input type="button" value="ثبت نام" onclick="check_empty();"/>
					&nbsp;&nbsp;&nbsp;
					<input type="rest" value="جدید"/></td>
			</tr>
			
		</table>
	</from>
	
	<?php
	include("includes/footer.php");
	?>
</html>