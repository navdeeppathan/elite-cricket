<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Elite Cricket Auth</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS Animation -->
    <link
      href="https://unpkg.com/aos@2.3.1/dist/aos.css"
      rel="stylesheet"
    />
  </head>

  <body
    class="min-h-screen flex items-center justify-center text-white px-4"
    style="
      background: linear-gradient(
        135deg,
        hsl(220 50% 12%) 0%,
        hsl(220 45% 18%) 50%,
        hsl(145 40% 20%) 100%
      );
    "
  >
    <div
      class="text-center w-full max-w-md"
      data-aos="fade-up"
    >
      <!-- Logo -->

      <div class="mb-10">
        <h1 class="text-3xl md:text-4xl font-bold">
          🏏
          <span class="text-yellow-400"> ELITE </span>
          CRICKET
        </h1>

        <p class="text-gray-300 mt-2">Access your dashboard</p>
      </div>

      <!-- Card -->

      <div
        class="bg-white text-gray-900 rounded-xl shadow-xl p-8"
        data-aos="zoom-in"
      >
        <!-- Tabs -->

        <div
          class="bg-gray-200 rounded-lg flex p-1 mb-6 text-sm"
        >
          <button
            onclick="showTab(event,'login')"
            class="tab-btn flex-1 py-2 rounded-md bg-white font-medium transition"
          >
            Login
          </button>

          <button
            onclick="showTab(event,'register')"
            class="tab-btn flex-1 py-2 rounded-md transition hover:bg-gray-100"
          >
            Register
          </button>

          <button
            onclick="showTab(event,'otp')"
            class="tab-btn flex-1 py-2 rounded-md transition hover:bg-gray-100"
          >
            OTP
          </button>
        </div>

        <!-- LOGIN -->

        <div id="login" class="tab-content">
          <div class="space-y-5 text-left">
            <div>
              <label class="text-sm font-medium">Email</label>

              <input
                type="email"
                placeholder="you@email.com"
                class="w-full mt-2 border rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-500 outline-none"
              />
            </div>

            <div>
              <label class="text-sm font-medium">Password</label>

              <input
                type="password"
                placeholder="••••••••"
                class="w-full mt-2 border rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-500 outline-none"
              />
            </div>

            <a href="/dashboard" class="block">
              <button
                class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition"
              >
                👉 Login → Dashboard
              </button>
            </a>
          </div>
        </div>

        <!-- REGISTER -->

        <div id="register" class="tab-content hidden">
          <div class="space-y-5 text-left">
            <div>
              <label class="text-sm font-medium">Full Name</label>

              <input
                type="text"
                placeholder="John Doe"
                class="w-full mt-2 border rounded-lg px-4 py-3"
              />
            </div>

            <div>
              <label class="text-sm font-medium">Email</label>

              <input
                type="email"
                placeholder="you@email.com"
                class="w-full mt-2 border rounded-lg px-4 py-3"
              />
            </div>

            <div>
              <label class="text-sm font-medium">Password</label>

              <input
                type="password"
                class="w-full mt-2 border rounded-lg px-4 py-3"
              />
            </div>

            <div>
              <label class="text-sm font-medium mb-2 block">
                Role
              </label>

              <div class="flex gap-3">
                <button
                  type="button"
                  class="role-btn bg-green-600 text-white px-4 py-2 rounded-lg flex-1"
                >
                  Player
                </button>

                <button
                  type="button"
                  class="role-btn bg-gray-200 px-4 py-2 rounded-lg flex-1 hover:bg-gray-300"
                >
                  Coach
                </button>

                <button
                  type="button"
                  class="role-btn bg-gray-200 px-4 py-2 rounded-lg flex-1 hover:bg-gray-300"
                >
                  Admin
                </button>
              </div>
            </div>

            <button
              class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition"
            >
              Register
            </button>
          </div>
        </div>

        <!-- OTP SEND -->

        <div id="otp" class="tab-content hidden">
          <div class="space-y-5 text-left">
            <div>
              <label class="text-sm font-medium">Email</label>

              <input
                type="email"
                placeholder="you@email.com"
                class="w-full mt-2 border rounded-lg px-4 py-3"
              />
            </div>

            <button
              onclick="showTab(event,'verify')"
              class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition"
            >
              Send OTP
            </button>
          </div>
        </div>

        <!-- OTP VERIFY -->

        <div id="verify" class="tab-content hidden">
          <div class="space-y-5 text-left">
            <div>
              <label class="text-sm font-medium">Email</label>

              <input
                type="email"
                value="navdeepwork475@gmail.com"
                class="w-full mt-2 border rounded-lg px-4 py-3"
              />
            </div>

            <div>
              <label class="text-sm font-medium">Enter OTP</label>

              <input
                type="text"
                placeholder="Enter 6-digit OTP"
                class="w-full mt-2 border rounded-lg px-4 py-3"
              />
            </div>

            <a href="/dashboard" class="block">
              <button
                class="w-full bg-green-600 text-white py-3 rounded-lg font-semibold hover:bg-green-700 transition"
              >
                Verify & Login
              </button>
            </a>
          </div>
        </div>
      </div>

      <!-- Back Link -->

      <div class="mt-6 text-sm text-gray-300">
        ←

        <a
          href="/"
          class="hover:text-white transition"
        >
          Back to Home
        </a>
      </div>
    </div>

    <!-- Scripts -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init({
        duration: 1000,
        once: true,
      });

      function showTab(event, tab) {
        document
          .querySelectorAll(".tab-content")
          .forEach((el) => el.classList.add("hidden"));

        document
          .getElementById(tab)
          .classList.remove("hidden");

        document
          .querySelectorAll(".tab-btn")
          .forEach((btn) => {
            btn.classList.remove("bg-white", "font-medium");
          });

        if (event) {
          event.target.classList.add("bg-white", "font-medium");
        }
      }
    </script>
  </body>
</html>