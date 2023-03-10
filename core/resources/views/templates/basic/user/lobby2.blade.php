<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>HTML</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="{{ asset($activeTemplateTrue.'/js/main.js') }}"></script>
  <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'/css/lobby.css') }}">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <div style="display: flex;justify-content: space-between;">
        <div class="buy-in">Buy-in</div>
        <a href="{{ route('user.lobby1') }}" class="btn" style="color: black;font-size:27px;text-align: center;">X</a>
      </div>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid text-center" style="background-color: #ffffff;">
  <div class="start-card" style="border: solid 2px;">
    <h5 class="item-1"></h5>
    <div class="item-card1">
      <h5>Payable Balance</h5>
      <h5 style="color:coral;font-size:18px;"><b id="temp">$2.66</b></h5>
    </div>
    <div class="form-group" style="margin: 10px;margin-top:20px">
      <select class="form-control" id="sel1" style="border: 0px;border-bottom: 2px solid grey;height: 50px;" onchange="setBuyinstake(this.value)">
        <option>Select Stake</option>
        <option>$0.02 / 0.05</option>
        <option>$0.05 / 0.10</option>
        <option>$0.10 / 0.25</option>
        <option>$0.25 / 0.50</option>
        <option>$0.50 / 1.00</option>
        <option>$1.00 / 2.00</option>
        <option>$2.50 / 5.00</option>
        <option>$5.00 / 10.00</option>
        <option>$10.00 / 20.00</option>
      </select>
    </div>

    <h5 class="item-2" style="font-family: 'Jomhuria';">Select Buy-in Amount</h5>
    <div class="item-card1">
      <div class="row" style="margin: 0px;">
        <div class="col-xs-4" style="color:grey">
          <h5>MAXIMUM</h5>
          <h5 style="font-size:18px;"><b id="maximum_val">$5.00</b></h5>
        </div>
        <div class="col-xs-4" style="color:grey">
          <h5>MINIMUM</h5>
          <h5 style="font-size:18px;"><b id="minimum_val">$1.50</b></h5>
        </div>
        <div class="col-xs-4" style="color:grey;">
          <h5>OTHER</h5>
          <input type="text" placeholder="$0.00" class="form-control" onchange="setotherval(this)" style="width:100%" id="other_input">
        </div>
      </div>
    </div>

    <div style="color:black;">
      <div class="checkbox" style="position: relative;display: flex;margin-top: 10px;margin-bottom: 10px;justify-content: center;">
        <label style="font-size: 15px;"><input type="checkbox" value="" style="font-family: 'Jua';">Wait for Big Blind</label>
      </div>
    </div>



  <div class="start-card" style="margin-top: 2px;">
    <button class="next-but">TAKE MY SEAT</button>
  </div>


  <div class="start-card" style="color: black;font-size: 13px;padding-bottom: 30px;">
    Please Note: <sm>This table has no all-in protection</sm>
  </div>

</div>

<!-- Footer -->
</body>
</html>
