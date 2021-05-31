
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../jquery.js"></script>
</head>
<body>
<form>
	<p>
		<label for="pwd">password:</label>
		<input type="password" class="form-control" id="pwd" name="pwd">
	</p>

	<p>
		<label for="pwd">confirm password</label>
		<input type="password" class="form-control" id="cpwd" name="cpwd">
	</p>
	<p id="showErrorPwd">
		
	</p>

	<p>
		<button type="submit" >Submit</button>
	</p>
</form>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){

			
			$('#cpwd').keyup(function(){
				var pwd=$('#pwd').val();
				var cpwd=$('#cpwd').val();

				if (cpwd!=pwd) {
					$('#showErrorPwd').html('**password are not matching');
					$('#showErrorPwd').css('color','red');
					return false;
				}
				else
				{
					$('#showErrorPwd').html('');
					 
					return true;
				}

			});


	});
</script>