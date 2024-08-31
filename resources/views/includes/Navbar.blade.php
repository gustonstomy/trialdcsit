 <!--=================================== NavBar UpperSection==================================== -->

   <div class="hidden w-full h-14  items-center justify-between bg-blue-900 px-30 xl:px-40 lg:flex">
    <div class="flex items-center space-x-8 ml-12">
        <a href="https://www.instagram.com/citsaucc?igsh=MWN1Nmd4amVmNWNwOA==" class="text-white hover:text-[#ff6b42]">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="https://x.com/citsa_ucc?s=11" class="text-white hover:text-[#ff6b42]">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.facebook.com/dcsitcitsa?mibextid=LQQJ4d" class="text-white hover:text-[#ff6b42]">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="https://www.linkedin.com/company/computer-science-and-information-technology-student-association-ucc/"
           class="text-white hover:text-[#ff6b42]">
            <i class="fab fa-linkedin"></i>
        </a>
    </div>
    <div class="flex items-center justify-center text-lg space-x-8">
        <div class="flex items-center space-x-2 hover:text-[#ff6b42]">
            <i class="fas fa-phone text-white"></i>
            <a href="tel:+233 (03321) 30096" class="text-white no-underline">+233 (03321) 30096</a>
        </div>
        <div class="flex items-center space-x-2 hover:text-[#ff6b42] pr-8">
            <i class="fas fa-envelope text-white"></i>
            <a href="mailto:dcsit@ucc.edu.gh" class="text-white no-underline">dcsit@ucc.edu.gh</a>
        </div>
    </div>
</div>


<!-- Down navbar -->
<div class="navbar-container flex justify-between items-center md:px-20 lg:px-1 xl:px-20 h-32 bg-gray-100 relative z-50">
  <div class="branding flex items-center pl-4 md:pl-8 lg:pl-1 lg:pr-1 w-74 h-40">
      <img src="/UCC.png" class="default-logo w-10 h-10 md:w-20 md:h-20  pr-2" alt="Department logo">
      <div class="site-title-container flex flex-col">
          <span class="site-title text-sm md:text-xl font-bold pl-10">DCSIT</span>
          <span class="site-subtitle text-[0.8em] md:text-sm inline-block leading-relaxed">
              Department Of Computer Science &<br> Information Technology
          </span>
      </div>
  </div>
  <div class="hamburger-menu cursor-pointer text-2xl pr-8  lg:hidden" onclick="toggleMenu()">
      <span class="hamburger-icon">&#9776;</span>
  </div>
  <nav id="navbar" class="hidden lg:flex flex-col lg:flex-row ">
      <!-- <div class="close-btn lg:hidden absolute top-0 right-0 mt-4 mr-4 text-2xl cursor-pointer" onclick="toggleMenu()">
          <span class="close-icon">&times;</span>
      </div> -->
      <ul class="flex flex-col lg:flex-row space-y-4 lg:space-y-0  lg:space-x-8 lg:items-center z-50 top-0 lg:z-auto lg:static absolute bg-gray-100  w-[93%] left-5 pl-8  transition-all ease-in duration ">
         <div class="close-btn lg:hidden absolute top-0 right-0 mt-4 mr-4 text-2xl cursor-pointer" onclick="toggleMenu()">
          <span class="close-icon">&times;</span>
         </div>
          <li><a href="/" class="text-lg hover:text-red-500 {{ request()->is('/') ? 'text-red-500' : '' }}">Home</a></li>
          <li><a href="{{route('About')}}" class="text-lg hover:text-red-500 {{ request()->is('About') ? 'text-red-500' : '' }}">About</a></li>
          <li>
    <a href="#" 
       onclick="event.preventDefault(); toggleSubMenu('programmes');" 
       class="text-lg flex items-center space-x-1 
              {{ request()->is('undergraduate') || request()->is('postgraduate') ? 'text-red-500' : '' }}">
        <span>Programmes</span>
        <span class="dropdown-symbol 
              {{ request()->is('undergraduate') || request()->is('postgraduate') ? 'text-red-500' : '' }}">
            &#9662;
        </span>
    </a>
    <div class="sub-menu1 absolute hidden bg-white shadow-lg z-50" id="sub-programmes">
        <a href="{{ route('undergraduate') }}" 
           class="block px-4 py-2 hover:bg-gray-100 
                  {{ request()->is('undergraduate') ? 'text-red-500' : '' }}">
            Undergraduate
        </a>
        <a href="{{ route('postgraduate') }}" 
           class="block px-4 py-2 hover:bg-gray-100 
                  {{ request()->is('postgraduate') ? 'text-red-500' : '' }}">
            Postgraduate
        </a>
    </div>
</li>

          <li>
    <a href="#" 
       onclick="event.preventDefault(); toggleSubMenu('staff');" 
       class="text-lg flex items-center space-x-1 
              {{ request()->is('TeachingStaff') || request()->is('NonTeachingStaff') ? 'text-red-500' : '' }}">
        <span>Staff</span>
        <span class="dropdown-symbol 
              {{ request()->is('TeachingStaff') || request()->is('NonTeachingStaff') ? 'text-red-500' : '' }}">
            &#9662;
        </span>
    </a>
    <div class="sub-menu1 absolute hidden bg-white shadow-lg z-50" id="sub-staff">
        <a href="{{ route('TeachingStaff') }}" 
           class="block px-4 py-2 hover:bg-gray-100 
                  {{ request()->is('TeachingStaff') ? 'text-red-500' : '' }}">
            Teaching Staff
        </a>
        <a href="{{ route('NonTeachingStaff') }}" 
           class="block px-4 py-2 hover:bg-gray-100 
                  {{ request()->is('NonTeachingStaff') ? 'text-red-500' : '' }}">
            Non-Teaching Staff
        </a>
    </div>
</li>
<li>
    <a href="{{ route('Events') }}" 
       class="text-lg hover:text-red-500 
              {{ request()->is('Events') ? 'text-red-500' : '' }}">
        Events
    </a>
</li>
<li>
    <a href="{{ route('Contact') }}" 
       class="text-lg hover:text-red-500 
              {{ request()->is('Contact') ? 'text-red-500' : '' }}">
        Contact
    </a>
</li>

      </ul>
  </nav>

</div>

