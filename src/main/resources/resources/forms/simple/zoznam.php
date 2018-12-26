<div class="content" id="content">
  <section class="container page">
  <article>
<p>
  <a href="/forms/simple/simple_application.php">Prihlásiť sa</a>
</p>
<?php
   $participants = file("zoznam.txt");
   if ( empty($participants)) {
       echo "Máte jedinečnú šancu byť prvý!";
   }
   else {
    echo "<ul>";
    foreach ($participants as $line) {
       echo "<li>".$line."</li>";
    }
    echo "</ul>";
}
?>
<p>
    <a href="/sk/events/">Späť na aktuality</a>
</p>
</article>
</section>
</div>
