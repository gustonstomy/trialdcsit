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
    <title>About us</title>
    
</head>
<body>
 <!--=======================Navbar====================== -->
@include('includes.Navbar')

<!-- ===========================Header Section======================================== -->
<div class="bg-gray-800 text-white py-16 text-center">
  <h1 class="text-4xl font-bold">About Us</h1>
</div>





    <!-- ===============================Mission and Vission========================== -->
    <div class="flex flex-col lg:flex-row h-[120vh] sm:h-[90vh] md:h-[72vh] lg:h-[60vh] xl:h-[50vh]">
      <div class="bg-[#0d2980] bg-opacity-85 flex flex-col justify-center w-full lg:w-1/2 p-5 md:px-10 lg:h-[20em] ">
        <h1 class="text-white text-[1.5em] md:text-3xl mb-4  justify-center text-center">Our Vision</h1>
        <p class="text-[#ffffff] leading-[2rem] text-[1.2em] md:text-xl mb-6">
        {{ \App\Models\AboutPage::ofType('vision')->first()->content ?? 'No content to display here' }}
        </p>
      </div>
      <div class="bg-[#ff6b42] bg-opacity-85  flex flex-col justify-center w-full lg:w-1/2 p-5 md:px-10 lg:h-[20em] ">
        <h1 class="text-white text-[1.5em] md:text-3xl mb-4  justify-center text-center">Our Mission</h1>
        <p class="text-[#ffffff] leading-[2rem] text-[1.2em] md:text-xl mb-6">
         {{ \App\Models\AboutPage::ofType('mission')->first()->content ?? 'No content to display here' }}
        </p>
      </div>
    </div>

    <!-- ==============================History========================================= -->
     <div class="mt-12 px-6">

      <h1 class="text-3xl font-bold mb-6 text-center">History</h1>

      <p class="text-justify px-4">
       {{ \App\Models\AboutPage::ofType('history')->first()->content ?? 'No content to display here'}}
      </p>

      
      <h1 class="text-3xl font-bold mb-6 mt-6 text-center">Core Values</h1>
      <p class="text-justify px-4">
         Diversity – The Department has as one of its values the respect for all persons regardless his or her race, religion, tribe or creed.  We believe that diversity is strength and not a weakness.  Therefore, we ensure there is equal opportunity for all.  
      </p>
      <p class="text-justify px-4">
        Academic Excellence – The University of Cape of Cape Coast stands for academic excellence and the department shares in that value.   Ergonomic Environment – The department also ensures that there is a safe and enabling working environment for staff, students etc.  Cordial student – departmental relationship.  The department also cherishes cordial relationship with our students for they are the reason we are existing
      </p>
    </div>
    <!--=======================Footer====================== -->
@include('includes.Footer')

  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>