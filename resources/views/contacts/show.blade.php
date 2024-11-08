<x-layout>
    <h1>Contact Details</h1>

    <ul>
        <li><strong>First Name:</strong> {{ $contact->first_name }}</li>
        <li><strong>Last Name:</strong> {{ $contact->last_name }}</li>
        <li><strong>Phone:</strong> {{ $contact->phone }}</li>
        <li><strong>Description:</strong> {{ $contact->description }}</li>
    </ul>

    <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Back to Contacts</a>
</x-layout>