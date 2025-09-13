<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Food Order UI – Interactive Demo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body { font-family: 'Inter', sans-serif; }
    .cursor-pointer { cursor: pointer; }
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
  </style>
</head>
<body class="bg-[#2f2f3d] min-h-screen flex text-gray-900">

 
<body class="min-h-screen flex text-gray-900">

  <aside class="bg-[#2f2f3d] w-20 flex flex-col items-center py-8 space-y-10 text-gray-400">
    <a href="#" class="w-12 h-12 rounded-full overflow-hidden mb-6 block">
      <img src="https://scontent.fpnh5-3.fna.fbcdn.net/v/t39.30808-1/469092703_1826334768195131_6740045792670826926_n.jpg?stp=dst-jpg_s480x480_tt6&_nc_cat=108&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeFIWXaSziDzAabsS-SH5bO1Nqk6Z-_d6yA2qTpn793rIHl9VqQ77fRbKS01oOFIFxyX0aEy583-U5g5PdBRU5e0&_nc_ohc=DhEWSiF6KgMQ7kNvwHYHExk&_nc_oc=Admo8JzwgXCCVnKgU3K6O5ocp35Gv5oaFAxufsYnHT5YYUpdo57Wfs_jfJXhlCgpdOA&_nc_zt=24&_nc_ht=scontent.fpnh5-3.fna&_nc_gid=qvv7Wp6jv-viU3gzGwuEkA&oh=00_Afalso-cLLrV4AVGWQjjMpo7OPYuMLj7Ttzej-06mtsvDw&oe=68C84403" alt="User" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
    </a>
    <a href="Home.php" class="flex flex-col items-center text-xs hover:text-white transition-colors duration-300">
      <i class="fas fa-home text-xl mb-1"></i>Home
    </a>
    <a href="Dashboard.php" class="flex flex-col items-center text-xs hover:text-white">
      <i class="fas fa-th-large text-2xl"></i><span>Dashboard</span>
    </a>
    <a href="Cash.php" class="flex flex-col items-center text-xs hover:text-white">
    <i class="fas fa-money-bill-alt text-2xl"></i><span>Cash</span>
  </a>
  <a href="Transaction.php" class="bg-[#3b6df0] w-12 h-12 rounded-xl flex flex-col items-center justify-center text-white text-xs font-semibold">
    <i class="fas fa-exchange-alt text-2xl"></i><span>Transaction</span>
  </a>
  <a href="Tables.php"  class="flex flex-col items-center text-xs hover:text-white">
    <i class="fas fa-chair text-2xl"></i><span>Tables</span>
  </a>

  <div class="mt-auto space-y-4 w-full flex flex-col items-center">
  <hr class="w-10 border-gray-600 border-t-2 my-2" />
  
  <a href="#settings" class="flex flex-col items-center text-xs hover:text-white">
    <i class="fas fa-cog text-2xl"></i><span>Settings</span>
  </a>
  <a href="index.php" class="flex flex-col items-center text-xs hover:text-white">
    <i class="fas fa-power-off text-2xl"></i><span>Logout</span>
  </a>
</div>


</aside>