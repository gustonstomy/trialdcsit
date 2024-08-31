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
    <title>Home</title>
</head>
<body>
 <!--======================= Down navbar====================== -->
@include('includes.Navbar')

  <!-- ==================slider==================================== -->
   <div class="relative w-full h-[35rem] mb-8" id="slider">
        <div class="absolute w-full h-full opacity-100 transition-opacity duration-500 ease-in-out">
            <img src="/BS.jpg" alt="Slide 1"  class="w-full h-full object-cover">
            <div class="absolute bottom-[10%] left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-md">
                <h2 class="m-0 w-[14em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">BSc. Computer Science Studentswho graduate from the programme will be able to apply their skills to a variety of industries</h2 class="m-0 w-[16em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">
            </div>
        </div>
         <div class="absolute w-full h-full opacity-0 transition-opacity duration-500 ease-in-out">
            <img src="/Alor.jpg" alt="Slide 4"  class="w-full h-full object-cover">
            <div class="absolute bottom-[10%] left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-md">
                <h2 class="m-0 w-[14em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">Undergraduate Programmes Bachelor of Computer Science Bachelor of Information Technology</h2 class="m-0 w-[16em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">
            </div>
        </div>
        <div class="absolute w-full h-full opacity-0 transition-opacity duration-500 ease-in-out">
            <img src="/GRAT1.jpg" alt="Slide 2"  class="w-full h-full object-cover">
            <div class="absolute bottom-[10%] left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-md">
                <h2 class="m-0 w-[14em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">BSc. Computer Science Studentswho graduate from the programme will be able to apply their skills to a variety of industries</h2 class="m-0 w-[16em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">
            </div>
        </div>
        <div class="absolute w-full h-full opacity-0 transition-opacity duration-500 ease-in-out">
            <img src="/BGT.jpg" alt="Slide 3"  class="w-full h-full object-cover">
            <div class="absolute bottom-[10%] left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-md">
                <h2 class="m-0 w-[14em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">BSc. Computer Science Studentswho graduate from the programme will be able to apply their skills to a variety of industries</h2 class="m-0 w-[16em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">
            </div>
        </div>
        <div class="absolute w-full h-full opacity-0 transition-opacity duration-500 ease-in-out">
            <img src="/NOT7.jpg" alt="Slide 5"  class="w-full h-full object-cover">
            <div class="absolute bottom-[10%] left-1/2 transform -translate-x-1/2 bg-black bg-opacity-50 text-white px-4 py-2 rounded-md">
                <h2 class="m-0 w-[14em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">Your further in Tech begins here!Apply now to secure your spot <br>at  UCC  and embark on ajourney  filled with  innovation and endless opportunities</h2 class="m-0 w-[16em] md:w-[16em] text-xl md:text-2xl whitespace-pre-wrap">
            </div>
        </div>
    </div>
    
    <!--==========================HOD Section===================================== -->
    <div class="flex flex-col lg:flex-row items-center justify-between p-5 mb-20 md:gap-8 gap-2 xl:gap-1">
    <!-- Text Section -->
    <div class="w-full xl:w-2/5 text-justify text-gray-600 text-base lg:text-lg mb-8 lg:ml-1 xl:ml-40">
        {!! nl2br(e($homePage->content)) !!}
    </div>
    
    <!-- Image Section -->
    <div class="w-full xl:w-1/3 flex items-center justify-center lg:ml-10 xl:mr-40">
      <div class="text-center lg:w-100">
        <img src="{{ asset('/' . $homePage->media) }}" alt="Person" class="object-cover w-full xl:w-auto h-auto rounded-lg lg:h-[45vh] xl:h-[69vh]" />
        <div class="mt-4 text-gray-900">
          <h1 class="text-xl font-semibold">{{ $homePage->subpage_name }}</h1>
          <h4 class="text-lg">{{ $homePage->rank }}</h4>
        </div>
      </div>
    </div>
  </div>

    <!-- ========================Feature Card Section=================================== -->
     <!-- Features Section -->
  <div class="flex flex-col lg:flex-row xl:flex-row items-center gap-8 lg:gap-12 xl:pl-40 xl:pr-40">
    <!-- Feature Card 1 -->
    <div class="flex flex-col xl:flex-row items-center mb-8 w-full lg:w-1/3 border border-transparent">
      <img src="/globe.png" alt="icon" class="mb-4 w-24 h-24 object-cover">
      <div class="flex flex-col text-center">
        <h3 class="text-blue-900 text-xl font-bold mb-2">Global Competition</h3>
        <p class="text-gray-600 text-md break-words">Our students are in the global competition.</p>
      </div>
    </div>
    <!-- Feature Card 2 -->
    <div class="flex flex-col xl:flex-row items-center mb-8 w-full lg:w-1/3 border border-transparent">
      <img src="/globe.png" alt="icon" class="mb-4 w-24 h-24 object-cover">
      <div class="flex flex-col text-center">
        <h3 class="text-blue-900 text-xl font-bold mb-2">Online Tuition</h3>
        <p class="text-gray-600 text-md break-words">We facilitate Online Tuition.</p>
      </div>
    </div>
    <!-- Feature Card 3 -->
    <div class="flex flex-col xl:flex-row items-center mb-8 w-full lg:w-1/3 border border-transparent">
      <img src="/globe.png" alt="icon" class="mb-4 w-24 h-24 object-cover">
      <div class="flex flex-col text-center">
        <h3 class="text-blue-900 text-xl font-bold mb-2">Best Institution</h3>
        <p class="text-gray-600 text-md break-words">Overall Best University in West Africa.</p>
      </div>
    </div>
  </div>
    <!-- ===================Tittle Explore Our Programmes========================= -->
    <div class='text-2xl underline text-center mb-4 mt-8'>
      <h1>Explore Our Programmes</h1>
    </div>

    <!-- ============================Explore more images================================== -->
    <div class="flex flex-col lg:flex-row items-center justify-center text-center h-[75vh]  mb-4 md:mb-1 sm:pl-0 sm:h-[95vh] md:h-[110vh] lg:h-[50vh] xl:h-[80vh] lg:gap-8 xl:gap-14 sm:justify-start">
    <!-- Undergraduate Section -->
    <div class="flex flex-col items-center text-center p-2 xl:p-0 w-[20rem] h-[60vh] md:w-[25rem] md:h-[65vh]  sm:w-auto sm:h-[65vh] md:w-[40rem] lg:w-[32rem] lg:h-[45vh] xl:w-[35rem] xl:h-[70vh] lg:ml-2 xl:ml-40">
      <img
        src="/comput-SC.png"
        alt="Undergraduate"
        class="h-[15rem] w-[25rem] rounded-xl mb-2 sm:h-[20rem] sm:w-[40rem] md:h-[30rem] md:w-[40rem] lg:w-[60rem] xl:w-[35rem] xl:h-[70vh]"
      />
      <h3 class="text-[1.8rem] text-paletteColor2 mb-2">Undergraduate</h3>
      <p class="text-[1.1rem] text-gray-600 mb-5">
        A Computer Science or Information Technology degree teaches fundamentals of computing and prepares for tech careers
      </p>
      <a href="{{route('undergraduate')}}" class="text-[1.2em] text-blue-800 font-bold hover:text-paletteColor3">
        Read More
      </a>
    </div>
    <!-- Postgraduate Section -->
    <div class="flex flex-col items-center text-center p-2 xl:p-0 w-[20rem] h-[60vh] md:w-[25rem] md:h-[65vh]  sm:w-auto sm:h-[65vh] md:w-[40rem] lg:w-[32rem] lg:h-[45vh] xl:w-[35rem] xl:h-[70vh]">
      <img
        src="/R&H.png"
        alt="Postgraduate"
        class="h-[15rem] w-[25rem] rounded-xl mb-2 sm:h-[20rem] sm:w-[40rem] md:h-[30rem] md:w-[40rem] md:mb-8 lg:w-[60rem] xl:w-[35rem] xl:h-[70vh]"
      />
      <h3 class="text-[1.8rem] text-paletteColor2 mb-2">Postgraduate</h3>
      <p class="text-[1.1rem] text-gray-600 mb-5">
        Advanced Computer Science or Information Technology degree for tech careers and research
      </p>
      <a href="{{route('postgraduate')}}" class="text-[1.2em] text-blue-800 font-bold hover:text-paletteColor3">
        Read More
      </a>
    </div>
  </div>
<!-- =============Delivering the World Class Education====================================== -->
 <div class="flex flex-col lg:flex-row lg:flex-wrap justify-center items-center bg-blue-900 p-8 md:pl-5 md:pr-5 lg:p-8 md:px-40 mb-8">
    <h2 class="w-full text-center text-white text-2xl md:text-[2.5rem] leading-relaxed mb-8 lg:mb-12">
      Delivering the World Class Education
    </h2>

    <!-- Social Events -->
    <div class="bg-white w-full md:w-[80%] lg:w-[45%] xl:w-[25%] h-[30vh] md:h-[40vh] lg:h-[30vh] xl:h-[40vh] p-5 rounded-lg text-left flex flex-col items-start mb-7 lg:mx-3">
      <img src="/Frame-f.jpg" alt="Social Events" class="w-[80px] h-[80px] mb-3 mt-2 md:w-[120px] md:h-[120px] lg:w-[100px] lg:h-[100px] xl:w-[60px] xl:h-[60px]">
      <h3 class="text-2xl md:text-[3rem] lg:text-[2.2rem] xl:text-[1.8rem] text-black leading-relaxed md:mt-8 xl:mt-0 mb-4 xl:mb-2">Social Events</h3>
      <p class="text-xl md:text-[2rem] lg:text-[1.3rem] xl:text-[1rem] text-gray-600 leading-relaxed md:leading-normal">
        On-campus events shape the social and intellectual character of students.
      </p>
    </div>

    <!-- Certified Lecturers -->
    <div class="bg-white w-full md:w-[80%] lg:w-[45%] xl:w-[25%] h-[30vh] md:h-[40vh] lg:h-[30vh] xl:h-[40vh] p-5 rounded-lg text-left flex flex-col items-start mb-7 lg:mx-3">
      <img src="/Frame-s.png" alt="Certified Lecturers" class="w-[80px] h-[80px] mb-3 mt-2 md:w-[120px] md:h-[120px] lg:w-[100px] lg:h-[100px] xl:w-[60px] xl:h-[60px]">
      <h3 class="text-2xl md:text-[3rem] lg:text-[2.2rem] xl:text-[1.8rem] text-black leading-relaxed md:mt-8 xl:mt-0 mb-4 xl:mb-2">Certified Lecturers</h3>
      <p class="text-xl md:text-[2rem] lg:text-[1.3rem] xl:text-[1rem] text-gray-600 leading-relaxed md:leading-normal">
        Teachers with extensive experience and certification at the highest level.
      </p>
    </div>

    <!-- Internship Opportunities -->
    <div class="bg-white w-full md:w-[80%] lg:w-[45%] xl:w-[25%] h-[30vh] md:h-[40vh] lg:h-[30vh] xl:h-[40vh] p-5 rounded-lg text-left flex flex-col items-start mb-7 lg:mx-3">
      <img src="/Frame-t.png" alt="Internship Opportunities" class="w-[80px] h-[80px] mb-3 mt-2 md:w-[120px] md:h-[120px] lg:w-[100px] lg:h-[100px] xl:w-[60px] xl:h-[60px]">
      <h3 class="text-2xl md:text-[3rem] lg:text-[2.2rem] xl:text-[1.8rem] text-black leading-relaxed md:mt-8 xl:mt-0 mb-4 xl:mb-2">Internship Opportunities</h3>
      <p class="text-xl md:text-[2rem] lg:text-[1.3rem] xl:text-[1rem] text-gray-600 leading-relaxed md:leading-normal">
        Our students can participate in the internships program with the leading companies.
      </p>
    </div>

    <!-- Global Community -->
    <div class="bg-white w-full md:w-[80%] lg:w-[45%] xl:w-[25%] h-[30vh] md:h-[40vh] lg:h-[30vh] xl:h-[40vh] p-5 rounded-lg text-left flex flex-col items-start mb-7 lg:mx-3">
      <img src="/Frame-ff.jpg" alt="Global Community" class="w-[80px] h-[80px] mb-3 mt-2 md:w-[120px] md:h-[120px] lg:w-[100px] lg:h-[100px] xl:w-[60px] xl:h-[60px]">
      <h3 class="text-2xl md:text-[3rem] lg:text-[2.2rem] xl:text-[1.8rem] text-black leading-relaxed md:mt-8 xl:mt-0 mb-4 xl:mb-2">Global Community</h3>
      <p class="text-xl md:text-[2rem] lg:text-[1.3rem] xl:text-[1rem] text-gray-600 leading-relaxed md:leading-normal">
        We provide education to students from all around the world.
      </p>
    </div>

    <!-- Practical Education -->
    <div class="bg-white w-full md:w-[80%] lg:w-[45%] xl:w-[25%] h-[30vh] md:h-[40vh] lg:h-[30vh] xl:h-[40vh] p-5 rounded-lg text-left flex flex-col items-start mb-7 lg:mx-3">
      <img src="/Frame-f.jpg" alt="Practical Education" class="w-[80px] h-[80px] mb-3 mt-2 md:w-[120px] md:h-[120px] lg:w-[100px] lg:h-[100px] xl:w-[60px] xl:h-[60px]">
      <h3 class="text-2xl md:text-[3rem] lg:text-[2.2rem] xl:text-[1.8rem] text-black leading-relaxed md:mt-8 xl:mt-0 mb-4 xl:mb-2">Practical Education</h3>
      <p class="text-xl md:text-[2rem] lg:text-[1.3rem] xl:text-[1rem] text-gray-600 leading-relaxed md:leading-normal">
        Get theoretical education as well as practical understandings.
      </p>
    </div>

    <!-- Extra Activities -->
    <div class="bg-white w-full md:w-[80%] lg:w-[45%] xl:w-[25%] h-[30vh] md:h-[40vh] lg:h-[30vh] xl:h-[40vh] p-5 rounded-lg text-left flex flex-col items-start mb-7 lg:mx-3">
      <img src="/Frame-l.jpg" alt="Extra Activities" class="w-[80px] h-[80px] mb-3 mt-2 md:w-[120px] md:h-[120px] lg:w-[100px] lg:h-[100px] xl:w-[60px] xl:h-[60px]">
      <h3 class="text-2xl md:text-[3rem] lg:text-[2.2rem] xl:text-[1.8rem] text-black leading-relaxed md:mt-8 xl:mt-0 mb-4 xl:mb-2">Extra Activities</h3>
      <p class="text-xl md:text-[2rem] lg:text-[1.3rem] xl:text-[1rem] text-gray-600 leading-relaxed md:leading-normal">
        Our students can participate in various extra-curricular activities.
      </p>
    </div>
  </div>

<!-- ====================Events section============================================ -->
 <div class="flex flex-col items-center text-center py-8 mt-16 mb-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Loop through home events -->
        @foreach ($homeEvents as $event)
            <div class="bg-[#f2f8f7] p-6 rounded-lg w-80 md:w-[40rem] lg:w-[30rem] xl:w-[35rem] text-left shadow-md">
                <div class="w-[30em] ml-4 mb-3 ">
                    <img src="{{ asset('/' . $event->media) }}" alt="img" class="rounded-[2em] updatable">
                </div>
                <div class="bg-[#ff6b42] text-white py-2 px-4 rounded-md text-sm inline-block">
                    <span>{{ $event->date->format('d M') }}</span>
                </div>
                <h3 class="mt-4 text-xl text-black">{{ $event->name }}</h3>
                <div class="my-4 text-lg text-gray-600 flex flex-col items-start gap-2">
                    <div class="flex items-center">
                        <span class="border-2 border-gray-600 rounded-full w-6 h-6 text-center leading-5 mr-2">➜</span>
                        {{ $event->time->format('h:i A') }}
                    </div>
                    <div class="flex items-center gap-2">
                        <img src="/lo.png" alt="Location Icon" class="w-12 h-12">
                        {{ $event->location }}
                    </div>
                </div>
                <p class="text-gray-600 mb-4">{{ $event->description }}</p>
            </div>
        @endforeach
    </div>
</div>

 
 <!--=======================Footer====================== -->
@include('includes.Footer')

  {{-- <script src="../../../public/js/Home.js"></script> --}}
  <script src="{{ asset('js/menu.js') }}"></script>

</body>
</html>
