<?php
//index.php
?>
<!DOCTYPE html>
<html>
 <head>
  <title>PHP Star Rating System by using Ajax JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
 
div.transbox {
  margin: 10px; 
  background-color:activeborder ;
  /* border: 1px solid black; */
  opacity: 2.0;
}

div.transbox h2 {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
      body{
          background-image: url("https://hfbkpotrc.files.wordpress.com/2013/04/fittjabackground1.jpg?w=584");
          background-repeat: no-repeat;
          background-size: 100% 100%;
      }
      .container{
          border: groove 3px;
          border-radius: 10px;
          overflow: hidden;
      }
      h3{
          text-decoration: underline;
          font-weight: bold;
      }
    
  </style>
 </head>
 <body>
 
  <div class="container" style="width:800px;">
  <div class="background">
  <div class="transbox">
   <h2 align="center">Recent Projects of the Company</h2>
   <br />
   <span id="business_list"></span>
   <div class="table">
  <div class="table-cell"></div>
  <div class="table-cell plattform">
    <h3>Completed</h3>
    
  </div>
  <div class="table-cell enterprise">
    <h3>Ongoing</h3>
    
  </div>
  <div class="table-cell cell-feature">Twin Towers Dubai</div>
  <div class="table-cell">
    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <title>check_blue</title>
      <path d="M6.116 14.884c.488.488 1.28.488 1.768 0l10-10c.488-.488.488-1.28 0-1.768s-1.28-.488-1.768 0l-9.08 9.15-4.152-4.15c-.488-.488-1.28-.488-1.768 0s-.488 1.28 0 1.768l5 5z" fill="limegreen" fill-rule="evenodd"/>
    </svg>
  </div>
  <div class="table-cell">
    
  </div>
  <div class="table-cell cell-feature">Hanging Bridge Tokyo</div>
  <div class="table-cell">
    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <title>check_blue</title>
      <path d="M6.116 14.884c.488.488 1.28.488 1.768 0l10-10c.488-.488.488-1.28 0-1.768s-1.28-.488-1.768 0l-9.08 9.15-4.152-4.15c-.488-.488-1.28-.488-1.768 0s-.488 1.28 0 1.768l5 5z" fill="limegreen" fill-rule="evenodd"/>
    </svg>
  </div>
  <div class="table-cell">
    
  </div>
  <div class="table-cell cell-feature">Expresso Villa China</div>
  <div class="table-cell">
    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <title>check_blue</title>
      <path d="M6.116 14.884c.488.488 1.28.488 1.768 0l10-10c.488-.488.488-1.28 0-1.768s-1.28-.488-1.768 0l-9.08 9.15-4.152-4.15c-.488-.488-1.28-.488-1.768 0s-.488 1.28 0 1.768l5 5z" fill="limegreen" fill-rule="evenodd"/>
    </svg>
  </div>
  <div class="table-cell">
    
  </div>
  <div class="table-cell cell-feature">Khyber factories Kashmir</div>
  <div class="table-cell">
    <svg width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <title>check_blue</title>
      <path d="M6.116 14.884c.488.488 1.28.488 1.768 0l10-10c.488-.488.488-1.28 0-1.768s-1.28-.488-1.768 0l-9.08 9.15-4.152-4.15c-.488-.488-1.28-.488-1.768 0s-.488 1.28 0 1.768l5 5z" fill="limegreen" fill-rule="evenodd"/>
    </svg>
  </div>
  <div class="table-cell">
    
  </div>
  <div class="table-cell cell-feature">Blue Ocean Tower Tehran</div>
  <div class="table-cell"></div>
  <div class="table-cell">
    <svg class="enterprise-check" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <title>check_blue</title>
      <path d="M6.116 14.884c.488.488 1.28.488 1.768 0l10-10c.488-.488.488-1.28 0-1.768s-1.28-.488-1.768 0l-9.08 9.15-4.152-4.15c-.488-.488-1.28-.488-1.768 0s-.488 1.28 0 1.768l5 5z" fill="limegreen"/>
    </svg>
  </div>
  <div class="table-cell cell-feature">Prince palace Hyderabad India</div>
  <div class="table-cell"></div>
  <div class="table-cell">
    <svg class="enterprise-check" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <title>check_blue</title>
      <path d="M6.116 14.884c.488.488 1.28.488 1.768 0l10-10c.488-.488.488-1.28 0-1.768s-1.28-.488-1.768 0l-9.08 9.15-4.152-4.15c-.488-.488-1.28-.488-1.768 0s-.488 1.28 0 1.768l5 5z" fill="limegreen" fill-rule="evenodd"/>
    </svg>
  </div>
  <div class="table-cell cell-feature">Sunburn castle Goa</div>
  <div class="table-cell"></div>
  <div class="table-cell">
    <svg class="enterprise-check" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <title>check_blue</title>
      <path d="M6.116 14.884c.488.488 1.28.488 1.768 0l10-10c.488-.488.488-1.28 0-1.768s-1.28-.488-1.768 0l-9.08 9.15-4.152-4.15c-.488-.488-1.28-.488-1.768 0s-.488 1.28 0 1.768l5 5z" fill="limegreen" fill-rule="evenodd"/>
    </svg>
  </div>
  <div class="table-cell cell-feature">MoonLight Indonesia</div>
  <div class="table-cell"></div>
  <div class="table-cell">
    <svg class="enterprise-check" width="18" height="18" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
      <title>check_blue</title>
      <path d="M6.116 14.884c.488.488 1.28.488 1.768 0l10-10c.488-.488.488-1.28 0-1.768s-1.28-.488-1.768 0l-9.08 9.15-4.152-4.15c-.488-.488-1.28-.488-1.768 0s-.488 1.28 0 1.768l5 5z" fill="limegreen" fill-rule="evenodd"/>
    </svg>
  </div>
</div>
   <style>


body {
  color: black;
  font-size: 15px;
}

.table {
  display: flex;
  flex-wrap: wrap;
  margin: 0 auto;
  padding: 2rem 0rem 0rem 0rem;
  max-width: 1100px;
}

.table-cell {
  box-sizing: border-box;
  flex-grow: 1;
   text-decoration: underline;
          font-weight: bold;
  width: 100%;
  padding: 0.8em 1.2em;
  overflow: hidden;
  list-style-type: none;
  outline: 1px solid #ddd;
  text-align: center;
  font-weight: 300;
  margin: {
    top: 1px;
    left: 1px;
  }
  &:first-child {
  	outline: 1px solid black;
    background: black;
  	@media only screen and (max-width : 768px) {
			display: none;
		}
  }
  &:nth-child(3) {
    outline: 1px solid #30305b;
  }
  &:nth-child(-n+3) {
  	padding: {
  		top: 40px;
  		bottom: 40px;
  	}
  }
  > h3 {
    font-size: 26px;
  	margin: {
  		top: 0;
  		bottom: 3rem;
  	}
  }
  &.cell-feature {
	  text-align: left;
    font-size: 18px;
  }
  &.plattform {
    color: black;
    a.btn {
      color: limegreen;
      &:hover {
        background-color: black;
        border-color: black;
        color: black;
      }
    }
  }
  &.enterprise {
    background-color: #30305b;
    color: #85bafc;
    a.btn {
      color: #85bafc;
      &:hover {
        background-color: #85bafc;
        border-color: #85bafc;
        color: #30305b;
      }
    }
  }
}

/* Table columns
================================== */
.table-cell  {
  width: calc(33.33% - 1px);
  &.cell-feature {
	  @media only screen and (max-width : 768px) {
		  width: 100%;
		  text-align: center;
	  }
  }
}

svg.enterprise-check path {
  fill: #30305b !important;
}

a.btn {
  border: 2px solid;
  padding: .6rem .9rem .6rem .9rem;
  font-weight: 400;
  text: {
    transform: uppercase;
    decoration: none;
  }
  @include transition(0.2s ease-in-out);
  @include border-radius(.3rem);
}
   </style>
   <br />
   <br />
  </div>
  </div>
 </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 load_business_data();
 
 function load_business_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#business_list').html(data);
   }
  });
 }
 
 $(document).on('mouseenter', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  remove_background(business_id);
  for(var count = 1; count<=index; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 function remove_background(business_id)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ccc');
  }
 }
 
 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  var rating = $(this).data("rating");
  remove_background(business_id);
  //alert(rating);
  for(var count = 1; count<=rating; count++)
  {
   $('#'+business_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var business_id = $(this).data('business_id');
  $.ajax({
   url:"insert_rating.php",
   method:"POST",
   data:{index:index, business_id:business_id},
   success:function(data)
   {
    if(data == 'done')
    {
     load_business_data();
     alert("You have rate "+index +" out of 5");
    }
    else
    {
     alert("There is some problem in System");
    }
   }
  });
  
 });

});
</script>

