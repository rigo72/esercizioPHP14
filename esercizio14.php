<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sfondoCasuale($lar){
            if($lar < 150){
                return "#7FFFD4";
            }elseif($lar > 250){
                return "#1E90FF";
            }else{
                return "#0000FF";
            }
        }
        
        $lar = rand(50, 500);

        echo "<div style='width = {$lar}; background-color=:;'> </div>"




    ?>
</body>
</html>