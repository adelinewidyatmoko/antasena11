<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://unpkg.com/pattern.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">


  @vite('./resources/css/app.css')
</head>
<body class="bg-full-screen-gradient w-full h-screen opacity-30 animate-fade-in m-0 p-0">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <title>Typed.js Example</title>
    <!-- Include Tailwind CSS (if using Tailwind for styling) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
<div class="bg-full-screen-gradient w-full h-2/3  opacity-0 animate-fade-in ">

    <!-- Header Section -->
<section class="border h-20 rounded-full sticky top-0 z-50 bg-white mt-5 mx-20 ">
  <div >
    <div class="mx-auto lg:px-8">
        <div class="flex items-left absolute">
            <img src="assets/pp.jpeg" alt="Logo" class=" h-12 w-12 lg:h-16 lg:w-16 rounded-full mt-2"> <!-- Replace src with your logo file -->
         </div>
      <div class="flex flex-row items-center py-4 space-x-8 lg:w-1/3 ml-auto">
      
        <h2 class="text-right hover:bg-slate-300 hover:rounded-2xl p-2"><a href="#content">Profile</a></h2>
        <h2 class="text-right hover:bg-slate-300 hover:rounded-2xl p-2"><a href="#content">Content</a></h2>
        <h2 class="text-right hover:bg-slate-300 hover:rounded-2xl p-2"><a href="#div">Division</a></h2>
      </div>
    </div>
 </div>
</section>

   
<header class="flex flex-col justify-center items-center mt-8 w-full">
    <div id="dynamicText" class="font-lobster text-white text-5xl sm:text-6xl mt-16 sm:mt-24 lg:mt-40 text-center p-4 rounded-lg max-w-auto">
            PROFILE
    </div>

    
    <div id="typed-output" class="font-sans text-2xl text-white mt-20 hidden text-center rounded-lg max-w-2xl h-40"></div>
</header>

    
<main class="p-4">
    <img src="assets/l9rky25i.png" alt="sample image" class="responsive-img w-72 lg:w-52 lg:float-right lg:mr-2 transform rotate-6 shadow-lg lg:mt-0 mt-6 border rounded-2xl">
    <img src="assets/OIP.jpeg" alt="sample image" class="responsive-img w-64 lg:w-72 lg:float-left lg:ml-2 transform -rotate-6 shadow-lg mt-0 lg:mt-[-12rem] border rounded-lg">
</main>
</div>
</div>

<section id="content" class="full-container w-full h-full">
    <div class="clearfix">
        
        <h1 class="float-left bg-gradient-to-r from-blue-500 to-blue-700 text-transparent bg-clip-text text-6xl font-bold ml-10">
            NEWS
        </h1>
        
        <div class="clear-both"></div>
       
        <p class="text-sm text-white mt-2 ml-10">
            Curious about Antasena's recent achievement??
        </p>
    </div>
    <div class="flex flex-col justify-center items-center mt-10">
    
    <div class="flex flex-col lg:flex-row justify-center items-center">
   
    <img src="assets/news1.png" alt="news1" class="w-48 lg:w-5/12 block slide-in-left mt-10 lg:mt-0 border rounded-lg">
    
    <p class="w-96 p-4 border border-gray-300 text-white rounded-lg animate-slide-in-right lg:ml-10 mt-5 lg:mt-0">
        Tim Antasena ITS berhasil lolos ke tahap pendanaan dalam kompetisi inovasi sepeda motor hidrogen, bersaing dengan 21 tim dari berbagai universitas di Indonesia. Mereka mengembangkan skuter berbahan bakar hidrogen dengan konsep Smart, Safe, and Sustainable, dilengkapi fitur Smart Energy Control dan Anodic Recirculation System untuk meningkatkan efisiensi energi. Dengan dukungan pendanaan, tim berharap inovasi ini dapat dikembangkan lebih lanjut dan diluncurkan dalam dua tahun ke depan, sekaligus memperkuat kolaborasi dengan PLN dalam riset mendatang.
    </p>
</div>

<!-- Second row with image on the right and text on the left -->
<div class="full-container   flex flex-col lg:flex-row-reverse justify-center items-center pt-10 pb-20">
    <!-- Gambar kedua di sebelah kanan -->
    <img src="assets/news2.png" alt="news2" class="w-48 lg:w-5/12 block animate-slide-in-right mt-10 lg:mt-0 lg:ml-10 border rounded-md">
    
    <!-- Paragraf di sebelah kiri gambar kedua -->
    <p class="w-96 p-4 border border-gray-300 text-white rounded-lg slide-in-left mt-5 lg:mt-0">
        Tim Antasena ITS berhasil lolos ke tahap pendanaan dalam kompetisi inovasi sepeda motor hidrogen, bersaing dengan 21 tim dari berbagai universitas di Indonesia. Mereka mengembangkan skuter berbahan bakar hidrogen dengan konsep Smart, Safe, and Sustainable, dilengkapi fitur Smart Energy Control dan Anodic Recirculation System untuk meningkatkan efisiensi energi. Dengan dukungan pendanaan, tim berharap inovasi ini dapat dikembangkan lebih lanjut dan diluncurkan dalam dua tahun ke depan, sekaligus memperkuat kolaborasi dengan PLN dalam riset mendatang.
    </p>

    
</div>





</section>
<section id ="div" class="adel w-full h-80 relative mt-62">
    <!-- First Image - Left -->
    <div class="relative w-32 lg:w-3/12 ml-20">
        <!-- Image -->
        <img src="assets/photo1.png" alt="photo1" class="w-full">
        <!-- Text inside the image -->
        <h2 class="absolute inset-0 flex items-center justify-center text-black text-lg lg:text-2xl font-bold">
            <a href="https://antasenaits.com/team" class="hover:text-blue-500">Research and <br> Development</a>
        </h2>
    </div>

    <!-- Second Image - Centered -->
    <div class="absolute bottom-0 right-100 ml-8 w-32 lg:w-3/12">
        <!-- Flipped Image -->
        <img src="assets/photo1.png" alt="photo1" class="w-full transform rotate-180">
        <!-- Text inside the image -->
        <h2 class="absolute inset-0 flex items-center justify-center text-black text-lg lg:text-2xl font-bold">
            <a href="https://antasenaits.com/team" class="hover:text-blue-500">Technical</a>
        </h2>
    </div>

    <!-- Third Image - Right, Stuck to the Top -->
    <div class="absolute top-0 right-0 mr-20 w-32 lg:w-3/12">
        <!-- Image -->
        <img src="assets/photo1.png" alt="photo1" class="w-full">
        <!-- Text inside the image -->
        <h2 class="absolute inset-0 flex items-center justify-center text-black text-lg lg:text-2xl font-bold">
            <a href="https://antasenaits.com/team" class="hover:text-blue-500">Communication</a>
        </h2>
    </div>
</section>





<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dynamicText = document.getElementById('dynamicText');
        const typingText = document.getElementById('typed-output');
        
        setTimeout(function () {
            dynamicText.classList.add('hidden');
            
            typingText.classList.remove('hidden');
            var typed = new Typed('#typed-output', {
                strings: [
                    "Antasena team is the first hydrogen car research team in Indonesia.",
                    'Antasena team is <span style="color: yellow; text-transform: uppercase;">the first</span> hydrogen car research team in Indonesia, the team was made by students from Institut Teknologi Sepuluh Nopember.',
                    'It <span style="color: red; text-transform: uppercase;">focuses</span> on studies and research related to technological innovations using renewable energy.'
                ],   
                typeSpeed: 50,                 
                backSpeed: 0,                  
                fadeOut: false,                
                showCursor: false,             
                smartBackspace: false,         
                loop: true,                    

                html: true                    
            });
        }, 2000); 
    });
</script>
</script>






</body>
</html>

















<footer>
    <section>

    <section>
<footer>
  </h1>
</body>
</html>