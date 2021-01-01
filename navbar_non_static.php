<nav class="navbar navbar-default" id="custom_nav">
    <div class="container-fluid custom_nav_content">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
        </div>
         <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/banner.jpg" height="400px" alt="TCCE-2020">
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div id="counter_block">
                <p class="text-center" id="demo_counter"></p>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</nav>

<!-- lOGIN MODAL -->
<div class="modal fade" id="loginCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="grid">

            <div id="login">

              <h2><span class="fontawesome-lock"></span>Member Log In</h2>

              <form action="connect.php" method="POST">

                <fieldset>

                  <p><label for="email">E-mail address</label></p>
                  <p><input type="email" name="email" id="email" placeholder="mail@address.com"></p>

                  <p><label for="password">Password</label></p>
                  <p><input type="password" name="password"></p>

                  <p><input type="submit" value="Sign In"></p>

                </fieldset>

              </form>

            </div>

          </div>

      </div>
    </div>
  </div>
</div>
<!-- END LOGIN MODAL -->