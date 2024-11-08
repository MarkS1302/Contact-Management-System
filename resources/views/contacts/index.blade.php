<x-layout>
    <h1>Contacts</h1>
    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add Contact</a> 

    @if ($contacts->count())
        <ul>
            @foreach ($contacts as $contact)
                <li>
                    {{ $contact->first_name }} {{ $contact->last_name }} - 
                    <a href="{{ route('contacts.show', $contact->id) }}">View</a> | 
                    <a href="{{ route('contacts.edit', $contact->id) }}">Update</a> 
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link text-danger" onclick="return confirm('Are you sure you want to delete this contact?')">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No contacts found.</p>
    @endif
</x-layout>
