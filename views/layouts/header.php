
<style>
    /*.xpem{*/
    /*    height: 5vh;*/
    /*}*/
    .xpem ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #fecc00;
    
    }

    .xpem li {
        float: left;
    }

    .xpem li a {
        display: inline-block;
        color: white;
        padding: 14px 16px;
        text-align: center;
        text-decoration: none;
    }

    .socialtop span li a {
        display: inline-block;
        color: black;
        text-align: center;
        text-decoration: none;
    }

    .xpem li a:hover {
        background-color: rgb(255, 255, 128);
    }

    @media screen and (max-width: 767px) {
        .xpem ul {
            display: flex;
            flex-direction: column;
        }

    }
</style>

<div class="xpem" id="top-header">
    <ul id="header">
	    
       <li claas ="socialtop"><a href="https://wa.me/"><i class="fa fa-whatsapp"></i> <span> whatsapp</span></a></li>

       <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
         <li  class="socialtop">
                 <ul>            
                   <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                   <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   <li><a href="#"><i class="fa fa-twitter"></i></li> 
                 </ul>
         </li>

        <li style="float: right;">
            <a href="panier.PHP" data-position="bottom" data-tooltip="Voir mon panier"><i
                    class="fa fa-shopping-cart mr-2 font-size-25"></i><span>SHARE</span> </a>
        </li>

    </ul>
     
    </div>
</div>
<header>
          <div class="r-header r-header-inner r-header-strip-01">
            <div class="r-header-strip r-header-strip-01">
              <div class="container">
                <div class="row clearfix">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="r-logo">
                      <a href="#" class="d-inline-block"><img src="assets/images/logo-share.png" class="img-fluid d-block" alt=""></a>
                    </div>
                    <a href="javaScript:void(0)" class="menu-icon"> <i class="fa fa-bars"></i> </a>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="r-header-action float-left">
                      <a href="login-register"> <img src="assets/images/icon-lock.png" alt='' /> <span>Login</span></a>
                      <a href="#" class="r-search"> <img src="assets/images/icon-search.png" alt='' /> <span>Search</span></a>

                      <div class="r-search-wrapper">
                        <div class="r-search-inner">
                          <form>
                              <input type="text" class="r-search-field" placeholder="Search"/>
                              <button type="submit" class="r-search-btn">
                                <i class="fa fa-search"></i>
                              </button>
                          </form>
                        </div>
                      </div> <!-- /r-search-wrapper -->
                    </div>
                    <div class="r-nav-section float-right">
                      <nav>
                        <ul>
                          <li class="r-has-child">
                            <a href="index.html">RENTAL</a>
                            <ul class="pl-0 ml-0">
                              <li><a href="index.html">Car</a></li>
                              <li><a href="index-02.html">Drivers</a></li>
                             
                            </ul>
                          </li>
                          <li class="r-has-child">
                            <a href="about.html">ADD RESSOURCE</a>
                            <ul class="pl-0 ml-0">
                              <li><a href="faq.html">Car</a></li>
                              <li><a href="faq.html">Drivers</a></li>
                            </ul>
                          </li>
                          <li class="r-has-child">
                            <a href="car-listing.html">TRIPS</a>
                           
                          </li>
                          <li><a href="gallery.html">CAR</a></li>
                          <li><a href="drivers.html">DRIVERS</a></li>
                          <li><a href="contact.html">SEND PAKAGE</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
     