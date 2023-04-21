<!DOCTYPE html>

<html>
<head>
<title>Covent Garden</title>
<meta http-equiv="Content-Type" content="text/html;" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" href="css/gallery.css" type="text/css" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" href="css/navi.css" type="text/css" />
<link rel="stylesheet" href="css/tables.css" type="text/css" />
</head>
<body id="top">
<div class="p_wrapper col1">
  <div id="topbar">
    <div id="search">
      <form action="#" method="post">
        <fieldset style=''>
          <legend>Site Search</legend>
          <input type="text" value="Search the site&hellip;"  onfocus="this.value=(this.value=='Search the site&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="GO" />
          <div  id="log_reg"> @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth

                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else


                                        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                            {{ Auth::user()->name }} -   {{ __('Dashboard') }}
                                        </x-nav-link>




                            @endif


                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log-In</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif

                    <x-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                @endauth
            </div>
        @endif</div>
        </div>
        </fieldset >

      </form>

    </div>

</div>
<div class="p_wrapper col2">
  <div id="p_header">
    <div id="logo">
      <h1><a href="index.html">Covent Garden</a></h1>
      <p>The Best Way to Spread Christmas Cheer!</p>
    </div>
    <ul id="p_topnav">
      <li class="last"><a href="#">Experience</a></li>
      <li><a href="#">visit</a>
        <ul>
          <li><a href="#">Link 1</a></li>
          <li><a href="#">Link 2</a></li>
          <li><a href="#">Link 3</a></li>
        </ul>
      </li>
      <li><a href="pages/full-width.html">Restaurants</a></li>
      <li><a href="pages/style-demo.html">Shop</a></li>
      <li class="active"><a href="index.html">Home</a></li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="p_wrapper col3">
  <div id="gallery">
    <ul>
      <li class="placeholder" style="background-image:url('pic/1.jpeg');">Image Holder</li>
      <li><a class="swap" href="#"><img src="pic/hotel.jpg" alt="" /><span><img src="image/merry-christmas-10-990x556.jpg" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="pic/hotel.jpg" alt="" /><span><img src="image/christmas-wallpaper-1024x768-09.jpg" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="pic/hotel.jpg" alt="" /><span><img src="image/dwTjfX.jpg" width="950" height="370" alt="" /></span></a></li>
      <li><a class="swap" href="#"><img src="pic/hotel.jpg" alt="" /><span><img src="image/hdVCGx.jpg" width="950" height="370" alt="" /></span></a></li>
      <li class="last"><a class="swap" href="#"><img src="pic/hotel.jpg" alt="" /><span>
        <img src="pic/hotel.jpg" width="950" height="370" alt="" /></span></a></li>
    </ul>
  </div>
</div>

<div class="p_wrapper col5">
  <div id="p_container">
    <div id="content">
      <h2>About Covent Garden</h2>
      <p>Covent Garden's iconic 60-foot British grown handpicked Christmas tree is decorated with over 30,000 lights and wrapped up with a picture perfect tag and bow.</p>
      <p>Get Covent Garden on your feed and keep up-to-date with the neighbourhood. <a href="#"></a></p>
      <p>Covent Garden is a world-class shopping and dining destination attracting food-lovers and fashionistas alike. Buzzing with the excitement of the opera and theatreland, the area boasts some of the best shopping and dining destinations in London's West End, from Mulberry to Petersham Nurseries and Balthazar to Frenchie..</p>
      <p>Covent Garden is a district in London, on the eastern fringes of the West End, between St Martin's Lane and Drury Lane. It is associated with the former fruit-and-vegetable market in the central square, now a popular shopping and tourist site, and with the Royal Opera House, itself known as "Covent Garden".</p>

    </div>
    <div id="p_column">
      <div class="p_flickrbox">
        <h2 class="title">More Picture</h2>
        <ul>
          <li><a href="#"><img src="pic/hotel.jpg" alt="" /></a></li>
          <li><a href="#"><img src="pic/hotel.jpg" alt="" /></a></li>
          <li class="last"><a href="#"><img src="pic/hotel.jpg" alt="" /></a></li>
          <li><a href="#"><img src="pic/hotel.jpg" alt="" /></a></li>
          <li><a href="#"><img src="pic/hotel.jpg" alt="" /></a></li>
          <li class="last"><a href="#"><img src="pic/hotel.jpg" alt="" /></a></li>
        </ul>
        <br class="clear" />
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="p_wrapper col6">
  <div id="p_footer">
    <div id="p_contactform">
      <h2>Share your Experience.</h2>
      <form action="#" method="post">
        <ul class="foter">

         <li>
          Name:
            <input id="fullname" name="fullname" type="text" value="" />
          </li>
          <li style="margin-left: 1px;">  Email:
            <input id="emailaddress" name="emailaddress" type="text" value="" />
          </li>
          <li style="margin-left: 6px;">    Text  :
            <textarea id="message" name="message" cols="21" rows="1"></textarea>
          </li>
          <li>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input id="submitform" name="submitform" type="submit" value="Submit" style="    font-weight: normal;
              color: #CCCCCC;
             background-color: darkred;" />

              <input id="resetform" name="resetform" type="reset" value="Reset" style="    font-weight: normal;

              color: #CCCCCC;
              background-color: darkred;"  />
          </li>
        </ul>

      </form>
    </div>
    <!-- End Contact Form -->
    <div id="p_compdetails">
      <div id="p_offdetail">
        <h2>Student information !</h2>
        <ul>
          <li>Pardeep Kumar</li>
          <li>University of East Anglia</li>
          <li>Norwich</li>
          <li>ID-100374418</li>
         </ul>
        <h2>Stay in The Know !</h2>
        <p><a href="#">XNY21DSU@UEA.AC.UK</a> </p>
      </div>
      <div id="p_contdetail">
        <h2>University address</h2>
        <ul>
          <li>University of East Anglia </li>
          <li>Street Name &amp; Norwich Research Park</li>
          <li>Norwich</li>
          <li>NR4 7TJ</li>
		  <li>England</li>
          <li>Tel: 01603 456161</li>
          <li>Email: lib.helpdesk@uea.ac.uk</li>
          <li class="last">LinkedIn: <a href="https://www.linkedin.com/school/university-of-east-anglia/">UEA Profile </a></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<div class="p_wrapper col7">

  </div>
</div>
</body>
</html>
