<h1>Cookie form</h1>
<form method="POST" action="cookie-form">
	@csrf
	<input type="text" name="username" placeholder="enter user name" value="{{Cookie::get('username')}}"> 
	<br>
	<input type="password" name="password" placeholder="enter user password" value="{{Cookie::get('password')}}">
	<br>
	<button type="submit">Submit </button>
</form>