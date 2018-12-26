<div class="content" id="content">
  <section class="container page">
  <article>
  <div style="text-align: left">
    <form class= "form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
     <p>Pozor! Meno bude viditeľné pre všetkých!</p>
     <p class="name">
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name);?>">
        <label for="name">Meno a priezvisko</label> 
     </p>
     <span class="error"><?php echo $nameErr;?></span>
  
     <p class="email">
       <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email);?>"> 
       <label for="email">E-mail</label> 
     </p>
     <span class="error"><?php echo $emailErr;?></span>
     <p>
       <select name="price">
          <option value="instruktor">Inštruktor(40 eur)</option>
          <option value="dieta">Dieťa (60 eur)</option>
          <option value="dieta_la">Dieťa z La (40 eur)</option>
       </select>
     </p>
     <p class="submit">
       <input type="submit" name="appsubmit" value="Odoslať" /> 
     </p>
    </form>
  </div>
  </article>
  </section>
</div>