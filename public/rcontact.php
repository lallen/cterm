<CTYPE html>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--reCAPTCHA Google INT-->
  <script src='https://www.google.com/recaptcha/api.js'>
  </script>



  </head>

  <body class="grey lighten-1">

    <nav class="green lighten-2">
      <div class="nav-wrapper" container>
        <a href="#!" class="brand-logo" style="left:200">cTerminal- Contact</a>




        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#"> Contact </a></li>

        </ul>

        <ul class="right">
          <li><a href="#"> Log In </a></li>
          <li> <a href="#"> Account </a></li>
          <ul class="side-nav" id="mobile-demo">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>

          </ul>



      </div>

    </nav>
    <div class="row">

    </div>
    <div class="container">
      <div class="row ">
        <div class="col l4">

              <div class="row">
                <div class="col s12 m5">
                  <div class="card-panel">
                    <span class="white-text">

                      <form action="fcontact.php" method="post">
                        <label for="Subject">Subject</label><br>
                        <input type="text" name="subject" id="subject" size="40"> <br><br>
                        <label> Message: </label> <br>
                        <textarea name="messagefeed" id="messagefeed" col="60" rows="5"></textarea> <br><br>
                        <div class="g-recaptcha" data-sitekey="6LegikQUAAAAAMk3s8_GdSaMSs3mGoOGLZFzTCKx"></div>
                        <br>
                        <input type="submit" id="submit" value="Submit">
                      </form>






                    </span>
                  </div>
                </div>
              </div>


      <!--Footer-->
      <footer class="page-footer green lighten-2" style="position:fixed;bottom:0;left:0;width:100%;padding:0px 0px 0px 0px;">
        <div class="container lighten-2">
          <div class="footer-copyright lighten-2">


            Copyright &copy; 2018 cTerminal | All rights reserved.
          </div>
        </div>

      </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


      <script>
        $(".button-collapse").sideNav();
      </script>


  </body>





  </html>
