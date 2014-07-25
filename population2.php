<h1>Welcome to Population Data Online</h1>
<?
$cities = array(
  'Philadelphia' => 1548000,
  'New York' => 8337000,
  'Los Angeles' => 3858000,
  'Seattle' => 634535,
   'Boston' => 636479,
          );
if(!isset($_GET['city'])) {
  print 'No city';
}
else {

  $city=$_GET['city'];
  if ($city && isset($cities[$city])) {
    print '<p>The population of <strong>' . $city . '</strong> is <strong>' . $cities[$city] . '</strong></p>';
  }
}
 
 ?>
 <h2>Our Cities</h2>
 <ul>
 <?php
   foreach ($cities as $name => $value) {
         print '<li><a href="/myfirst/population.php?city=' . $name  . '">' . $name
             . '</a></li>';
               }
               ?>
