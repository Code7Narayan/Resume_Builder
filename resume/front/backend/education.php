
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
                    <h3 class="panel-title">Education info</h3>
              </div>
              
              <div class="panel-body">
                
                <form action="saveeducation.php" method="POST" role="form">
                    
                
                
                <h3><span class="label label-info">Fill SSC Detail</span></h3>
                
                
                    <div class="form-group">
                        <label for="">Divisional board  </label>
                        <input type="text" class="form-control" id="dname" name="dname" size="50" placeholder="Enter Divisional board" >
                    </div>
                    
                    <div class="form-group">
                        <label for="">Year of Passing</label>
                        <input type="date" class="form-control" id="pdate" name="pdate" maxlength="8" placeholder="Enter passing year" >
                    </div>
                    
                    
                    
                    
                    <div class="form-group">
                        <label for="">SSC Percentage</label>
                        <input type="number" stepe="0.01" class="form-control" id="per" name="per" placeholder="Enter percentage" >
                    
                    </div>
                    
                    <h3><span class="label label-warning">Fill HSC Detail</span></h3>
                    
                    
                    
                
                
                    <div class="form-group">
                        <label for="">Divisional board  </label>
                        <input type="text" class="form-control" id="dhname" name="dhname" size="50" placeholder="Enter Divisional board" >
                    </div>
                    
                    <div class="form-group">
                        <label for="">Year of Passing</label>
                        <input type="date" class="form-control" id="phdate" name="phdate" maxlength="8" placeholder="Enter passing year" >
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="">HSC Percentage</label>
                        <input type="number" class="form-control" id="hper" name="hper" placeholder="Enter percentage" >
                    
                    </div><br>

                <div id="">
                  
                    <h3><span class="label label-success"> Fill Diploma prog Detail</span></h3>
                    
                    <div class="form-group">
                        <label for=""> Diploma programm  </label>
                        <input type="text" class="form-control" id="ddname" name="ddname" size="100" placeholder="Enter Diploma programm" >
                    </div>
                
                    <div class="form-group">
                        <label for="">Year of Passing</label>
                        <input type="date" class="form-control" id="ydate" name="ydate" maxlength="8" placeholder="Enter  passing year" >
                    </div>
                    
                    
                    
                        <label for=""> diploma Percentage </label>
                        <input type="number"stepe="0.01" class="form-control" id="hpr" name="hpr" placeholder="Enter percentage" >
                    </div><br>
                        
                        <h3><span class="label label-danger"> Fill Degree prog Detail</span></h3>
                   

                   
                   
                   
                   
                   
                    
                    <div class="form-group">
                        <label for="">Degree programm   </label>
                        <input type="text" class="form-control" id="digname" name="digname" size="100" placeholder="Enter Diploma programm" >
                    </div>
                
                    <div class="form-group">
                        <label for="">Year of Passing</label>
                        <input type="date" class="form-control" id="digdate" name="digdate" maxlength="8" placeholder="Enter  passing year" >
                    </div>
                    
                    
                    <div class="form-group">
                        <label for=""> Degree Percentage/Pointer </label>
                        <input type="number" class="form-control" id="digpr" name="digpr" placeholder="Enter percentage/pointer" >
                    
                    
                    </div><br>
                    
                    
                    
                </div>
                
                
                
            

                   <div id="but" style="">
                       <button type="submit"class="btn btn-primary" onsubmit="return agro()" value="save" name="save" onsubmit="return agro()" >Next >></button>
                   
                    </div><br>

                
                                  
    
                    
                
    </form>
                
              
        </div>
        
    </div>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
