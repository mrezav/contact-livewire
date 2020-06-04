<div>
    <div class="container">
        <livewire:contact.contact-create></livewire:contact.contact-create>
        <hr>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 0 @endphp
                @foreach ($data as $contact)
                    @php $no++ @endphp
                    <tr>
                        <td scope="row">{{ $no }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>
                            <button class="btn btn-info text-white btn-sm">Edit</button>
                            <button class="btn btn-danger text-white btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
