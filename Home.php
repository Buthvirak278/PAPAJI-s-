<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Food Order UI – Interactive Demo</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <style>
    body { 
      font-family: 'Roboto', Arial, sans-serif; 
      font-weight: 400; 
      font-size: 14px; 
    }
   
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

 
    #itemsGrid {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body class="bg-[#2f2f3d] min-h-screen flex text-gray-900">

<aside class="bg-[#2f2f3d] w-20 flex flex-col items-center py-8 space-y-10 text-gray-400">
  <a href="#" class="w-12 h-12 rounded-full overflow-hidden mb-6 block">
    <img src="https://scontent.fpnh5-3.fna.fbcdn.net/v/t39.30808-1/469092703_1826334768195131_6740045792670826926_n.jpg?stp=dst-jpg_s480x480_tt6&_nc_cat=108&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeFIWXaSziDzAabsS-SH5bO1Nqk6Z-_d6yA2qTpn793rIHl9VqQ77fRbKS01oOFIFxyX0aEy583-U5g5PdBRU5e0&_nc_ohc=DhEWSiF6KgMQ7kNvwHYHExk&_nc_oc=Admo8JzwgXCCVnKgU3K6O5ocp35Gv5oaFAxufsYnHT5YYUpdo57Wfs_jfJXhlCgpdOA&_nc_zt=24&_nc_ht=scontent.fpnh5-3.fna&_nc_gid=qvv7Wp6jv-viU3gzGwuEkA&oh=00_Afalso-cLLrV4AVGWQjjMpo7OPYuMLj7Ttzej-06mtsvDw&oe=68C84403" alt="User" class="w-full h-full object-cover">
  </a>

  <a href="Home.php" class="bg-[#3b6df0] w-12 h-12 rounded-xl flex flex-col items-center justify-center text-white text-xs font-semibold">
    <i class="fas fa-home text-xl mb-1"></i>Home
  </a>
  <a href="Dashboard.php" class="flex flex-col items-center text-xs hover:text-white">
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
    <h2 class="text-2xl font-bold text-black">សូមស្វាគមន៍, មុខម្ហូបបែបខ្មែរ</h2>
    <p class="text-sm text-gray-500 mt-1">Welcome, Khmer Food, Cambodian</p>
  </div>

  <div class="flex items-center space-x-3 w-full sm:w-auto">
    <input type="text" id="dateInput"
      class="flex-1 border border-gray-300 rounded-full py-2 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
    >
  </div>
</div>
 


    <div class="flex flex-wrap items-center justify-between mb-4 space-y-2 sm:space-y-0">
      <div id="categories" class="flex space-x-4 overflow-x-auto pb-4 mb-2 no-scrollbar">
        <button data-cat="all"
          class="category-btn px-5 py-2 rounded-full bg-blue-500 text-white font-semibold shadow-md transition flex items-center">
          <i class="fas fa-th-large mr-2"></i>All
        </button>

        <button data-cat="food"
          class="category-btn px-5 py-2 rounded-full bg-white border border-gray-300 text-gray-700 font-semibold hover:bg-blue-50 transition flex items-center">
         🍛 អាហារ
        </button>

        <button data-cat="drink"
          class="category-btn px-5 py-2 rounded-full bg-white border border-gray-300 text-gray-700 font-semibold hover:bg-blue-50 transition flex items-center">
          🍵ភេសជ្ជះ
        </button>

        <button data-cat="salad"
          class="category-btn px-5 py-2 rounded-full bg-white border border-gray-300 text-gray-700 font-semibold hover:bg-blue-50 transition flex items-center">
          🥗បុកល្ហុង
        </button>

        <button data-cat="icecream"
          class="category-btn px-5 py-2 rounded-full bg-white border border-gray-300 text-gray-700 font-semibold hover:bg-blue-50 transition flex items-center">
          🍨ការ៉េម
        </button>

        <button data-cat="sweets"
          class="category-btn px-5 py-2 rounded-full bg-white border border-gray-300 text-gray-700 font-semibold hover:bg-blue-50 transition flex items-center">
         🥯 នំខ្មែរ
        </button>
      </div>

      <div class="w-full sm:w-64">
        <label for="searchInput" class="sr-only">Search</label>
        <div class="relative">
          <input
            type="text"
            id="searchInput"
            placeholder="Search items..."
            class="w-full rounded-full border border-gray-300 bg-white px-4 py-2 pr-10 text-sm text-gray-700 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
          />
          <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
            <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"/>
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-6">
      <h3 class="text-lg font-bold mb-4 text-black">
      មុខម្ហូប<span id="itemCount" class="text-gray-600 font-normal">(0 items)</span>
      </h3>
      <div id="itemsGrid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 max-h-[600px] overflow-y-auto"></div>
    </div>
  </main>

  <aside class="w-80 bg-white rounded-tr-[40px] rounded-br-[40px] p-6 flex flex-col shadow-lg max-h-screen relative">

    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-semibold text-gray-900 tracking-tight">🧾</h2>
      <div class="flex items-center space-x-3 text-gray-500">
        <span class="text-xs text-gray-600 font-medium">
          Receipt: <span id="transactionId" class="text-blue-600 font-semibold">#INIT</span>
        </span>
        <button title="Discount (%)" class="p-1.5 rounded-full hover:bg-blue-50 hover:text-blue-600 transition">
          <i class="fas fa-percent"></i>
        </button>
        <button title="Clear all" onclick="clearAll()" class="p-1.5 rounded-full hover:bg-red-50 text-red-500 transition">
          <i class="fas fa-trash-alt"></i>
        </button>
        <button title="More options" class="p-1.5 rounded-full hover:bg-gray-100 transition">
          <i class="fas fa-ellipsis-v"></i>
        </button>
      </div>
    </div>

    <div class="flex space-x-2 mb-5">
      <button id="eatInBtn" class="toggle-btn flex-1 border border-gray-300 rounded-lg py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 transition active shadow-md">
        Eat in
      </button>
      <button id="deliveryBtn" class="toggle-btn flex-1 border border-gray-300 rounded-lg py-2 text-sm font-medium text-gray-700 hover:bg-gray-100 transition shadow-md">
        Delivery
      </button>
    </div>

    <div id="orderItems" class="flex-1 overflow-y-auto space-y-4 mb-6 pr-2">
      
    </div>

    <div class="border-t border-gray-300 pt-4 mb-6 text-gray-900">
      <div class="flex justify-between mb-2">
        <span>Sub Total</span><span id="subTotal" class="font-bold">$0.00</span>
      </div>
      <div class="flex justify-between mb-2">
        <span>Tax (10%)</span><span id="taxTotal" class="font-bold">$0.00</span>
      </div>
      <div class="flex justify-between font-extrabold text-blue-600 text-lg">
        <span>Total</span><span id="totalAmount">$0.00</span>
      </div>
    </div>

    <div class="mt-auto">
      <p class="mb-3 font-semibold text-gray-900">Payment Method</p>
      <div class="grid grid-cols-4 gap-3 mb-4">
        <button data-pay="cash" class="pay-btn border border-gray-300 rounded-md py-2 px-3 flex flex-col items-center text-xs font-semibold text-gray-700 hover:bg-gray-100 shadow-md active">
          <i class="fas fa-money-bill-wave text-green-500 text-xl mb-1"></i>Cash
        </button>
        <button data-pay="card" class="pay-btn border border-gray-300 rounded-md py-2 px-3 flex flex-col items-center text-xs font-semibold text-gray-700 hover:bg-gray-100 shadow-md">
          <i class="fas fa-credit-card text-blue-500 text-xl mb-1"></i>Card
        </button>
        <button data-pay="gift" class="pay-btn border border-gray-300 rounded-md py-2 px-3 flex flex-col items-center text-xs font-semibold text-gray-700 hover:bg-gray-100 shadow-md">
          <i class="fas fa-gift text-red-600 text-xl mb-1"></i>Coming Soon
        </button>
        <button data-pay="other" class="pay-btn border border-gray-300 rounded-md py-2 px-3 flex flex-col items-center text-xs font-semibold text-gray-700 hover:bg-gray-100 shadow-md">
          <i class="fas fa-dollar-sign text-blue-700 text-xl mb-1"></i>Coming Soon
        </button>
      </div>

      <div class="flex space-x-2">
        <button id="printBtn" class="flex-1 bg-gray-300 text-gray-700 py-3 rounded-lg flex items-center justify-center space-x-2 shadow-md hover:translate-y-[-2px] transition-transform">
          <i class="fas fa-print"></i><span>Print</span>
        </button>
        <button id="payBtn" class="flex-1 bg-blue-600 text-white py-3 rounded-lg font-bold text-lg shadow-md hover:translate-y-[-2px] transition-transform">
          Pay
        </button>
      </div>
    </div>

  </aside>
 
  <script>
    
    const itemsData = [
      { id: 1, name: 'គុយទាវ', price: 2.50, image: 'https://grantourismotravels.com/wp-content/uploads/2021/10/Cambodian-Kuy-Teav-Recipe-Classic-Chicken-Noodle-Soup-Copyright-2022-Terence-Carter-Grantourismo-T-500x500.jpg', category: 'food' },
      { id: 2, name: 'នំបញ្ចុកសម្លការី', price: 2.50, image: 'https://www.desidakaar.com/wp-content/uploads/2019/11/kinh-nghiem-du-lich-campuchia-tu-a-den-z-29.jpg', category: 'food' },
      { id: 3, name: 'នំបញ្ចុកសម្លខ្មែរ', price: 2.50, image: 'https://i.pinimg.com/736x/fd/1c/eb/fd1ceb0ece5bf6cb97bb9b82315107df.jpg', category: 'food' },
      { id: 4, name:  'នំបញ្ចុកយួន', price: 3.50, image: 'https://img.freepik.com/premium-photo/vietnamese-rice-noodles-soup-with-pork-spare-ribs-vietnamese-sausage_71919-1371.jpg?w=360', category: 'food' },
      { id: 5, name:  'ឡតឆា', price: 2.00, image: 'https://api.photon.aremedia.net.au/wp-content/uploads/sites/10/Gt/2022/10/26/20407/WEB_Cambodian-Lort-cha.jpg?fit=900%2C750', category: 'food' },
      { id: 6, name:  'បាយឆា', price: 2.50, image: 'https://thefoodietakesflight.com/wp-content/uploads/2020/02/chahan-japanese-recipe.jpg', category: 'food' },
      { id: 7, name:  'បបរ', price: 2.50, image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3luuDmC1hRPAtfeyoRFG1DAciytLCP4BnkQ&s', category: 'food' },
      { id: 8, name: 'បាញ់ឆែវ', price: 1.50, image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwQm_X9_8lH7bGLo3kfiOP22hhGsDansjQUQ&s', category: 'food' },

   
      { id: 9, name:  'នំកង(1)', price: 0.50, image: 'https://boyeatsworld.com.au/wp-content/uploads/2021/09/IMG_8508.jpg', category: 'sweets' },
      { id: 10, name:  'នំចាកចុល(1)', price: 0.50, image: 'https://streetfoodguy.com/wp-content/uploads/2021/09/233889362_1865722920290725_2813381513505593836_n.jpg', category: 'sweets' },
      { id: 11, name:  'នំប៉ោងអនសង(1)', price: 0.50, image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEACzvRVgkVIAcAxZrhG1WG7-DxzkFBc7PMA&s', category: 'sweets' },
      { id: 12, name:  'នំកាចាយ(10)', price: 2.50, image: 'https://wfg32p.s3.amazonaws.com/media/dishes/nom_ka_chai_5110-reg.jpg', category: 'sweets' },
      { id: 13, name:  'នំ', price: 0.50, image: 'https://www.196flavors.com/wp-content/uploads/2018/07/num-poum-4-FP.jpg', category: 'sweets' },
      { id: 14, name:  'នំក្រក(10)', price: 2.50, image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZ-i3yxTzwtBCmJ_9tbvPtU7nUXMNkCaI7IQ&s', category: 'sweets' },
      { id: 15, name: 'នំផ្លែអាយ(1ប្រអប់)', price: 0.50, image: 'https://www.196flavors.com/wp-content/uploads/2018/06/nom-plae-ai-1-FP.jpg', category: 'sweets' },
      { id: 16, name: 'នំក្រូច(1)', price: 0.50, image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJSfu1pIKy1GHG8Ax3DbaLFSQ3DgHytQkAoQ&s', category: 'sweets' },

    
      { id: 17, name:  'បុកល្ហុងសាលម៉ុន', price: 5.50, image: 'https://live.staticflickr.com/4759/28265172549_c61d5f1205_b.jpg', category: 'salad' },
      { id: 18, name:  'បុកល្ហុងក្ដាមប្រៃ', price: 2.50, image: 'https://pandanmarket.com/cdn/shop/products/Untitleddesign_1_4472x.png?v=1650748902', category: 'salad' },
      { id: 19, name: 'បុកល្ហុងក្ដាម', price: 3.50, image: 'https://static.wixstatic.com/media/c7baa0_b941d08a38e14d5bb6d926ec8686c971~mv2.jpg/v1/fill/w_1000,h_1000,al_c,q_85,usm_0.66_1.00_0.01/c7baa0_b941d08a38e14d5bb6d926ec8686c971~mv2.jpg', category: 'salad' },
      { id: 20, name:  'បុកល្ហុងបង្គារ', price: 3.50, image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeaTN_mKbmD_7YSnjD_P_9r_vHACbotwPd1M2fsaN1z4oOKiG4sZley6ygJJGKTRwnw3o&usqp=CAU', category: 'salad' },
      { id: 21, name: 'បុកល្ហុងពិសេស', price: 10.50, image: 'https://static.vecteezy.com/system/resources/previews/003/096/190/large_2x/papaya-salad-with-crab-salmon-cockles-shrimp-photo.jpg', category: 'salad' },
      { id: 22, name:  'បុកល្ហុងខ្មែរ', price: 5.50, image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsdtoBDtdL5OlfarOTbszjUqSPFCS0XjlKPA&s', category: 'salad' },
      { id: 23, name: 'ស្បែកជ្រូកបំពង់', price: 0.50, image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTx1LmYuT51Z16yL5Xh8lYec-09XS4qX1b4ojYIeYxPJpkYhnO_g5BqnLoIz_TdV0F_PDg&usqp=CAU', category: 'salad' },
      { id: 24, name:  'នំបញ្ចុក', price: 0.50, image: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmMftzRYURyIXq23OrIeJNQNEDtzYLFRkzTf4ZPIqmW3CewjEOUMXOXcR8jdC_cIZXVg&usqp=CAU', category: 'salad' },

  
      { id: 25, name: 'ម៉ាតឆាឡាតេ', price: 1.50, image: 'https://www.modernfarmhouseeats.com/wp-content/uploads/2022/02/starbucks-iced-matcha-latte-8.jpg', category: 'drink' },
      { id: 26, name:  'តែស្វាយ', price: 1.50, image: 'https://latea.ae/cdn/shop/products/CheeseMango-02.jpg?v=1675938297', category: 'drink' },
      { id: 27, name:  'ទឹក Passion', price: 1.50, image: 'https://i.pinimg.com/736x/ee/d0/69/eed069ab230d444f4bd0821117285e94.jpg', category: 'drink' },
      { id: 28, name:  'តែបៃតង', price: 1.50, image: 'https://twinings.co.uk/cdn/shop/articles/Recipe_Main_Image_1300x1000_1_690f7372-2fb5-45fe-840f-058897429e18.jpg?v=1695918421', category: 'drink' },
      { id: 29, name: 'តែក្រហម', price: 1.50, image: 'https://www.simplyrecipes.com/thmb/EY0EJGPBIr2dl5NOjb0iyu43vfM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Thai-Iced-Tea-LEAD-3-794ad2586df04d89a7763cf8f4c8e81e.jpg', category: 'drink' },
      { id: 30, name:  'វ៉ានីឡាឡាតេ', price: 1.50, image: 'https://www.forkinthekitchen.com/wp-content/uploads/2022/08/220629.iced_.latte_.vanilla-9009.jpg', category: 'drink' },
      { id: 31, name:  'កាហ្វេទឹកកក', price: 1.50, image: 'https://frostingandfettuccine.com/wp-content/uploads/2022/12/Caramel-Iced-Coffee-6.jpg', category: 'drink' },
      { id: 32, name:  'ទឹកក្រឡុក', price: 1.50, image: 'https://www.eatingwell.com/thmb/TBp6lbiwoYPhRP4N__4sROiUDhA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/mixed-berry-breakfast-smoothie-7959466-1x1-e0ad2304222e49508cda7b73b21de921.jpg', category: 'drink' },

 
      { id: 33, name: 'ការ៉េម', price: 5.50, image: 'https://www.allrecipes.com/thmb/SI6dn__pfJb9G5eBpYAqkyGCLxQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/50050-five-minute-ice-cream-DDMFS-4x3-076-fbf49ca6248e4dceb3f43a4f02823dd9.jpg', category: 'icecream' }
    ];
    
    let currentCat = 'all';
    let order = [];
    let selectedOrderType = "Eat in";
    let selectedPayment = "cash";

    let currentTxn = generateTransactionId();

 
    const dateInputEl = document.getElementById('dateInput');
    const categoriesEl = document.getElementById('categories');
    const itemsGridEl = document.getElementById('itemsGrid');
    const itemCountEl = document.getElementById('itemCount');
    const orderItemsEl = document.getElementById('orderItems');
    const subTotalEl = document.getElementById('subTotal');
    const taxTotalEl = document.getElementById('taxTotal');
    const totalEl = document.getElementById('totalAmount');
    const searchInputEl = document.getElementById('searchInput');
    const payBtnEl = document.getElementById('payBtn');

    const toggleBtns = document.querySelectorAll('.toggle-btn');
    const payBtns = document.querySelectorAll('.pay-btn');

 
    function updateDateTime() {
      const now = new Date();
      const utc = now.getTime() + (now.getTimezoneOffset() * 60000);
      const cambodiaTime = new Date(utc + (7 * 60 * 60 * 1000));

      const year = cambodiaTime.getFullYear();
      const month = String(cambodiaTime.getMonth() + 1).padStart(2, '0');
      const day = String(cambodiaTime.getDate()).padStart(2, '0');

      let hours = cambodiaTime.getHours();
      const minutes = String(cambodiaTime.getMinutes()).padStart(2, '0');
      const seconds = String(cambodiaTime.getSeconds()).padStart(2, '0');

      const ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12;
      hours = hours ? hours : 12;
      hours = String(hours).padStart(2, '0');

      dateInputEl.value = `${year}-${month}-${day} ${hours}:${minutes}:${seconds} ${ampm}`;
    }

    setInterval(updateDateTime, 1000);
    updateDateTime();

 
    function renderItems() {
      const term = searchInputEl.value.trim().toLowerCase();
      let filtered = itemsData;

      if (currentCat !== 'all') {
        filtered = filtered.filter(i => i.category === currentCat);
      }

      if (term) {
        filtered = filtered.filter(i => i.name.toLowerCase().includes(term));
      }

      itemCountEl.textContent = `(${filtered.length} items)`;

      itemsGridEl.innerHTML = filtered.map(item => {
        const inOrder = order.find(o => o.id === item.id);
        const isSelected = !!inOrder;
        return `
          <div class="flex flex-col items-center cursor-pointer" onclick="toggleSelect(${item.id})">
            <div class="relative w-[80%] aspect-square rounded-2xl shadow-md overflow-hidden transition-transform hover:scale-105 ${isSelected ? 'bg-black' : 'bg-white'}">
              <img src="${item.image}" alt="${item.name}" class="w-full h-full object-cover ${isSelected ? 'opacity-50' : ''}" />
              ${isSelected ? `
                <div class="absolute top-2 left-2 bg-black bg-opacity-70 rounded-full p-1">
                  <i class="fas fa-check-circle text-green-400 text-2xl"></i>
                </div>
              ` : ''}
            </div>
            <h3 class="mt-2 font-semibold text-gray-800 text-base text-center">${item.name}</h3>
            <p class="text-blue-600 font-bold text-lg text-center">$${item.price.toFixed(2)}</p>
          </div>
        `;
      }).join('');
    }

    window.toggleSelect = function(id) {
      const existingOrder = order.find(o => o.id === id);
      if (existingOrder) {
  
        order = order.filter(o => o.id !== id);
      } else {
        const item = itemsData.find(i => i.id === id);
        if (!item) return;
        order.push({ ...item, qty: 1 });
      }
      renderOrder();
      renderItems();
    };

    window.changeQty = function(id, delta) {
      const o = order.find(i => i.id === id);
      if (!o) return;
      o.qty += delta;
      if (o.qty <= 0) {
        order = order.filter(i => i.id !== id);
      }
      renderOrder();
      renderItems();
    };

    window.removeItem = function(id) {
      order = order.filter(i => i.id !== id);
      renderOrder();
      renderItems();
    };

    function renderOrder() {
      orderItemsEl.innerHTML = order.map(i => `
        <div class="order-item bg-gray-50 rounded-xl p-2 flex items-center justify-between shadow-sm border border-gray-200 mb-2">
          <div class="flex items-center space-x-2">
            <img src="${i.image}" alt="${i.name}" class="rounded-md w-12 h-12 object-cover">
            <div>
              <p class="item-name font-semibold text-sm text-gray-800">${i.name}</p>
              <p class="item-price font-bold text-sm text-blue-600">$${i.price.toFixed(2)}</p>
            </div>
          </div>
          <div class="flex flex-col items-center bg-white border rounded-lg px-1 py-1 shadow-sm">
            <button onclick="changeQty(${i.id}, -1)" class="text-gray-600 hover:text-red-500 text-base font-bold">−</button>
            <span class="item-qty my-0.5 font-semibold text-sm">${i.qty}</span>
            <button onclick="changeQty(${i.id}, 1)" class="text-gray-600 hover:text-green-600 text-base font-bold">+</button>
          </div>
        </div>
      `).join('');

      const subTotal = order.reduce((sum, i) => sum + i.price * i.qty, 0);
      const tax = subTotal * 0.10;
      const total = subTotal + tax;

      subTotalEl.textContent = `$${subTotal.toFixed(2)}`;
      taxTotalEl.textContent = `$${tax.toFixed(2)}`;
      totalEl.textContent = `$${total.toFixed(2)}`;

       
      if (order.length === 0) {
        payBtnEl.setAttribute('disabled', 'disabled');
        payBtnEl.classList.add('opacity-50', 'cursor-not-allowed');
      } else {
        payBtnEl.removeAttribute('disabled');
        payBtnEl.classList.remove('opacity-50', 'cursor-not-allowed');
      }
    }

    function generateTransactionId() {
      const id = "RCP" + Date.now();
      const txnEl = document.getElementById("transactionId");
      txnEl.textContent = id;
      return id;
    }

    function clearAll() {
      order = [];
      renderOrder();
      renderItems();
      currentTxn = generateTransactionId();
    }

    function generateReceipt() {
      const subTotal = order.reduce((sum, i) => sum + i.price * i.qty, 0);
      const taxTotal = subTotal * 0.10;
      const totalAmount = subTotal + taxTotal;
      const date = new Date();

      let receipt = `
        <h2>PAPAJI RESTAURANT</h2>
        <p>Transaction #: ${currentTxn}</p>
        <p>Order Type: ${selectedOrderType}</p>
        <p>Payment: ${selectedPayment}</p>
        <p>Date: ${date.toLocaleDateString()} ${date.toLocaleTimeString()}</p>
        <hr>
        <table style="width:100%; border-collapse: collapse; margin-bottom: 10px;">
          <thead>
            <tr>
              <th style="text-align:left; border-bottom:1px solid #000;">Item</th>
              <th style="text-align:center; border-bottom:1px solid #000;">Qty</th>
              <th style="text-align:right; border-bottom:1px solid #000;">Price</th>
              <th style="text-align:right; border-bottom:1px solid #000;">Amount</th>
            </tr>
          </thead>
          <tbody>
      `;
      order.forEach(i => {
        const amt = (i.price * i.qty).toFixed(2);
        receipt += `
          <tr>
            <td>${i.name}</td>
            <td style="text-align:center;">${i.qty}</td>
            <td style="text-align:right;">$${i.price.toFixed(2)}</td>
            <td style="text-align:right;">$${amt}</td>
          </tr>
        `;
      });
      receipt += `
          </tbody>
        </table>
        <hr>
        <p>Sub Total: $${subTotal.toFixed(2)}</p>
        <p>Tax: $${taxTotal.toFixed(2)}</p>
        <p><strong>Total: $${totalAmount.toFixed(2)}</strong></p>
        <hr>
        <p style="text-align:center;">Thank you for your purchase!</p>
      `;
      return receipt;
    }

 

    
    categoriesEl.addEventListener('click', (e) => {
      const btn = e.target.closest('button[data-cat]');
      if (!btn) return;

      
      const allBtns = categoriesEl.querySelectorAll('button[data-cat]');
      allBtns.forEach(b => {
        b.classList.remove('bg-blue-500', 'text-white');
        b.classList.add('bg-white', 'text-gray-700');
      });
      
      btn.classList.remove('bg-white', 'text-gray-700');
      btn.classList.add('bg-blue-500', 'text-white');

      currentCat = btn.getAttribute('data-cat');
      renderItems();
    });

   
    searchInputEl.addEventListener('input', () => {
      renderItems();
    });

    
    toggleBtns.forEach(b => {
      b.addEventListener('click', () => {
        toggleBtns.forEach(x => x.classList.remove('bg-blue-100','text-blue-700'));
        b.classList.add('bg-blue-100','text-blue-700');
        selectedOrderType = b.textContent.trim();
      });
    });

   
    payBtns.forEach(b => {
      b.addEventListener('click', () => {
        payBtns.forEach(x => x.classList.remove('bg-blue-100'));
        b.classList.add('bg-blue-100');
        selectedPayment = b.getAttribute('data-pay');
      });
    });

  
    document.getElementById("printBtn").addEventListener("click", () => {
      if (order.length === 0) {
        alert("No items to print.");
        return;
      }
      const receiptWindow = window.open("", "ReceiptPrint", "width=400,height=600");
      receiptWindow.document.write(`
        <html>
          <head>
            <title>Receipt</title>
            <style>
              body { font-family: Arial, sans-serif; padding: 20px; }
              h2 { text-align: center; margin-bottom: 10px; }
              hr { margin: 10px 0; }
              p { margin: 5px 0; }
              table { font-size: 12px; width: 100%; border-collapse: collapse; }
              th, td { border-bottom:1px solid #000; padding:4px; }
            </style>
          </head>
          <body>
            ${generateReceipt()}
          </body>
        </html>
      `);
      receiptWindow.document.close();
      receiptWindow.print();
    });

     
    payBtnEl.addEventListener("click", () => {
      if (order.length === 0) {
        alert("No items in the order.");
        return;
      }
      const receiptWindow = window.open("", "ReceiptPay", "width=400,height=600");
      receiptWindow.document.write(`
        <html>
          <head>
            <title>Receipt</title>
            <style>
              body { font-family: Arial, sans-serif; padding: 20px; }
              h2 { text-align: center; margin-bottom: 10px; }
              hr { margin: 10px 0; }
              p { margin: 5px 0; }
              table { font-size: 12px; width: 100%; border-collapse: collapse; }
              th, td { border-bottom:1px solid #000; padding:4px; }
            </style>
          </head>
          <body>
            ${generateReceipt()}
          </body>
        </html>
      `);
      receiptWindow.document.close();
      receiptWindow.print();
     
      const subTotal = order.reduce((sum, i) => sum + i.price * i.qty, 0);
      const tax = subTotal * 0.10;
      const total = subTotal + tax;
     
      if (typeof window.updateSalesChart === 'function') {
        window.updateSalesChart(total);
      }
    
     
      clearAll();
    });

 
    renderItems();
    renderOrder();
  </script>
</body>
</html>
