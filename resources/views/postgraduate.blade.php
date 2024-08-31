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
    <title>postgraduate</title>
     
</head>
<body>
 <!--======================= Down navbar====================== -->
@include('includes.Navbar')
<!-- ==================Postgraduate Header======================================== -->
<div class="bg-black bg-opacity-70 text-white  w-full text-center flex flex-col justify-center md:h-[20vh]  xl:h-[30vh] font-sans">
      <p class="text-[1.1rem] md:text-[1.5rem] mb-4 font-bold">
        Explore Our Postgraduate Programmes
      </p>
      <p class="text-[1.1rem] md:text-[1.5rem] mb-4 font-bold">
       Mphil In Computer Science
      </p>
      <p class="text-[1.1rem] md:text-[1.5rem] mb-4 font-bold">
       PhD In Computer Science
      </p>
    </div>
    <!-- ============Text section and Read More=========================================== -->
    <div class="flex flex-col mb-8 lg:flex-row mx-2 md:mx-[3rem] lg:mx-[2rem] h-[90vh] md:h-[65vh] xl:h-[60vh] lg:h-[45vh] font-sans">
      <div class="w-full md:w-[37rem] bg-white rounded-lg p-5 md:p-8 text-center mb-10 md:mb-0 md:mr-8 xl:ml-32 ">
        <h2 class="text-2xl md:text-[1.8em] underline mb-5 font-sans">MPhil in Computer Science</h2>
        <p class="flex justify-center text-lg md:text-[1.2em] text-paletteColor1 leading-[1.8rem] mb-6 font-sans">
          The MPhil in Computer Science at the University of Cape Coast is a 2-year research degree that provides students 
          with advanced knowledge and skills in computer science.
           The program is open to graduates with a good first degree in
            computer science, mathematics, or a related field. Students will take courses in artificial intelligence, data mining, software engineering, and computer networks, and will complete a thesis on a topic of their choosing
        </p>
        <a href="{{route('postgraduateMphil')}}" class="text-[1.2em] text-paletteColor2 font-bold underline hover:text-paletteColor8">
          Read More
        </a>
      </div>
      <div class="w-full md:w-[37rem] bg-white rounded-lg p-5 md:p-8 text-center">
        <h2 class="text-2xl md:text-[1.8em] underline mb-5 font-sans">PhD In Computer Science</h2>
        <p class="flex justify-evenly text-lg md:text-[1.2em] text-paletteColor1 leading-[1.8rem] mb-6 font-sans">
          The PhD in Computer Science at the University of Cape Coast is a 3-year research degree that prepares students for careers in research, 
          teaching, and industry. The program is open to graduates with an MPhil or 
          research degree in an appropriate field of study. Students will take courses in artificial intelligence, 
          machine learning, data science, and software engineering, and will
           complete a doctoral dissertation on a topic of their choosing
        </p>
        <a href="{{route('postcoursePhd')}}" class="text-[1.2em] text-paletteColor2 font-bold underline hover:text-paletteColor8">
          Read More
        </a>
      </div>
    </div>
 <!--=======================Footer====================== -->
@include('includes.Footer')


  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>