<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact</title>
<style>
    /******Body****/
body{
       height:auto;
       width:auto;
       margin:0px;
       float:none;
        
}
    
    /******Body****/
    
.navigation {
            position:fixed;
        width:100%;
        height:60px;
        margin:0;
        background-color:rgba(0,0,0,0.765);
        border-radius:5px;
    )
        }
.navigation a {
        height:10px;
        text-decoration:none;
        color: white;
        font-size:18px;
        margin-top:5px;
        font-weight:500;
        padding: 15px;
        display:inline-block;
    }
ul {
     height:70px; 
      display:inline;
      margin:0px;
    }
ul li {
        padding:0px;
        display: inline-block;
    }
ul li:hover {
        height:60px;
        background-color: #FFA500;
        opacity:0.9;
    }
ul li:hover ul {
        margin-top:15px;	
        display: block;
    }
ul li ul {
      position: fixed;
      width: 200px;
      display: none;
    }
ul li ul li { 
    
      background-color:#000;
      background: #000; 
      display: block; 
      
    }
ul li ul li a {
        display:block ;
    
    } 
ul li ul li:hover {	
        height:45px;
        background: #FFA500;
    }
    /******navigation****/
.logo{
        height:50px;
        width:120px;
        float:left;
        margin-left:200px;
        margin-top:10px;
    }
.mainlogo{
        height:300px;
        width:330px;
        margin-left:650px;
        margin-top:150px;
        float:left;
        background-image:url(logo.png);
    }

table{
	margin-top:100px;
	float:left;
	margin-left:600px;
}




	/***********Footer*******/
.footer{
	height:300px;
	width:100%;
	margin-top:200px;
	background-image:url(home%20image/footer.jpg);
	float:left;
}
.aboutus{
	height:250px;
	width:280px;
	margin-top:50px;
	float:left;
	font-family:"Courier New", Courier, monospace;
	margin-left:300px;
}
.recentpost{
	height:250px;
	width:350px;
	margin-top:50px;
	float:left;
	font-family:"Courier New", Courier, monospace;
	margin-left:50px;
}


.Simg1{
	height:71px;
	width:80px;

	font-size:12px;
	background-image:url(home%20image/seconddiv/footer/1.png);
	float:left;
}
.StextDIV{
	height:70px;
	width:220px;
	font-weight:600;
	color:#FFF;

	float:left;
	font-size:13px;
	margin-left:100px;
}

.Simg2{
	height:71px;
	width:80px;
	
	font-size:12px;
	margin-top:100px;
	background-image:url(home%20image/seconddiv/footer/2.png);
	float:none;
}
.StextDIV2{
	height:70px;
	width:220px;
	font-weight:600;
	color:#FFF;
	
	float:left;
	font-size:13px;
	margin-left:100px;
}
.reachus{
	height:250px;
	width:280px;
	margin-top:50px;
	background-color:;
	float:left;
	font-family:"Courier New", Courier, monospace;
	margin-left:50px;
}
	
.copyright{
	height:50px;
	width:100%;
	background-color:#999;
	float:left;
}

	/***********Footer*******/
    
.footerLAST{
	height:80px;
	width:100%;
	color:#CCC;
	background-color:#333;
	font-size:20px;
	padding-top:50px;
	font-weight:bold;
    font-family:"Courier New", Courier, monospace;
	float:left;
}


/**************FORM***************/

input{
	height:50px;
	width:400px;
	background-color:#EFEFEF;
	text-align:left;
    border: 1px solid;
	border-color:#FFA500;
	font-size:15px;
	
}

/**************FORM***************/
	/***********FOOTER*********/
</style>
</head>

<body>
     <!--------nav----------->
        <div class="navigation">
       
      <!-------logo--->
      <div class="logo">
      <img src="mainlogo.png" />
      </div>
      <!-------logo--->
          <!-----order online--->
          <ul style="padding-left:300px">
            <li>
              <a href="home.php">Home </a>
            </li>
          </ul>
          <!-----About us--->
          <ul>
            <li>
              <a href="menu.php">Menu <img src="home image/dropdown.png" /></a>
              <ul>
                 <li><a href="menu.php">ALL</a></li>
                 <li><a href="starter.php">STARTERS</a></li>
                 <li><a href="BreakFast.php">BREAKFAST</a></li>
                 <li><a href="burger.php">BURGER</a></li>
                 <li><a href="sandwish.php">SANDWISH</a></li>
                 <li><a href="dessret.php">DESSERT</a></li>
              </ul>
            </li>
          </ul>
          <!-----Contact--->
          <ul>
            <li>
              <a href="reservation.php">Reservation </a>
              
            </li>
          </ul>
<!-----regervation-->
          <ul>
            <li>
              <a href="contact.php">Contact</a>
              
            </li>
          </ul>
          <!-----menu--->
          <ul>
            <li>
              <a href="#">Our Feature</a>
             
            </li>
          </ul>
          <!-----Home--->
          <ul>
            <li>
              <a href="loginform.php">Log In </a>
              
            </li>
          </ul>
        </div>
        <!--------nav----------->

<font size="+6" style="float:left;margin-left:680px;margin-top:200px;color:#FFA500">CONTACT</font>
<hr width="500px" size="5px" color="#FFA500" style="margin-top:50px;margin-left:550px;float:left"/>
<hr width="400px" size="2px" color="#FFA500" style="margin-top:5px;margin-left:600px;float:left"/>
<!------------Contact--------->


<!---------TABLE-------->
<table width="400"   align="center">
<form action="insert1.php" method="post">
  <tr>
    <td height="60" align="center"><input type="text" placeholder="Full Name" name="name" required="required" /></td>
  </tr>
  <tr>
    <td height="60" align="center"><input type="email"  placeholder="Email Address" name="email" required="required"/></td>
  </tr>
  <tr>
    <td height="60" align="center"><input type="text" placeholder="Subject" name="subject" required="required"/></td>
  </tr>
  <tr>
    <td height="60" align="center"><input type="text" placeholder="Message" name="message" style="height:150px" required="required"/></td>
  </tr>
  <tr>
    <td height="60" align="center"><input type="submit"  value="Submit Message" style="background-color:#FFA500;text-align:center" /></td>
  </tr>
</form>
</table>
<!---------TABLE-------->



<!------------RESERVATION--------->
<!----------FOOOTER--------------->

 <!-------FOOOTER------>
        <div class="footer">
           
                <div class="aboutus">
                    <font size="+2" color="#FF9900" style="font-weight:900">ABOUT US</font><br /><br /><br />
                        <font style="font-weight" color="#fff">  The lion just homework, chili sauce at football, jasmine and consumer salad. Even mass-free, the                         author of the need and, nunc.Duis lion just                        one layer, chili sauce at football, the set price of the product.
                        </font>
                </div>
                
                
                
                <div class="recentpost">
                       <font size="+2" color="#FF9900" style="font-weight:900">RECENT POST</font><br /><br /><br />
                
                
                
                       <div class="Simg1">
               
                           <div class="StextDIV">
                           Hand picked ingredients for our best customers</br></br>
                           <font color="#666666"> 15 april 2018 </font>
                           </div>
                           
                       </div>
                       
                       
                       <div class="Simg2">
               
                           <div class="StextDIV2">
                          Daily special foods that you will going to love</br></br>
                           <font color="#666666"> 15 april 2018 </font>
                           </div>
                           
                       </div>
                      
               
                       </div>
                       
                       <div class="reachus">
                     <font size="+2" color="#FF9900" style="font-weight:900">REACHED US</font><br /><br /><br />
                     <font color="#FFFFFF">
                     <img src="home image/logos/email.png" style="margin-left:10px"> support@restaurant.com <br />
                     <img src="home image/logos/telephome.jpg" style="margin:10px;margin-top:20px"/> Phone +(415) 124-5678 <br />
                     <img src="home image/logos/location.jpg" style="margin:10px;margin-top:20px"/> 28 Seventh Avenue, New York, 10014
                     
                     
                     </font>
                       </div>
                </div>
                
        </div>
        <!-------FOOOTER------>
        
        <!----------FOOTERLAST-------->
        <div class="footerLAST" align="center">
        &copy;  2015.Tomato.All rights reserved
        </div>
        <!----------FOOTERLAST-------->

</body>
</html>
