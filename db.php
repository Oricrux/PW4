<html>
    <head>
        <title>PW4 PROJECT</title>
           <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="jquery.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 10px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;

}
  input[type=submit] {
      height: 50px;
      width: 150px;
      font-size: 18px;
      font-weight: bold;
      color: white;
      background:#cc0000;
      border: 1px solid #cc0000;
      outline:none;
      border-radius: 25px;
      cursor: pointer;
      margin: 10px;
}
            input[type=submit]:hover{
                background-color: pink;
                color: black;
            }
    body{
    background: url(bg.jpg) no-repeat;
    background-size: cover;
	height: 100vh;
	}

	.grandParentContaniner{
		display:table; height:100%; margin: 0 auto;
	}

	.parentContainer{
		display:table-cell; vertical-align:middle;
	}	
            </style>
    </head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">Search Music</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

        
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">keluar</a>
      </li>
      </ul>
     </div>
</nav>
    <div class="grandParentContaniner">
<div class="parentContainer">
    <center>
        <br>
      <form action="bakup.php" method="post">
       <h1> <font size=7 color="white">Song by Countries</font></h1>
  
            <select name="Country" required>
            <option value="">Country</option>
            <option value="Korea">Korea</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Amerika">America</option>
            <option value="Australia">Australia</option>
            <option value="German">German</option>
            </select>
      <br>
            <br>
               <input type="submit" name="search" value="search">   
     <br>
 
        </form>
        </center>
</div>
</div>
</body>
</html>