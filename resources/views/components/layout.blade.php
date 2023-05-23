<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  
  {{-- favicon --}}
  <link rel="icon" type="image/x-icon" href="/storage/images/fork.png">
  
  {{-- link google fonts --}}
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

  @livewireStyles
  
  {{-- link fontawesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  
  <title>RistoBari</title>
  
  
</head>

<body>




  
  
  <x-navbar/>
  
  
  
  
  {{$slot}}
  
  
  
  
  @livewireScripts
  
  
</body>
</html>