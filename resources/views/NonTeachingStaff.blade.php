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
    <title>NonTeachingStaff Page</title>
     <link rel="stylesheet" href="NonTeachingStaff.css">
</head>
<body>
 <!--======================= Down navbar====================== -->
@include('includes.Navbar')

  <!-- ============================Image Slider Section================================== -->

   <div id="slider" class="relative w-full h-[20rem] lg:h-[35rem]">
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-100">
            <img src="/NOT7.jpg" alt="Slide 7" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="/NOT1.jpg" alt="Slide 1" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="/NOT2.jpg" alt="Slide 2" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="/NOT3.jpg" alt="Slide 3" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="/NOT4.jpg" alt="Slide 4" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="/NOT5.jpg" alt="Slide 5" class="w-full h-full object-cover" />
        </div>
        <div class="slide absolute w-full h-full transition-opacity duration-500 ease-in-out opacity-0">
            <img src="/NOT6.jpg" alt="Slide 6" class="w-full h-full object-cover" />
        </div>
        
    </div>

   <!-- =================Non Staff Grid=========================================== -->

   <div>
        <h2 class="text-center text-2xl underline font-bold mt-8">Non-Teaching Staff</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-8 md:px-16 lg:px-32 mt-8">
            @foreach ($nonTeachingStaff as $staff)
            <a href="{{ $staff->link }}" target="_blank" rel="noopener noreferrer" class="block bg-white p-4 rounded-lg text-center shadow-lg border border-gray-300">
                <img src="{{ asset('/' . $staff->media) }}" alt="{{ $staff->name }}" class="w-48 h-48 object-cover rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">{{ $staff->name }}</h3>
                <p class="text-gray-600">{{ $staff->position }}</p>
            </a>
        @endforeach
        </div>
  <!--=======================Footer====================== -->
@include('includes.Footer')

  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>