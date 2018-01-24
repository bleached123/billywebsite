<!DOCTYPE html>

<html>
    <head>
        <!--Include Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
         <style>
            @import url('https://fonts.googleapis.com/css?family=Open+Sans');
            @import url('https://fonts.googleapis.com/css?family=Oswald');
        </style>
    </head>
    <body>
        <?php include 'includes/header.html'?>
        <center>
            <div class="row" style="background-color:#48D1CC;">
                <h1 style=" font-size: 70px; color:white;"><img src="img/Billy%20Happy%20small.png">Rogue Networks<img src="img/Billy%20Happy%20small.png" style="transform:scaleX(-1)"></h1>
                
            </div>
        </center>
        <div class="row" style="background-color: #5F9EA0; color:white; padding-left: 5%; padding-bottom: 5%; padding-right: 5%;">
                <div class="col-md-6"><h1 style="font-size: 60px;">What is a Rogue Network?</h1></div>
                    <div class="col-md-6" style="float:right; width:50%; padding-top: 2%;">
                        <p style ="font-size: 30px;">Wi-Fi hotspot are a useful way of accessing the internet with wireless devices and can be found in homes, workplaces, and public areas. However not all Wi-Fi networks are secure, and there are ways they can be used by attackers to get hold of your data.</p>
                    </div>
        </div>
                <div class="row" style="background-color:#48D1CC; color:white;">
                    <div class="col-md-6" style="float:left; width:50%; padding-top: 5%; padding-left: 5%; padding-bottom: 5%;">
                        <p style ="font-size: 30px;"><b>Sniffing</b><br>
                        Sniffing is a way attackers capture a victims data as its send offer a Wi-Fi network. This can allow them to steal login details and sensitive information to then be used to commit offences against you. Every time you open an app on your phone these login details are sent across the network and can be intercepted.</p>
                    </div>
                    <div class="col-md-6"><center><img src="img/Charlie%20the%20Dog.png"></center></div>
                </div>
                <div class="row" style="background-color: #5F9EA0; color:white; padding-left: 5%; padding-bottom: 2%; padding-top: 2%; padding-right: 2%;">
                    <div class="col-md-6"><center><img src="img/Rogue%20Wifi%20Clipart.png" style="padding-top:10%; padding-bottom: 2%;"></center></div>
                    <div class="col-md-6" style="float:right; width:50%;">
                        <p style ="font-size: 30px;"><b>Rogue Access Points</b><br>
                        Cybercriminals can set up their own public Wi-Fi network to try and get victims to connect. After connecting their laptop to the internet they then create a hotspot calling it something like 'free_wifi'. Once youth victim connects they are effectively connected to the attackers computer and all the data you send and receive can be captured.  
                        </p>
                    </div>
                </div>

        <footer>
            <?php include 'includes/footer.html'?>
        </footer>
    </body>
</html>