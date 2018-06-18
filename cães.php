<!DOCTYPE html>
<html>
<title>HousePets</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.myLink {display: none}
</style>
<body class="w3-light-grey">

<!--MENU TOPO-->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="Home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
           
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ADOÇÃO <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <!--SUBMENU--> <a href="cães.php" class="w3-bar-item w3-button">CÃES</a>
                     <a href="gatos.php" class="w3-bar-item w3-button">GATOS</a>
                     <a href="filhotes.php" class="w3-bar-item w3-button">FILHOTES</a>
      </div>    
    </div>
    <a href="galeria.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">GALERIA DOS PETS</a>
    <a href="dicas.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DICAS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTATO</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
           
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="dicas.php" class="w3-bar-item w3-button">Merchandise</a>
        
      </div>
    </div>
    <a href=" Sobre.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">SOBRE</a>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
    <img class="w3-image" src="/racao.png" alt="London" width="1500" height="700">
  <div class="w3-display-middle" style="width:65%">
   

    <!-- Tabs -->
    <div id="Flight" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Travel the world with us</h3>
      <div class="w3-row-padding" style="margin:0 -16px;">
        <div class="w3-half">
          <label>From</label>
          <input class="w3-input w3-border" type="text" placeholder="Departing from">
        </div>
        <div class="w3-half">
          <label>To</label>
          <input class="w3-input w3-border" type="text" placeholder="Arriving at">
        </div>
      </div>
      <p><button class="w3-button w3-dark-grey">Search and find dates</button></p>
    </div>

    <div id="Hotel" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Find the best hotels</h3>
      <p>Book a hotel with us and get the best fares and promotions.</p>
      <p>We know hotels - we know comfort.</p>
      <p><button class="w3-button w3-dark-grey">Search Hotels</button></p>
    </div>

    <div id="Car" class="w3-container w3-white w3-padding-16 myLink">
      <h3>Best car rental in the world!</h3>
      <p><span class="w3-tag w3-deep-orange">DISCOUNT!</span> Special offer if you book today: 25% off anywhere in the world with CarServiceRentalRUs</p>
      <input class="w3-input w3-border" type="text" placeholder="Pick-up point">
      <p><button class="w3-button w3-dark-grey">Search Availability</button></p>
    </div>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  <div class="w3-container w3-margin-top">
    <h3>CÃƒES PARA ADOÃ‡ÃƒO</h3>
    <h6>Encontre aqui seu animalzinho!</h6>
  </div>
  <div class="w3-row-padding w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
          <img src="/f (1).jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Tedy</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
              <img src="/fi (1).jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Teka</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
              <img src="/fão (1).jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Aila</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
              <img src="/fa (1).jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Francisco</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
              <img src="/fii (1).jpg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">TÃ©o</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Explore Nature -->
  
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
        <img src="/lo.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Aika</h3>
        <p> Essa linda cadelinha dos olhos cor de mel, estÃ¡ a procura de um lar.
        Venha conhecÃª-la!</p>
        
      </div>
    </div>
    <div class="w3-half w3-margin-bottom">
        <img src="/leza (1).jpg" alt="Austria" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Amendoim</h3>
        <p>Esse lindo cÃ£ozinho adora brincar.
        Venha conhecÃª-lo</p
      </div>
    </div>
  </div>

  
  
  <!-- Contact -->
  <div class="w3-container">
    <h2>Contato</h2>
    <p>Entre em contato</p>
    <i class="fa fa-map-marker" style="width:30px"></i> Santo Ã‚ngelo - RS<br>
    <i class="fa fa-phone" style="width:30px"></i> Telefone: (55)33125002<br>
    <i class="fa fa-envelope" style="width:30px"> </i> E-mail: housepets@gmail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nome" required name="Nome"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="E-mail" required name="E-mail"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Mensagem" required name="Mensagem"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">ENVIAR MENSAGEM</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <h5>Redes Sociais</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    
  </div>
  <p>HousePets<a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green"></a></p>
</footer>

<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>

</body>
</html>
