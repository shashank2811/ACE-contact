
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <link rel="stylesheet" href="style.css">
</head>
<!-- AFTER EDITING REPLACE THIS FILE IN HTDOCS -->
<body class="bl">
    <div class="d-flex p-3 bd-secondary text-white">
       <div class="left p-2 rounded">
            <h3 class="bsk col-lg-12 col-md-12 col-sm-12" >Welkom bijde digitale wachtkamer van <ins>Dr. Edward Janssens</ins></h3>
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <br>
                    <img class="responsive" src="https://images.unsplash.com/photo-1546587348-d12660c30c50?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8bmF0dXJhbHxlbnwwfHwwfHw%3D&w=1000&q=80" atr="nature image">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <br>
                    <ul class="unstyled">
                    <ol><i class="bi bi-geo-alt"></i><br>Dr. Edward</ol>
                    <ol><i class="bi bi-telephone"></i><br>011/332211</ol>
                    <ol><i class="bi bi-printer"></i><br>011/112233</ol>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right p-3 rounded">
            <h2 class="new col-lg-5 col-lg-8 col-lg-8 col-lg-12">CONNECT US</h2>
            <!-- i ave to put php file to this action so it wil go to php to mysql -->
            <form class="forms" action="config.php" method="post">
                <!-- post is used to send large amounts of data -->
                        <div class="field-container">
                            <!-- this i class is used for symbols -->
                            <!-- <i class="fa fa-user-o" aria-hidden="true"></i>  -->
                            <label for="name" class="form-label"></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name*">
                        </div>
                        <div class="field-container">
                            <!-- <i class="fa fa-envelope-o" aria-hidden="true"></i> -->
                            <label for="email" class="form-label"></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email*">
                        </div>
                        <div class="field-container">
                            <label for="phone" class="form-label"></label>
                            <input type="text" class="form-control" id="phone" name=" phone" placeholder="Phone*">
                        </div>
                        <div class="field-container">
                            <label for="comment" class="form-label"></label>
                            <textarea class="form-control" id="comment" name="comment" placeholder="Enter Your Message*"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <input type="submit" value="SUBMIT" id="register" name="create" class="btn btn-primary">
                            </div>
                        </div>
                
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function() {
 
            $("#register").click(function() {
 
                var name = $("#name").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var message = $("#message").val();
 
                if(name==''||email==''||phone==''||message=='') {
                    alert("Please fill all fields.");
                    return false;
                }
 
                $.ajax({
                    type: "POST",
                    url: "config.php",
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        message: message
                    },
                    cache: false,
                    success: function(data) {
                        alert(data);
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
                 
            });
 
        });
    </script>
    
</body>
</html>
