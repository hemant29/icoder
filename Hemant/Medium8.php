<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Coronavirus Spread</title>
    <style>
		.question{
   border-radius: 33px;
    background-color: #f2f2f2;
    border: 10px solid #1112118f;
	  padding: auto;
	  width: 78%;
	  color:black;
	  margin-left:auto;
	  margin-right:auto;
	}

  .container{
    border: 10px solid #1112118f;
    border-radius: 18px;
  
    width: 36%;
    
    }


    .container1{
      padding-top: 24px;
     max-width: 1352px;
    border: 1px solid #1112118f;
    border-radius: 2px;
    margin-left: auto;
    margin-right: auto;
    background-color: #f8f9fa;
    border-radius: 18px;
    }
  
  
    
  .links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
      &:hover{
        text-decoration:none;
        color:#4180CB;
        }
    }
  }  
  .about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#4180CB}
    }
  } 
  
  .location{
    i{font-size: 18px;}
  }



  .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
}


	</style>


  </head>
  <body>
    

   




 <!-- navbar start -->
  <?php include('nav-bar.php'); ?>


 <div class="question my-4" style="padding-left: 5px;padding-right: 5px">
     <pre>
                    <strong> 
                   <h3>
                    <strong>8).Coronavirus Spread</strong>
                   </h3>
            There are N people on a street (numbered 1 through N). For simplicity, we'll view them as points on a line. 
            For each valid i, the position of the i-th person is Xi.
            It turns out that exactly one of these people is infected with the virus COVID-19, but we do not know which one. 
            The virus will spread from an infected person to a non-infected person whenever the distance between them is at most 2.
            If we wait long enough, a specific set of people (depending on the person that was infected initially) will become infected; 
            let's call the size of this set the final number of infected people.
            Your task is to find the smallest and largest value of the final number of infected people, 
            i.e. this number in the best and in the worst possible scenario.

            Input:
             The first line of each test case contains a single integer N.
             The second line contains N space-seperated integers X1, X2, . . . . Xn.

            Output:
             For each test case, print a single line containing two space-separated integers ―
             the minimum and maximum possible final number of infected people.

            Constraints:
             1≤T≤2000
             1≤N≤8
             1≤Xi≤10 for each valid i 
             X1 < X2 <......< Xn        
                  </pre>
                </strong>
	</div>


  <table class="table table-success container">
  <thead>
    <tr>
      <th scope="col">Test Cases</th>
      <th scope="col">Input</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><pre><strong>2
3  6</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><pre><strong>3
1  3  5</strong></pre></td>
     
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><pre><strong>5
1  2  5  6  7</strong></pre></td>
      
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><pre><strong>4
2  4  6  9  10</strong></pre></td>
     
    </tr>
  </tbody>
</table>


<form class=" container my-4 text-center">
<h5 class="my-4">Here you have to Enter your output Respectively:- </h5>

<div class="form-group   "> 
    <label for="Qno">Enter Question Number</label>
    <input type="number" min="1" max="10" class="form-control" name="Qno" id="Medium" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group  ">
    <label for="output1">Enter Output of 1st testcase:</label>
    <input type="text" class="form-control" name="Option1" id="Medium" aria-describedby="emailHelp">
  </div>
  
  
  
  <div class="form-group"> 
    <label for="output2">Enter Output of 2nd testcase:</label>
    <input type="text" class="form-control" name="Option2" id="Medium" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="output3">Enter Output of 3rd testcase:</label>
    <input type="text" class="form-control" name="Option3" id="Medium" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group col-xs-3">
    <label for="output4">Enter Output of 4th testcase:</label>
    <input type="text" class="form-control" name="Option4" id="Medium" aria-describedby="emailHelp">
  </div>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
<center>
  <div class="container">
  <h2>iCoder Question Bank</h2>                  
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="Medium7.php">Previous</a></li>
    <li class="page-item"><a class="page-link" href="Medium1.php">1</a></li>
    <li class="page-item"><a class="page-link" href="Medium2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="Medium3.php">3</a></li>
    <li class="page-item"><a class="page-link" href="Medium4.php">4</a></li>
    <li class="page-item"><a class="page-link" href="Medium5.php">5</a></li>
    <li class="page-item"><a class="page-link" href="Medium6.php">6</a></li>
    <li class="page-item"><a class="page-link" href="Medium7.php">7</a></li>
    <li class="page-item"><a class="page-link" href="Medium8.php"><b>8</b></a></li>
    <li class="page-item"><a class="page-link" href="Medium9.php">9</a></li>
    <li class="page-item"><a class="page-link" href="Medium10.php">10</a></li>
    <li class="page-item"><a class="page-link" href="Medium9.php">Next</a></li>
  </ul>
</nav>
</div>
</center>





<!-- footer start from here -->
<?php include('footer.php'); ?>
  </body>
</html>