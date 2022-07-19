<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@page import="java.sql.*" %>  
<%@page import="java.util.*" %> 
<%@page import="java.time.LocalDate" %>    
<%@page import="java.sql.PreparedStatement" %>    


        
    
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>JOB PORTAL</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body style=" background-image: linear-gradient(to right, #56ab2f  ,#a8e063);">
<%

   response.setHeader("Cache-Control","no-cache,no-store,must-revalidate");
   response.setHeader("Expires","@");	
	if(session.getAttribute("username")==null){
	response.sendRedirect("login.jsp");
}



	if(request.getParameter("submit")!=null){
		String wname = request.getParameter("wname");
		String status = request.getParameter("sname");
		String datee = request.getParameter("date");
		
		Connection con;
		PreparedStatement pst;
		ResultSet rs;
		
		Class.forName("com.mysql.jdbc.Driver");
		con = DriverManager.getConnection("jdbc:mysql://localhost:3306/construc_login","root","");
		
		pst = con.prepareStatement("insert into work_stat(wname,sname,date) values (?,?,?)");
		pst.setString(1,wname);
		pst.setString(2,status);
		pst.setString(3,datee);
	    pst.executeUpdate();
		
		%>
		
		<script type="text/javascript">
alert("Record Added");
</script>
		
		
		<% 
	}


%> 
<h3 style="margin-top:20px;margin-left:470px">Welcome ${username} !</h3>
<br>
<div class="row">
<div class="col-sm-4">
 <form method="POST" action="#" style="margin-left:20px;margin-top:25px">
 	<div align="left">
 		<label class="form-label">WORK</label>
 		<input type="text" class="form-control" placeholder="work name with place" name="wname" id="wname" required>
 	</div>
 	<div align="left">
 		<label class="form-label">STATUS</label>
 		<input type="text" class="form-control" placeholder="status name" name="sname" id="sname" required>
 	</div>
 	<div align="left">
 		<label class="form-label">DATE</label>
 		<input type="date" class="form-control" placeholder="date" name="date" id="date" required>
 	</div>
 	<br>
 	<div align="right">
 		<input type="submit" id="submit" value="submit" name="submit" class="btn btn-info">
 		<input type="reset" id="reset" value="reset" name="reset" class="btn btn-warning">
 		
 	</div>
 </form>
</div>

<div class="col-sm-6" style="margin-left:200px;">

	<div class="panal-body">
	<br>
	<br>
		<table id="tbl-employee" class="table table-responsive " style="cellpadding:0">
		
			<thead>
				<tr>
					<th>Work Title</th>
					<th>Status</th>
					<th>Date</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				</thead>
				  <%   
 
                                Connection con;
                                PreparedStatement pst;
                                ResultSet rs;
        
                                Class.forName("com.mysql.jdbc.Driver");
                                con = DriverManager.getConnection("jdbc:mysql://localhost:3306/construc_login","root","");
                                
                                  String query = "select * from work_stat";
                                  Statement st = con.createStatement();
                                  
                                    rs =  st.executeQuery(query);
                                    
                                        while(rs.next())
                                        {
                                            String id = rs.getString("id");
                                   %>
             
				  <tr>
                                 <td><%=rs.getString("wname") %></td>
                                 <td><%=rs.getString("sname") %></td>
                                 <td><%=rs.getString("date") %></td>
                                 <td><a href="update.jsp?id=<%=id%>">Edit</a></td>
                                 <td><a href="delete.jsp?id=<%=id%>">Delete</a></td>
                             </tr> 
                             
                           
                                <%
                                 
                                 }
                               %>
		
		 </table> 
		
	
	</div>


</div>


	

</div>



<form action="Logout" style="margin-top:20px;margin-left:1000px">
  <input class="btn btn-warning" type="submit" value="LOGOUT">

</form>

</body>
</html>