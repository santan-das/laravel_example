<h1>User login</h1>
<form method="POST" action="user">
	@csrf
	<input type="text" name="user" placeholder="enter user name"> 
	<br>
	<input type="password" name="password" placeholder="enter user password">
	<br>
	<button type="submit">Login </button>
</form>