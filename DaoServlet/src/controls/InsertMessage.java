package controls;
import java.io.*;
import java.io.PrintWriter;
import java.sql.Connection;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import model.ProjectManager;
import dao.Database;
/**
 * Servlet implementation class InsertMessage
 */
@WebServlet("/InsertMessage")
public class InsertMessage extends HttpServlet {
	protected void doPost(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException{
		res.setContentType("text/html;charset=UTF-8");
		PrintWriter out=res.getWriter();
		try{
			Database database = new Database();
			ProjectManager projectManager = new ProjectManager();
			String message = null;
			Connection connection = database.Get_Connection();
			message = projectManager.InsertMessage(connection, req, res);
			if(message !=null){
				out.println("<div>"+message+"</div>");
			}
			else{
				out.println("False");
			}
		}
		catch(Exception e){
			out.println("Error" +e.getMessage());
		}
		finally{
			out.close();
		}
	}

}
