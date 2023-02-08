<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jargo App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>



</head>
<style type="text/css">
    #idLogo{width: 450px;}
    #tools {width:  60px;}
</style>
<body>

<div id=app>
    <div id="logo">
        <div class="container">
      <div class="row justify-content-md-center">
       <img src="../resources/img/jargo.png" id="idLogo">
        </div>
        <div class="col-md-auto">
            <a href="www.devialt.com">@Devialt</a>
        </div>
        <div class="col col-lg-2">
         
        </div>
      </div>
    </div>
    </div>

    <hr>

    <div class="container" id="chart">
     <div class="row">
        <div class="cards-list">
            <a href="ship-list">
            <div class="card 1">
              <div class="card_image"></div>
              <div class="card_title title-black">
                <p><img src="../resources/img/tool/contact-list.png" id="tools"></p>
              </div>
            </div>
            </a>

              <div class="card 2">
              <div class="card_image">
            </div>
              <div class="card_title title-white">
                <p><img src="../resources/img/tool/cargo.png" id="tools"></p>
              </div>
            </div>

            <div class="card 3">
              <div class="card_image">
                
              </div>
              <div class="card_title">
                <p><img src="../resources/img/tool/gardening-tools.png" id="tools"></p>
              </div>
            </div>
              
              <div class="card 4">
              <div class="card_image">
               
              </div>
              <div class="card_title title-black">
                <p><img src="../resources/img/tool/hammer-drill.png" id="tools"></p>
              </div>
              </div>

        </div>
     </div>
    </div>

</div>
</body>

<style type="text/css">
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 10px auto;
  width: 100px;
  height: 100px;
  border-radius: 40px;
  box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px;

}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;


}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: italic;
  font-size: 14px;
  margin-top: -80px;
  height: 15px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}

.title-white {
  color: white;
}

.title-black {
  color: black;
}

@media all and (max-width: 500px) {
  .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
  }
}

</style>
</html>