<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<style>
p {
padding:0.9em;
border:1px solid gray;
}
</style>
</head>
<body>
<h2>My First JSP Page</h2>
	<%="Hello JSP<br/>Next Line"%>
	<%!int data=50; %>
	<%! int cube(int n){
		return n*n*n;
		}
	 %>
	<%="Value of the variable is:"+data %>
	<%="Cube of 3 is:"+cube(3) %>
	<p>This is a paragraph</p>
	
	<form action="welcome.jsp" method="post">
		Username:<input type="text" name="username"/>
		<input type="submit" value="Send to Welcome file!">
	</form>
</body>
</html>