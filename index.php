<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SNACKS-B1</title>

    <?php

      include'data.php';

     ?>

  </head>
  <body>

    <style>

      body{
        background-color: black;
        text-align: center;
        color: orange;

      }

      h1{
        font-size: 80px;
        text-align: center;
        font-weight: 800;
      }

      p{
        font-size: 40px;
      }

      p:hover{
        cursor: pointer;
        text-decoration: underline;
      }


    </style>

    <?php

        foreach ($hotels as $items => $item ) {
          ?>
          <div>
            <h1><?php echo $item['name'] ?></h1>
            <p><?php echo "Description: " . $item['description'] ?></p>
            <p><?php if ($item[parking]) {
                  echo "Parking : Yes";
                } else {
                  echo "Parking : No";
                }?>
            </p>
            <p><?php echo "Vote: " . $item['vote'] . "/5"?></p>
            <p><?php echo "Distance to center " . $item['distance_to_center'] ." km"?></p>
          </div>
          <?php
        }

    ?>
  </body>
</html>
