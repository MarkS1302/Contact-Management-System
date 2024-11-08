<x-layout>
    <h1>Edit Contact</h1>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT') 
        
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="{{ old('first_name', $contact->first_name) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="{{ old('last_name', $contact->last_name) }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $contact->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update Contact</button>
    </form>
</x-layout>
