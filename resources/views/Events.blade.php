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
    <title>Events</title>

</head>
<body>
   <!--======================= Down navbar====================== -->
@include('includes.Navbar')
  <!--========================= event header================================================= -->
  <div class="bg-black bg-opacity-70 text-white p-8 max-w-full text-center flex items-center justify-center h-[15vh] font-montserrat">
      <h1 class="text-3xl mb-4 font-bold">Upcoming Events</h1>
    </div>
<!-- ====================Events section============================================ -->
  <div class="flex flex-col items-center text-center py-8 mt-16 mb-16">
       
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Event 1 -->
            
           @foreach ($events as $event)
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
  <script src="{{ asset('js/menu.js') }}"></script>
</body>
</html>