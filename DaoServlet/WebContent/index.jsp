<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<script src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#updatebutton").click(function(){
		var msg = $("#message").val();
		var dataString = 'message='+msg;
		$.ajax({
			type: "POST",
			url: "InsertMessage",
			data : dataString,
			cache: false,
			success: function(data)
			{
				$("#message").val('');
				$("#content").prepend(data);
				$("#messsage").focus;
			}
			});
		return false;
	});
});
</script>
</head>
<body>
<textarea id="message"></textarea>
<input type="button" value="Update Status!" id="updatebutton">
<div id="content"></div>
</body>
</html>