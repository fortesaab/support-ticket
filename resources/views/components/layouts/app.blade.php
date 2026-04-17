<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Support Ticket')</title>
    <style>
        :root {
            --bg: #f4f7fb;
            --card: #ffffff;
            --text: #172033;
            --muted: #5b6577;
            --primary: #0f172a;
            --accent: #2563eb;
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
            background:
                radial-gradient(circle at top, #dbeafe 0%, #f4f7fb 40%, #eef2ff 100%);
            color: var(--text);
        }

        .page {
            max-width: 1100px;
            margin: 0 auto;
            padding: 32px 20px 48px;
        }

        .shell {
            background: rgba(255, 255, 255, 0.88);
            border: 1px solid rgba(219, 228, 240, 0.9);
            border-radius: 28px;
            box-shadow: var(--shadow);
            overflow: hidden;
            backdrop-filter: blur(8px);
        }

        .shell-header {
            padding: 28px 30px 20px;
            border-bottom: 1px solid var(--border);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(239, 246, 255, 0.85));
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
            background: var(--card);
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
            box-shadow: 0 12px 24px rgba(37, 99, 235, 0.2);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .button:hover {
            transform: translateY(-1px);
            box-shadow: 0 16px 28px rgba(37, 99, 235, 0.24);
        }

        .grid {
            display: grid;
            gap: 24px;
        }

        .grid-2 {
            grid-template-columns: 1.5fr 1fr;
        }

        .stat {
            padding: 20px;
            border-radius: 20px;
            border: 1px solid var(--border);
            background: #f8fbff;
        }

        .stat-label {
            margin: 0;
            color: var(--muted);
            font-size: 14px;
        }

        .stat-value {
            margin: 10px 0 0;
            font-size: 28px;
            font-weight: 800;
            color: var(--text);
        }

        .profile-panel {
            border-radius: 24px;
            padding: 28px;
            background: linear-gradient(160deg, #0f172a, #1e293b);
            color: white;
        }

        .profile-label {
            margin: 0 0 18px;
            color: #bfdbfe;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .profile-name {
            margin: 0;
            font-size: 24px;
            font-weight: 800;
        }

        .profile-email {
            margin: 8px 0 0;
            color: #cbd5e1;
            font-size: 15px;
        }

        .note {
            margin-top: 22px;
            padding: 18px;
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.08);
            color: #e2e8f0;
            line-height: 1.7;
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

        @media (max-width: 860px) {
            .grid-2 {
                grid-template-columns: 1fr;
            }

            .brand {
                font-size: 34px;
            }

            .shell-header,
            .shell-body,
            .card,
            .profile-panel {
                padding: 22px;
            }
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
