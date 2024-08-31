<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>PhD and MPhil Computer Science Courses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" href="{{ asset('UCC.png') }}" type="image/x-icon">
  <title>Mphil Cou</title>
</head>
<body>


 <!--======================= Down navbar====================== -->
@include('includes.Navbar')

<!-- content section -->
<div class="bg-black bg-opacity-70 text-white p-8 max-w-full text-center flex items-center justify-center h-[15vh] font-montserrat">
      <h1 class="text-3xl mb-4 font-bold">MPhil Computer Science Courses</h1>
    </div>



    <main class="p-8 max-w-4xl mx-auto">
    <section id="mphil">
        <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-gray-800 pb-1 mb-6">MPhil Computer Science</h2>
        <div class="mb-8">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Year 1: Semester 1</h3>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Course Code</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Course Title</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-800">Credits</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="px-4 py-2 text-sm text-gray-900">SGS 801</td>
                            <td class="px-4 py-2 text-sm text-gray-900">Academic Writing for Postgraduate Students</td>
                            <td class="px-4 py-2 text-sm text-gray-900">3</td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-2 text-sm text-gray-900">CSC 801</td>
                            <td class="px-4 py-2 text-sm text-gray-900">Computational Theory and Formal Languages</td>
                            <td class="px-4 py-2 text-sm text-gray-900">3</td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-2 text-sm text-gray-900">CSC 805</td>
                            <td class="px-4 py-2 text-sm text-gray-900">Advanced Statistics</td>
                            <td class="px-4 py-2 text-sm text-gray-900">3</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

 <!--=======================Footer====================== -->
@include('includes.Footer')


  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>
