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
          .footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
            background-color: white;
        }
        </style>
        <body style="background-color: white text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black; ">
        <?php include 'includes/header.html'?>
            <div class="row" style="background-color: #80B8EA;  color:white; padding-left: 5%; height:100%;">
                <div class="container">
                    <h1 style ="font-size: 70px;"><img src="img/Billy%20Happy%20small.png">Who is Billy?<img src="img/Billy%20Happy%20small.png" style="transform: scaleX(-1);"></h1>
                    <p style="font-size: 30px;">Billy is here to make mistakes with his cyber security so you don't have to... </p></>
                </div>
            </div>
        <div class="row" style="background-color: #FF8691; color:white; padding-left: 5%; height:100%;">
        <h1 style=" font-size: 70px; font-family: Oswald; object-position: center;">Billy Is Left Exposed<span class="badge" style="font-size: 40px; margin-left: 2%; padding: 0.5%;">New</span></h1>
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
            <?php include 'includes/footer.html'?>
        
    </body>
</html>