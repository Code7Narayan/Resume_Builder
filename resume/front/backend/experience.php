
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <style>
        #ns{
            height: 100%;
            
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
                    <h3 class="panel-title">Experience & project info</h3>
              </div>
              
              <div class="panel-body">
                
                <form action="saveexperience.php" method="POST" role="form">
                    
                
                
                <h3><span class="label label-info">Fill youre projects Detail</span></h3>
                
               
                    <div class="form-group">
        
                    
                    <label for="">First Project</label>
                    <input type="text" class="form-control" id="flang" name="flang" placeholder="Enter First Languages"><br>
                    <label for="">Second Project </label>
                    <input type="text" class="form-control" id="slang" name="slang" placeholder="Enter Second Languages"><br>
                    <label for="">Third Project</label>
                    <input type="text" class="form-control" id="tlang" name="tlang" placeholder="Enter Third Languages">
                
                </div>
                    
                    
                    
                   

                    <h3><span class="label label-warning">Fill Experience Detail</span></h3>
                    
                    
                    
                
                
                    <div class="form-group">
                        <label for="">Name of Organization </label>
                        <input type="text" class="form-control" id="ohname" name="ohname" size="100" placeholder="Enter Organization name" >
                    </div>
                    <div class="form-group">
                        <label for="">Workinge position  </label>
                        <input type="text" class="form-control" id="poname" name="poname" size="100" placeholder="Enter working position" >
                    </div>
                    
                    <div class="form-group">
                        <label for=""> Starting Date</label>
                        <input type="date" class="form-control" id="sdate" name="sdate" maxlength="8" placeholder="Enter Starting date" >
                    </div>
                    <div class="form-group">
                        <label for=""> Ending Date</label>
                        <input type="date" class="form-control" id="edate" name="edate" maxlength="8" placeholder="Enter Ending  date" >
                    </div>
                    <div class="form-group">
                        <label for="">More About Organization </label>
                        <textarea name="description" id="description"  class="form-control" rows="10"  maxlength="250" placeholder="organization description"></textarea>
                    </div>
                    
                
                   <div id="but">
                   <button type="submit"class="btn btn-primary" onsubmit="return agro()" value="save" name="save" onsubmit="return agro()">Submit</button>


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
    </body>
</html>
