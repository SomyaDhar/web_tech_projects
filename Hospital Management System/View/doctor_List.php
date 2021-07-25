<html>
 

    <a href="home.php">Back</a> |
    <a href="../Controller/logout.php">logout</a>    
    <br><br>
   
    <head>
	<title>  Doctor list </title>
    <link rel="stylesheet"  href="../Model/style.css" />
	<script type="text/javascript" src="doctor_script.js"></script>

    </head>
    
</head>
<body>

    
    <body bgcolor="WhiteSmoke" >
    <center>
    <form>
        <h1 >Doctor list</h1>
        <p><H2>Search Doctor by name </H2></p>
		<input type="text" name="name" id="name"value=""  onkeyup="doctor_ajax()" />
		<input type="button" name="" value="Show" onclick="doctor_ajax()">
	</form>

	<div id='table'> 
    
    </div>
    </center>
	

    </body>
</html>

 

        
