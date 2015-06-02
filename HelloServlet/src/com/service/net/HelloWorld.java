package com.service.net;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.*;

/**
 * Servlet implementation class HelloWorld
 */
//@WebServlet("/HelloWorld")
public class HelloWorld extends HttpServlet {
	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
    public void doGet(HttpServletRequest req, HttpServletResponse res)
            throws ServletException, IOException {

res.setContentType("text/html");
PrintWriter out = res.getWriter();

out.println("<HTML>");
out.println("<HEAD><TITLE>Hello World</TITLE></HEAD>");
out.println("<BODY>");
out.println("<BIG>Hello World</BIG>");
out.println("</BODY></HTML>");
}


}
