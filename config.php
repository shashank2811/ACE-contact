<?php
                $name=$_POST['name'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $message=$_POST['comment'];
                //database connection

                $con=new mysqli("localhost","root","","useraccounts");
                if($con->connect_error)
                {
                    die('failed to connect: '.$con->connect_error);
                }
                else
                {
                    $stmt=$con->prepare("insert into users(name,email,phone,message) values (?,?,?,?)");
                    $stmt->bind_param("ssss",$name,$email,$phone,$message);
                    $stmt->execute();
                    echo "Successfully saved";
                    $stmt->close();
                    $con->close();
                }
               

?>
