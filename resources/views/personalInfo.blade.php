
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>personalInfo</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom styles for this template -->

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/personalInfo.js') }}"></script>
    <script src="{{ asset('js/showCartAmount.js') }}"></script>
  </head>

	<style>

	body,h3{
	  font-family:'微软雅黑';
	  background-image: url( "imgs/b2.jpg");

	  background-attachment: fixed;
	  background-repeat: no-repeat;
	  background-position: center;
	  background-size: cover;
	 }

	 .form-signin {
		  max-width: 600px;
		  padding: 15px;
		  margin: 0 auto;
		}
  </style>

  <body>

	<!-- Sidebar (hidden by default) -->
	<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-large w3-animate-left" style="display:none;z-index:2;width:20%;min-width:150px" id="mySidebar">

	<i onclick="w3_close()" class="fa fa-remove w3-button w3-display-topright"></i>

		<br><br>
		<div style="text-align:center;"><img src="imgs/LOGO4.png" style="width:100px; margin-top:-12px;"></div>
		<br>

		<button onclick="return myAccFunc(this);" class="btn btn-link w3-block w3-white w3-left-align" id="user" value="1" style="display:inline;"></button>
		<div name="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium" id="demoAcc1">
		<a href="#" class="w3-bar-item w3-button" onclick="window.location = 'personalInfo.html';">個人資訊</a>
			<a href="#" class="w3-bar-item w3-button" id="navPoint">點數</a>
			<a href="https://127.0.0.1/wtlab108/viewCard/view.html" class="w3-bar-item w3-button" >名片</a>
		</div>

		<button onclick="return myAccFunc(this);" class="btn btn-link w3-block w3-white w3-left-align" id="cart" value="2" style="display:inline;"></button>
		<div name="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium" id="demoAcc2">
			<a href="orderWithIOTA/cart.php?storeID=1" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-shopping-cart" style="display:inline;"></span>&nbsp 我們家 & Starbox 冷飲站</a>
			<a href="orderWithIOTA/cart.php?storeID=0" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-shopping-cart" style="display:inline;"></span>&nbsp Super WTLab's Shop</a>
		</div>

		<a href="orderWithIOTA/viewOrder.html" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-list-alt" style="display:inline;"></span>&nbsp 查看購買紀錄</a>

		<button onclick="return myAccFunc(this);" class="btn btn-link w3-block w3-white w3-left-align" value="3" style="display:inline;"><span class="glyphicon glyphicon-home" style="display:inline;"></span> &nbsp SHOP <i class='fa fa-caret-down'></i></button>
		<div name="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium" id="demoAcc3">
			<a href="testChing/browserProducts/browserProduct.html?shopID=1" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-home" style="display:inline;"></span>&nbsp 我們家 & Starbox 冷飲站</a>
			<a href="testChing/browserProducts/browserProduct.html?shopID=0" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-home" style="display:inline;"></span>&nbsp Super WTLab's Shop</a>
		</div>


		<a data-toggle="tab" class="w3-bar-item w3-button" onclick="logout();"><span class="glyphicon glyphicon-log-out"></span> 登出</a>

	</nav>


	<!-- Top menu -->
	<div class="w3-top">
	  <div class="w3-black w3-xlarge" style="max-width:1200px;margin:auto">
		<div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
		<div class="w3-right w3-padding-16 user" id="navRight"></div>
		<div class="w3-center w3-padding-16"><img src="imgs/LOGO4.png" style="width:40px; margin-top:-12px;">&nbsp My Shop</div>
	  </div>
	</div>

    <!-- NAV BAR
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			  <div class="navbar-header">
			    <a class="navbar-brand" href="#"><img src="./imgs/LOGO4.png" style="width:40px; margin-top:-12px;"></a>
			  </div>
			  <ul class="nav navbar-nav">
			    <li class="active"><a href="#">Home</a></li>
			    <li class="dropdown">
			      <a class="dropdown-toggle" data-toggle="dropdown" href="#">SHOP<span class="caret"></span></a>
			      <ul class="dropdown-menu">
				      <li><a href="testChing\browserProducts\browserProduct.html">商店A</a></li>
				      <li><a href="#">商店B</a></li>
			      </ul>
				  </li>
				  <li><a href="orderWithIOTA/cart.html" id="cart">購物車</a></li>
			  </ul>
		  	<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
			      <a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" ><p id="user" style="display:inline;"></p><span class="caret"></span></a>
				  <ul class="dropdown-menu">
				      <li><a href="#" onclick="window.location = 'personalInfo.html';">個人資訊</a></li>
				      <li><a href="http://localhost\wtlab108\viewCard\view.html">名片</a></li>
			      </ul>
				</li>
				<li><a data-toggle="tab" onclick="logout();"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>

			</ul>
		  </div>
    </nav>
 -->
    <div class="container">
      <br/>
      <form class="form-signin" action="https://127.0.0.1/wtlab108/php/register.php" method="POST">

        <br/>
        <br/>
        <table class="table table-hover">
          <tbody>
            <tr>
              <td colspan="3" align="center"><h3>個人資料</h3></td>
            </tr>

            <tr>
              <td><label for="acc">帳號：</label></td>
              <td><p id="acc"></p></td>
            </tr>

            <tr>
              <td><label for="name">姓名：</label></td>
              <td><p id="name"></p></td>
            </tr>
            <tr>
              <td><label for="email">Mail：</label></td>
              <td><p id="email"></p></td>
            </tr>
            <tr>
              <td><label for="phone">行動電話：</label></td>
              <td><p id="phone"></p></td>
            </tr>
            <!--tr>
              <td><label for="position">職位：</label></td>
              <td><p id="position"></p></td>
            </tr>
            <tr>
              <td><label for="company">所在單位：</label></td>
              <td><p id="company"></p></td>
            </tr>


            <tr>
              <td><label for="address">公司地址：</label></td>
              <td><p id="address"></p></td>
            </tr>
            <tr>
              <td><label for="companyTel">公司電話：</label></td>
              <td><p id="companyTel"></p></td>
            </tr>
            <tr>
              <td><label for="fax">傳真：</label></td>
              <td><p id="fax"></p></td>
            </tr-->

          </tbody>
        </table>
        <hr>
      </form>
    </div>
  </body>
</html>
