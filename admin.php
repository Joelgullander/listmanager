<?php include("partials/header.php"); ?>
<div class="main-wrapper">
  <div class="container">
    <div class="row">      
      <div class="help">
        <h1> Admin Panel </h1>
        
        <button class="btn btn-danger" id="resetJob">Avsluta evenemang</button>
        <button class="btn btn-success" id="closeList">Lås lista</button>
        
        <br />
        <br />
        <p> Vid tryck på Avsluta evenemang försvinner allas gästlistor & statistik beräknas och tilldelas till ambassadörerna.
          Denna åtgärd går inte att ångra. Ska endast tryckas på dagen efter evenemang. </p>
        <p> Låsning utav listan ska ske när listan stängs och det är dags för öppning, detta gör så att ambassadörer inte kan lägga till eller ändra i sina gästlistor </p>
      </div>
          
    </div>
  </div>
</div>
<?php include("partials/footer.php"); ?>