<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chào mừng bạn đến với website của chúng tôi.">
    <title>Chào mừng bạn</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            font-synthesis: none;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-width: 320px;
            min-height: 100vh;
            margin: 0;
            color: #172554;
            background:
                radial-gradient(ellipse at 12% 12%, rgba(196, 181, 253, 0.62), transparent 34%),
                radial-gradient(ellipse at 90% 82%, rgba(147, 197, 253, 0.55), transparent 36%),
                #f8fafc;
        }

        .page {
            display: grid;
            min-height: 100vh;
            place-items: center;
            padding: 32px 20px;
        }

        .welcome-card {
            width: min(100%, 760px);
            padding: clamp(36px, 8vw, 76px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 32px;
            background: rgba(255, 255, 255, 0.76);
            box-shadow: 0 24px 80px rgba(30, 41, 59, 0.1);
            text-align: center;
            backdrop-filter: blur(16px);
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin: 0 0 24px;
            color: #6d5bd0;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        .sparkle {
            font-size: 1rem;
        }

        h1 {
            margin: 0;
            color: #172554;
            font-size: clamp(2.6rem, 8vw, 5rem);
            font-weight: 800;
            letter-spacing: -0.065em;
            line-height: 1.05;
        }

        h1 span {
            display: block;
            color: #7463dc;
        }

        .message {
            max-width: 510px;
            margin: 24px auto 0;
            color: #64748b;
            font-size: clamp(1rem, 2.5vw, 1.125rem);
            line-height: 1.8;
        }

        .welcome-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 52px;
            margin-top: 34px;
            padding: 0 24px;
            border-radius: 999px;
            color: #fff;
            background: linear-gradient(135deg, #7c6ce3, #5b7cfa);
            box-shadow: 0 10px 24px rgba(108, 99, 220, 0.28);
            font-size: 0.95rem;
            font-weight: 700;
            text-decoration: none;
            transition: transform 160ms ease, box-shadow 160ms ease;
        }

        .welcome-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(108, 99, 220, 0.34);
        }

        .welcome-link:focus-visible {
            outline: 3px solid #a5b4fc;
            outline-offset: 4px;
        }

        .footer-note {
            margin: 42px 0 0;
            color: #94a3b8;
            font-size: 0.85rem;
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>
<body>
    <main class="page">
        <section class="welcome-card" aria-labelledby="welcome-title">
            <p class="eyebrow"><span class="sparkle" aria-hidden="true">✦</span> Một khởi đầu thật đẹp</p>
            <h1 id="welcome-title">Chào mừng <span>bạn đến!</span></h1>
            <p class="message">
                Rất vui vì bạn đã ghé thăm website của chúng tôi.
                Hãy cùng khám phá những điều thú vị đang chờ đón phía trước nhé!
            </p>
            <a class="welcome-link" href="#gioi-thieu">
                Khám phá ngay <span aria-hidden="true">→</span>
            </a>
            <p class="footer-note" id="gioi-thieu">Cảm ơn bạn đã ở đây 💜</p>
        </section>
    </main>
</body>
</html>