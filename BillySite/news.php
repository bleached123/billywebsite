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

    <?php
    function get_string_between($content, $start, $end){
        $r = explode($start, $content);
        if (isset($r[1])){
            $r = explode($end, $r[1]);
            return $r[0];
        }
        return '';
    }

    function newsFunc()
    {
        $check=1;
        $count = count(scandir('News/')) - 4;
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
            <div class="row" id="titlecont">
            <div class="container">
                <h1><img src="img/Billy%20Happy%20small.png">News<img src="img/Billy%20Happy%20small.png" style="transform: scaleX(-1);"></h1>
            </div>
            </div>
                <?php echo newsFunc();?>
                <?php include 'includes/footer.html'?>
        
    </body>
</html>