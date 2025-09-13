<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Food Order UI – Cash Page</title>
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

  <aside class="bg-[#2f2f3d] w-20 flex flex-col items-center py-8 space-y-10 text-gray-400">
    <a href="#" class="w-12 h-12 rounded-full overflow-hidden mb-6 block">
      <img src="https://scontent.fpnh5-3.fna.fbcdn.net/v/t39.30808-1/469092703_1826334768195131_6740045792670826926_n.jpg?stp=dst-jpg_s480x480_tt6&_nc_cat=108&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeFIWXaSziDzAabsS-SH5bO1Nqk6Z-_d6yA2qTpn793rIHl9VqQ77fRbKS01oOFIFxyX0aEy583-U5g5PdBRU5e0&_nc_ohc=DhEWSiF6KgMQ7kNvwHYHExk&_nc_oc=Admo8JzwgXCCVnKgU3K6O5ocp35Gv5oaFAxufsYnHT5YYUpdo57Wfs_jfJXhlCgpdOA&_nc_zt=24&_nc_ht=scontent.fpnh5-3.fna&_nc_gid=qvv7Wp6jv-viU3gzGwuEkA&oh=00_Afalso-cLLrV4AVGWQjjMpo7OPYuMLj7Ttzej-06mtsvDw&oe=68C84403" alt="User" class="w-full h-full object-cover transition-transform duration-300 hover:scale-110" />
    </a>
    <a href="Home.php" class="flex flex-col items-center text-xs hover:text-white transition-colors duration-300">
      <i class="fas fa-home text-xl mb-1"></i>Home
    </a>
    <a href="Dashboard.php" class="flex flex-col items-center text-xs hover:text-white">
      <i class="fas fa-th-large text-2xl"></i><span>Dashboard</span>
    </a>
    <a href="Cash.php" class="bg-[#3b6df0] w-12 h-12 rounded-xl flex flex-col items-center justify-center text-white text-xs font-semibold">
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

  <main class="flex-1 flex flex-col p-8 bg-white rounded-tl-[40px] rounded-bl-[40px] overflow-auto">

  
  <div class="mb-8">
    <h2 class="text-3xl font-extrabold text-black mb-1">សូមស្វាគមន៍,</h2>
    <p class="text-gray-600 text-lg">Welcome, Admin Cash</p>
  </div>

 
  <section class="mb-10">
    <h1 class="text-4xl font-extrabold mb-6 text-black tracking-wide">Cash Payments</h1>

  
    <div class="mb-6">
      <div class="flex flex-col sm:flex-row sm:items-end sm:space-x-4 space-y-4 sm:space-y-0">
        <div>
          <label for="filterDate" class="font-semibold text-gray-800 text-lg mb-2 block">Select Date:</label>
          <input
            type="date"
            id="filterDate"
            class="bg-gray-100 text-gray-900 rounded-md px-4 py-2 shadow-sm border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none w-60"
          />
        </div>
        <button
          id="sendReportBtn"
          class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2 rounded-md shadow-md transition duration-300 w-fit"
        >
          Report
        </button>
      </div>
    </div>

 
    <div class="mb-6">
      <button
        onclick="openModal()"
        class="bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300 w-full sm:w-auto"
      >
        + Add Cash Item
      </button>
    </div>

  
    <div class="bg-gray-50 rounded-2xl shadow-lg overflow-x-auto border border-gray-200">
      <table class="min-w-full table-auto divide-y divide-gray-300">
        <thead class="bg-gray-200 text-gray-600 uppercase tracking-wide text-sm">
          <tr>
            <th class="px-6 py-4 text-left font-medium">Order ID</th>
            <th class="px-6 py-4 text-left font-medium">Customer</th>
            <th class="px-6 py-4 text-left font-medium">Items</th>
            <th class="px-6 py-4 text-left font-medium">Total</th>
            <th class="px-6 py-4 text-left font-medium">Payment Type</th>
            <th class="px-6 py-4 text-left font-medium">Status</th>
            <th class="px-6 py-4 text-left font-medium">Date</th>
            <th class="px-6 py-4 text-left font-medium">Actions</th>
          </tr>
        </thead>
        <tbody id="cashTableBody" class="text-gray-700 text-sm divide-y divide-gray-300">
 
        </tbody>
      </table>
    </div>
  </section>

 
  <section class="mt-auto bg-green-50 rounded-2xl p-8 shadow-lg flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6 border border-green-300">
    <div>
      <h2 class="text-2xl font-extrabold mb-2 text-green-700">Total Cash Collected</h2>
      <p class="text-4xl font-extrabold text-green-800" id="totalCash">$0.00</p>
    </div>
  </section>

</main>




  <div id="cashModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-[#3b3b4f] p-6 rounded-lg w-96">
      <h2 class="text-xl font-semibold mb-4 text-white">Add Cash Payment</h2>
      <input type="text" id="orderId" placeholder="Order ID" class="w-full mb-2 p-2 rounded bg-gray-700 text-white" />
      <input type="text" id="customer" placeholder="Customer Name" class="w-full mb-2 p-2 rounded bg-gray-700 text-white" />
      <input type="text" id="items" placeholder="Items" class="w-full mb-2 p-2 rounded bg-gray-700 text-white" />
      <input type="number" id="amount" placeholder="Total Amount" class="w-full mb-4 p-2 rounded bg-gray-700 text-white" />

      <div class="flex justify-end space-x-2">
        <button onclick="closeModal()" class="bg-gray-600 px-4 py-2 rounded text-white">Cancel</button>
        <button onclick="addCashItem()" class="bg-green-600 px-4 py-2 rounded text-white">Add</button>
      </div>
    </div>
  </div>

  <script>
    const BOT_TOKEN = "YOUR_BOT_TOKEN_HERE";
    const CHAT_ID = "YOUR_CHAT_ID_HERE";

    let totalCash = 0;
    const filterDateInput = document.getElementById('filterDate');
    const tbody = document.getElementById('cashTableBody');
    const totalCashEl = document.getElementById('totalCash');
    const sendReportBtn = document.getElementById('sendReportBtn');

    let cashItems = JSON.parse(localStorage.getItem('cashItems')) || [];

    function formatDisplayDate(isoDate) {
      if (!isoDate) return '';
      const d = new Date(isoDate);
      return d.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
    }

    function renderTable() {
      const selectedDate = filterDateInput.value;
      tbody.innerHTML = '';
      totalCash = 0;

      const filteredItems = cashItems.filter(item => item.isoDate === selectedDate);

      filteredItems.forEach((item, index) => {
        totalCash += parseFloat(item.amount);
        const row = document.createElement('tr');
        row.innerHTML = `
          <td class="px-4 py-3">${item.orderId}</td>
          <td class="px-4 py-3">${item.customer}</td>
          <td class="px-4 py-3">${item.items}</td>
          <td class="px-4 py-3">$${parseFloat(item.amount).toFixed(2)}</td>
          <td class="px-4 py-3">Cash</td>
          <td class="px-4 py-3"><span class="bg-green-500 text-xs px-2 py-1 rounded-full">Paid</span></td>
          <td class="px-4 py-3">${formatDisplayDate(item.isoDate)}</td>
          <td class="px-4 py-3">
            <button onclick="deleteItem(${index})" class="bg-red-600 hover:bg-red-700 px-2 py-1 rounded text-white text-xs">
              Delete
            </button>
          </td>
        `;
        tbody.appendChild(row);
      });

      totalCashEl.textContent = `$${totalCash.toFixed(2)}`;
    }

    function deleteItem(filteredIndex) {
      const selectedDate = filterDateInput.value;

      const filteredIndexes = cashItems.reduce((arr, item, idx) => {
        if(item.isoDate === selectedDate) arr.push(idx);
        return arr;
      }, []);

      const actualIndex = filteredIndexes[filteredIndex];
      if (actualIndex === undefined) return;

      if(confirm("Are you sure you want to delete this item?")) {
        cashItems.splice(actualIndex, 1);
        localStorage.setItem('cashItems', JSON.stringify(cashItems));
        renderTable();
      }
    }

    function openModal() {
      document.getElementById('cashModal').classList.remove('hidden');
      document.getElementById('orderId').value = '';
      document.getElementById('customer').value = '';
      document.getElementById('items').value = '';
      document.getElementById('amount').value = '';
    }

    function closeModal() {
      document.getElementById('cashModal').classList.add('hidden');
    }

    function addCashItem() {
      const orderId = document.getElementById('orderId').value.trim();
      const customer = document.getElementById('customer').value.trim();
      const items = document.getElementById('items').value.trim();
      const amount = parseFloat(document.getElementById('amount').value);

      if (!orderId || !customer || !items || isNaN(amount)) {
        alert("Please fill out all fields.");
        return;
      }

      const todayISO = new Date().toISOString().split('T')[0];

      cashItems.push({ orderId, customer, items, amount, isoDate: todayISO });
      localStorage.setItem('cashItems', JSON.stringify(cashItems));

      closeModal();
      renderTable();
    }

    async function sendReportToTelegram() {
      if (!BOT_TOKEN || !CHAT_ID) {
        alert("Please set your BOT_TOKEN and CHAT_ID in the code!");
        return;
      }

      const selectedDate = filterDateInput.value;
      const filteredItems = cashItems.filter(item => item.isoDate === selectedDate);

      if(filteredItems.length === 0) {
        alert("No cash payments found for the selected date.");
        return;
      }

      const totalAmount = filteredItems.reduce((sum, item) => sum + parseFloat(item.amount), 0).toFixed(2);

      let message = `📅 *Cash Payments Report*\nDate: ${selectedDate}\n\nTotal Transactions: ${filteredItems.length}\nTotal Cash Collected: $${totalAmount}\n\nDetails:\n`;

      filteredItems.forEach(item => {
        message += `• Order: ${item.orderId}, Customer: ${item.customer}, Amount: $${parseFloat(item.amount).toFixed(2)}\n`;
      });

      // Telegram Bot API URL
      const telegramApiUrl = `https://api.telegram.org/bot${BOT_TOKEN}/sendMessage`;

      try {
        const response = await fetch(telegramApiUrl, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({
            chat_id: CHAT_ID,
            text: message,
            parse_mode: 'Markdown'
          })
        });

        if (response.ok) {
          alert("Report sent successfully to Telegram!");
        } else {
          alert("Failed to send report to Telegram.");
          console.error(await response.text());
        }
      } catch (error) {
        alert("Error sending report to Telegram.");
        console.error(error);
      }
    }

    window.onload = () => {
      filterDateInput.value = new Date().toISOString().split('T')[0];
      filterDateInput.addEventListener('change', renderTable);
      sendReportBtn.addEventListener('click', sendReportToTelegram);
      renderTable();
    }
  </script>

</body>
</html>
