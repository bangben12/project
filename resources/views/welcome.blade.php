<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Selamat Datang Di Toko Baju Reggae Shop</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<!--<script src="js/jquery.easydropdown.js"></script>-->
<!--start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                 <div class="header-left">
                     <div class="logo">
                        <img src="images/logo.png" alt=""/></a>
                     </div>
                     <div class="menu">
                          <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
                            <ul class="nav" id="nav">
                                <li><a href="{{ url('/harga') }}"> Keterangan</a></li>
                            <li><a href="{{ route('konsumen.index') }}"> Konsumen</a></li>
                             <li><a href="{{ route('barang.index') }}"> Barang</a></li>
                             <li><a href="{{ route('transaksi.index') }}"> Transaksi</a></li>                       
                                <div class="clear"></div>
                            </ul>
                            <script type="text/javascript" src="js/responsive-nav.js"></script>
                    </div>                          
                    <div class="clear"></div>
                </div>
                <div class="header_right">
                  <!-- start search-->
                      <div class="search-box">
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"> </span>
                                </form>
                            </div>
                        </div>
                        <!----search-scripts---->
                        <script src="js/classie.js"></script>
                        <script src="js/uisearch.js"></script>
                        <script>
                            new UISearch( document.getElementById( 'sb-search' ) );
                        </script>
                        <!----//search-scripts---->
                  
                           
                          <div class="login_buttons">
                             
                             <div class="login_button"><a href="{{ route('login') }}">Login</a></div>
                             <div class="clear"></div>
                          </div>
                          <div class="clear"></div>
                        </ul>
                     </li>
                   </ul>
                   <div class="clear"></div>
           </div>
          </div>
         </div>
        </div>
    </div>
    <div class="banner">
    <!-- start slider -->
       <div id="fwslider">
         <div class="slider_container">
            <div class="slide"> 
                <!-- Slide image -->
               <img src="images/ss.jpg" class="img-responsive" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <!-- Text title -->
                        <h1 class="title">Datang Dan Buktikan<br>Reggae Indonesia</h1>
                        <!-- /Text title -->
                    </div>
                </div>
               <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
               <img src="images/ll.jpg" class="img-responsive" alt=""/>
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        <h1 class="title">Baju Keren Kualitas Bagus<br>Reggae Indonesia</h1>
                        
                    </div>
                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
       </div>
       <!--/slider -->
      </div>
      <div class="main">
        <div class="content-top">
            <h2>Baju Reggae shop</h2>
            <p>Banyak Ragam Baju yang Akan Anda Beli Di Sini</p>
            <div class="close_but"><i class="close1"> </i></div>
                <ul id="flexiselDemo3">
                <li><img src="images/yt.jpg" /></li>
                <li><img src="images/hh.jpg" /></li>
                <li><img src="images/ji.jpg" /></li>
                <li><img src="images/io.jpg" /></li>
                <li><img src="images/qq.jpg" /></li>
            </ul>
        <h3>Silakan Pilih Dan Beli Sekarang Juga</h3>
            <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 5,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        </div>
    </div>
    
    <div class="features">
        <div class="container">
            <h3 class="m_3">Daftar Harga</h3>
            <div class="close_but"><i class="close1"> </i></div>
              <div class="row">
                <div class="col-md-3 top_box">
                  <div class="view view-ninth"><a href="single.html">
                    <img src="images/io.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Merek Adidas</h2>
                        <p>Harga Rp.120.000.</p>
                      </div>
                   </a> </div
                  </div>
                  <h4 class="m_4"><a href="#">Barang Baru</a></h4>
                  <p class="m_5">Stok Barang 20</p>
                </div>
                <div class="col-md-3 top_box">
                    <div class="view view-ninth"><a href="single.html">
                    <img src="images/yt.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Merek Trojan</h2>
                        <p>Harga Rp.200.000.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Barang Keluaran 2017</a></h4>
                   <p class="m_5">Stok barang 15</p>
                </div>
                <div class="col-md-3 top_box">
                    <div class="view view-ninth"><a href="single.html">
                    <img src="images/hh.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Merek Reggae Rasta</h2>
                        <p>Harga Rp.130.000.</p>
                      </div>
                    </a> </div>
                   <h4 class="m_4"><a href="#">Barang Keluaran 2016</a></h4>
                   <p class="m_5">Stok Barang 10</p>
                </div>
                <div class="col-md-3 top_box1">
                    <div class="view view-ninth"><a href="single.html">
                    <img src="images/qq.jpg" class="img-responsive" alt=""/>
                    <div class="mask mask-1"> </div>
                    <div class="mask mask-2"> </div>
                      <div class="content">
                        <h2>Merek RastaMan</h2>
                        <p>Harga Rp.125.500.</p>
                      </div>
                     </a> </div>
                   <h4 class="m_4"><a href="#">Barang Keluaran 2015</a></h4>
                   <p class="m_5">Stok 5</p>
                </div>
            </div>
         </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="footer_box">
                            <h4>Products</h4>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Youth</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="footer_box">
                            <h4>About</h4>
                            <li><a href="#">Careers and internships</a></li>
                            <li><a href="#">Sponserships</a></li>
                            <li><a href="#">team</a></li>
                            <li><a href="#">Catalog Request/Download</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="footer_box">
                            <h4>Customer Support</h4>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Shipping and Order Tracking</a></li>
                            <li><a href="#">Easy Returns</a></li>
                            <li><a href="#">Warranty</a></li>
                            <li><a href="#">Replacement Binding Parts</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="footer_box">
                            <h4>Newsletter</h4>
                            <div class="footer_search">
                               <form>
                                <input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
                                <input type="submit" value="Go">
                               </form>
                            </div>
                            <ul class="social"> 
                              <li class="facebook"><a href="#"><span> </span></a></li>
                              <li class="twitter"><a href="#"><span> </span></a></li>
                              <li class="instagram"><a href="#"><span> </span></a></li> 
                              <li class="pinterest"><a href="#"><span> </span></a></li> 
                              <li class="youtube"><a href="#"><span> </span></a></li>                                                       
                            </ul>
                            
                        </ul>
                    </div>
                </div>
                <div class="row footer_bottom">
                    <div class="copy">
                       <p>© 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
                    </div>
                      <dl id="sample" class="dropdown">
                        <dt><a href="#"><span>Change Region</span></a></dt>
                        <dd>
                            <ul>
                                <li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
                                <li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
                                <li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
                                <li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
                                <li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
                                <li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
                            </ul>
                         </dd>
                      </dl>
                </div>
            </div>
        </div>
</body> 
</html>