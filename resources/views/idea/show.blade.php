<x-layout title="View Idea">
    <h1>Idea Details</h1>

    <div style="max-width: 600px; margin: 30px 0;">
        <div class="card">
            <h2 style="margin-top: 0;">Idea #{{ $idea->id }}</h2>

            <div style="margin: 20px 0;">
                <h3 style="margin-top: 0; color: #666;">Description:</h3>
                <p style="line-height: 1.6; white-space: pre-wrap;">{{ $idea->description }}</p>
            </div>

            <div style="margin: 20px 0;">
                <p style="color: #666; margin: 5px 0;">
                    <strong>Created:</strong> {{ $idea->created_at->format('M d, Y \a\t h:i A') }}
                </p>
                <p style="color: #666; margin: 5px 0;">
                    <strong>Last Updated:</strong> {{ $idea->updated_at->format('M d, Y \a\t h:i A') }}
                </p>
            </div>

            <div style="margin-top: 30px; border-top: 1px solid #ddd; padding-top: 20px;">
                <a href="{{ route('ideas.edit', $idea) }}" style="background-color: #007bff; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; margin-right: 10px;">
                    Edit
                </a>
                <form method="POST" action="{{ route('ideas.destroy', $idea) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this idea?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background-color: #dc3545; color: white; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;">
                        Delete
                    </button>
                </form>
                <a href="{{ route('ideas.index') }}" style="background-color: #6c757d; color: white; padding: 10px 15px; text-decoration: none; border-radius: 5px; margin-left: 10px;">
                    Back to List
                </a>
            </div>
        </div>
    </div>
</x-layout>
