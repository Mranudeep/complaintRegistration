<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Sign-up Page</title>
<style>
:root {
  --mainBlue: #03a9f4;
}
body {
  display: flex;
  justify-content: center;
  font-family: sans-serif;
 
}
::-webkit-scrollbar {
  width: 1000px;
}
::-webkit-scrollbar-track {
  background: #FFF;
}
::-webkit-scrollbar-thumb {
  background: var(--mainBlue);
}
section {
  width: 350px;
  height: 600px;
  background-color: var(--mainBlue);
}
.main {
  width: 310px;
  height: 560px;
  margin-left: 20px;
  background-color: #FFF;
  border-radius: 15px;
  box-shadow: 0 0 10px #222;
}
.main h1 {
  text-align: center;
  padding: 10px;
}
.main .one,
.main .two,
.main .three,
.main .four {
  position: relative;
  width: 100%;
  display: flex;
  justify-content: center;
}
.main .one::before,
.main .two::before,
.main .three::before,
.main .four::before {
   left: 10%;
   top: 3%;
   margin-top:  10px;
   font-family: 'Font Awesome 5 Free';
   font-weight: 700;
   font-size: 13px;
   color: #777;
}
.one::before {
   content: "\f007";
   position: absolute;
}
.two::before {
    content: "\f2b6";
    position: absolute;
}
.three::before,
.four::before {
    content: "\f023";
    position: absolute;
}
.main div input {
  width: 210px;
  position: relative;
  padding: 10px 0;
  margin-bottom: 30px;
  font-weight: bold;
  caret-color: var(--mainBlue);
  outline: none;
  border: none;
  border-bottom: 2px solid #CCC;
  transition: 0.3s ease-in-out;
}
.main div input:focus {
  border-bottom: 2px solid var(--mainBlue);
}
.main .btn {
  display: flex;
  justify-content: center;
}
.main button {
  width: 220px;
  background-color: Green;
  color: #FFF;
  font-weight: bold;
  border: none;
  outline: none;
  padding: 10px;
  cursor: pointer;
  position: relative;
  transition: 0.35s ease-in-out;
}
.main button:before {
  content: "";
  position: absolute;
  top: -5px;
  left: 0;
  width: 30px;
  height: 2px;
  background-color: inherit;
  transition: 0.35s ease-in-out;
}
.main button:after {
  content: "";
  position: absolute;
  bottom: -5px;
  right: 0;
  width: 30px;
  height: 2px;
  background-color: inherit;
  transition: 0.35s ease-in-out;
}
.main button:hover {
  background-color: #007ac1;
  width: 240px;
}
.main button:hover::before,
.main button:hover::after {
  width: 100%;
}
.main h5,
.main h4 {
  text-align: center;
}
.main h5 a {
  color: #2196F3;
  text-decoration: none;
}
hr {
  border-top: 2px dotted #CCC;
  width: 80%;
  margin-top: -10px;
}
.icons {
  display: flex;
  justify-content: space-evenly;
}
.icons .icon-container {
  text-decoration: none;
  width: 50px;
  height: 50px;
  background-color: #DDD;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  cursor: pointer;
  transition: 0.25s ease-in-out;
}
.icons .fab {
  transform: scale(1.2);
  transition: 0.25s ease-in-out;
}
.icons .fa-facebook-f {
  color: #3b5998;
}
.icons .fa-twitter {
  color: #5da9dd;
}
.icons .fa-instagram {
  color: #800080;
}
.icons .icon-container:hover .fab {
  color: #FFF;
  transform: scale(1.4);
}
.icons .icon-container:first-child:hover {
  background-color: #3b5998;
}
.icons .icon-container:nth-child(2):hover {
  background-color: #5da9dd;
}
.icons .icon-container:last-child:hover {
  background-color: #800080;
}

</style>
</head>
<body>

<form action="action_cookie_main.jsp" method="GET">
  <div class="main">
    <h1>Sign Up</h1>
    <div class="one">
      <input type="text" name="username" placeholder="Username *" required>
    </div>
    <div class="two">
      <input type="email" name="email" placeholder="E-mail *" required>
    </div>
    <div class="three"><input type="password" placeholder="Password *" required></div>
    <div class="four"><input type="password" placeholder="Confirm Password *" required></div>
    <div class="btn"><button value="Submit" type="submit">Sign Up</button></div>
    <h5>Have an Account? <a href="login.jsp">
        Log In Here</a></h5>
    <hr>
   
  </div>

</form>
</body>
</html>