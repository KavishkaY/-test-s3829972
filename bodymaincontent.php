<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <style>
 {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #000000;
  height: 300px; 
}

</style>
</head>
    <body>
        <div>
            <?php
                for ($x = 0; $x <= 2; $x++) {
                    $breedsURL = 'https://dog.ceo/api/breed/hound/images/random/3' ;
	                $dogs_json = file_get_contents($breedsURL);
	                $dogs_array = json_decode($dogs_json, true);
                    if(!empty($dogs_array)){
                        foreach($dogs_array['message'] as $image){
                            echo '<img src="'.$image.'" alt= ""/>';
                        }
                    }
                  }
                	
            ?>
        </div>    
    </body>
</html>
