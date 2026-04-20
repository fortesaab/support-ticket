<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Status;
use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TicketController extends Controller
{
    public function create(): View
    {
        return view('pages.tickets.create', [
            'categories' => Category::orderBy('name')->get(),
            'priorities' => Priority::orderBy('level')->get(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'category_id' => ['nullable', 'exists:categories,id'],
            'priority_id' => ['required', 'exists:priorities,id'],
        ]);

        $openStatus = Status::where('name', 'Open')->firstOrFail();

        Ticket::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'customer_id' => auth()->id(),
            'agent_id' => null,
            'category_id' => $validated['category_id'] ?? null,
            'priority_id' => $validated['priority_id'],
            'status_id' => $openStatus->id,
        ]);

        return redirect()->route('dashboard')->with('success', 'Ticket created successfully.');
    }
    public function index(): View
    {
        $tickets = Ticket::with(['category', 'priority', 'status'])
            ->where('customer_id', auth()->id())
            ->latest()
            ->get();

        return view('pages.tickets.index', [
            'tickets' => $tickets,
        ]);
    }
    public function show(Ticket $ticket): View
    {
        abort_if($ticket->customer_id !== auth()->id(), 403);

        $ticket->load(['customer', 'agent', 'category', 'priority', 'status']);

        return view('pages.tickets.show', [
            'ticket' => $ticket,
        ]);
    }

}
