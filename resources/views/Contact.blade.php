<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="{{ asset('UCC.png') }}" type="image/x-icon">
    <title>Contact us </title>
  
</head>
<body>
	
    <!--======================= Down navbar====================== -->
@include('includes.Navbar')
<!-- /* =======================================Contact Hearder=================================== */ -->
<div class="bg-black bg-opacity-70 text-white p-8 max-w-full text-center flex items-center justify-center h-[15vh] font-montserrat">
      <h1 class="text-3xl mb-4 font-bold">Contact Us </h1>
    </div>

  <div class="flex flex-wrap justify-around p-5 md:p-10 h-[30vh] flex-col lg:flex-row md:items-start md:h-auto">
  <div class="flex items-center mb-5 last:mb-0 md:mb-5 md:last:mb-0 xl:my-16">
    <img src="/Frame-52-2-1.jpg" alt="Phone icon" class="w-14 h-14 mr-4 md:w-20 md:h-20" />
    <div class="contact-details">
      <h3 class="text-xl font-bold mb-2 md:text-2xl">Phone</h3>
      <p class="text-base text-gray-600 md:text-lg">+01 2345 67890</p>
    </div>
  </div>
  <div class="flex items-center mb-5 last:mb-0 md:mb-5 md:last:mb-0 xl:my-16">
    <img src="/Frame-52-3-1.jpg" alt="Email icon" class="w-14 h-14 mr-4 md:w-20 md:h-20" />
    <div class="contact-details">
      <h3 class="text-xl font-bold mb-2 md:text-2xl">Email</h3>
      <p class="text-base text-gray-600 md:text-lg">dcsit@ucc.edu.gh</p>
    </div>
  </div>
  <div class="flex items-center mb-5 last:mb-0 md:mb-5 md:last:mb-0 xl:my-16">
    <img src="/Frame-52-4.jpg" alt="Location icon" class="w-14 h-14 mr-4 md:w-20 md:h-20" />
    <div class="contact-details">
      <h3 class="text-xl font-bold mb-2 md:text-2xl">Location</h3>
      <p class="text-base text-gray-600 md:text-lg">UCC, Cape Coast</p>
    </div>
  </div>
</div>

<!-- /* =======================================Leave a Message section=================================== */ -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="leave-message-container text-center bg-blue-50 p-12 rounded-lg w-[20em] md:w-[35em] mx-auto shadow-md">
    <h1 class="text-2xl lg:text-3xl mb-4">Leave us a Message</h1>
    <p class="text-lg lg:text-xl mb-5 text-gray-600">Leave us a message and we will get back to you</p>
    <form class="leave-message-form flex flex-col gap-4 md:gap-8" id="leaveMessageForm" method="POST" action="{{ route('contact.store') }}">
        @csrf
        <input type="text" name="name" placeholder="Full Name" class="p-5 text-xl border border-gray-300 rounded-full w-full mt-4 md:mt-0" required>
        <input type="email" name="email" placeholder="Email" class="p-5 text-xl border border-gray-300 rounded-full w-full" required>
        <span id="emailError" class="text-red-500 text-sm"></span>
        <input type="text" name="subject" placeholder="Subject" class="p-5 text-xl border border-gray-300 rounded-full w-full" required>
        <textarea name="message" placeholder="Message" class="p-5 text-xl border border-gray-300 rounded-3xl w-full h-48 resize-none" required></textarea>
        <button type="submit" class="p-4 text-xl bg-orange-500 text-white rounded-full cursor-pointer hover:bg-orange-400">Submit Message</button>
    </form>
</div>




 
  <!--====================Footer Section ============================================= */ -->
  <div class="py-8 md:py-16 px-6 lg:px-16 xl:px-44 h-[65vh] md:h-[40vh] xl:h-[60vh] bg-gray-900 text-white font-sans">
        <div class="flex flex-wrap justify-between mb-12">
            <div class="mb-6 md:mb-0">
                <h4 class="text-xl font-medium mb-8">Menus</h4>
                <a href="{{route('undergraduate')}}" class="block text-lg mb-4 hover:text-orange-500">Undergraduate</a>
                <a href="{{route('postgraduate')}}" class="block text-lg mb-4 hover:text-orange-500">Postgraduate</a>
                <a href="{{route('TeachingStaff')}}" class="block text-lg mb-4 hover:text-orange-500">Teaching-Staff</a>
                <a href="{{route('NonTeachingStaff')}}" class="block text-lg mb-4 hover:text-orange-500">Non Teaching-Staff</a>
            </div>

            <div class="mb-6 md:mb-0 flex flex-col">
                <h4 class="text-xl font-medium mb-8">Contact Us</h4>
                <a href="/" class="flex items-center mb-8 text-lg hover:text-orange-500">
                    <i class="fa-solid fa-phone-alt w-4 h-4 mr-2"></i>
                    +233 000 000 000
                </a>
                <a href="/" class="flex items-center mb-8 text-lg hover:text-orange-500">
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
                <a href="/" class="text-lg hover:text-orange-500">Home</a>
                <a href="{{route('About')}}" class="text-lg hover:text-orange-500">About</a>
                <a href="{{route('Contact')}}" class="text-lg hover:text-orange-500">Contact</a>
                <a href="{{route('Events')}}" class="text-lg hover:text-orange-500">Events</a>
            </div>
        </div>
    </div>
  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>