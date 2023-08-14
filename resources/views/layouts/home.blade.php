<div class="min-h-screen flex flex-col lg:justify-center items-center  pt-6 sm:pt-0 relative" style="background-image: url('/images/login-bg.png'); background-size: cover; background-position: center;">
    <div class="absolute bottom-0 left-0 w-full h-20" style="background-image: linear-gradient(to bottom, rgba(4, 117, 111, 0), rgba(4, 117, 111, 1));"></div>
   
    <div class="mb-20">
        @include('layouts.sidenav')
    </div>
  
    <div class="container flex flex-col sm:flex-row justify-between items-center" style="margin-top: -8rem;">
        <div class="container flex flex-col sm:flex-row justify-center items-center">
            <div class="text-center justify-center items-center sm:mb-0" style="position: relative; margin-bottom: 50px;">
              <img src="images/welcome.png" alt="Welcome Image" style="max-width: 70%; display: block; margin: 0 auto; margin-bottom: -20px;" />
            
              @auth
              <h1 class="text-7xl text-white text-white" style="margin-top: -80px; margin-bottom: 30px">
                {{ ucwords(auth()->user()->name) }}
              </h1>
              @endauth
            </div>        
                    
            <div class="text-center" style="margin-top: 20px;">
              <img src="images/profile-cat.jpg" alt="logo" class="mx-auto mt-3 sm:mt-0" style="max-height: 300px; border-radius: 50%;">
            </div>
          </div>          
    </div>   
</div>
