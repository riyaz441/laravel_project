<x-layout title="Create Idea">
    <h1>Create a New Idea</h1>

    <div style="max-width: 600px; margin: 30px 0;">
        <form method="POST" action="{{ route('ideas.store') }}">
            @csrf

            <div style="margin-bottom: 20px;">
                <label for="description" style="display: block; margin-bottom: 8px; font-weight: bold;">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="8"
                    placeholder="Enter your idea description..."
                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-family: Arial, sans-serif; box-sizing: border-box;"
                >{{ old('description') }}</textarea>

                @error('description')
                    <div style="color: #dc3545; font-size: 14px; margin-top: 5px;">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div style="margin-bottom: 20px;">
                <button type="submit" style="background-color: #28a745; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
                    Create Idea
                </button>
                <a href="{{ route('ideas.index') }}" style="background-color: #6c757d; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-left: 10px; display: inline-block;">
                    Cancel
                </a>
            </div>
        </form>
    </div>

    <div style="background-color: #f8f9fa; padding: 15px; border-radius: 5px; margin-top: 30px;">
        <h3 style="margin-top: 0;">Validation Rules:</h3>
        <ul style="margin: 0; padding-left: 20px;">
            <li>Description is required</li>
            <li>Minimum 5 characters</li>
            <li>Maximum 1000 characters</li>
        </ul>
    </div>
</x-layout>
