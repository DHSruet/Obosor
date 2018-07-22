<?php

$con = mysqli_connect("localhost","root","","obosor");
$query="SELECT * FROM `products` ";
$result=mysqli_query($con,$query);

while ($row= mysqli_fetch_array($result)) {

  $image=$row['product_image'];
  $title=$row['product_title'];
  $writer=$row['product_writer'];
  echo "
  <div class='col-1-of-4 forrespon' >
      <div class='card'>
          <div class='card__side card__side--front'>
              <img src='admin_area/product_images/$image' class='card__picture' alt='pic'>

              <div class='card__details'>
                 $title
              </div>

          </div>
          <div class='card__side card__side--back card__side--back-2'>
              <div class='card__cta'>
                  <div class='card__price-box'>
                      <p class='card__details'>$writer</p>
                      <p class='card__price-only'>Only</p>
                      <p class='card__price-value'>Tk ".$row['product_price']."</p>
                  </div>
                  <a href='#popup' class='btn btn--white'>Add to Cart!</a>
              </div>
          </div>
      </div>
  </div>
  ";

}








 ?>
