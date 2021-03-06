<!DOCTYPE html>
<!-- Pagina principal -->
<html>
<title>HousePets</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body background="fun.png">

<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

</style>
<body>

<!--MENU TOPO-->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="Home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
           
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ADOÃ‡ÃƒO <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <!--SUBMENU--> <a href="cães.php" class="w3-bar-item w3-button">CÃƒES</a>
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

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large">BAND</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large">TOUR</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large">CONTACT</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">MERCH</a>
</div>



<!-- ConteÃºdo da pÃ¡gina-->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Imagens automÃ¡ticas de apresentaÃ§Ã£o de slides -->
  <div class="mySlides w3-display-container w3-center">
      <img src="/ao.png" style="width:100%">
    
  </div>
  <div class="mySlides w3-display-container w3-center">
      <img src="/lo.png" style="width:100%">
    
  </div>
  <div class="mySlides w3-display-container w3-center">
      <img src="/ong.jpg" style="width:100%">
    
  </div>
  
  
  
  

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">HousePets</h2>
    <p class="w3-opacity"><i>Amamos os animais</i></p>
    <p class="w3-justify">Quando falamos de seres vivos, a palavra â€œcomprarâ€� nos soa estranha, porque o que um animal 
     Ã© capaz de nos dar e transmitir, nÃ£o se pode comprar, nem hÃ¡ dinheiro no mundo para pagÃ¡-lo.
     Ã‰ certo que, infelizmente, adquirir um cachorro de raÃ§a deve ser, por regra geral, por meio de uma loja, 
     mas existem cachorros preciosos que podemos adotar e lhes dar o lar cheio de amor que eles tanto precisam. 
     Sendo assim: NÃƒO COMPRE, ADOTE!</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Unidos sempre para fazer o que amamos.</p>
        <img src="/upi.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Ajudamos animais a acharem um lar para serem amados.</p>
        <img src="/io.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Para poder manter esses animais contamos com a ajuda de doaÃ§Ãµes.</p>
        <img src="/sa.png" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

  <!-- SeÃ§Ã£o de dicas -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">DICAS PARA SEU PET</h2>
      <p class="w3-opacity w3-center"><i>Confira dicas incriveis aqui!</i></p><br>

      
     
      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
            <img src="/f.di.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Primeiro contato</b></p>
            <p>Brincar de â€œesconder a raÃ§Ã£oâ€� Ã© uma boa forma de exercitar seu cÃ£o em um dia chuvoso.
                Esconda um punhado de raÃ§Ã£o em vÃ¡rios pontos diferentes da 
                casa e depois mande seu cachorro encontrÃ¡-los.</p>
            
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
            <img src="/f.ga.png" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Gatinho</b></p>
            <p>Nunca apare o bigode do gato! Ele serve para que ele se previna de acidentes,
               medir distÃ¢ncias e manifestar o seu humor.</p>
            
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="/juntos.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Essencial</b></p>
            <p>Os cachorros e os gatos precisam ser vacinados nos primeiros meses de vida com trÃªs doses consecutivas. 
                ApÃ³s essa etapa Ã© necessÃ¡riofazer reforÃ§o anual dessas vacinas..</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Ticket Modal -->
  <div id="ticketModal" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
      <header class="w3-container w3-teal w3-center w3-padding-32"> 
        <span onclick="document.getElementById('ticketModal').style.display='none'" 
       class="w3-button w3-teal w3-xlarge w3-display-topright">Ã—</span>
        <h2 class="w3-wide"><i class="fa fa-suitcase w3-margin-right"></i>Tickets</h2>
      </header>
      <div class="w3-container">
        <p><label><i class="fa fa-shopping-cart"></i> Tickets, $15 per person</label></p>
        <input class="w3-input w3-border" type="text" placeholder="How many?">
        <p><label><i class="fa fa-user"></i> Send To</label></p>
        <input class="w3-input w3-border" type="text" placeholder="Enter email">
        <button class="w3-button w3-block w3-teal w3-padding-16 w3-section w3-right">PAY <i class="fa fa-check"></i></button>
        <button class="w3-button w3-red w3-section" onclick="document.getElementById('ticketModal').style.display='none'">Close <i class="fa fa-remove"></i></button>
        <p class="w3-right">Need <a href="#" class="w3-text-blue">help?</a></p>
      </div>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTATO</h2>
    <p class="w3-opacity w3-center"><i>Entre em contato com a gente!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Santo Ã‚ngelo - RS<br>
        <i class="fa fa-phone" style="width:30px"></i> Telefone: (55)33125002<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: housepets@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Nome" required name="Nome">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Mensagem" required name="Mensagem">
          <button class="w3-button w3-black w3-section w3-right" type="submit">ENVIAR</button>
        </form>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>
<!-- Add Google Maps -->
<div id="googleMap" style="height:400px;" class="w3-grayscale-max"></div>
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- RodapÃ© -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
 
  <p class="w3-medium">HousePets <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a></p>
</footer>

<script>
// Slide automatico - mudar a imagem a cada 4 segundos
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
