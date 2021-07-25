<html>
 
    <div align="right">
    <a href="home.php">Back</a> |
    <a href="../Controller/logout.php">logout</a>    
    <br><br>
    </div>
   
    <head>
	<title>  service list </title>
    <link rel="stylesheet"  href="../Model/style.css" />
	<script type="text/javascript" src="Services_script.js"></script>

    </head>
    
</head>
<body>

    
    <body bgcolor="Thistle" >
    
    <form>
        <h1 >TEST / Services list</h1>
        <p><H2>Search by test name </H2></p>
		<input type="text" name="name" id="name"value=""  onkeyup="Services_ajax()" />
		<input type="button" name="" value="Show" onclick="Services_ajax()">
	</form>

	<div  id='table2' > 
    
    </div>
    
	

    </body>
</html>

 

        
