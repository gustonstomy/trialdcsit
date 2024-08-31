<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>PhD Computer Science Courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="{{ asset('UCC.png') }}" type="image/x-icon">
  <title>PostGrad Course</title>
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!-- =========================================Navbar============================================================== -->
@include('includes.Navbar')

  <!-- PHD in computer science  -->
<div class="bg-black bg-opacity-70 text-white p-8 max-w-full text-center flex items-center justify-center h-[15vh] font-montserrat">
      <h1 class="text-3xl mb-4 font-bold">PhD Computer Science Courses</h1>
    </div>


<main class="p-8 max-w-3xl mx-auto">
  <section id="phd">
    <h2 class="text-[#333] border-b-2 border-[#333] pb-1">PhD Computer Science</h2>
    <div class="mb-8">
      <h3 class="font-semibold">Year 1: Semester 1</h3>
      <table class="w-full border-collapse my-4">
        <thead>
          <tr>
            <th class="border p-2 bg-[#f4f4f4]">Course Code</th>
            <th class="border p-2 bg-[#f4f4f4]">Course Title</th>
            <th class="border p-2 bg-[#f4f4f4]">Credits</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border p-2">CSC 901</td>
            <td class="border p-2">Special Topics in Computer Science</td>
            <td class="border p-2">3</td>
          </tr>
          <tr>
            <td class="border p-2">CSC 903</td>
            <td class="border p-2">Advanced Statistical Methods</td>
            <td class="border p-2">3</td>
          </tr>
          <tr>
            <td class="border p-2">CSC 999</td>
            <td class="border p-2">Thesis</td>
            <td class="border p-2">12</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</main>

 <!--=======================Footer====================== -->
@include('includes.Footer')
  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>
