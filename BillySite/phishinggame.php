<!DOCTYPE html>

<html>
         <style>
            @import url('https://fonts.googleapis.com/css?family=Open+Sans');
            @import url('https://fonts.googleapis.com/css?family=Oswald');
             .custom-image{
                 width:100%;
                 
             }
        </style>
        <script type="text/javascript" src="BillyPointsFunction.js"></script>
        <script>
            var counter = 1;
            var lives = 3;

            function gamefunction(id){

                var newImg = new String();
                var rightAnswer = new Boolean();
                var humanAnswer = new Boolean();

                if(id == "button-true"){
                    humanAnswer=true;
                }else{
                    humanAnswer=false;
                }

                if(document.getElementById(counter).getAttribute("data-answer")==0){
                    rightAnswer =true;
                }else{
                    rightAnswer=false;
                }

                if(humanAnswer == rightAnswer && counter <10 && lives>0){
                    livesfunc(lives);
                    newImg= counter.toString();
                    document.getElementById(newImg).style.display = 'none';
                    counter++;
                    newImg=counter.toString();
                    document.getElementById(newImg).style.display = 'inline';
                    document.getElementById("lives").innerHTML = lives;

                }else if (humanAnswer != rightAnswer && counter <10 && lives>0){
                    livesfunc(lives);
                    newImg= counter.toString();
                    document.getElementById(newImg).style.display = 'none';
                    counter++;
                    newImg=counter.toString();
                    document.getElementById(newImg).style.display = 'inline';
                    document.getElementById("lives").innerHTML = lives;
                    lives--;
                }else if(lives == 0 && counter <= 10){
                    livesfunc(lives);
                    newImg= counter.toString();
                    document.getElementById(newImg).style.display = 'none';
                    document.getElementById("40").style.display = 'inline';
                    document.getElementById("lives").innerHTML = lives;
                    document.getElementById("button-true").style.display = 'none';
                    document.getElementById("button-false").style.display = 'none';
                    document.getElementById("play-again").style.display = 'inline';
                }else if (lives == 3 && counter >= 10){
                    livesfunc(lives);
                    newImg= counter.toString();
                    document.getElementById(newImg).style.display = 'none';
                    document.getElementById("20").style.display = 'inline';
                    document.getElementById("lives").innerHTML = lives;
                    document.getElementById("button-true").style.display = 'none';
                    document.getElementById("button-false").style.display = 'none';
                    document.getElementById("play-again").style.display = 'inline';
                }else{
                    livesfunc(lives);
                    newImg= counter.toString();
                    document.getElementById(newImg).style.display = 'none';
                    document.getElementById("30").style.display = 'inline';
                    document.getElementById("lives").innerHTML = lives;
                    document.getElementById("button-true").style.display = 'none';
                    document.getElementById("button-false").style.display = 'none';
                    document.getElementById("play-again").style.display = 'inline';
                }


            }
            function livesfunc(lives){
                document.getElementById("lives0").style.display = 'none';
                document.getElementById("lives1").style.display = 'none';
                document.getElementById("lives2").style.display = 'none';
                for (i = 0; i < lives; i++) {
                    document.getElementById("lives"+i).style.display = 'inline';
                }
            }
            
        </script>
    <body >
    <?php include 'includes/header.html'?>
        <center style="background-color: #80B8EA;">
        <div class="row" style="background-color: #80B8EA; width: span;">
            <h1 style=" font-size: 70px; color:white;"><img src="img/Artemis%20Point%20Left.png" style="transform: scaleX(-1); width:8%;">Phishing Game</h1>
            <p style="color:white; font-size: 30px;">Using your knowledge of Phishing emails help Billy spot the difference between the genuine emails and the malicious emails</p>
        </div>
            <div class="row">
                <div class="row"  id ="screen" style="background-color: #4682B4; color: black; font-size: 20px; opacity:1;">
                    <div class ="container" style="100%;">
                        <img class="custom-image" src="Fake Emails/Account Termination.png"  data-answer="1" style="display:inline;" id="1">
                        <img class="custom-image" src="Real Emails/Paypal Legal.png" data-answer="0" style="display: none;" id="2">
                        <img class="custom-image" src="Real Emails/google review blocked.png" data-answer="0" style="display:none;" id="3">
                        <img class="custom-image" src="Fake Emails/ICT%20Service Desk.png" data-answer="1" style="display: none;" id="4">
                        <img class="custom-image" src="Real Emails/Ebay.png" data-answer="0" style="display:none;" id="5">
                        <img class="custom-image" src="Fake Emails/May Moehle's a liar.png" data-answer="1" style="display: none;" id="6">
                        <img class="custom-image" src="Real Emails/Prime Video.png" data-answer="0" style="display: none;" id="7">
                        <img class="custom-image" src="Fake Emails/Confidential Doc.png" data-answer="1" style="display: none;" id="8">
                        <img class="custom-image" src="Real Emails/Daz 3D.png" data-answer="0" style="display: none;" id="9">
                        <img class="custom-image" src="Fake Emails/Netflix.png" data-answer="1" style="display: none;" id="10">
                        <div style="display:none; color:white;" id="20"><img src="img/Billy%20Happy.png"><h1>You are a phishing pro!</h1></div>
                        <div style="display:none; color:white;" id="30"><img src="img/Billy%20Neutral.png"><h1>You are good, but not great, keep practicing!</h1></div>
                        <div style="display:none; color:white;" id="40"><img src="img/Billy%20Dead.png"><h1>GAME OVER, you got billy hacked</h1></div>
                        
                    </div>
                    <div class="container" style="color:white;" id="livesG"><h1>Lives:</h1><h1 id="lives">3</h1>
                        <div class="row">
                            <img id="lives0" src="img/Billy Happy small.png"/>
                            <img id="lives1" src="img/Billy Happy small.png"/>
                            <img id="lives2" src="img/Billy Happy small.png"/>
                        </div>
                    </div>
                </div>
                <div class ="row" style ="background-color: #80B8EA; color: black; font-size: 50px; padding-top: 2%;padding-bottom: 2%;">
                    <button id="button-true" onclick="gamefunction(this.id)" > Genuine </button>
                    <button id="button-false" onclick="gamefunction(this.id)" style=" padding-right:1%; padding-left: 1%;">Phishing</button>
                    <button id="play-again" onclick="window.location.reload()" style="display: none;">Play Again?</button>
                </div>
            </div>
                
            </center>
        
    </body>
    <?php include 'includes/footer.html'?>
</html>