<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        :root {
            --gradient-1: #4f46e5;
            --gradient-2: #ec4899;
            --gradient-3: #f97316;
            --gradient-4: #14b8a6;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #ffffff;
            background: linear-gradient(
                135deg,
                var(--gradient-1),
                var(--gradient-2),
                var(--gradient-3),
                var(--gradient-4)
            );
            background-size: 400% 400%;
            animation: shift-gradient 18s ease infinite;
        }

        .card {
            text-align: center;
            padding: 3rem 4rem;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 1.25rem;
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.3);
            backdrop-filter: blur(8px);
            max-width: 520px;
            width: 100%;
        }

        h1 {
            margin: 0 0 1rem;
            font-size: clamp(2.25rem, 4vw, 3.25rem);
            letter-spacing: 0.03em;
        }

        p {
            margin: 0;
            font-size: clamp(1rem, 2vw, 1.25rem);
            color: rgba(255, 255, 255, 0.85);
        }

        @keyframes shift-gradient {
            0% {
                background-position: 0% 50%;
            }
            25% {
                background-position: 50% 100%;
            }
            50% {
                background-position: 100% 50%;
            }
            75% {
                background-position: 50% 0%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Welcome</h1>
        <p>Enjoy the relaxing gradient that flows across this page.</p>
    </div>
</body>
</html>
