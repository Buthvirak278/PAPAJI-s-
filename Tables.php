<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Table Management – Interactive UI</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: 'Inter', sans-serif;
    }
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }
    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
    }

    .tooltip {
      position: relative;
      cursor: pointer;
    }
    .tooltip:hover .tooltip-text,
    .tooltip:focus .tooltip-text {
      visibility: visible;
      opacity: 1;
      transition-delay: 0s;
    }
    .tooltip-text {
      visibility: hidden;
      opacity: 0;
      width: max-content;
      max-width: 140px;
      background-color: rgba(0, 0, 0, 0.75);
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 8px;
      position: absolute;
      z-index: 10;
      bottom: 125%;
      left: 50%;
      transform: translateX(-50%);
      font-size: 0.75rem;
      pointer-events: none;
      transition: opacity 0.3s ease, visibility 0.3s ease;
      user-select: none;
    }
    .tooltip-text::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: rgba(0, 0, 0, 0.75) transparent transparent transparent;
    }
  </style>
</head>
<body class="bg-[#2f2f3d] min-h-screen flex text-white">

<aside class="bg-[#2f2f3d] w-20 flex flex-col items-center py-8 space-y-10 text-gray-400">
  <a href="#" class="w-12 h-12 rounded-full overflow-hidden mb-6 block">
    <img src="https://scontent.fpnh5-3.fna.fbcdn.net/v/t39.30808-1/469092703_1826334768195131_6740045792670826926_n.jpg?stp=dst-jpg_s480x480_tt6&_nc_cat=108&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeFIWXaSziDzAabsS-SH5bO1Nqk6Z-_d6yA2qTpn793rIHl9VqQ77fRbKS01oOFIFxyX0aEy583-U5g5PdBRU5e0&_nc_ohc=DhEWSiF6KgMQ7kNvwHYHExk&_nc_oc=Admo8JzwgXCCVnKgU3K6O5ocp35Gv5oaFAxufsYnHT5YYUpdo57Wfs_jfJXhlCgpdOA&_nc_zt=24&_nc_ht=scontent.fpnh5-3.fna&_nc_gid=qvv7Wp6jv-viU3gzGwuEkA&oh=00_Afalso-cLLrV4AVGWQjjMpo7OPYuMLj7Ttzej-06mtsvDw&oe=68C84403" alt="User" class="w-full h-full object-cover">
  </a>

  <a href="Home.php"class="flex flex-col items-center text-xs hover:text-white">
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
  <a href="Tables.php"class="bg-[#3b6df0] w-12 h-12 rounded-xl flex flex-col items-center justify-center text-white text-xs font-semibold">
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
 
<main class="flex-1 p-6 overflow-y-auto space-y-12 bg-white rounded-tl-[40px] rounded-bl-[40px] text-black">

  <div class="flex flex-wrap items-center justify-between mb-6">
    <div>
      <h2 class="text-2xl font-bold">សូមស្វាគមន៍,</h2>
      <p class="text-sm text-gray-500 mt-1">Welcome, Admin Tables</p>
    </div>

    <div class="flex items-center space-x-3 w-full sm:w-auto">
      <input
        type="date"
        id="dateInput"
        class="flex-1 border border-gray-300 rounded-full py-2 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
        aria-label="Select date"
      />
    </div>
  </div>

  <section>
    <h1 class="text-3xl font-bold mb-4">តុសម្រាប់ភ្ញៀវទូទៅ</h1>
    <div id="tableGrid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
    </div>
  </section>

  <section>
    <h1 class="text-3xl font-bold mb-4">សម្រាប់ភ្ញៀវ VIP</h1>
    <div id="roomGrid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
    </div>
  </section>
</main>

<script>
  const tableGrid = document.getElementById("tableGrid");
  const roomGrid = document.getElementById("roomGrid");
  const dateInput = document.getElementById("dateInput");

  let tables =
    JSON.parse(localStorage.getItem("tables")) ||
    Array.from({ length: 15 }, (_, i) => ({
      id: i + 1,
      status: "available",
    }));

  let rooms =
    JSON.parse(localStorage.getItem("rooms")) ||
    Array.from({ length: 5 }, (_, i) => ({
      id: i + 1,
      status: "available",
    }));

  let bookings = JSON.parse(localStorage.getItem("bookings")) || {};

  function saveData() {
    localStorage.setItem("tables", JSON.stringify(tables));
    localStorage.setItem("rooms", JSON.stringify(rooms));
    localStorage.setItem("bookings", JSON.stringify(bookings));
  }

  function isBooked(id, date, type) {
    if (!date || !bookings[date]) return false;
    return bookings[date].some(entry => entry.id === id && entry.type === type);
  }

  function createCard(item, type, selectedDate) {
    const isAvailable = item.status === "available";
    const booked = isBooked(item.id, selectedDate, type);

    const baseColor = booked
      ? "bg-yellow-500"
      : isAvailable
        ? type === "table"
          ? "bg-lime-500"
          : "bg-cyan-500"
        : "bg-red-600";

    const hoverColor = booked
      ? "cursor-not-allowed"
      : isAvailable
        ? type === "table"
          ? "hover:bg-lime-400"
          : "hover:bg-cyan-400"
        : "hover:bg-red-500";

    const icon = type === "table" ? "chair" : "door-open";
    const label = type === "table" ? `Table ${item.id}` : `Room ${item.id}`;
    const status = booked ? "Reserved" : isAvailable ? "Available" : "Occupied";

    const card = document.createElement("div");
    card.setAttribute("role", "button");
    card.setAttribute("tabindex", booked ? "-1" : "0");
    card.setAttribute(
      "aria-pressed",
      booked ? "true" : isAvailable ? "false" : "true"
    );
    card.setAttribute(
      "aria-label",
      `${label} is currently ${status}. ${booked ? "Reserved for selected date." : "Click to toggle status."}`
    );

    card.className = `${baseColor} ${hoverColor} rounded-lg p-4 flex flex-col items-center justify-center cursor-pointer transition-colors duration-300 tooltip focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-400`;

    card.innerHTML = `
      <i class="fas fa-${icon} text-4xl mb-2" aria-hidden="true"></i>
      <span class="text-sm font-semibold mb-1">${label}</span>
      <span class="text-xs">${status}</span>
      <span class="tooltip-text">${status} — ${booked ? "Reserved" : "Click to toggle"}</span>
    `;

    const today = new Date().toISOString().split("T")[0];
    const canToggle = !booked && (selectedDate === "" || selectedDate === today);

    function toggleStatus() {
      if (!canToggle) return;

      item.status = isAvailable ? "occupied" : "available";
      saveData();
      renderAll();
    }

    // Booking functionality for future dates
    if (selectedDate && selectedDate > today) {
      card.style.position = "relative";

      const bookBtn = document.createElement("button");
      bookBtn.textContent = booked ? "Cancel Booking" : `Book ${type === "table" ? "Table" : "Room"}`;
      bookBtn.className = `
        absolute bottom-2 text-xs px-2 py-1 rounded bg-blue-600 hover:bg-blue-700
        focus:outline-none focus:ring-2 focus:ring-blue-400 text-white
      `;
      card.appendChild(bookBtn);

      bookBtn.addEventListener("click", (e) => {
        e.stopPropagation();

        if (booked) {
          bookings[selectedDate] = bookings[selectedDate].filter(
            (entry) => !(entry.id === item.id && entry.type === type)
          );
          if (bookings[selectedDate].length === 0) {
            delete bookings[selectedDate];
          }
        } else {
          if (!bookings[selectedDate]) bookings[selectedDate] = [];
          bookings[selectedDate].push({ id: item.id, type });
        }

        saveData();
        renderAll();
      });
    }

    if (canToggle) {
      card.addEventListener("click", toggleStatus);
      card.addEventListener("keydown", (e) => {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          toggleStatus();
        }
      });
    }

    return card;
  }

  function renderGrid(dataArray, gridElement, type, selectedDate) {
    gridElement.innerHTML = "";
    dataArray.forEach((item) => {
      const card = createCard(item, type, selectedDate);
      gridElement.appendChild(card);
    });
  }

  function renderAll() {
    const selectedDate = dateInput.value;
    renderGrid(tables, tableGrid, "table", selectedDate);
    renderGrid(rooms, roomGrid, "room", selectedDate);
  }

  dateInput.addEventListener("change", renderAll);

  renderAll();
</script>


</body>
</html>
