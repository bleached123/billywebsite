<!DOCTYPE html>
<html>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');
        @import url('https://fonts.googleapis.com/css?family=Oswald');

    .carousel-indicators li {
    display: inline-block;
    width: 48px;
    height: 48px;
    margin: 10px;
    text-indent: 0;
    cursor: pointer;
    border: none;
    border-radius: 50%;
    background-color: #0000ff;
    box-shadow: inset 1px 1px 1px 1px rgba(0,0,0,0.5);    
}
.carousel-indicators .active {
    width: 48px;
    height: 48px;
    margin: 10px;
    background-color: #ffff99;
}
    </style>
    <?php
        function stories(){
            $check=1;
            $count = count(scandir('Stories/')) - 4;
            for($i = 0; $count > $i; $count--){
            $file = "News/".$i.".txt";
            if(file_exists($file)) {
                if(is_readable($file)) {
                    $f = fopen($file, "rb") or die("Unable to open file");
                }
            }
            $a = $count.'';
            $len = strlen($i);
            $j = $a[$len-1];
            $color = "white";
            if($j==1||$j==6){
                $color = "#80B8EA";
            }elseif($j==2||$j==7){
                $color = "#ffb347";
            }elseif($j==3||$j==8){
                $color = "#48D1CC";
            }elseif($j==4||$j==9){
                $color = "#d3d3d3";
            }else{
                $color = "#FF8691";
            }

            $newsDiv = "<div class=\"row\"style=\"color:white; margin-left:0; background-color:".$color."; margin-top:5px; font-size: 2em; width:100%;\"><div class=\"col-md-6 col-md-offset-3\">";
            while ($line = fgets($f)) {
                if(strpos ($line, 'Title:' )!==false) {

                    if($check ==1){
                        $templine = get_string_between($line, 'Title:', ' :Title');
                        $templine = "<h1>" . $templine . "<span class=\"badge\" style=\"font-size: 40px; margin-left: 2%; padding: 0.5%;\">New</span></h1><br>";
                        $check++;
                    }else {
                        $templine = get_string_between($line, 'Title:', ' :Title');
                        $templine = "<h1>" . $templine . "</h1><br>";
                    }
                    $newsDiv = $newsDiv . $templine;
                }elseif(strpos ($line, 'DATE:')!==false){
                    $templine = get_string_between($line, 'DATE:', ' :DATE');
                    $templine = "<p>" . $templine . "</p><br>";
                    $newsDiv = $newsDiv . $templine;
                }elseif(strpos ($line, 'Paragraph:')!==false) {
                    $templine = get_string_between($line,'Paragraph:',':Paragraph');
                    $templine = "<p>".$templine."</p><br>";
                    $newsDiv = $newsDiv.$templine;
                }elseif(strpos ($line, 'Subheading:')!==false){
                    $templine = get_string_between($line,'Subheading:',':Subheading');
                    $templine = "<h2>".$templine."</h2>";
                    $newsDiv = $newsDiv.$templine;
                }elseif (strpos ($line, 'Image:')!==false){
                    $templine = get_string_between($line,'Image:',':Image');
                    $templine = "<img src=\"NewsIMG\\".$templine."\"  style=\"width:300px;\"><br>";
                    $newsDiv = $newsDiv.$templine;
                }elseif(strpos ($line, 'THEEND')!==false){
                    $templine = "</div><div class=\"col-md-3\"></div></div>";
                    $newsDiv = $newsDiv.$templine;
                    echo $newsDiv;
                    break;
                    fclose($file);
                }
            }
            }
            }
    ?>
    <body>
        <?php include 'includes/header.html'?>
        <div class="row" style="background-color:#80B8EA; color:white;">
            <center>
                    <div class="col" ><h1 style="font-size: 70px;"><img src="img/Billy%20Happy%20small.png">The Story so far...<img src="img/Billy%20Happy%20small.png" style="transform: scaleX(-1);"></h1></div>
            </center>
        </div>
        <div class="row" style="background-color: #FF8691; color:white; padding-left: 5%; height:100%;">
            <h1 style=" font-size: 70px; font-family: Oswald; object-position: center;">Billy Is Left Exposed<span class="badge" style="font-size: 40px; margin-left: 2%; padding: 0.5%;">New</span></></h1>
            <div class="col-md-6" style="background-color: #FF8691; height:auto; float:left; ">
                
                <div id="theCarousel" class="carousel slide" data-ride="carousel" style="border-right: 2px solid white; ">
                    <!--Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#theCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#theCarousel" data-slide-to="1"></li>
                        <li data-target="#theCarousel" data-slide-to="2"></li>
                    </ol>
                    <!--Wrapper for slides-->
                    <div class="carousel-inner" style="width:100%; height:100%;">
                        <div class="item active">                            
                                <img src="img/Billy%20Happy.png" alt="Billy Happy" style="width:50%; float:left">
                                    <h2 style="color:white; float:right; width:50%; font-family: Open+Sans; ">Billie has a computer, this computer keeps trying to update, Billie always clicks "remind me later"...</h2>
                        </div>
                        <div class="item">
                            <img src="img/Billy%20Neutral.png" alt="MediumBilly" style="width:50%; float:left;">
                            <h2 style="color:white; float:right; width:50%; ">Billie has a computer, this computer keeps trying to update, Billie always clicks "remind me later"...</h2>
                        </div>
                        <div class="item">
                            <img src="img/Billy%20Unhappy.png" alt="SadBilly" style="width:50%; float:left;">
                            <h2 style="color:white; float:right; width:47%; ">Billie has a computer, this computer keeps trying to update, Billie always clicks "remind me later"...</h2>
                        </div>
                    </div>
                </div>
                
            </div>
                <div class ="col-md-6"style="background-color: #FF8691; height:auto; border-color: white; float:right; padding-right: 5%;">
                <h2 style="font-size: 40px;">Do</h2>
                <ul type="circle" style="font-size: 20px;">
                    <li>Enable Automatic Updates</li>
                    <p>Operating systems and applications often have automatic update functionality. It's a good idea to enable it so you're always up to date.</p>
                    <li><a style="text-decoration: none;" href="backup.html">Learn More...</a></li>
                </ul>
                <h2 style="font-size: 40px;">Don't</h2>
                <ul type="circle" style="font-size: 20px;">
                    <li>Put it off!</li>
                    <p>'Patches' often quite literally patch security holes in software, the longer you leave your system unpatched the more vulnerable it becomes.</p>
                    <li>Use Unsupported software</li>
                    <p>Companies often stop maintaining old software to put more focus on new products. If you're using out of date software it's likely to have many well known vulnerabilities.</p>
                    <li><a href="Posters/Billy%20Leaves%20Themselves%20Exposed.pdf">Download the poster</a></li>
                </ul>
                <img src="img/Artemis%20Point%20Left.png" style="float:right; padding-right: 2%; width:40%;">
                </div>
                    
            </div>
            <div class="row" style="background-color: #ffff66; color:black; padding-left: auto; padding-right: auto; height:100%; border:2px; border-color:white;">
                <center>
                <h1 style=" font-size: 70px; font-family: Oswald; ">Billy And The Wealthy Prince</h1></center>
                <div class="col-md-6 col-md-pull-6" style="background-color: #ffff66; height:auto; float:right;">
                
                    <div id="theCarousel1" class="carousel slide" data-ride="carousel" style="padding-left: 2%; ">
                        <!--Indicators -->
                        <ol class="carousel-indicators" style="color:aqua;">
                            <li data-target="#theCarousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#theCarousel1" data-slide-to="1"></li>
                            <li data-target="#theCarousel1" data-slide-to="2"></li>
                        </ol>
                        <!--Wrapper for slides-->
                        <div class="carousel-inner" style="width:100%; height:100%;">
                            <div class="item active">                            
                                <img src="img/Billy%20Happy.png" alt="Billy Happy" style="width:50%; float:right; transform: scaleX(-1);">
                                    <h2 style="float:left; width:50%; font-family: Open+Sans; ">Billy received a lovely email from a prince wanting to send him some money and asking for Billy's bank details..</h2>
                            </div>
                            <div class="item">
                                <img src="img/Billy%20Neutral.png" alt="MediumBilly" style="width:50%; float:right; transform: scaleX(-1);">
                                <h2 style="float:left; width:50%; ">Billy emailed the prince back with his bank details, planning what he was going to do with the money...</h2>
                            </div>
                            <div class="item">
                                <img src="img/Billy%20Unhappy.png" alt="SadBilly" style="width:50%; float:right; transform: scaleX(-1);">
                                <h2 style="float:left; width:50%;">Billy eagerly looked at his bank account the next day, he had no money left, the prince stole it all!</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class ="col-md-6 col-md-push-6"style="background-color: #ffff66; height:auto; border-color: white; padding-left:5%; padding-right:5%;float:left; border-right: 2px solid black;">
                  <h2 style="font-size: 40px;">Do</h2>
                <ul type="circle" style="font-size: 20px;">
                    <li>Check the details requested are actually needed</li>
                    <p>if any company asks you for your bank account or any other personal details contact the company through a different channel to confirm that they need it.</p>
                    <li>Contact your bank ASAP</li>
                    <p>If any odd payments go out of your account make sure you contact your bank immediately and tell them of the irregularity.</p>
                    <li><a style="text-decoration: none;" href="backup.html">Learn More...</a></li>
                </ul>
                <h2 style="font-size: 40px;">Don't</h2>
                <ul type="circle" style="font-size: 20px;">
                    <li>Trust someone based on their claims</li>
                    <p>Never give your bank account details to anyone that you can't be 100% sure of who they are. Emails, contact details, and websites can be spoofed.</p>
                    <li>Give sensitive information to strangers</li>
                    <p>Only ever give your bank account details to reputable companies through a secure website (a website starting with https).</p>
                    <li><a href="Posters/Billy%20and%20the%20Wealthy%20Prince.pdf">Download the poster</a></li>
                    </ul>
                <img src="img/Artemis%20Point%20Left.png" style="float:right; padding-right:2%; width:40%;">
                </div>
                
        </div>
        <?php include 'includes/footer.html'?>
    </body>
</html>