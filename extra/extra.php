<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
#formcont{
	height:500px;
	width:900px;
	float:left;
	
	margin-top:150px;
	border-radius:10px;
	font-weight:bold;
	margin-left:300px;
	font-size:24px;
	background-color:rgba(0,0,0,0.1);
}

</style>
</head>

<body>
<!---------TABLE-------->
<div id="formcont">
<table width="900" height="500" align="center">
  
  <!-------------row1------->
  
                                  <!-------------name-------->
<tr>
    
    <td width="450" align="center">
                                   <form method="post" action="insert.php" >
                                   <input type="text" name="name"  placeholder="Enter your name" autocomplete="off" required="required" 
                                   style="width:300px;height:35px;border-radius:10px;"/>
                                   
    </td>
    

                                  <!-------------email-------->
    <td width="450" align="center">
                              
                              <input type="email" name="email"  placeholder="Enter your email" autocomplete="off" required="required"
                               style="width:300px;height:35px;border-radius:10px"/>
                             
    
    </td>
    
</tr>
  
  <!-------------row1------->
  
  
  
  
  
  <!-------------row2------->
  
                                      <!-------------number-------->
<tr>
    <td width="450" align="center">
                          
                         <input type="tel" name="number" placeholder="Contact " autocomplete="off" required="required" 
                         style="width:300px;height:35px;border-radius:10px"/>
                         
    </td>
    
                                       <!-------------location------ -->
    <td width="450" align="center">
                         
                        
                         <select style="width:300px;height:35px;border-radius:10px" name="location">
                          
                          <option >Select Location</option>
                          <option>Cliftion </option>
                          <option>Teen talwar</option>
                          <option>Gulshan</option>
                          <option>johor</option>
                          
                         </select>
    
      					 
    </td>
</tr>
  
  <!-------------row2------->
  
  
  <!-------------row3------->
  
                      <!-------------date-------->
<tr>
    <td  width="450" align="center">
              <input type="text" name="date" placeholder="Date of reservation "  	
               style="width:300px;height:35px;border-radius:10px"/>
    </td>
    
    
    <td width="450" align="center">
    
                        
                         <select style="width:300px;height:35px;border-radius:10px" name="time">
                          
                          <option >Select time</option>
                          <option>3:00 pm </option>
                          <option>4:00 pm </option>
                          <option>6:00 pm </option>
                          <option>8:00 pm</option>
                          <option>10:00 pm</option>
                          <option>12:00 pm</option>
                          
                         </select>
    
   
    </td>
</tr>
  
  
  <!-------------row3------->
  
  
  <!-------------row4------->
  <tr>
    <td width="450" align="center">
                                         <input type="number" name="guesst" placeholder="Number of guessts"  
                                         style="width:300px;height:35px;border-radius:10px"/>
                                         
                                         
                                         
     </td>
    <td width="450" align="center">
                                         <input type="submit" name="submit"  
                                         style="width:300px;height:35px;background-color:#FFA500;border-radius:10px"/>
                                         
                                         
                                         
     
    </td>
  </tr>
  </form>
  <!-------------row4------->
</table>
</div>
<!---------TABLE-------->




</body>

</html>
