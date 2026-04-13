# Support Ticket

## Database Setup (Docker)

This project uses Docker so both team members use the same MySQL database setup without installing MySQL directly.

Database name: `support_ticket`

### Start the database

```powershell
docker compose up -d
```

Start Laravel:
docker compose exec app php artisan serve

Start Vite:
npm run dev

Stack:
Tailwind CSS v4
Livewire v4
Smoke-test:
http://localhost:8000/smoke-test
