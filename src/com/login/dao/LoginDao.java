package com.login.dao;

import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.PreparedStatement;
import java.sql.SQLException;

public class LoginDao {
	String sql = "select * from login where uname=? and pass=?;";
	String url = "jdbc:mysql://localhost:3306/construc";
	String username = "";
	String password = "";
	public boolean check(String uname,String pass)
   {
	 try{
		 Class.forName("com.mysql.jdbc.Driver");
		 java.sql.Connection con =  DriverManager.getConnection(url,username,password);
		 PreparedStatement st = (PreparedStatement) con.prepareStatement(sql);
		 st.setString(1,uname);
		 st.setString(2,pass);
		 ResultSet rs = st.executeQuery();
		 if(rs.next()){
			 return true;
		 }
	 }
	 catch(ClassNotFoundException | SQLException e) {
             
		 
	 }
      return false;
	}
	
}
