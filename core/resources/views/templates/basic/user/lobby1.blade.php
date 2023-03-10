<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>HTML</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="{{ asset($activeTemplateTrue.'/js/main.js') }}"></script>
  <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/lobby.css') }}">

</head>
<body>

<!-- Navbar -->
<div class="popup" style="border-bottom: 2px solid grey; display: none;" id="popup">
  <div style="display: flex;justify-content: space-between;border-bottom: 1px solid #e2e2e2;">
    <div class="buy-in">Buy-in</div>
    <a onclick="disablePopup()" class="btn cross-but">X</a>
  </div>
  <div class="item-card2">
    <div>Playable Balance: <span id="disp-balance">$2.61</span></div>
  </div>
  <div class="item-card2">
    <div><b>Your Account will be charged <span id="disp-buyin">$2.61</span></b></div>
  </div>
  <div class="item-card2" style="background-color: #ffffff;">
    <a href="#" onclick="showSpinner(this)">
      <button class="play-but">PLAY NOW</button>
    </a>  
  </div>
</div>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div style="margin:0px;">
        <div class="navbar-brand" id="temp">$2.66</div>
        <div style="display: flex;justify-content: center;">
          <img src="{{ getImage('assets/images/frontend/lobby/logo.png') }}" alt="logo" height="50px" style="margin-left:-8%">
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-grey text-center">
  <div class="start-card">
    <h3 class="item-1" style="font-family: 'Jomhuria';">Start Playing Now</h3>
  </div>
  <div class="start-card">
    <h5 class="item-2">GAME TYPE</h5>
    <div class="item-card">
      <div style="display: flex;">
        <img src="{{ getImage('assets/images/frontend/lobby/cash.png') }}" class="cash-img">
        <div class="Cash-desc">C A S H</div>
      </div>
    </div>
    <h5 class="item-2">CARD GAME</h5>
    <div class="item-card">
      <div style="margin: 5px;">HOLD'EM</div>
    </div>
    <div class="row" style="margin:0px;">
      <div class="col-xs-6" style="padding: 0px;">
        <h5 class="item-2">LIMIT</h5>
        <div class="item-card flex" style="padding: 0px;">
          <div class="mini-item item-selected" onclick="setLimitType(this)">NO</div>
          <div class="mini-item" onclick="setLimitType(this)">POT</div>
          <div class="mini-item" onclick="setLimitType(this)">FIXED</div>
        </div>
      </div>
      <div class="col-xs-6" style="padding: 0px;">
        <h5 class="item-2">NUMBER OF SEATS</h5>
        <div class="item-card flex" style="padding: 0px;">
          <div class="mini-item item-selected1" onclick="setNumberofSeats(this)">6</div>
          <div class="mini-item" onclick="setNumberofSeats(this)">9</div>
        </div>
      </div>
    </div>
  </div>
  <div class="start-card" style="margin-top: 2px;">
    <a href="{{ route('user.lobby2') }}">
      <button class="next-but">NEXT</button>
    </a>
  </div>

  <h3 class="item-1">Jackpot Sit & Go</h3>

  <div class="start-card">

    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
 
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
  
        <div class="item active">
          <div class="row item-0" style="color:black;margin:0px 10px;display: flex;justify-content: center;" onclick="setBuyin(this)">
            <div class="col-xs-5" style="display: flex;">
              <div style="margin: auto;font-size: 18px;"><b>$5.00</b> Buy-in</div>
            </div>
            <div class="col-xs-7" style="display: flex;justify-content: center;">
              <div class="btn-mini" style="display: flex;align-items: center;justify-content: center;">
                Info
                <img src="{{ getImage('assets/images/frontend/lobby/info.png') }}" width="20px" style="margin: 5px;">
              </div>
              <div class="btn-mini">Jackpot up to<br>$6000</div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row item-0" style="color:black;margin:0px 10px;display: flex;justify-content: center;" onclick="setBuyin(this)">
            <div class="col-xs-5" style="display: flex;">
              <div style="margin: auto;font-size: 18px;"><b>$25.00</b> Buy-in</div>
            </div>
            <div class="col-xs-7" style="display: flex;justify-content: center;">
              <div class="btn-mini" style="display: flex;align-items: center;justify-content: center;">
                Info
                <img src="{{ getImage('assets/images/frontend/lobby/info.png') }}" width="20px" style="margin: 5px;">
              </div>
              <div class="btn-mini">Jackpot up to<br>$30000</div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row item-0" style="color:black;margin:0px 10px;display: flex;justify-content: center;" onclick="setBuyin(this)">
            <div class="col-xs-5" style="display: flex;">
              <div style="margin: auto;font-size: 18px;"><b>$60.00</b> Buy-in</div>
            </div>
            <div class="col-xs-7" style="display: flex;justify-content: center;">
              <div class="btn-mini" style="display: flex;align-items: center;justify-content: center;">
                Info
                <img src="{{ getImage('assets/images/frontend/lobby/info.png') }}" width="20px" style="margin: 5px;">
              </div>
              <div class="btn-mini">Jackpot up to<br>$72000</div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="row item-0" style="color:black;margin:0px 10px;display: flex;justify-content: center;" onclick="setBuyin(this)">
            <div class="col-xs-5" style="display: flex;">
              <div style="margin: auto;font-size: 18px;"><b>$100.00</b> Buy-in</div>
            </div>
            <div class="col-xs-7" style="display: flex;justify-content: center;">
              <div class="btn-mini" style="display: flex;align-items: center;justify-content: center;">
                Info
                <img src="{{ getImage('assets/images/frontend/lobby/info.png') }}" width="20px" style="margin: 5px;">
              </div>
              <div class="btn-mini">Jackpot up to<br>$120000</div>
            </div>
          </div>
        </div>

      </div>
  
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
  
    </div>
  </div>


  <div class="start-card" style="margin-top: 2px;display: flex;height:40px;justify-content: center;">
    <!-- <div class="mini-bar"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div> -->
  </div>

  <h3 class="item-1">Featured Sit & Go</h3>
  <div class="start-card"  style="margin:0px;color:black">
    <div style="display: flex;">
      <div class="circle"></div>
      <div class="circle-desc">Registering</div>
    </div>
    <div style="display: table;">
      <h5 class="pull-left" style="margin-left: 20px;">Jackpot Sit & Go - $120K Top Prize</h5>
    </div>
    <div style="margin: 0px 30px 0px 30px;">
      <div class="row">
        <div class="col-xs-4" style="padding: 3px;">
          <div class="btn-mini" style="height: 60px">Game<br>Hold'em</div>
        </div>
        <div class="col-xs-4" style="padding: 3px;">
          <div class="btn-mini" style="height: 60px">Limit<br>NO Limit></div>
        </div>
        <div class="col-xs-4" style="padding: 3px;">
          <div class="btn-mini" style="height: 60px">Buy-in<br>$600.00 + <br>$0.00</div>
        </div>
      </div>
    </div>
  </div>

  <div class="start-card" style="margin-top: 2px;display: flex;height:40px;justify-content: center;">
    <div class="mini-bar"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
    <div class="mini-bar bg-grey"></div>
  </div>

</div>


<!-- Second Container -->
<div class="container-fluid bg-3 text-center" style="margin-bottom:20px;border-bottom: 2px solid #d9d9d9;">
  <div class="row" style="margin: 0px;margin-top:5px">
    <div class="col-xs-2 btn" style="font-size: 12px;font-weight:bold ">
      HELP
    </div>
    <div class="col-xs-4 btn" style="font-size: 12px;font-weight:bold">
      MY POLICY
    </div>
    <div class="col-xs-6 btn" style="font-size: 12px;font-weight:bold">
      TERMS & CONDITIONS
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-white text-center">
  <img src="{{ getImage('assets/images/frontend/lobby/logo.png') }}" alt="logo" height="50px">
</footer>

</body>
</html>
