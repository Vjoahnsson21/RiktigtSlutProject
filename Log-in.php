<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/Log-in.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scripts2.js">
</head>
<body>

    <div class="header">

        <img src="Photo/ludvika kung.PNG" alt="">

    </div>

    <div class="maincontainer">

       <div class="main-head">

        <h2>LOGIN</h2>

        

       </div>
        <form action="">

        <div class="formDiv">
            <Label>Användarnamn</Label>
            <input id="inText" type="text" placeholder="Användarnamn">
        
            <Label> Lösenord</Label>
            <input id="inText" type="password" placeholder="Lösenord">

            <div class="formDiv-a">
                <a id="glum" href="#">Glum Lösenord?</a>
            </div>
      
            <input class="ButtonA" type="submit">

            <div>

                <div class="other-sign">
                    <label>OR SIGN UP WITH</label>
                </div>
    
                <div class="sign">

                    <a href="https://www.facebook.com/?locale=sv_SE" id="signIcon" class="fa fa-facebook"></a>
                
                    <a href="https://x.com/?lang=sv" id="signIcon2" class="fa fa-twitter"></a>

                    <a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Faccounts.google.com%2F&followup=https%3A%2F%2Faccounts.google.com%2F&ifkv=AaSxoQwH1pqkd6879kUtw6fZpNnSipSW3i9TQOXum80NHdbOKrC65kf9f_diw5Yti-7DwR6jd6IZSw&passive=1209600&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S-1274133356%3A1716973015725701&ddm=0" id="signIcon3"><h3>G</h3></a>
                    
                </div>

            </div>

            <div class="other-other-sign">
                
                <label class="signButton">OR SIGN UP WITH</label>
                <a href="#" id="signButton" class="signButton">SIGN UP</a>

            </div>

        </div>

        </form>
      
       



    </div>
</body>
<script src="scripts2.js"></script>
</html>