<?php
include 'config.php';

//Login Validation
if(isset($_POST['loginbtn']))
{
    $Uname = $_POST['username'];
    $Pass = $_POST['password'];

    if(empty($Uname) || empty($Pass))
    {
        echo 'Please fill in the Blanks';
    }
    else
    {
        $query = "SELECT * FROM admin WHERE Username='$Uname' ";
        $result = mysqli_query($con,$query);

        if($row=mysqli_fetch_assoc($result))
        {
            $db_password = $row['Password'];

            if(($Pass)==$db_password)
            {
                header("location:admin.php");
            }
            else
            {
               echo 'Incorrect Password!' ;
            }
        }
        else
        {
            echo 'Please check your Username';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(108,109,253,255) 35%, rgba(37,133,252,255) 100%);">
    
    <h3 style="color: white; text-align: right; margin:0; padding-right: 70px; padding-top: 50px;">

    <a href="index.html">Home</a>
    <a href="services.html">Services</a>
    <a href="about.html">About Us</a>
    <a href="blog.html">Blog</a>
    <a href="enquiry.html">Enquiries</a>
    <a href="index.php">Login</a>
       </h3>
    
    <div class="container">
     
        <form method="post" class="form" name="login_form" action="index.php">    
    

            <div class="input">
                <tr>    
                    <td>    
                        <h2>Admin Login</h2>  
                    </td>    
                </tr>    

                <table>    
                    <tr>    
                        <td>    
                            <input type="text" name="username" class="input-field" placeholder="Username">    
                        </td>    
                    </tr>    
                    <tr>        
                        <td>    
                            <input type="password" name="password" class="input-field" placeholder="Admin Password">    
                        </td>    
                    </tr>    
             </div>   
                    <tr>    
                        <td>    
                          <center><input type="submit" class="loginbtn" value="Login" name="loginbtn"></center>      
                        </td>    
                    </tr>             
                </table>   
           
        </form>   
    </div>
     
    <style>

        form{
            width: 340px;
            height: 350px;
            margin: 100px auto;
            border-radius: 5px;
            background-color: lightgrey;
        }
        
        .container .input{
        display: flex;
        flex-direction: column;
        align-items: center;
        }
        
        .container .input .input-field{
        margin: 18px 0;
        font-size: 15px;
        padding: 5px;
        border-radius: 5px;
        width: 100%;
        }
        
        .container .loginbtn{
            margin: 18px 0;
            background-color: purple;
            color: white;
            padding: 7px 20px;
            border-radius: 10px;
            font-size: 18px;

        }
        
        
            </style>

</body>
</html>



