<!DOCTYPE html>

<html>
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <body>
    <?php include 'includes/header.html'?>
            <div class="row" id="containerfish">
                <h1><img src="img/Billy%20Happy%20small.png">Phishing<img src="img/Billy%20Happy%20small.png" style="transform:scaleX(-1)"></h1>
            </div>
        <div class="row" id="fish1">
            <div class="col-md-6">
                <h2>What is phishing?</h2>
                <img id="contimage" src="img/phillythefish.png" />
            </div>
            <div class="col-md-6"><p>Cybercriminals send emails pretending to be someone they are not to many people at the same time. The email can claim to come from a bank, company, government department or any other widely used online service. The aim is to get the target to do something they usually wouldn't or reveal personal information.
                <br><br>
            Emails often request login details for websites with financial information such as internet banking sites. This may be in the form of a security alert asking you to confirm your account details for example.
            </p>
            </div>
        
        </div>
        <div class="row" id="fish2">
            
            <div class="col-md-6 col-md-push-6">
                <h3>Anatomy of a Phishing Email</h3>
                <div >
                    <img src="img/Anatomy%20of%20a%20phishing%20email.png" style="width:100%;">
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6" id="accordion" role="tablist aria-multselectable=true">

            <ul class="list-group row">
                    <li>
                        <button type="button" role="tab" class="btn btn-info" data-parent="#accordion" data-toggle="collapse" id="btn1" data-target="#button1" style="font-size: 20px;" aria-expanded="true" aria-controls="button1">1. Emails sent from public email addresses</button>
                          <div id="button1" role="tabpanel" class="collapse" aria-labelledby="btn1" style="background-color:#4682B4; padding-right: 2%; padding-left: 2%;">
                        Software can show or 'spoof' an email address in the sender line of an email, so it appears as though it's from someone its not. It may also be sent from an email address that's similar to the genuine sender, i.e. '@saphirebanks.com' (only one 'p' in sapphire) instead of '@sapphirebank.com'. Without taking time to check the authenticity of the sender address the target may think the email is from a genuine source.
                      </div>
                    </li>
                    <li>
                        <button type="button" role="tab" class="btn btn-info" data-parent="#accordion" data-toggle="collapse" id="btn2" data-target="#button2" aria-expanded="true" aria-controls="button2" style="font-size: 20px;">2. Unsolicited attachments</button>
                      <div id="button2" role="tabpanel" class="collapse" aria-labelledby="btn2" style="background-color:#4682B4; padding-right: 2%; padding-left: 2%;">
                        Don't open attachments in emails unless from a trusted source. Opening attachments in emails may download malware on to your device. Malware can be concealed in email attachments you are directed to open such as .pdf files and word documents.
                      </div>
                    </li>
                    <li>
                        <button type="button" role="tab" class="btn btn-info" data-parent="#accordion" data-toggle="collapse" id="btn3" data-target="#button3" aria-expanded="true" aria-controls="button3" style="font-size: 20px;">3. Generic greetings</button>
                      <div id="button3" role="tabpanel" class="collapse" aria-labelledby="btn3" style="background-color:#4682B4; padding-right: 2%; padding-left: 2%;">
                        Cybercriminals send emails pretending to be someone else to many people at the same time; this means the address includes generic greetings and no personal information. Authentic emails often include your name or username.
                      </div>
                    </li>
                    <li>
                        <button type="button" role="tab" class="btn btn-info" data-parent="#accordion" data-toggle="collapse" id="btn4" data-target="#button4" style="font-size: 20px;">4. Spelling and Grammar Mistakes</button>
                      <div id="button4" role="tabpanel" class="collapse" aria-labelledby="btn4" style="background-color:#4682B4; padding-right: 2%; padding-left: 2%;">
                        Authentic emails will rarely include spelling or grammar mistakes, phishing emails however intentionally do. Attackers want to ensure the targets they correspond with may give them their details. If a victim responds to a poorly drafted email its more likely, they will be gullible enough to be phished.
                      </div>
                    </li>
                    <li>
                        <button type="button" role="tab" class="btn btn-info" data-parent="#accordion" data-toggle="collapse" id="btn5" data-target="#button5" style="font-size: 20px;">5. Links to unrecognized or slightly mispelled sites</button>
                        <div id="button5" role="tabpanel" class="collapse" aria-labelledby="btn5" style="background-color:#4682B4; padding-right: 2%; padding-left: 2%;">
                            Don't click on links in emails unless from a trusted source. Opening links in emails may allow malware to transfer on to your device when you connect to it or the attacker to harvest information you input. 
                        </div>
                    </li>
                    <li>
                        <button type="button" role="tab" class="btn btn-info" data-parent="#accordion" data-toggle="collapse" data-target="#button6" id ="btn6"style="font-size: 20px;">6. Threats or enticements that create a sense of urgency</button>
                        <div id="button6" role="tabpanel" class="collapse" aria-labelledby="btn6" style="background-color:#4682B4; padding-right: 2%; padding-left: 2%;" >
                            Threats that your account will be deleted or negatively impacted if the issue is not resolved are to pressure you into falling for the trap by creating a sense of urgency and give you less time to think about the authenticity of the email.
                        </div>
                    </li>
                    <li>
                        <button type="button" role="tab" class="btn btn-info" data-parent="#accordion" data-toggle="collapse" id="btn7" data-target="#button7" style="font-size: 20px;">7. Toll fee numbers that do not match known numbers</button>
                        <div id="button7" class="collapse" role="tabpanel" aria-labelledby="btn7" style="background-color:#4682B4; padding-right: 2%; padding-left: 2%;">
                            Contact support email addresses, and toll numbers are to allow you to correspond with the attacker or pay toll fees.
                        </div>
                    </li>
            </ul>
            </div>
        </div>
        <div class="row" id="fish1">
            <h2 style = "text-align: center;"><a  href="http://blogs.plymouth.ac.uk/strategyandarchitecture/phishing-line/">Want to know even more?</a></h2>
        </div>
        <?php include 'includes/footer.html'?>
    </body>
</html>