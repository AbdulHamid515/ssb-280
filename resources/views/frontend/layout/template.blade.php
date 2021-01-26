
<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from www.themesground.com/flipmart-demo/HTML/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Nov 2020 19:47:01 GMT -->
   <head>
     @include('frontend.includes.header')
     @include('frontend.includes.css')
    
   </head>
   <body class="cnt-home">
      <!-- =============== HEADER =============================== -->
      <header class="header-style-1">
         @include('frontend.includes.topbar')
         @include('frontend.includes.menu')
        
      </header>
      <!-- ======================= HEADER : END ============================= -->
      <div class="body-content outer-top-xs" id="top-banner-and-menu">
         <div class="container">
            <div class="row single-product">
             @include('frontend.includes.sidebar')
             @yield('body') 
            </div>
            <!-- /.row --> 
           
         </div>
         <!-- /.container --> 
      </div>
      <!-- /#top-banner-and-menu --> 
     @include('frontend.includes.footer')
      <!-- For demo purposes – can be removed on production --> 
      <!-- For demo purposes – can be removed on production : End --> 
      <!-- JavaScripts placed at the end of the document so the pages load faster --> 
     @include('frontend.includes.script')

      </body>
   <!-- Mirrored from www.themesground.com/flipmart-demo/HTML/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Nov 2020 19:51:13 GMT -->
</html>