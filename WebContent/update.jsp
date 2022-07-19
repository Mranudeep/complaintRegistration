<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*" %>  
<%@page import="java.util.*" %> 

<% 
 
    if(request.getParameter("submit")!=null)
    {
    	String id = request.getParameter("id");
        String wname = request.getParameter("wname");
        String status = request.getParameter("sname");
        String date = request.getParameter("date");
        
        Connection con;
        PreparedStatement pst;
        ResultSet rs;
        
        Class.forName("com.mysql.jdbc.Driver");
        con = DriverManager.getConnection("jdbc:mysql://localhost:3306/construc_login","root","");
        pst = con.prepareStatement("update work_stat set wname=?,sname=?,date=? where id=?");
        pst.setString(1, wname);
        pst.setString(2, status);
        pst.setString(3, date);
        pst.setString(4, id);
        pst.executeUpdate();  
        
        %> 
    <script>   
        alert("Record Updated");     
    </script> 
    <%             
    }
   %>



<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>EDIT PAGE</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<h1>EDIT PROCESS</h1>

<div class="row">
<div class="col-sm-4">
 <form method="POST" action="#">
 
 	<%
 	Connection con;
	PreparedStatement pst;
	ResultSet rs;
	
	Class.forName("com.mysql.jdbc.Driver");
	con = DriverManager.getConnection("jdbc:mysql://localhost:3306/construc_login","root","");
	String id = request.getParameter("id");
	pst = con.prepareStatement("select * from work_stat where id=?");
	pst.setString(1,id);
	rs = pst.executeQuery();
	while(rs.next()){
		
	
 	
 	
 	
 	
 	
 	%>
 
 
 
 	<div align="left">
 		<label class="form-label">WORK</label>
 		<input type="text" class="form-control" placeholder="work name" value="<%= rs.getString("wname") %>" name="wname" id="wname" required>
 	</div>
 	<div align="left">
 		<label class="form-label">STATUS</label>
 		<input type="text" class="form-control" placeholder="status name" value="<%= rs.getString("sname") %>" name="sname" id="sname" required>
 	</div>
 	<div align="left">
 		<label class="form-label">DATE</label>
 		<input type="date" class="form-control" placeholder="date" value="<%= rs.getString("date") %>" name="date" id="date" required>
 	</div>
 	
 	<%
	}
 	%>
 	
 	<br>
 	<div align="left">
 		<input type="submit" id="submit" value="submit" name="submit" class="btn btn-info">
 		<input type="reset" id="reset" value="reset" name="reset" class="btn btn-warning">
 		
 	</div>
 	
 	<div align="right">
 	
 		<p><a href="welcome.jsp">BACK</a></p>
 	
 	</div>
 	
 	
 </form>
</div>


</div>


</body>
</html>