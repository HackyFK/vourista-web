<div class="mascot-container fixed bottom-8 right-8 opacity-0 scale-0 transition-all duration-700" id="mascot">
  <div class="mascot bg-gradient-to-tr from-yellow-300 to-orange-400 rounded-full shadow-xl w-24 h-24 flex items-center justify-center relative cursor-pointer">

    <!-- Topi Mini Koki Biru Cerah dengan Huruf V -->
    <div class="chef-hat absolute -top-7 left-1/2 -translate-x-1/2 flex flex-col items-center">
      <div class="w-8 h-5 bg-[#3B82F6] rounded-t-full shadow flex items-center justify-center relative">
        <span class="text-xs font-extrabold text-white absolute">V</span>
      </div>
      <div class="w-10 h-2 bg-[#2563EB] rounded-md shadow -mt-1"></div>
    </div>

    <!-- Wajah -->
    <div class="eyes absolute top-6 left-5 flex space-x-6">
      <div class="eye w-3 h-3 bg-black rounded-full"></div>
      <div class="eye w-3 h-3 bg-black rounded-full"></div>
    </div>
    <div class="mouth absolute top-12 left-1/2 -translate-x-1/2 w-6 h-2 rounded-b-full bg-black"></div>
    
    <!-- Tangan -->
    <div class="arm-left absolute -left-4 top-10 w-6 h-2 bg-yellow-400 rounded-full origin-right"></div>
    <div class="arm-right absolute -right-4 top-10 w-6 h-2 bg-yellow-400 rounded-full origin-left"></div>

    <!-- Kaki -->
    <div class="leg-left absolute bottom-0 left-6 w-2 h-6 bg-orange-500 rounded-full"></div>
    <div class="leg-right absolute bottom-0 right-6 w-2 h-6 bg-orange-500 rounded-full"></div>
  </div>

  <!-- Speech Bubble -->
  <div id="speech-bubble" class="hidden absolute bottom-28 right-0 bg-white rounded-lg shadow-lg p-3 max-w-48">
    <div class="text-sm text-gray-800 font-medium" id="speech-text">Hai, siap cari jajanan enak?</div>
    <div class="absolute top-full right-6 w-0 h-0 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-white"></div>
  </div>
</div>

<style>
  .mascot {
    animation: floaty 3s ease-in-out infinite;
    transition: transform 0.3s ease;
  }
  @keyframes floaty {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
  }

  .arm-left.wave { animation: waveArm 0.5s ease-in-out 3; }
  @keyframes waveArm {
    0%, 100% { transform: rotate(0deg); }
    50% { transform: rotate(40deg); }
  }

  .arm-right.wave { animation: waveArmR 0.5s ease-in-out 3; }
  @keyframes waveArmR {
    0%, 100% { transform: rotate(0deg); }
    50% { transform: rotate(-40deg); }
  }

  .eyes .eye {
    animation: blink 4s infinite;
  }
  @keyframes blink {
    0%, 90%, 100% { transform: scaleY(1); }
    95% { transform: scaleY(0.1); }
  }

  /* Reaksi hover */
  .mascot:hover {
    transform: scale(1.1) rotate(-5deg);
  }

  /* Animasi bounce masuk */
  .show-bounce {
    animation: mascotBounce 1s ease-out;
  }
  @keyframes mascotBounce {
    0% { transform: scale(0.5) translateY(50px); opacity: 0; }
    60% { transform: scale(1.1) translateY(-10px); opacity: 1; }
    80% { transform: scale(0.95) translateY(5px); }
    100% { transform: scale(1) translateY(0); }
  }
</style>

<script>
  const mascotPhrases = [
    "Hai, siap cari jajanan enak?",
    "Cobain donat manis hari ini 🍩",
    "Rating-mu bikin kami senang ⭐",
    "Ada jajanan baru loh! 😋",
    "Terima kasih sudah mampir 🙌"
  ];
  let currentPhrase = 0;

  function mascotInteraction() {
    const bubble = document.getElementById("speech-bubble");
    const text = document.getElementById("speech-text");
    const armLeft = document.querySelector(".arm-left");
    const armRight = document.querySelector(".arm-right");

    armLeft.classList.add("wave");
    armRight.classList.add("wave");
    setTimeout(() => {
      armLeft.classList.remove("wave");
      armRight.classList.remove("wave");
    }, 1500);

    text.textContent = mascotPhrases[currentPhrase];
    bubble.classList.remove("hidden");
    currentPhrase = (currentPhrase + 1) % mascotPhrases.length;

    setTimeout(() => bubble.classList.add("hidden"), 3000);
  }

  const mascot = document.getElementById("mascot");

  // Delay 3 detik sebelum muncul dengan efek bounce
  setTimeout(() => {
    mascot.classList.remove("opacity-0", "scale-0");
    mascot.classList.add("show-bounce");
  }, 3000);

  // Klik maskot
  mascot.addEventListener("click", mascotInteraction);

  // Hover reaksi otomatis
  mascot.addEventListener("mouseenter", mascotInteraction);

  // Random interaksi
  setInterval(() => {
    if (Math.random() < 0.4) mascotInteraction();
  }, 12000);
</script>
