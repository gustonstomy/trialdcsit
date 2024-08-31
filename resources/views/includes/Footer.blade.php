<!-- ==============Footer Upper section==================================== -->
<div id="footerheader" class="transform px-2 md:py-5 md:px-2 py-5 xl:px-40 lg:py-20 xl:py-20 bg-blue-900 flex justify-between items-center transition-all duration-500 ease-in-out">
    <h2 class="text-white text-[1em] md:text-[2.4rem]">Still wondering where to start?</h2>
    <div>
        <a href="{{ route('Contact') }}">
            <button class="bg-[#ff6b42] hover:bg-white hover:text-[#ff6b42] text-white border border-[#ff6b42] rounded-full py-1 px-6 md:py-3 md:px-12 lg:mr-8 text-[0.6rem] md:text-[1.3rem] font-medium transition-colors duration-500">
                Contact us
            </button>
        </a>
    </div>
</div>

<!--====================Footer Section ============================================= -->
<div class="py-8 md:py-16 px-6 lg:px-16 xl:px-44 h-[70vh] md:h-[40vh] xl:h-[60vh] bg-gray-900 text-white font-sans">
    <div class="flex flex-wrap justify-between mb-12">
        <div class="mb-6 md:mb-0">
            <h4 class="text-xl font-medium mb-8">Menus</h4>
            <a href="{{ route('undergraduate') }}" class="block text-lg mb-4 hover:text-orange-500 {{ request()->is('undergraduate') ? 'text-orange-500' : '' }}">Undergraduate</a>
            <a href="{{ route('postgraduate') }}" class="block text-lg mb-4 hover:text-orange-500 {{ request()->is('postgraduate') ? 'text-orange-500' : '' }}">Postgraduate</a>
            <a href="{{ route('TeachingStaff') }}" class="block text-lg mb-4 hover:text-orange-500 {{ request()->is('TeachingStaff') ? 'text-orange-500' : '' }}">Teaching Staff</a>
            <a href="{{ route('NonTeachingStaff') }}" class="block text-lg mb-4 hover:text-orange-500 {{ request()->is('NonTeachingStaff') ? 'text-orange-500' : '' }}">Non-Teaching Staff</a>
        </div>

        <div class="mb-6 md:mb-0 flex flex-col">
            <h4 class="text-xl font-medium mb-8">Contact Us</h4>
            <a href="tel:+233000000000" class="flex items-center mb-8 text-lg hover:text-orange-500">
                <i class="fa-solid fa-phone-alt w-4 h-4 mr-2"></i>
                +233 000 000 000
            </a>
            <a href="mailto:dcsit@ucc.edu.gh" class="flex items-center mb-8 text-lg hover:text-orange-500">
                <i class="fa-solid fa-envelope w-4 h-4 mr-2"></i>
                dcsit@ucc.edu.gh
            </a>
            <p class="flex items-center text-lg">
                <i class="fa-solid fa-clock w-4 h-4 mr-2 "></i>
                Monday to Friday: 7:30AM - 4:30PM
            </p>
        </div>

        <div class="mb-6 md:mb-0">
            <h4 class="text-xl font-medium mb-8">Follow Us</h4>
            <div class="flex space-x-4">
                <a href="/" class="text-xl hover:text-orange-500"><i class="fa-brands fa-instagram"></i></a>
                <a href="/" class="text-xl hover:text-orange-500"><i class="fa-brands fa-twitter"></i></a>
                <a href="/" class="text-xl hover:text-orange-500"><i class="fa-brands fa-facebook"></i></a>
                <a href="/" class="text-xl hover:text-orange-500"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <div class="flex flex-col lg:flex-row items-center justify-between border-t border-gray-600 pt-6">
        <p class="text-lg">Copyright &copy; 2024 Department Of Computer Science & Info. Tech</p>
        <div class="flex flex-wrap space-x-4">
            <a href="/" class="text-lg hover:text-orange-500 {{ request()->is('/') ? 'text-orange-500' : '' }}">Home</a>
            <a href="{{ route('About') }}" class="text-lg hover:text-orange-500 {{ request()->is('About') ? 'text-orange-500' : '' }}">About</a>
            <a href="{{ route('Contact') }}" class="text-lg hover:text-orange-500 {{ request()->is('Contact') ? 'text-orange-500' : '' }}">Contact</a>
            <a href="{{ route('Events') }}" class="text-lg hover:text-orange-500 {{ request()->is('Events') ? 'text-orange-500' : '' }}">Events</a>
        </div>
    </div>
</div>
