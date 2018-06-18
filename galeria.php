<!DOCTYPE html>
<html>
<title>HousePets</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<body background="fd.png">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
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

  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
        <img src="/es.png" alt="Sandwich" style="width:100%">
      <h3>Lucy</h3>
      <p>Uma cadela que esperava por sua hora de ser feliz!</p>
    </div>
    <div class="w3-quarter">
        <img src="/ni.png" alt="Steak" style="width:100%">
      <h3>Maya</h3>
      <p>Ela e sua dona sÃ£o amigas inseprÃ¡veis!</p>
    </div>
    <div class="w3-quarter">
        <img src="/ja.png" alt="Cherries" style="width:100%">
      <h3>Charly</h3>
      <p>Isso era tudo o que ele queria, uma familia!</p>
      
    </div>
    <div class="w3-quarter">
        <img src="/adc.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Tobias</h3>
      <p> Os olhinhos dele brilhamde tanta alegria!</p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
        <img src="/adca.jpg" alt="Popsicle" style="width:100%">
      <h3>Tobias</h3>
      <p>Os olhinhos brilham de tanto amor!</p>
    </div>
    <div class="w3-quarter">
        <img src="/add.jpg" alt="Salmon" style="width:100%">
      <h3>Sara</h3>
      <p>Ela sÃ³ precisava de alguem que lhe desse amor e carinho!</p>
    </div>
    <div class="w3-quarter">
        <img src="/adocc.jpg" alt="Sandwich" style="width:100%">
      <h3>Tom & Maycon</h3>
      <p>Amigos inseparaceis,uma amizade pra vida toda!</p>
    </div>
    <div class="w3-quarter">
        <img src="/adocs.jpg" alt="Croissant" style="width:100%">
      <h3>Felicia</h3>
      <p>Essa doce menina dora brincar!</p>
    </div>
  </div>

  

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
        <div class="w3-padding-32">
      <h4><b>FOTOS DOS NOSSOS ANIMAIS QUE JÃ� TEM UM LAR!</b></h4>
      <h6><i>#NÃ£o compre adote!</i></h6>
      <p>Aqui mostramos fotos dos nossos animalzinhos que foram adotados e que hoje tem um lar para viverem felizes,
          mostramos a felicidade deles em estarem ganhando todo amor e crinho que sempre sonharam de pessoas de bom
          coraÃ§Ã£o que amam os pets assim como nÃ³s.</p>
    </div>
  </div>
  <hr>
  
 

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
