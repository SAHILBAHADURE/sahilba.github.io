
<html>
<head>
<title>Mini Phone Directory</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link  rel="stylesheet" href="style.css" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.11/css/mdb.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<header id="title">
Mini Phone Directory
</header>
<body>
 <form action="data.php" method="POST">
<div  class="jumbotron" id="main">
    <div id="inputtext">
       
      
                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Add Contact</a>
                <a class="btn btn-primary"  data-toggle="collapse"   href="#multiCollapseExample2" role="button" aria-expanded="false">Delete Contact</a>  
      
              <div class="row">
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                                            Name<input type='text' name='fname' class='chatinput' id='chatinput'>
                                            Contact<input type='text' name='fname1' class='chatinput2' id='chatinput2'>
                                  <b id="Subscriber">Subscriber to be added</b>

                                  <b><div class='printchatbox' id='printchatbox'></div></b>
                                  <b><div class='printchatbox1' id='printchatbox1'></div></b>
                                  <button type="submit" class="btn btn-warning" id="add">Add Contact</button>
                    </div>
                  </div>
                </div>   
           </div>
           
           <div class="row">
                <div class="col">
                  <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        <div id="display" >
                                <b>
                                <div id="content">
                                <table>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    </tr>
                                    <?php
                                    $conn=mysqli_connect("localhost","root","","sahil");
                                    $sql="SELECT Custname,contact FROM user ";
                                    $result=$conn->query($sql);
                                    if($result->num_rows>0)
                                    {
                                        while($row =mysqli_fetch_array($result))
                                        {
                                            echo "<tr>";
                                           echo "<td>".$row["Custname"]."</td>";
                                           echo "<td>".$row["contact"]."</td>";
                                           echo "<td><a href=delete.php?id=".$row["contact"].">Delete</a></td>";
                                          
                                        }
                                        echo "</table>";
                                        
                                    }
                                    else{
                                        echo "no result found";
                                    }
                                    $conn->close();
                                    ?>
                                </table>
                                </div>
                                </b>
                                </div> <!--end of display-->          
                                                    </div>
                                                </div>
                                                </div>   
                                        </div>

                                </div>


             </div><!--end of jumbotron-->
</form>
<div id="del">

  </div>


<script type="text/javascript">
var inputBox = document.getElementById('chatinput');
var inputBox1 = document.getElementById('chatinput2');

inputBox.onkeyup = function(){
    document.getElementById('printchatbox').innerHTML ="Your Name: "+inputBox.value;
}
inputBox1.onkeyup = function(){
    document.getElementById('printchatbox1').innerHTML = "Your Contact: "+inputBox1.value;
}



</script>



</body>
<!--
<footer id="foot">
Thanks a lot for using our directory hope you have enjoyed it.
Please rate our service and do comments on the comments section provided above.
</footer>
-->
</html>
