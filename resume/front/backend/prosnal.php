
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-10">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
        <!--[if lt IE 10]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <script>
        function labour() 
            {
             
             let name=document.getElementById("fname").value;
             alert(name);
             let num=document.getElementById("num").value;
             let  c=document.getElementById("add").value;
           let d=document.getElementById("cat").value;
           let nation=document.getElementById("nation").value;
           let hob=document.getElementById("hob").value;
          
           if (c=="")
           {
            alert("Enter  Current Address");
            return false;
           }
           else if (d=="")
           {
            alert("Enter  Category");
            return false;
           }
           
           else if (nation=="")
           {
            alert("Enter  Nationality");
            return false;
           }
           else if (hob=="")
           {
            alert("Enter  Hobbies");
            return false;
           }
          
           if (num.length!==10) {
            alert("Enter a Correct Mobile Number");
            return false;
           }
        
            }
        
    </script>
    <style>
        #ns{
            height: 500px;
            
            width: 100%;
        }
        #but{
            height: auto;
            width: 50%;
            margin-left: 85%;
            
        }
        
    </style>
    <body>
   
                
            
    
    <?php  include("head.php");
                 ?>
    
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                
            
        <div class="container" id="ns">
            
        
        
        <div class="panel panel-primary">
              <div class="panel-heading">
                    <h3 class="panel-title">Prosnal Information</h3>
              </div>
              <div class="panel-body">
                
                <form action="saveprosnal.php" method="POST" role="form"enctype="multipart/form-data">
                <div class="form-group"onsubmit="return labour()">
                                    <label for="">Add Images</label>
                                    <input type="file" class="form-control" id="file" name="file" placeholder="Enter Product Company"required>
                                </div>
                                                <div class="form-group">
                        <label for="">Enter Youre Full Name  </label>
                        <input type="text" class="form-control" id="fname" name="fname" size="20" placeholder="Enter first name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Socail Media AC.</label>
                        <input type="text" class="form-control" id="faname" name="faname" placeholder="Socail Media AC URL" required>
                    </div>
                    <div class="form-group">
                        <label for="">Dete of Birth </label>
                        <input type="date" class="form-control" id="bdate" name="bdate" maxlength="10" placeholder="Enter dete of birth" required>
                    </div>
                    <div class="form-group">
                        <label for="">Current Address </label>
                        <input type="text" class="form-control" id="add" name="add" placeholder="Enter Current Address" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Select Gender  </label><br>
                        <label for="Male">Male</label>
                        <input type="radio" class="form-control" id="gen" name="gen" value="Male"style="height:20px; width:20px; vertical-align: middle;" required>
                        <label for="FeMale">FeMale</label>
                        <input type="radio" class="form-control" id="gen" name="gen" value="FeMale" style="height:20px; width:20px; vertical-align: middle;" required >
                    </div>
                    
                    <div class="form-group">
                        <label for="">Nationality </label>
                        <input type="text" class="form-control" id="nation" name="nation" placeholder="Enter Nationality" required>
                    
                    </div>
                    <div class="form-group">
                        <label for="">Category </label>
                        <input type="text" class="form-control" id="cat" name="cat" placeholder="Enter Category" required>
                    
                    </div>
                    <div class="form-group" style="height: auto;width: 50%;">
                        <label for="">Marital Status  </label><br>
                        <label for="unmarried">Unmarried</label>
                        <input type="radio" class="form-control" id="mar" name="mar" value="Unmarried" style="height:20px; width:20px; vertical-align: middle;" required>
                        <label for="unmarid">Married</label>
                        <input type="radio" class="form-control" id="mar" name="mar" value="Married" style="height:20px; width:20px; vertical-align: middle;" required>
                    </div>
                    <div class="form-group">
                        <label for="">Hobbies  </label>
                        <input type="text" class="form-control" id="hob" name="hob"placeholder="Enter your hobbies"  required>
                    </div>
                    <div class="form-group">
                        <label for="">Phone Nnumber  </label>
                        <input type="number" class="form-control" id="num" name="num" placeholder="Enter phone number" required>
                    </div>
                    <div class="form-group">
                        <label for="">EMail Id  </label>
                        <input type="email" class="form-control" id="mel" name="mel" placeholder="Enter  EMaile id" required>
                    </div><br>
                   <h5> <label for="">Enter Known Languages</label></h5>
                    <div class="form-group">
                        
                        
                        <label for="">First Languages</label>
                        <input type="text" class="form-control" id="flang" name="flang" placeholder="Enter First Languages" required><br>
                        <label for="">Second Languages</label>
                        <input type="text" class="form-control" id="slang" name="slang" placeholder="Enter Second Languages" required><br>
                        <label for="">Third Languages</label>
                        <input type="text" class="form-control" id="tlang" name="tlang" placeholder="Enter Third Languages" required>
                    
                    </div>
                    <div id="but">
                    <button type="submit"class="btn btn-success"value="save" name="save" onclick="return labour()">Next >></button>
                   

                   </div>
                                     
                    
                
                    
                
                </form>
                
              </div>
        </div>
        
    </div>
    </div>
    
        <!-- jQuery -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="validation.js"></script>
    </body>
</html>
