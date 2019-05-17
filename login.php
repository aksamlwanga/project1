<!DOCTYPE html>
<html>
<head>
	<title>mukwano RMS</title>
	<style type="text/css">
			table {
			text-align: center;
			padding: 30px 60px 200px 60px;
			background:green;
			color:blue;
			border-radius:5em;


		}
		tr td{
			border-radius: 18px;
		}
	    input
	    {
          margin-left: 0px;
          background:lightgrey;
          width: 20em;
          height: 2em;
          position:relative;
          border-radius: 18px;
		}
		button 
		{ font-size: 150%;
			height: 1.5em;
			width: 5em;
			border-radius: 5em;

		}
	 button:hover{
			color: red;
      background: black;
		}

	</style>
</head>
<body style="background:white">
	<!-- ESTABLISHING A HEADER FOR THE LOGIN PAGE -->
	<form action="tenant.html" method="POST">
	<h2 style="color: green">WELCOME TO MUKWANO RENTAL MANAGEMENT SYSTEM </h2>
	<table align="center">
		<br>
		    <br>
        <tr>
        	 <td colspan="3"  style=" background: lightgrey;
             font-size: 150%;" ><b>Enter your username and Password to continue:</b></td>
        </tr>
       <tr>
          <td style=" background: lightgrey;
             font-size: 150%;"> <b><label>username</label></b></td>
          <td> <input type="text"  name='username' required=""  /></td>

      </tr>
      <tr>
         <td  style=" background: lightgrey;
             font-size: 150%;"><b> <label>password</label></b></td>
          <td> <input type="Password"  name='password' required="" maxlength="10" /></td>
      </tr>
      <tr>
      	<td colspan="2">
        <button type="submit" name"login" ><b>login </b></button></td>
      </tr>
      <tr>
      	<td colspan="2">
      		<h1> Don't have an account? create one:</h1>
             <button><a href="signup.html" style="font-size: 130%;color:black"><b>signup</a></b></button>
       </td>
      </tr>
   </table>
   </form>   
</body>
</html>