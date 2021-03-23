<html> 
 <head> 
  <title>STUDENT DETAILS</title> 
 </head> 
<body> 
 <center> 
 <br><br> 
 <?php

   print("<table width='700' align='center'><tr><th colspan=2>Student Details</th></tr>");
   print("<tr><td align='right'>Roll No : </td><td>". $_POST["RNO"]."</td></tr>");
   print("<tr><td align='right'>Name : </td><td>". $_POST["NAME"]."</td></tr>");
   print("<tr><td align='right'>Maths: </td><td>". $_POST["MATHS"]."</td></tr>");
   print("<tr><td align='right'>ASE: </td><td>". $_POST["ASE"]."</td></tr>");
   print("<tr><td align='right'>DIGITAL FUNDAMENTALS: </td><td>". $_POST["DIGITAL"]."</td></tr>");
   print("<tr><td align='right'>DATA STRUCTURE: </td><td>". $_POST["DS"]."</td></tr>");
   print("<tr><th colspan=2> </th></tr></table></body></html>");

?>