<!-- math.function -->
<?php

echo pow(3,4)."<hr>";//power

echo rand(1,10);//random htoke pay
echo "<hr>";
echo sqrt(111)."<hr>";
echo ceil(5.2)."<hr>";//6
echo floor(5.7)."<hr>";//5
echo round(5.5)."<hr>";//6

$string="Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse assumenda cumque ab dolor quis soluta rerum impedit tempore, quaerat quae, molestias iure suscipit minima ut ipsam nisi alias voluptatibus expedita!
Ipsam dolorem rerum cum nihil sed praesentium ut, veritatis in ea ad consectetur reiciendis culpa cumque sit inventore saepe magnam, fugit debitis vero quam mollitia optio deleniti. Unde, maxime non.
Libero nesciunt exercitationem, dolorum ducimus quia debitis, praesentium accusamus eos consectetur quaerat modi voluptas deleniti suscipit reiciendis laboriosam, eum odit voluptate cupiditate fuga! Libero, voluptas minima incidunt impedit molestias qui?";//lorem*3

echo strlen($string)."<hr>";
echo strtoupper($string)."<hr>";
echo strtolower($string)."<hr>";

$array=array(1,2,5,6,7,8,12,43,66);
echo max($array)."<hr>";
echo min($array)."<hr>";








?>
