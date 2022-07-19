<%@page import="java.sql.*" %>  
<%@page import="java.util.*" %> 

<% 
 
  
    	String id = request.getParameter("id");
        
        
        Connection con;
        PreparedStatement pst;
        ResultSet rs;
        
        Class.forName("com.mysql.jdbc.Driver");
        con = DriverManager.getConnection("jdbc:mysql://localhost:3306/construc_login","root","");
        pst = con.prepareStatement("delete from work_stat where id=?");
       
        pst.setString(1, id);
        pst.executeUpdate();  
        
        %> 
    <script>   
        alert("Record Deleted");     
    </script> 
   
