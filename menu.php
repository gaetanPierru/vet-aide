
 <div id="menu"> 
 <div class="in">
     <ul>
       <li><a class="accueil txt" >Accueil</a></li>
       <?php if(isset($_SESSION['nom'])) { echo '<li><a class="animaux txt" >Mes Animaux</a></li>'; }?>
       <?php if(isset($_SESSION['veterinaire']) && $_SESSION['veterinaire'] != 0){ echo '<li><a class="veterinaire txt" >Mes rendez vous</a></li>'; }?>
       <li><a class="contact txt"t >Contact</a></li>
     </ul>
 </div>
</div>
