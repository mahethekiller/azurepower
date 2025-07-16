<x-userdashboard-layout>

<div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">

                    <h1>Events</h1>
                    <a href="{{ route('admin.investor.events.create') }}" class="btn btn-primary mb-3 pull-right">Add Event</a>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Subject</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                                <tr>
                                    <td>{{ $event->id }}</td>
                                    <td>{{ \Carbon\Carbon::parse($event->event_date)->format('d-M-Y') }}</td>
                                    <td>{{ $event->subject }}</td>

                                    <td>
                                        <a href="{{ route('admin.investor.events.edit', $event) }}"
                                            class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('admin.investor.events.destroy', $event) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this event?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</x-userdashboard-layout>
