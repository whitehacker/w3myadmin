<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<%-- <jsp:useBean id="obj" class="com.me.net.Calculator" /> --%>
<%-- <%
	int m=obj.cube(4);
	out.println("Cube of 4 is:"+m);
 %> --%>
<jsp:useBean id="obj" class="com.me.net.Employee" scope="page">
	<jsp:setProperty name="obj" property="name" value="Ahmad" />
	<jsp:setProperty name="obj" property="email" value="me@mail.com" />
</jsp:useBean>
<p>Your Name is:<jsp:getProperty name="obj" property="name" /></p>
<p>Your Email Address is:<jsp:getProperty name="obj" property="email" /></p>
</body>
</html>