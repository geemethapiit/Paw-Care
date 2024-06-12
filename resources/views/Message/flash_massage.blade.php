@if (session('success'))
    <div class="bg-green-500 text-white p-4 mb-4">
        {{ session('success') }}
    </div>
@endif


@if ($records->isEmpty())
    <p>No medical records found.</p>
@else
    <table class="w-full bg-white shadow rounded">
        <thead>
            <tr>
                <th class="px-4 py-2">Pet Name</th>
                <th class="px-4 py-2">Customer Name</th>
                <th class="px-4 py-2">Date of Record</th>
                <th class="px-4 py-2">Treatment Given</th>
                <th class="px-4 py-2">Veterinarian Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
                <tr>
                    <td class="border px-4 py-2">{{ $record->pet_name }}</td>
                    <td class="border px-4 py-2">{{ $record->customer_name }}</td>
                    <td class="border px-4 py-2">{{ $record->date_of_record }}</td>
                    <td class="border px-4 py-2">{{ $record->treatment_given }}</td>
                    <td class="border px-4 py-2">{{ $record->veterinarian_name }}</td>
                    <td class="px-4 py-2">
                        <a href="{{ route('medical-records.edit', $record->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                        <form action="{{ route('medical-records.destroy', $record->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
