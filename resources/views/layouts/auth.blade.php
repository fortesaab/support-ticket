<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Support Ticket')</title>
    <style>
        :root {
            --text: #172033;
            --muted: #5b6577;
            --border: #dbe4f0;
            --shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: radial-gradient(circle at top, #dbeafe 0%, #f4f7fb 40%, #eef2ff 100%);
            color: var(--text);
        }

        .page {
            max-width: 1100px;
            margin: 0 auto;
            padding: 32px 20px 48px;
        }

        .shell {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(219, 228, 240, 0.9);
            border-radius: 28px;
            box-shadow: var(--shadow);
            overflow: hidden;
            backdrop-filter: blur(8px);
        }

        .shell-header {
            padding: 28px 30px 20px;
            border-bottom: 1px solid var(--border);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.96), rgba(239, 246, 255, 0.85));
        }

        .eyebrow {
            display: inline-block;
            padding: 7px 12px;
            border-radius: 999px;
            background: #e0ecff;
            color: #2453b3;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .brand {
            margin: 14px 0 6px;
            font-size: 42px;
            line-height: 1;
            font-weight: 800;
            letter-spacing: -0.03em;
        }

        .subtitle {
            margin: 0;
            max-width: 700px;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.6;
        }

        .shell-body {
            padding: 30px;
        }

        .card {
            background: white;
            border: 1px solid var(--border);
            border-radius: 24px;
            box-shadow: 0 14px 35px rgba(15, 23, 42, 0.06);
            padding: 28px;
        }

        .section-title {
            margin: 0 0 10px;
            font-size: 34px;
            line-height: 1.1;
            font-weight: 800;
            letter-spacing: -0.03em;
        }

        .section-copy {
            margin: 0;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.7;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 24px;
            padding: 14px 20px;
            border-radius: 14px;
            background: linear-gradient(135deg, #111827, #1d4ed8);
            color: #fff;
            text-decoration: none;
            font-weight: 700;
        }

        .alert {
            margin-top: 20px;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid #fecaca;
            background: #fef2f2;
            color: #b91c1c;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="shell">
            <div class="shell-header">
                <span class="eyebrow">Support Portal</span>
                <h1 class="brand">Support Ticket</h1>
                <p class="subtitle">
                    Role-based access for admins, agents, and customers, with a cleaner and more intentional interface.
                </p>
            </div>

            <div class="shell-body">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
