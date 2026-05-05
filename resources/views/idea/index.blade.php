<x-layout title="All Ideas">
    <h1>All Ideas</h1>

    @if(session('success'))
        <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="margin-bottom: 20px;">
        <a href="{{ route('ideas.create') }}" style="background-color: #007bff; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px;">
            Create New Idea
        </a>
    </div>

    @if($ideas->count() > 0)
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f8f9fa; border-bottom: 2px solid #dee2e6;">
                    <th style="padding: 10px; text-align: left;">ID</th>
                    <th style="padding: 10px; text-align: left;">Description</th>
                    <th style="padding: 10px; text-align: left;">Created At</th>
                    <th style="padding: 10px; text-align: left;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ideas as $idea)
                    <tr style="border-bottom: 1px solid #dee2e6;">
                        <td style="padding: 10px;">{{ $idea->id }}</td>
                        <td style="padding: 10px;">{{ Str::limit($idea->description, 50) }}</td>
                        <td style="padding: 10px;">{{ $idea->created_at->format('M d, Y') }}</td>
                        <td style="padding: 10px;">
                            <a href="{{ route('ideas.show', $idea) }}" style="color: #007bff; text-decoration: none; margin-right: 10px;">View</a>
                            <a href="{{ route('ideas.edit', $idea) }}" style="color: #28a745; text-decoration: none; margin-right: 10px;">Edit</a>
                            <form method="POST" action="{{ route('ideas.destroy', $idea) }}" style="display: inline;" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="color: #dc3545; text-decoration: none; background: none; border: none; cursor: pointer;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="color: #666; font-style: italic;">No ideas yet. <a href="{{ route('ideas.create') }}">Create one</a></p>
    @endif
</x-layout>
