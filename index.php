<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login - Reerui</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: "Inter", sans-serif;
    }
  </style>
</head>
<body
  class="bg-[#f5f8ff] min-h-screen flex items-center justify-center p-6 relative overflow-hidden"
>
 
  <img
    class="absolute top-0 right-0 w-[600px] h-[600px] opacity-70 pointer-events-none select-none blur-[40px]"
    src="https://storage.googleapis.com/a1aa/image/94ab5cfb-fae0-4dfb-aa3b-6996165e0884.jpg"
    alt=""
    aria-hidden="true"
  />
  <img
    class="absolute bottom-0 left-0 w-[700px] h-[700px] opacity-70 pointer-events-none select-none blur-[40px]"
    src="https://storage.googleapis.com/a1aa/image/a8b276a8-abe6-49dd-233c-4392d091c6bf.jpg"
    alt=""
    aria-hidden="true"
  />

  <main
    class="relative w-full max-w-6xl bg-white border-4 border-[#0a4ea1] rounded-[32px] shadow-lg flex flex-col-reverse md:flex-row overflow-hidden"
    role="main"
    aria-label="Login form container"
  >
 
    <section
      class="w-full md:w-1/2 p-10 md:p-14 flex flex-col justify-center space-y-6"
      aria-labelledby="login-heading"
    >
      <div
        class="text-[#0a4ea1] font-semibold text-sm tracking-wide uppercase"
        id="brand"
      >
        PAPAJI RESTAURANT
      </div>
      <h1
        id="login-heading"
        class="text-[#2c3e6a] font-extrabold text-3xl md:text-4xl leading-tight"
      >
        Welcome Back
      </h1>
      <p class="text-[#6b7280] text-sm">
        Login to your dashboard to manage your account.
      </p>

      <form
        id="loginForm"
        class="space-y-6 mt-4"
        novalidate
        aria-describedby="formMessage"
      >
        <div>
          <label
            for="email"
            class="block text-xs font-semibold text-[#2c3e6a] mb-1"
            >Email</label
          >
          <input
            id="email"
            name="email"
            type="email"
            autocomplete="email"
            class="w-full border-b border-[#9ca3af] text-sm text-[#2c3e6a] focus:outline-none focus:border-[#0a4ea1] pb-2"
            placeholder="example@domain.com"
            required
            aria-required="true"
            aria-describedby="emailHelp"
          />
          <p
            id="emailHelp"
            class="hidden text-xs text-red-500 mt-1"
            aria-live="polite"
          >
 
          </p>
        </div>

        <div>
          <label
            for="password"
            class="block text-xs font-semibold text-[#2c3e6a] mb-1"
            >Password</label
          >
          <div class="relative">
            <input
              id="password"
              name="password"
              type="password"
              autocomplete="current-password"
              class="w-full border-b border-[#9ca3af] text-sm text-[#2c3e6a] focus:outline-none focus:border-[#0a4ea1] pb-2 pr-10"
              placeholder="Enter your password"
              required
              aria-required="true"
              aria-describedby="passwordHelp"
              minlength="6"
            />
            <button
              type="button"
              id="togglePassword"
              aria-label="Show or hide password"
              class="absolute right-0 top-1/2 -translate-y-1/2 text-[#9ca3af] focus:outline-none focus:ring-2 focus:ring-[#0a4ea1] rounded"
            >
              <img
                src="https://storage.googleapis.com/a1aa/image/9b382797-d026-4d36-1996-a3c808709f5b.jpg"
                alt="Toggle password visibility"
                class="w-4 h-4"
                aria-hidden="true"
              />
            </button>
          </div>
          <p
            id="passwordHelp"
            class="hidden text-xs text-red-500 mt-1"
            aria-live="polite"
          >
           
          </p>
        </div>

        <p
          id="formMessage"
          class="text-xs font-semibold text-red-500 hidden"
          aria-live="polite"
          role="alert"
        ></p>

        <button
          type="submit"
          class="flex items-center justify-center gap-2 bg-[#0a4ea1] hover:bg-[#083d82] text-white text-sm font-semibold py-2.5 rounded-md transition-all shadow-md focus:outline-none focus:ring-4 focus:ring-[#0a4ea1]/50"
        >
          <svg
            class="w-4 h-4"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            viewBox="0 0 24 24"
            aria-hidden="true"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M5 12h14M12 5l7 7-7 7"
            />
          </svg>
          LOGIN
        </button>
      </form>
    </section>

 
    <aside
      class="w-full md:w-1/2 bg-[#f9fbff] relative flex items-center justify-center p-10 select-none pointer-events-none"
      aria-hidden="true"
    >
      <img
        src="https://dsosoftware.com/images/icons/restaurant/Restaurant%20Billing%20System2.png"
        class="max-w-full h-auto"
        alt="Illustration"
        draggable="false"
      />
     
    </aside>
  </main>

  <script>
    (() => {
  const passwordInput = document.getElementById("password");
  const toggleBtn = document.getElementById("togglePassword");
  const loginForm = document.getElementById("loginForm");
  const formMessageEl = document.getElementById("formMessage");
  const emailHelp = document.getElementById("emailHelp");
  const passwordHelp = document.getElementById("passwordHelp");

  // Insert two SVG icons inside toggleBtn for eye and eye-off
  toggleBtn.innerHTML = `
    <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
    </svg>
    <svg id="eyeOffIcon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.972 9.972 0 012.916-4.283M6.176 6.176A9.972 9.972 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.05 10.05 0 01-1.684 3.326M3 3l18 18" />
    </svg>
  `;

  const eyeIcon = toggleBtn.querySelector("#eyeIcon");
  const eyeOffIcon = toggleBtn.querySelector("#eyeOffIcon");

  toggleBtn.addEventListener("click", () => {
    const isPassword = passwordInput.type === "password";
    passwordInput.type = isPassword ? "text" : "password";

    if (isPassword) {
      toggleBtn.setAttribute("aria-label", "Hide password");
      eyeIcon.classList.add("hidden");
      eyeOffIcon.classList.remove("hidden");
    } else {
      toggleBtn.setAttribute("aria-label", "Show password");
      eyeIcon.classList.remove("hidden");
      eyeOffIcon.classList.add("hidden");
    }
  });

  // Clear inline errors on input
  loginForm.email.addEventListener("input", () => {
    emailHelp.textContent = "";
    emailHelp.classList.add("hidden");
    formMessageEl.classList.add("hidden");
  });

  loginForm.password.addEventListener("input", () => {
    passwordHelp.textContent = "";
    passwordHelp.classList.add("hidden");
    formMessageEl.classList.add("hidden");
  });

  loginForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // Clear messages
    formMessageEl.classList.add("hidden");
    formMessageEl.classList.remove("text-green-600", "text-red-500");
    formMessageEl.textContent = "";
    emailHelp.textContent = "";
    emailHelp.classList.add("hidden");
    passwordHelp.textContent = "";
    passwordHelp.classList.add("hidden");

    const email = loginForm.email.value.trim();
    const password = loginForm.password.value.trim();

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      emailHelp.textContent = "Please enter a valid email address.";
      emailHelp.classList.remove("hidden");
      emailHelp.classList.add("text-red-500");
      loginForm.email.focus();
      return;
    }

    if (password.length < 6) {
      passwordHelp.textContent = "Password must be at least 6 characters.";
      passwordHelp.classList.remove("hidden");
      passwordHelp.classList.add("text-red-500");
      loginForm.password.focus();
      return;
    }

    // Demo credentials
    const demoEmail = "buthvirak278@gmail.com";
    const demoPassword = "Vvirakbuth";

    if (email === demoEmail && password === demoPassword) {
      formMessageEl.textContent = "Login successful! Redirecting...";
      formMessageEl.classList.remove("hidden");
      formMessageEl.classList.add("text-green-600");

      setTimeout(() => {
        window.location.href = "Home.php";
      }, 1500);
    } else {
      formMessageEl.textContent = "Invalid email or password.";
      formMessageEl.classList.remove("hidden");
      formMessageEl.classList.add("text-red-500");
    }
  });
})();

  </script>
</body>
</html>
