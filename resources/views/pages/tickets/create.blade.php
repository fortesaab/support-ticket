@extends('layouts.app')

@section('title', 'Create Ticket')

@section('content')
    <div class="card" style="max-width: 800px; margin: 0 auto;">
        <span class="eyebrow">New Ticket</span>
        <h2 class="section-title" style="margin-top: 18px;">Create a support request</h2>
        <p class="section-copy">
            Describe your issue clearly so the support team can respond faster.
        </p>

        @if ($errors->any())
            <div class="alert">
                <ul style="margin: 0; padding-left: 18px;">
                    @foreach ($errors->all() as $error)
                        <li style="margin-bottom: 6px;">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('tickets.store') }}" style="margin-top: 24px; display: grid; gap: 18px;">
            @csrf

            <div>
                <label for="title" style="display: block; font-weight: 700; margin-bottom: 8px;">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                    style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 12px;">
            </div>

            <div>
                <label for="description" style="display: block; font-weight: 700; margin-bottom: 8px;">Description</label>
                <textarea id="description" name="description" rows="6"
                    style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 12px;">{{ old('description') }}</textarea>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 18px;">
                <div>
                    <label for="category_id" style="display: block; font-weight: 700; margin-bottom: 8px;">Category</label>
                    <select id="category_id" name="category_id"
                        style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 12px;">
                        <option value="">Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="priority_id" style="display: block; font-weight: 700; margin-bottom: 8px;">Priority</label>
                    <select id="priority_id" name="priority_id"
                        style="width: 100%; padding: 12px 14px; border: 1px solid #cbd5e1; border-radius: 12px;">
                        <option value="">Select priority</option>
                        @foreach ($priorities as $priority)
                            <option value="{{ $priority->id }}" @selected(old('priority_id') == $priority->id)>
                                {{ $priority->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div>
                <x-ui.button type="submit" variant="primary">
                    Create Ticket
                </x-ui.button>

            </div>
        </form>
    </div>
@endsection
