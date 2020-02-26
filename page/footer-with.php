<style type="text/css">
* {
  margin: 0;
  padding: 0;
}
#wrap {
  min-height: 100%;
  background-image: url(https://www.urbannetwork.co.uk/wp-content/uploads/2014/12/Grey-background.jpg);
  background-size: cover;
}

#main {
  overflow: auto;
  padding-bottom: 180px;
  /* must be same height as the footer */
}

#footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: grey;
  text-align: center;
  height: 50px;
}
.box{
  width: 200px;
  height: 200px;
  border:1px solid black;
}


/* Opera Fix thanks to Maleika (Kohoutec) */

body:before {
  content: "";
  height: 100%;
  float: left;
  width: 0;
  margin-top: -32767px;
  /* thank you Erik J - negate effect of float*/
}
  
</style>
<div id="wrap">
  <div id="main"></div>
  <div class="box"></div>
  <div class="box"></div>
  <div class="box"></div>
  <div class="box"></div>
  <div class="box"></div>
  <div class="box"></div>
  <div class="box"></div>
</div>

<div id="footer" class="footer-copyright">&copy; 2018 - 2019</div>
