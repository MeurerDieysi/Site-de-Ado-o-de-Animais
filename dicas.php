<!DOCTYPE html>
<html>
<title>HousePets</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
}
.bgimg {
    background-position: center;
    background-size: cover;
    background-image: url("/vc.jpg");
    min-height: 75%;
}
.menu {
    display: none;
}
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
</div>

<!-- CabeÃ§alho com imagem -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
  </div>
  <div class="w3-display-middle w3-center">
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
  </div>
</header>

<!-- Adiciona uma cor de fundo e um texto grande en toda a pÃ¡gina -->
<div class="w3-sand w3-grayscale w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">DICAS PARA SEUS PETS</span></h5>
    
    
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"AQUI VOCÊ ENCONTRA DICAS PARA SEUS PETS</p>
    </div>
    <img src="/fe.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">

  </div>
</div>

<!-- Menu Container -->
<div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">DICAS PARA SEU PET</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink">CÃES</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink">GATOS</div>
      </a>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Quando começar a adestrar um filhote de cachorro?</h5>
      <p class="w3-text-grey">Apesar de muitas pessoas acreditarem que é preciso esperar o filhote 
          atingir uma certa idade para comeÃ§ar a treinÃ¡-lo, a verdade é que animais de estimaÃ§Ã£o 
          podem ser ensinados desde o primeiro momento que eles chegam Ã  casa dos donos. 
          E, quanto antes você começar a adestra-lo, mais facil será esse processo,
          pois os filhotes â€“ assim como as crianÃ§as â€“ sÃ£o como esponjas e aprendem tudo 
          com mais rapidez e facilidade.
          </p><br>
    
      <h5>Se seu cão tem mau hálito?</h5>
      <p class="w3-text-grey">acrescente um pouco de salsa fresca à sua tigela de comida,
           a salsa possui altos teores de clorofila, que ajuda a tratar a halitose
          </p><br>
    
      <h5> Para escovar os dentes do cão</h5>
      <p class="w3-text-grey">Se seu cão recusa-se a cooperar quando você tenta escovar seus dentes, 
          ponha um pouco de creme dental canino na corda favorita dele e brinque um pouco de cabo-de-guerra.</p><br>
    
      <h5>Dica para banho</h5>
      <p class="w3-text-grey">Quando você der banho no seu cão, coloque uma touca plástica em sua
          cabeça, cuidando bem para cobrir suas orelhas. Isso impedirá o xampu de cair nos 
          seus olhos e evitará que a água entre em seus sensíveis ouvidos, causando uma infecção.</p><br>
    
      <h5>Para os dias de calor</h5>
      <p class="w3-text-grey">Para um delicioso lanchinho de verão, corte algumas maçãs, pepinos
          ou cenouras (o que for da preferência do seu totó) e congele-os em cubos de gelo
          feitos com caldo de galinha. Seu amigo de quatro patas ficará muito contente e 
          agradecido por isso! </p>
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5>Proteja os fios</h5>
      <p class="w3-text-grey">Fios elétricos são muito perigosos, mas para o seu gato podem ser irresistíveis. Por isso, é importante tirá-los da vista dele ou encapá-los com tubos encontrados em lojas de materiais de construção ou com fita dupla-face (que ele não gostará porque é grudento).</p><br>
    
      <h5>Coloque um puleiro na janela</h5>
      <p class="w3-text-grey">Se o seu felino adora ficar observando o que está acontecendo lá 
          fora, vale a pena colocar um poleiro para que ele possa fazer isso sempre que quiser!
          Você pode construí-lo com uma bandeja velha e uma almofadinha, depois pregá-lo na 
          altura da janela (não esqueça de mantê-la fechada para que ele não pule).</p><br>
    
      <h5>Arranje um galho de árvore para escaladas</h5>
      <p class="w3-text-grey">Usar um galho de árvore real dentro de casa fará o seu gatinho se 
          sentir um verdadeiro aventureiro. Envolva o galho com corda para que ele possa escalar
          e brincar à vontade. Cuidado com pedaços muito frágeis, seu amigo felino pode se 
          machucar.</p><br>
    
      <h5>Desenhe um círculo em torno do pote de ração com giz</h5>
      <p class="w3-text-grey">Para evitar que as formigas avancem nos potes de ração e água dos
          pets, a dica é riscar com giz em volta deles. Por alguma razão, os insetos não gostam 
          do cheiro do giz, por isso nem chegam perto!</p><br>
    
      <h5> Escove os pelos uma vez por dia</h5>
      <p class="w3-text-grey">Pelos no chão, no tapete, nas roupas e, às vezes, até na comida 
          e na sua boca, principalmente se o seu amiguinho for peludão. A ideia então é escovar
          o bicho, pelo menos, uma vez por dia. Ele vai adorar!</p>
    </div>  
    <img src="/d.jpg" style="width:100%;max-width:1000px;margin-top:32px;">
  </div>
</div>

<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
   
    <div id="googleMap" class="w3-sepia" style="width:100%;height:400px;"></div>
    
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Nome"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="E-mail" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Mensagem " required name="Mensagem"></p>
      <p><button class="w3-button w3-black" type="submit">ENVIAR MENSAGEM</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>HousePets <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
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

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>




