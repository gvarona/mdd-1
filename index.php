<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Disability Database </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/js/bootstrap.min.js"/>
    <link rel="stylesheet" href="assets/js/main.js" />
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12 nogutters">
                    <h3 class="section-title">Login</h3>
                </div>
            </div>
            
            <div class="row">
                <div class="login-page">
                    <div class="form">
                        
                        <form class="login-form" method="post" action="api/v1/user/login" >
                            <input type="text" name="email" placeholder="email"/>
                            <input type="text" name="password" placeholder="password"/>
                            <input type="submit" value="login" id="submit" name="Login"/>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</body>
</html>