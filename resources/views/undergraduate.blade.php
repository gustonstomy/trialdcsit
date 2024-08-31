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
    <title>UnderGraduate</title>
</head>
<body>
 <!--======================= Down navbar====================== -->
@include('includes.Navbar')
        <!--==================== ProgrammesHeader Div================================ -->
     <div class="bg-black bg-opacity-70 text-white  w-full text-center flex flex-col justify-center md:h-[20vh]  xl:h-[30vh] font-sans">
      <p class="text-[1.1rem] md:text-[1.5rem] mb-4 font-bold">
        Insights Into Undergraduate Programmes
      </p>
      <p class="text-[1.1rem] md:text-[1.5rem] mb-4 font-bold">
        BSc. Computer Science
      </p>
      <p class="text-[1.1rem] md:text-[1.5rem] mb-4 font-bold">
        BSc. Information Technology
      </p>
    </div>
	<!-- ===================Details Section========================================= -->
	 <div class="flex flex-col mb-8 lg:flex-row mx-2 md:mx-[3rem] lg:mx-[2rem] h-[90vh] md:h-[65vh] xl:h-[60vh] lg:h-[45vh] font-sans">
      <div class="w-full md:w-[37rem] bg-white rounded-lg p-5 md:p-8 text-center mb-10 md:mb-0 md:mr-8 xl:ml-32 ">
        <h2 class="text-2xl md:text-[1.8em] underline mb-5 font-sans">BSc. Computer Science</h2>
        <p class="flex justify-center text-lg md:text-[1.2em] text-paletteColor1 leading-[1.8rem] mb-6 font-sans">
          A BSc Computer Science degree program offers a comprehensive education in computer technology,
          software development, and computational problem-solving. Students learn programming, algorithms,
          software development, computer architecture, and more. Graduates are prepared for careers in
          software development, data analysis, cybersecurity, and research, with opportunities in various
          technology fields. This degree also serves as a foundation for advanced studies in computer science
          or entry into the tech industry.
        </p>
        <a href="{{route('comcourse')}}" class="text-[1.2em] text-paletteColor2 font-bold underline hover:text-paletteColor8">
          Read More
        </a>
      </div>
      <div class="w-full md:w-[37rem] bg-white rounded-lg p-5 md:p-8 text-center">
        <h2 class="text-2xl md:text-[1.8em] underline mb-5 font-sans">BSc. Information Technology</h2>
        <p class="flex justify-evenly text-lg md:text-[1.2em] text-paletteColor1 leading-[1.8rem] mb-6 font-sans">
          A Bachelor of Science in Information Technology (BSc IT) undergraduate program is designed to equip
          students with the knowledge and skills needed to excel in the rapidly evolving world of technology.
          This program covers a wide range of topics, including software development, database management,
          network administration, cybersecurity, and IT project management. Graduates of the BSc IT program are
          well-prepared for careers in IT consulting, database administration, and other technology-related roles.
        </p>
        <a href="{{route('ungradcourse')}}" class="text-[1.2em] text-paletteColor2 font-bold underline hover:text-paletteColor8">
          Read More
        </a>
      </div>
    </div>
 <!--=======================Footer====================== -->
@include('includes.Footer')

  <script src="{{ asset('js/menu.js') }}"></script>
</div>
</body>
</html>