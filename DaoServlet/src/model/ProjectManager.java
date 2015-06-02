package model;
import java.sql.Connection;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import dao.Project;
public class ProjectManager {
	public String InsertMessage(Connection connection, HttpServletRequest request, HttpServletResponse response) throws Exception{
		String message = null;
		try{
			message = request.getParameter("message");
			if(message !=null && message !="" && message.length()>0){
				Project project = new Project();
				message = project.InsertMessage(connection, request, response);
			}
		}
		catch(Exception e){
			throw e;
		}
		return message;
	}
}
