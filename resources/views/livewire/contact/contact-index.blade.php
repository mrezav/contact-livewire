<div>
    <ul>
        @foreach ($data as $contact)
            <li>{{ $contact->name }} - {{ $contact->phone }}</li>
        @endforeach
    </ul>
</div>
