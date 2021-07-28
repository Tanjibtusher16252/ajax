<?php
?>

<!Doctype html>
<html>

<head>
    
    <title>Search User List</title>


    <script>
  
  function showResult(str) {
    var searchKey = str;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200) {
        document.getElementById("p2").innerHTML = xhttp.responseText;
      }
    }

    xhttp.open("GET", "Form-Submission.php?searchKey=" + searchKey, true);
    xhttp.send();
  }

</script>


</head>

<body>

 
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            
            <div class="col-10">
            
                <div >
                    <div >

                        <a href="Login.php" >
                            
                        </a>

                        <br><center><h2>Search User List</h2></center><br>
                        
                         <label for="searchKey"><center>Search Id:</center></label>
	                      <center><input type="id" name="searchKey" id="searchKey" onkeyup="showResult(this.value)"></center>
                        <br>
                        <br>
<br>
<div id="p2"></div>

    </div>     
        </div>
                  

        <div class="col-1"></div>
            
    </div>
         
         
    </div>
    

</body>


</html>