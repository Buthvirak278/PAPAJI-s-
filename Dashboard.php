<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Food Order UI – Interactive Demo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <style>
  
  html, body {
    height: 100%;
    margin: 0;
    overflow: hidden;
  }

  body {
    font-family: 'Roboto', Arial, sans-serif;
    font-weight: 400;
    font-size: 14px;
    background-color: #2f2f3d;
    display: flex;
  }

  aside {
    height: 100vh;
    overflow-y: auto;
    background-color: #2f2f3d;
    width: 80px; 
  }

  main {
    height: 100vh;
    overflow-y: auto;
    flex-grow: 1;
    background-color: white;
    padding: 1rem 1.5rem;
  }

</style>

  </style>
</head><body class="bg-[#2f2f3d] min-h-screen flex text-gray-900">

  <aside class="bg-[#2f2f3d] w-20 flex flex-col items-center py-8 space-y-10 text-gray-400">
    <a href="#" class="w-12 h-12 rounded-full overflow-hidden mb-6 block">
      <img src="https://scontent.fpnh5-3.fna.fbcdn.net/v/t39.30808-1/469092703_1826334768195131_6740045792670826926_n.jpg?stp=dst-jpg_s480x480_tt6&_nc_cat=108&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeFIWXaSziDzAabsS-SH5bO1Nqk6Z-_d6yA2qTpn793rIHl9VqQ77fRbKS01oOFIFxyX0aEy583-U5g5PdBRU5e0&_nc_ohc=DhEWSiF6KgMQ7kNvwHYHExk&_nc_oc=Admo8JzwgXCCVnKgU3K6O5ocp35Gv5oaFAxufsYnHT5YYUpdo57Wfs_jfJXhlCgpdOA&_nc_zt=24&_nc_ht=scontent.fpnh5-3.fna&_nc_gid=qvv7Wp6jv-viU3gzGwuEkA&oh=00_Afalso-cLLrV4AVGWQjjMpo7OPYuMLj7Ttzej-06mtsvDw&oe=68C84403" alt="User" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
    </a>
    <a href="Home.php" class="flex flex-col items-center text-xs hover:text-white transition-colors duration-300">
      <i class="fas fa-home text-xl mb-1"></i>Home
    </a>
    <a href="Home.php" class="bg-[#3b6df0] w-12 h-12 rounded-xl flex flex-col items-center justify-center text-white text-xs font-semibold">
      <i class="fas fa-th-large text-2xl"></i><span>Dashboard</span>
    </a>
    <a href="Cash.php" class="flex flex-col items-center text-xs hover:text-white">
    <i class="fas fa-money-bill-alt text-2xl"></i><span>Cash</span>
  </a>
  <a href="Transaction.php" class="flex flex-col items-center text-xs hover:text-white">
    <i class="fas fa-exchange-alt text-2xl"></i><span>Transaction</span>
  </a>
  <a href="Tables.php" class="flex flex-col items-center text-xs hover:text-white">
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

<main class="flex-1 flex flex-col p-6 bg-white rounded-tl-[40px] rounded-bl-[40px] overflow-auto">

<div class="flex flex-wrap items-center justify-between mb-6">
  <div>
    <h2 class="text-2xl font-bold text-black">សូមស្វាគមន៍,</h2>
    <p class="text-sm text-gray-500 mt-1">Welcome, Admin Dashboard </p>
  </div>
 
</div>
  <main class="flex-1 bg-white font-sans text-gray-800 p-4 sm:p-6 md:p-8 overflow-y-auto fade-slide-in">
    <div class="max-w-[1200px] mx-auto space-y-6">

      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">

        <div class="bg-white rounded-lg shadow p-4 flex flex-col justify-between card-hover">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <div class="bg-orange-100 text-orange-500 rounded p-2">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <span class="text-sm text-gray-700 font-medium">Total Revenue</span>
            </div>
            <i class="fas fa-ellipsis-v text-gray-400 cursor-pointer transition-colors duration-200 hover:text-gray-700"></i>
          </div>
          <div class="mt-3">
            <p class="text-2xl font-semibold">$500</p>
            <p class="text-xs text-green-600 font-semibold flex items-center space-x-1">
              <svg aria-hidden="true" class="w-3 h-3 fill-current" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd" d="M5.293 9.707a1 1 0 011.414 0L10 13.586l3.293-3.879a1 1 0 111.514 1.302l-4 4.707a1 1 0 01-1.514 0l-4-4.707a1 1 0 010-1.302z" fill-rule="evenodd"></path>
              </svg>
              <span>10.5%</span>
              <span class="font-normal text-gray-500">From last month</span>
            </p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-4 flex flex-col justify-between card-hover">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <div class="bg-blue-100 text-blue-500 rounded p-2">
                <i class="fas fa-bookmark"></i>
              </div>
              <span class="text-sm text-gray-700 font-medium">Total Order</span>
            </div>
            <i class="fas fa-ellipsis-v text-gray-400 cursor-pointer transition-colors duration-200 hover:text-gray-700"></i>
          </div>
          <div class="mt-3">
            <p class="text-2xl font-semibold">10</p>
            <p class="text-xs text-green-600 font-semibold flex items-center space-x-1">
              <svg aria-hidden="true" class="w-3 h-3 fill-current" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd" d="M5.293 9.707a1 1 0 011.414 0L10 13.586l3.293-3.879a1 1 0 111.514 1.302l-4 4.707a1 1 0 01-1.514 0l-4-4.707a1 1 0 010-1.302z" fill-rule="evenodd"></path>
              </svg>
              <span>15%</span>
              <span class="font-normal text-gray-500">From last month</span>
            </p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-4 flex flex-col justify-between card-hover">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <div class="bg-sky-100 text-sky-500 rounded p-2">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <span class="text-sm text-gray-700 font-medium">Average Sale</span>
            </div>
            <i class="fas fa-ellipsis-v text-gray-400 cursor-pointer transition-colors duration-200 hover:text-gray-700"></i>
          </div>
          <div class="mt-3">
            <p class="text-2xl font-semibold">$20</p>
            <p class="text-xs text-green-600 font-semibold flex items-center space-x-1">
              <svg aria-hidden="true" class="w-3 h-3 fill-current" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd" d="M5.293 9.707a1 1 0 011.414 0L10 13.586l3.293-3.879a1 1 0 111.514 1.302l-4 4.707a1 1 0 01-1.514 0l-4-4.707a1 1 0 010-1.302z" fill-rule="evenodd"></path>
              </svg>
              <span>3%</span>
              <span class="font-normal text-gray-500">From last month</span>
            </p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-4 flex flex-col justify-between card-hover">
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <div class="bg-yellow-100 text-yellow-500 rounded p-2">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <span class="text-sm text-gray-700 font-medium">Total Sale</span>
            </div>
            <i class="fas fa-ellipsis-v text-gray-400 cursor-pointer transition-colors duration-200 hover:text-gray-700"></i>
          </div>
          <div class="mt-3">
            <p class="text-2xl font-semibold">500</p>
            <p class="text-xs text-red-600 font-semibold flex items-center space-x-1">
              <svg aria-hidden="true" class="w-3 h-3 fill-current" fill="currentColor" viewBox="0 0 20 20">
                <path clip-rule="evenodd" d="M14.707 10.293a1 1 0 00-1.414 0L10 13.586l-3.293-3.879a1 1 0 00-1.514 1.302l4 4.707a1 1 0 001.514 0l4-4.707a1 1 0 000-1.302z" fill-rule="evenodd"></path>
              </svg>
              <span>5%</span>
              <span class="font-normal text-gray-500">From last month</span>
            </p>
          </div>
        </div>

      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

        <section class="md:col-span-2 bg-white rounded-lg shadow p-6">
          <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-gray-800">Sales Overview</h2>
            <div class="relative inline-block text-left">
              <div class="relative">
                <button type="button" id="menu-button" aria-expanded="true" aria-haspopup="true" class="inline-flex justify-between items-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-300 ease-in-out">
                  <span id="selected-period">Weekly</span>
                  <svg class="-mr-1 ml-2 h-5 w-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
              <div id="dropdown-menu" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-weekly" data-period="weekly">Weekly</a>
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-monthly" data-period="monthly">Monthly</a>
                  <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1" id="menu-item-yearly" data-period="yearly">Yearly</a>
                </div>
              </div>
            </div>
          </div>
          <canvas id="salesChart" height="250"></canvas>
        </section>

        <section class="bg-white rounded-lg shadow p-6">
  <h2 class="text-xl font-semibold mb-4 text-gray-800">Popular Dishes</h2>
  <ul id="popular-dishes" class="divide-y divide-gray-200">
   
  </ul>
</section>

<script>
  const items = [
    { id: 1, name: 'គុយទាវ', price: 2.50, image: 'https://grantourismotravels.com/wp-content/uploads/2021/10/Cambodian-Kuy-Teav-Recipe-Classic-Chicken-Noodle-Soup-Copyright-2022-Terence-Carter-Grantourismo-T-500x500.jpg', category: 'food' },
      { id: 2, name: 'នំបញ្ចុកសម្លការី', price: 2.50, image: 'https://www.desidakaar.com/wp-content/uploads/2019/11/kinh-nghiem-du-lich-campuchia-tu-a-den-z-29.jpg', category: 'food' },
      { id: 3, name: 'នំបញ្ចុកសម្លខ្មែរ', price: 2.50, image: 'https://i.pinimg.com/736x/fd/1c/eb/fd1ceb0ece5bf6cb97bb9b82315107df.jpg', category: 'food' },
      { id: 4, name:  'នំបញ្ចុកយួន', price: 3.50, image: 'https://img.freepik.com/premium-photo/vietnamese-rice-noodles-soup-with-pork-spare-ribs-vietnamese-sausage_71919-1371.jpg?w=360', category: 'food' },
      { id: 5, name:  'ឡតឆា', price: 2.00, image: 'https://api.photon.aremedia.net.au/wp-content/uploads/sites/10/Gt/2022/10/26/20407/WEB_Cambodian-Lort-cha.jpg?fit=900%2C750', category: 'food' },
      ];

  const container = document.getElementById('popular-dishes');

  items.forEach(item => {
    const li = document.createElement('li');
    li.className = "py-4 flex items-center justify-between hover:bg-gray-50 transition duration-200 cursor-pointer";

    li.innerHTML = `
      <div class="flex items-center space-x-4">
        <img src="${item.image}" alt="${item.name}" class="w-16 h-16 rounded object-cover shadow-sm border" />
        <span class="text-gray-800 font-medium">${item.name}</span>
      </div>
      <span class="font-semibold text-gray-700">$${item.price.toFixed(2)}</span>
    `;

    container.appendChild(li);
  });
</script>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('salesChart').getContext('2d');

    const salesData = {
      weekly: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        data: [120, 150, 170, 160, 180, 190, 210],
      },
      monthly: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        data: [500, 600, 700, 650, 720, 780, 820],
      },
      yearly: {
        labels: ['2019', '2020', '2021', '2022', '2023'],
        data: [4000, 4500, 4700, 4800, 5000],
      }
    };

    let currentPeriod = 'weekly';

    const config = {
      type: 'line',
      data: {
        labels: salesData[currentPeriod].labels,
        datasets: [{
          label: 'Sales',
          data: salesData[currentPeriod].data,
          fill: true,
          backgroundColor: 'rgba(59, 109, 240, 0.2)',
          borderColor: '#3b6df0',
          borderWidth: 2,
          tension: 0.4,
          pointBackgroundColor: '#3b6df0',
          pointRadius: 5,
          pointHoverRadius: 7,
        }]
      },
      options: {
        responsive: true,
        animation: {
          duration: 1000,
          easing: 'easeOutQuart',
        },
        scales: {
          y: {
            beginAtZero: true
          }
        },
        plugins: {
          legend: {
            display: false
          }
        }
      }
    };

    let salesChart = new Chart(ctx, config);

    // Dropdown toggle and update
    const menuButton = document.getElementById('menu-button');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const selectedPeriod = document.getElementById('selected-period');

    menuButton.addEventListener('click', () => {
      if (dropdownMenu.classList.contains('hidden')) {
        dropdownMenu.classList.remove('hidden');
        dropdownMenu.classList.add('dropdown-enter');
      } else {
        dropdownMenu.classList.add('hidden');
        dropdownMenu.classList.remove('dropdown-enter');
      }
    });

    // Close dropdown if clicked outside
    window.addEventListener('click', (e) => {
      if (!menuButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
        dropdownMenu.classList.remove('dropdown-enter');
      }
    });

    // Update chart data on period selection
    dropdownMenu.querySelectorAll('a').forEach(item => {
      item.addEventListener('click', (e) => {
        e.preventDefault();
        const period = item.dataset.period;
        selectedPeriod.textContent = item.textContent;

        // Animate update
        salesChart.data.labels = salesData[period].labels;
        salesChart.data.datasets[0].data = salesData[period].data;
        salesChart.update();

        dropdownMenu.classList.add('hidden');
        dropdownMenu.classList.remove('dropdown-enter');
      });
    });
  </script>

</body>
</html>
