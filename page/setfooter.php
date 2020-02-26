<style type="text/css">
* {
  margin: 0;
  padding: 0;
}

#footer {
  position: relative;
  height: 60px;
  clear: both;
  background-color: grey;
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
  <!-- <div id="main"></div> -->
</div>

<div id="footer">
  <label>&copy; 2018 - 2019</label>
</div>
