<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Will You Be My GF?</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --pink: #ff4d8d;
      --pink2: #ff7aa8;
      --pink3: #ffd9e7;
      --violet: #8b5cf6;
      --text: #4b2340;
      --card: rgba(255,255,255,.86);
      --shadow: 0 24px 60px rgba(255, 77, 141, 0.20);
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      min-height: 100vh;
      font-family: Inter, "Segoe UI", Arial, sans-serif;
      color: var(--text);
      background:
        radial-gradient(circle at top left, #fff5f9 0%, transparent 35%),
        radial-gradient(circle at top right, #ffe7f0 0%, transparent 30%),
        linear-gradient(135deg, #fff0f6, #ffe4ee 45%, #ffeef7 100%);
      overflow: hidden;
      position: relative;
    }

    .bg-blur, .bg-blur2 {
      position: fixed;
      border-radius: 50%;
      filter: blur(70px);
      opacity: .45;
      z-index: 0;
      pointer-events: none;
    }

    .bg-blur {
      width: 260px;
      height: 260px;
      background: #ff9ec0;
      left: -60px;
      top: -40px;
    }

    .bg-blur2 {
      width: 260px;
      height: 260px;
      background: #d8b4fe;
      right: -80px;
      bottom: -50px;
    }

    .hearts {
      position: fixed;
      inset: 0;
      overflow: hidden;
      pointer-events: none;
      z-index: 1;
    }

    .heart {
      position: absolute;
      bottom: -40px;
      opacity: .7;
      animation: floatUp linear forwards;
    }

    @keyframes floatUp {
      0% { transform: translateY(0) rotate(0deg); opacity: 0; }
      10% { opacity: .7; }
      100% { transform: translateY(-110vh) rotate(360deg); opacity: 0; }
    }

    .wrap {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 22px;
      position: relative;
      z-index: 2;
    }

    .card-love {
      width: 100%;
      max-width: 760px;
      background: var(--card);
      backdrop-filter: blur(14px);
      border: 1px solid rgba(255,255,255,.8);
      border-radius: 32px;
      box-shadow: var(--shadow);
      padding: 26px 24px 34px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .top-chip {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 16px;
      border-radius: 999px;
      background: rgba(255,255,255,.88);
      color: #c0266b;
      font-size: 13px;
      font-weight: 800;
      letter-spacing: .2px;
      box-shadow: 0 12px 28px rgba(255,77,141,.12);
    }

    h1 {
      margin: 18px 0 8px;
      font-size: clamp(2rem, 4vw, 3.35rem);
      line-height: 1.05;
      font-weight: 900;
      color: #8c1450;
    }

    .sub {
      margin: 0 auto 18px;
      max-width: 560px;
      color: #7c4a61;
      font-size: 1.02rem;
    }

    .scene {
      width: 100%;
      max-width: 460px;
      height: 255px;
      margin: 10px auto 16px;
      position: relative;
    }

    .halo {
      position: absolute;
      inset: 18px 28px 10px;
      border-radius: 34px;
      background: linear-gradient(180deg, rgba(255,255,255,.45), rgba(255,240,248,.22));
      box-shadow: inset 0 0 0 1px rgba(255,255,255,.45);
      z-index: 0;
      pointer-events: none;
    }

    .spark {
      position: absolute;
      font-size: 22px;
      animation: sparkle 1.8s infinite ease-in-out;
    }

    .s1 { left: 24px; top: 18px; }
    .s2 { right: 22px; top: 26px; animation-delay: .6s; }
    .s3 { left: 50%; top: 6px; transform: translateX(-50%); animation-delay: 1s; }

    @keyframes sparkle {
      0%,100% { transform: scale(.85); opacity: .35; }
      50% { transform: scale(1.2); opacity: 1; }
    }

    .person {
      position: absolute;
      bottom: 18px;
      width: 122px;
      height: 182px;
      animation: floatCharacter 2.6s ease-in-out infinite;
      z-index: 2;
    }

    @keyframes floatCharacter {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-7px); }
    }

    .boy { left: 68px; }
    .girl { right: 68px; animation-delay: .35s; }

    .head {
      width: 68px;
      height: 68px;
      border-radius: 50%;
      background: linear-gradient(180deg, #ffe2cd, #ffd0b1);
      margin: 0 auto;
      position: relative;
      box-shadow: inset 0 -4px rgba(0,0,0,.04), 0 4px 10px rgba(0,0,0,.06);
      overflow: hidden;
    }

    .hair-boy, .hair-girl {
      width: 64px;
      height: 42px;
      border-radius: 26px 26px 22px 22px;
    }

    .hair-girl::before,
    .hair-girl::after {
      content: "";
      position: absolute;
      top: 18px;
      width: 12px;
      height: 28px;
      background: #2e1a26;
      border-radius: 10px;
    }

    .hair-girl::before { left: -1px; }
    .hair-girl::after { right: -1px; }

    .hair-boy {
      width: 62px;
      height: 28px;
      border-radius: 24px 26px 12px 12px;
    }

    .hair-girl {
      width: 58px;
      height: 38px;
      border-radius: 22px 22px 18px 18px;
    }

    .eye {
      position: absolute;
      top: 24px;
      width: 14px;
      height: 16px;
      border-radius: 50%;
      background: radial-gradient(circle at 40% 40%, #ffffff 0 18%, #2f2032 20% 58%, #111 60% 100%);
      box-shadow: 0 0 0 2px rgba(255,255,255,.65);
    }

    .eye.left { left: 13px; }
    .eye.right { right: 13px; }

    .mouth {
      position: absolute;
      left: 50%;
      bottom: 12px;
      width: 20px;
      height: 9px;
      border-bottom: 3px solid #d55e76;
      border-radius: 0 0 20px 20px;
      transform: translateX(-50%);
    }

    .blush {
      position: absolute;
      top: 37px;
      width: 14px;
      height: 8px;
      border-radius: 999px;
      background: rgba(255, 110, 160, .45);
      filter: blur(1px);
    }

    .blush.left { left: 7px; }
    .blush.right { right: 7px; }

    .body-boy, .body-girl {
      background: linear-gradient(180deg, #ff9ac0, #ff5d99);
      clip-path: polygon(18% 0, 82% 0, 100% 100%, 0 100%);
      border-radius: 24px 24px 16px 16px;
    }

    .body-girl::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 10px;
      transform: translateX(-50%);
      width: 28px;
      height: 18px;
      border-radius: 0 0 16px 16px;
      background: rgba(255,255,255,.28);
    }

    .body-boy {
      background: linear-gradient(180deg, #86adff, #5d83f6);
    }

    .body-boy::before {
      content: "";
      position: absolute;
      left: 50%;
      top: 10px;
      transform: translateX(-50%);
      width: 30px;
      height: 44px;
      border-radius: 12px;
      background: rgba(255,255,255,.22);
    }
    .body-girl { background: linear-gradient(180deg, #ff7bad, #ff4f8f); }

    .arm, .leg {
      width: 12px;
      height: 46px;
      background: #2f3349;
      bottom: -42px;
      z-index: 0;
    }

    .leg.left { left: 19px; }
    .leg.right { right: 19px; }

    .ring-box {
      position: absolute;
      left: 50%;
      bottom: 86px;
      transform: translateX(-50%);
      font-size: 42px;
      animation: popPulse 1.6s infinite ease-in-out;
      filter: drop-shadow(0 6px 12px rgba(0,0,0,.08));
      z-index: 3;
    }

    @keyframes popPulse {
      0%,100% { transform: translateX(-50%) scale(1); }
      50% { transform: translateX(-50%) scale(1.12); }
    }

    .question-box {
      background: linear-gradient(135deg, rgba(255,255,255,.95), rgba(255,244,249,.98));
      border: 1px solid rgba(255,192,214,.7);
      box-shadow: inset 0 1px 0 rgba(255,255,255,.7);
      padding: 18px;
      border-radius: 24px;
      max-width: 600px;
      margin: 0 auto 18px;
    }

    .main-question {
      font-size: clamp(1.5rem, 2.8vw, 2.2rem);
      font-weight: 900;
      color: #b5125e;
      margin-bottom: 8px;
    }

    .dynamic-text {
      min-height: 70px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      font-weight: 700;
      color: #8b3558;
      font-size: 1rem;
      padding: 10px 12px;
      line-height: 1.4;
      word-wrap: break-word;
      overflow-wrap: break-word;
    }

    .btn-area {
      height: 180px;
      position: relative;
      max-width: 100%;
      margin: 0 auto;
      overflow: hidden;
    }

    .btn-love {
      border: none;
      border-radius: 999px;
      padding: 15px 30px;
      font-weight: 800;
      font-size: 1.05rem;
      box-shadow: 0 14px 28px rgba(0,0,0,.1);
      transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
      user-select: none;
      -webkit-user-select: none;
    }

    .btn-love:hover { transform: translateY(-2px); }

    #yesBtn {
      position: absolute;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
      background: linear-gradient(135deg, var(--pink), var(--pink2));
      color: white;
      min-width: 150px;
      z-index: 3;
      font-size: 0.95rem;
      padding: 14px 18px;
    }

    #noBtn {
      position: absolute;
      right: 20px;
      top: 50%;
      transform: translateY(-50%);
      background: white;
      color: #90315c;
      border: 2px solid #ffc2d8;
      min-width: 120px;
      max-width: 180px;
      z-index: 2;
      white-space: normal;
      text-align: center;
      padding: 12px 16px;
      font-size: 0.9rem;
    }

    .success {
      display: none;
      padding-top: 6px;
      animation: popIn .45s ease;
    }

    .success-title {
      font-size: clamp(2rem, 4vw, 3.1rem);
      font-weight: 900;
      color: #b5125e;
      margin-bottom: 8px;
    }

    @keyframes popIn {
      from { opacity: 0; transform: scale(.85); }
      to { opacity: 1; transform: scale(1); }
    }

    .success-note {
      margin: 0 auto;
      max-width: 560px;
      background: rgba(255,255,255,.75);
      border-radius: 22px;
      padding: 16px;
      color: #7d4660;
      font-weight: 600;
    }

    .confetti {
      position: fixed;
      top: -10px;
      width: 10px;
      height: 18px;
      border-radius: 4px;
      z-index: 999;
      animation: fall linear forwards;
    }

    @keyframes fall {
      to {
        transform: translateY(110vh) rotate(720deg);
        opacity: 0.95;
      }
    }

    .footer-mini {
      margin-top: 16px;
      color: #8b5a70;
      font-size: .92rem;
    }

    @media (max-width: 640px) {
      .card-love { padding: 18px 14px 26px; }
      .scene { max-width: 300px; height: 200px; }
      .boy { left: 20px; }
      .girl { right: 20px; }
      .btn-area { height: 200px; }

      #yesBtn {
        left: 10px;
        top: 55%;
        min-width: 130px;
        font-size: 0.85rem;
      }

      #noBtn {
        right: 10px;
        top: 45%;
        max-width: 140px;
        font-size: 0.8rem;
      }

      .dynamic-text {
        font-size: 0.9rem;
        padding: 8px;
      }
    }
      .scene { max-width: 360px; height: 225px; }
      .boy { left: 38px; }
      .girl { right: 38px; }
      .btn-area { height: 180px; }
      #yesBtn { left: 14px; top: 50%; min-width: 155px; }
      #noBtn { right: 14px; top: 50%; }
    }
      .scene { max-width: 360px; height: 225px; }
      .boy { left: 38px; }
      .girl { right: 38px; }
      .btn-area { height: 150px; }
      #yesBtn { left: 14px; top: 24px; min-width: 155px; }
      #noBtn { right: 14px; top: 24px; }
    }
  </style>
</head>
<body>
  <div class="bg-blur"></div>
  <div class="bg-blur2"></div>
  <div class="hearts" id="hearts"></div>

  <div class="wrap">
    <div class="card-love">
      <div class="top-chip">💌 Secret love message delivered successfully</div>

      <h1>Will You Be My Girlfriend? 🥹💖</h1>
      <p class="sub">A very serious proposal with zero pressure, maximum cuteness, and one emotionally unstable <strong>No</strong> button.</p>

      <div class="scene">
        <div class="halo"></div>
        <div class="spark s1">✨</div>
        <div class="spark s2">💖</div>
        <div class="spark s3">✨</div>

        <div class="person boy">
          <div class="head">
            <div class="hair-boy"></div>
            <div class="eye left"></div>
            <div class="eye right"></div>
            <div class="blush left"></div>
            <div class="blush right"></div>
            <div class="mouth"></div>
          </div>
          <div class="body-boy">
            <div class="arm left"></div>
            <div class="arm right"></div>
            <div class="leg left"></div>
            <div class="leg right"></div>
          </div>
        </div>

        <div class="ring-box">🌹</div>

        <div class="person girl">
          <div class="head">
            <div class="hair-girl"></div>
            <div class="eye left"></div>
            <div class="eye right"></div>
            <div class="blush left"></div>
            <div class="blush right"></div>
            <div class="mouth"></div>
          </div>
          <div class="body-girl">
            <div class="arm left"></div>
            <div class="arm right"></div>
            <div class="leg left"></div>
            <div class="leg right"></div>
          </div>
        </div>
      </div>

      <div id="mainScreen">
        <div class="question-box">
          <div class="main-question">So... what do you say? 💘</div>
          <div class="dynamic-text" id="dynamicText">I brought love, loyalty, respect, and a dangerously high amount of overthinking.</div>
        </div>

        <div class="btn-area" id="btnArea">
          <button class="btn-love" id="yesBtn">Yes, of course 💞</button>
          <button class="btn-love" id="noBtn">No 🙈</button>
        </div>
      </div>

      <div class="success" id="successScreen">
        <div class="success-title">YAAAYYY! 💖</div>
        <div class="success-note">
          Congratulations. You just unlocked one full-time lover with lifetime support, premium care, bonus compliments, and unlimited cute messages. 🥰
        </div>
      </div>

      <div class="footer-mini">Warning: the No button has commitment issues.</div>
    </div>
  </div>

  <script>
    const hearts = document.getElementById('hearts');
    const yesBtn = document.getElementById('yesBtn');
    const noBtn = document.getElementById('noBtn');
    const dynamicText = document.getElementById('dynamicText');
    const btnArea = document.getElementById('btnArea');
    const mainScreen = document.getElementById('mainScreen');
    const successScreen = document.getElementById('successScreen');

    const noQuestions = [
      'Are you really sure? 🥺',
      'Ek baar phir soch lo na? 💭',
      'Usne itni himmat jutayi hai... still no? 😭',
      'Free hugs, care, and loyalty bhi mil rahi hai 😌',
      'Fries share karega... ab bhi no? 🍟',
      'Good morning texts bhi pakka milenge ☀️',
      'Reply late nahi karega... promise 🤞',
      'Cute memes daily bhejega 😂',
      'Dil already tumhare naam kar diya hai 💘',
      'Last warning: No button ab bhaagne wala hai 👀'
    ];

    let noStep = 0;
    let movingMode = false;
    let noMoveInterval = null;

    function makeHeart() {
      const el = document.createElement('div');
      el.className = 'heart';
      el.textContent = ['💖','💕','💘','❤️','✨'][Math.floor(Math.random() * 5)];
      el.style.left = Math.random() * 100 + 'vw';
      el.style.fontSize = (16 + Math.random() * 20) + 'px';
      el.style.animationDuration = (4 + Math.random() * 4) + 's';
      hearts.appendChild(el);
      setTimeout(() => el.remove(), 8500);
    }

    setInterval(makeHeart, 420);

    function burstConfetti() {
      const colors = ['#ff4d8d', '#ffd166', '#8b5cf6', '#7bdff2', '#90f1b8'];
      for (let i = 0; i < 90; i++) {
        const c = document.createElement('div');
        c.className = 'confetti';
        c.style.left = Math.random() * 100 + 'vw';
        c.style.background = colors[Math.floor(Math.random() * colors.length)];
        c.style.animationDuration = (2.6 + Math.random() * 2) + 's';
        document.body.appendChild(c);
        setTimeout(() => c.remove(), 5000);
      }
    }

    function updateNoButton() {
      if (noStep < noQuestions.length) {
        noBtn.textContent = noQuestions[noStep];
        dynamicText.textContent = 'Careful... every No reveals another question. 😏';
        yesBtn.style.transform = `translateY(-50%) scale(${1 + noStep * 0.04})`;
      } else {
        dynamicText.textContent = 'Oops. No button is now unavailable for emotional reasons. Only Yes remains functional. 💞';
        noBtn.textContent = 'No 😵';
        movingMode = true;
        yesBtn.style.transform = 'translateY(-50%) scale(1.45)';
        startNoEscapeMode();
      }
    }

    function moveNoButton() {
      if (!movingMode) return;
      const areaRect = btnArea.getBoundingClientRect();
      const btnRect = noBtn.getBoundingClientRect();
      const maxX = Math.max(10, areaRect.width - btnRect.width - 10);
      const maxY = Math.max(10, areaRect.height - btnRect.height - 10);
      const x = Math.random() * maxX;
      const y = Math.random() * maxY;

      noBtn.style.left = x + 'px';
      noBtn.style.top = y + 'px';
      noBtn.style.right = 'auto';
      noBtn.style.transform = 'none';
    }

    function startNoEscapeMode() {
      moveNoButton();
      if (noMoveInterval) clearInterval(noMoveInterval);
      noMoveInterval = setInterval(moveNoButton, 260);
    }

    noBtn.addEventListener('click', function(e) {
      if (movingMode) {
        e.preventDefault();
        moveNoButton();
        return;
      }

      noStep++;
      updateNoButton();
    });

    noBtn.addEventListener('mouseenter', function() {
      if (movingMode) moveNoButton();
    });

    noBtn.addEventListener('mousemove', function() {
      if (movingMode) moveNoButton();
    });

    noBtn.addEventListener('touchstart', function(e) {
      if (movingMode) {
        e.preventDefault();
        moveNoButton();
      }
    }, { passive: false });

    yesBtn.addEventListener('click', function() {
      if (noMoveInterval) clearInterval(noMoveInterval);
      mainScreen.style.display = 'none';
      successScreen.style.display = 'block';
      burstConfetti();
    });
  </script>
</body>
</html>

