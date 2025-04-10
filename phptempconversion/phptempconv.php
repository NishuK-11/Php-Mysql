<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;box-sizing:border-box;
        }
        h1{text-align:center;line-height:20vh; color:#6c63ff;}
        .main-div{width:100%;height:80vh;display:flex;justify-content:space-around;align-items:center;}
        .left-side img{max-width:400px;height:auto;}
        .left-side{border-radius:30% 70% 70% 30%/30% 30% 70% 70%;background-color:#dfe6e9;}
        .right-side{width:400px;height:300px;border-radius:15px;background-color:#dfe6e9;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;}
        .input1{width:250px;height:40px;padding:5px;outline:none;border-radius:1px solid grey;border-radius:5px;}
        .selection{width:100%;margin:20px 0;}
        .btn{padding:10px 16px;border-readius:5px;outline:none;border:none;background-color:#6c63ff;color:white;font-size:0.9rem;}
        p{margin:20px 0 0 0 ;}
    </style>
</head>
<body>
    <header>
        <h1>Temmperature conversion</h1>
        <div class="main-div">
            <div class="left-side">
                <img src="work.jpeg" alt="">
            </div>
            <div class="right-side">
                <form method="POST" >
                    <input type="text" name="num" placeholder="enter your name" class="input1">
                    <div class="selection">
                        <label>Celc</label>
                        <input type="radio" name="units" value="cel">
                        <label>Faren</label>
                        <input type="radio" name = "units" value="feh">
                    </div>
                    <input type="submit" value="convert now" name="submit" class="btn">
                </form>
                <p>
                <?php

                    if(isset($_POST['submit'])){
                        $num = $_POST['num'];
                        $temp = $_POST['units'];

                        if($temp == "cel"){
                            $result = $num*9/5+32;
                            echo "the conversion value of cel in faren is ".$result;
                        }
                        else{
                            $result = ($num-32)*5/9;
                            echo "the conversion value of faren in cel is".$result;
                        }
                    }
                ?>
            </p>
            </div>
            
        </div>
    </header>
</body>
</html>