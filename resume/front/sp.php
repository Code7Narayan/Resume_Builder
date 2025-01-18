        <!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML4 Shim and Respond.js IE8 support of HTML4 elements and media queries -->
        <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html4shiv/3.7.3/html4shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="pdf.css" />
    <script src="pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

    </head>

    <style>
       @page {
    size: A4;
    margin: 0;
    
  }
  #resume{
    
    background-color: rgb(255,102,178);
   
  }h1,h2,h3{
            font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;

        }
        h3{
            color:gray;
        }
        h1{
            
        }
        #ns{
          text-align: ;
            display: inline-block;
            border-radius: 0% 15% 0% 15%;
            
            padding: 5px 1px 1px 1px;
           height: 170px;
           width: 150px;
           box-shadow: 0px 7px 2px 4px rgb(105,105,105);
           
           
           margin: 10px;
          }
           #part1{
            background-color: rgb(0,153,0);
           
            
           }
           #part2{
            display: inline-block;
            text-align: ;
           }
           #deg{
            
           }
           #m1{
            padding: 1px 0px 20px 44px;
            height: 195px;
            
            width:265px;
            background-color: rgb(204,204,255);
           }
           div{
            overflow:hidden;
           }
           #swp{
            background-color: rgb(192,192,192);
           }
           
  
.img{  
 
}
  


    </style>
    <body>
    <div class="container"><div>
    <a class="btn btn-danger" href="backend/prosnal.php" role="button">Make New Resume</a>
      </div>
        
      </div>
    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 text-right mb-3">
                <button class="btn btn-primary" id="download"> download pdf</button>
            </div>
            <div class="col-md-12">
                <div class="card" id="invoice">
           
    <?php
require "backend/dbcon.php";

$sql="SELECT * FROM prosnalinfo ORDER BY sr DESC LIMIT 1";
$res= mysqli_query($con,$sql);
$pros=mysqli_fetch_array($res);
//////////////////////////////////////////////////////////////
$sql="SELECT * FROM educationinfo ORDER BY sr DESC LIMIT 1";
$res= mysqli_query($con,$sql);
$edu=mysqli_fetch_array($res);
////////////////////////////////////////////////////////////////
$sql="SELECT * FROM experienceinfo ORDER BY sr DESC LIMIT 1";
$res= mysqli_query($con,$sql);
$exp=mysqli_fetch_array($res);
                   ///////////////////////////////////////////////////////////////////////////////////////
                  // $uname="select * from news where sr=2";
                  // $query=mysqli_query($con,$uname);
                   //$pass=mysqli_fetch_assoc($query);
                    //  $f11 =$pass[head];
                      //$f21 =$pass[cat];
                      //$f31=$pass[img];
                      //$f41=$pass[date];
                      
                     
                      error_reporting(0);
                    //  error_reporting(E_ERROR|E_ERROR|E_WARNING);
                  //mysqli_close($con);
                  ?>
   
    
         <div id="resume">
            
         
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="part1">
              
              
              
            
              
            
            <div id="ns">
              <img src="backend/img/<?php echo $pros[15];?>" class="img-responsive" alt="Image">
              

</div>

           
            
            <div >
                
               
</div>
            <div><br>
            <br>
                  <!------------prosnal info------------>


                    <h2>CONTACT:-</h2>
                  
                  
                <h4><b>Social Media AC:-</b></h4>
                <h4><?php echo $pros[2];?></h4>
                </div>
                
                <div>
                  <h4><b>phone no:-</b></h4>
                  <h4><?php echo $pros[10];?></h4>
                </div>
                <div>
                <h4><b>E-Mail:-</h4></b>
                <h4><?php echo $pros[11];?></h4>
                </div>
                <div>
                <h4><b>Address:-</h4></b>
                <h4><?php echo $pros[4];?></h4>
                </div>
                <!------------education block------------>
                <div>
               
                    <h2>EDUCATION:-</h2>
                  
                  
                <h3>SSC Deatails:-</h3>
                <h4><b>Board:-</b><?php echo $edu[1];?></h4>
                <h4><b>P.Date</b>:-<?php echo $edu[2];?></h4>
                <h4><b>percent:-</b><?php echo $edu[3];?></h4>
                </div>
                <div>
                <h3>HSC Deatails:-</h3>
                <h4><b>Board:-</b><?php echo $edu[4];?></h4>
                <h4><b>P.Date</b>:-<?php echo $edu[5];?></h4>
                <h4><b>percent:-</b><?php echo $edu[6];?></h4>
                </div>
                <h2>TECHNICAL:-</h2>
                <div>
                
                <h4><b>Diploma:-</b><?php echo $edu[7];?></h4>
                <h4><b>D:-</b><?php echo $edu[8];?></h4>
                <h4><b>percent:-</b><?php echo $edu[9];?></h4>
                </div>
                <br>
                <div>
            
                <h4><b>Degree:-</b><?php echo $edu[10];?></h4>
                <h4><b>D:-</b><?php echo $edu[11];?></h4>
                <h4><b>CGPI:-</b><?php echo $edu[12];?></h4>
                </div>
                

                </div>
                

            
                
           
            


            
           
           <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8" id="part2">
            
           
           
            
            
           
           
           <div class="page-header" style="text-align:center;" id="swp">
             <h1><i><?php echo $pros[1];?><small></small></h1></i>
           </div>
           <div>
          

                
                
                
                </div>
                <!----------------prosnal------->
                <h3 style="text-align:center; ">PROSNAL INFO:-</h3><br>
                
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  
                <h4><b>Name:-</h4>
                <h4><b>Birth Date:-</h4>
                <h4><b>Gender:-</h3>
                <h4><b>Categary:-</h4>
                <h4><b>Maritial Status:-</h4>
                <h4><b>Nation:-</h4><br>
                <h4><b>Hobies:-</h4><br>
                <h4><b>Known Lang:-</h4>
                
                
                </div>
                
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                
                <h4><?php echo $pros[1];?></h4>
                <h4><?php echo $pros[3];?></h4>
                <h4><?php echo $pros[5];?></h4>
                <h4><?php echo $pros[7];?></h4>
                <h4><?php echo $pros[8];?></h4>

                <h4><?php echo $pros[6];?></h4><br>
                <h4><?php echo $pros[9];?></h4>
                <div>
                
                
               
                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <br>
                <h4><?php echo $pros[12];?></h4>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <br>
                <h4><?php echo $pros[13];?></h4><br>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                  <br>
                <h4><?php echo $pros[14];?></h4>
                </div>
                

                
                </div>
                
                </div>
                <h3 style="text-align:center;">PROJECTS :-</h3>
                <div>

                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h4><b>Project 1:-</h4>
                <h4><b>Project 2:-</h4>
                <h4><b>Project 3:-</h4>
                </div>
                
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h4><?php echo $exp[1];?></h4>
                <h4><?php echo $exp[2];?></h4>
                <h4><?php echo $exp[3];?></h4>
                </div>
                
                
                </div>
                <h3 style="text-align:center;">EXPERIENCE :-</h3>
                <div>

                
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h4><b>Comp.Name:</h4><br>
                <h4><b>Position:-</h4>
                <h4><b>Exp.Up:</h4>
                <h4><b> Exp.To:</h4>
                <h4><b> Comp.Descrip:</h4>
                </div>
                
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                  
                <h4><?php echo $exp[4];?></h4><br>
                <h4><?php echo $exp[5];?></h4>
                <h4><?php echo $exp[6];?></h4>
                <h4><?php echo $exp[7];?></h4>
                <h4><?php echo $exp[8];?></h4>
                </div>
                
                
                </div>
               
                  
                  
               
                
                </div>
                
</div>
                
            </div>
            
            
            


         </div>
</div>
</div>
            </div>
        </div>
    </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>