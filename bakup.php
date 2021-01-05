<html>
<head>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="jquery.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
   
    <title>PW4 PROJECT</title>
      <style>
    body{
    background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
        height:100%;}
             th{
             color: white;
             font-size: 20;
            
         }
               td{
             color: yellow;
             font-size: 40;
                   text-align: center;
                   font-style: bold;
            
         }
         table{grid-row: auto;
              margin-left: auto;
             margin-right: auto;
            padding: 10;
             background-color: rebeccapurple;
             vertical-align: middle;
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
        <a class="nav-link" href="db.php">Home<span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">keluar</a>
      </li>
      </ul>
     </div>
</nav>
        
   <?php
        if($_POST["Country"]=="Korea"){
require_once('sparqllib.php');
$db = sparql_connect("http://dbpedia.org/sparql");

$query = "SELECT ?Song
WHERE {?Song <http://purl.org/dc/terms/subject><http://dbpedia.org/resource/Category:South_Korean_songs> }";
  print"<table border=1;class='example_table'>";
            
        print"<tr>"; 
        echo("<td><span>LAGU KOREA</td>");
        print"</tr>"; 
            
$result = sparql_query($query);
$fields = sparql_field_array($result);
while($row = sparql_fetch_array($result))
{  
   
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</th>");
       echo "\n";
           print"</tr>"; 
   }
    
}
          
$query = "SELECT ?Song
WHERE {?Song skos:broader <http://dbpedia.org/resource/Category:South_Korean_songs> }";

    
$result = sparql_query($query);
$fields = sparql_field_array($result);

while($row = sparql_fetch_array($result))
{  
  
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</th>");
       echo "\n";
           print"</tr>"; 
   }
    
}
        }
          print"</table>";
        
        
        ?>
        
        <?php
         if($_POST["Country"]=="Indonesia"){
require_once('sparqllib.php');
$db = sparql_connect("http://dbpedia.org/sparql");

$query = "SELECT ?Song
WHERE {?Song <http://purl.org/dc/terms/subject><http://dbpedia.org/resource/Category:Indonesian_songs> }";

$result = sparql_query($query);
$fields = sparql_field_array($result);
    print"<table border=1 ;class='example_table'>"; 
      print"<tr>"; 
        echo("<td><span>LAGU INDONESIA</td>");
        print"</tr>"; 
while($row = sparql_fetch_array($result))
{  
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</th>");
       echo "\n";
           print"</tr>"; 
   }
}
$query = "SELECT ?Song
WHERE {?Song skos:broader <http://dbpedia.org/resource/Category:Indonesian_songs> }";

    
$result = sparql_query($query);
$fields = sparql_field_array($result);

while($row = sparql_fetch_array($result))
{  
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</th>");
       echo "\n";
           print"</tr>"; 
   }
}
              print"</table>";
        }
        
        
        
        ?>
        
                <?php
         if($_POST["Country"]=="Amerika"){
require_once('sparqllib.php');
$db = sparql_connect("http://dbpedia.org/sparql");

$query = "SELECT ?Song
WHERE {?Song <http://purl.org/dc/terms/subject><http://dbpedia.org/resource/Category:American_songs> }";

$result = sparql_query($query);
$fields = sparql_field_array($result);
             print "<table border=1 ;class='example_table'>";
      print"<tr>"; 
        echo("<td><span>LAGU AMERIKA</td>");
        print"</tr>"; 
while($row = sparql_fetch_array($result))
{  
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</span></th>");
       echo "\n";
           print"</tr>"; 
   }
}
$query = "SELECT ?Song
WHERE {?Song skos:broader <http://dbpedia.org/resource/Category:American_songs> }";

    
$result = sparql_query($query);
$fields = sparql_field_array($result);

while($row = sparql_fetch_array($result))
{  
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</span></th>");
       echo "\n";
           print"</tr>"; 
   }
}
              print"</table>";
        }
        ?>
        
                        <?php
         if($_POST["Country"]=="Australia"){
require_once('sparqllib.php');
$db = sparql_connect("http://dbpedia.org/sparql");

$query = "SELECT ?Song
WHERE {?Song <http://purl.org/dc/terms/subject><http://dbpedia.org/resource/Category:Australian_songs> }";

$result = sparql_query($query);
$fields = sparql_field_array($result);
             print "<table border=1 ;class='example_table'>";
      print"<tr>"; 
        echo("<td><span>LAGU AUSTRALIA</td>");
        print"</tr>"; 
while($row = sparql_fetch_array($result))
{  
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</span></th>");
       echo "\n";
           print"</tr>"; 
   }
}
$query = "SELECT ?Song
WHERE {?Song skos:broader <http://dbpedia.org/resource/Category:Australian_songs> }";

    
$result = sparql_query($query);
$fields = sparql_field_array($result);

while($row = sparql_fetch_array($result))
{  
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</span></th>");
       echo "\n";
           print"</tr>"; 
   }
}
              print"</table>";
        }
        ?>
                             <?php
         if($_POST["Country"]=="German"){
require_once('sparqllib.php');
$db = sparql_connect("http://dbpedia.org/sparql");

$query = "SELECT ?Song
WHERE {?Song <http://purl.org/dc/terms/subject><http://dbpedia.org/resource/Category:German_songs> }";

$result = sparql_query($query);
$fields = sparql_field_array($result);
             print "<table border=1 ;class='example_table'>";
      print"<tr>"; 
        echo("<td><span>LAGU GERMAN</td>");
        print"</tr>"; 
while($row = sparql_fetch_array($result))
{  
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</span></th>");
       echo "\n";
           print"</tr>"; 
   }
}
$query = "SELECT ?Song
WHERE {?Song skos:broader <http://dbpedia.org/resource/Category:German_songs> }";

    
$result = sparql_query($query);
$fields = sparql_field_array($result);

while($row = sparql_fetch_array($result))
{  
   foreach($fields as $field)
   {
         print"<tr>"; 
       $str = $row[$field];  
       $regex = "@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@";
       echo preg_replace($regex,' ', "<th><span>$str</span></th>");
       echo "\n";
           print"</tr>"; 
   }
}
              print"</table>";
        }
        ?>
        </body>