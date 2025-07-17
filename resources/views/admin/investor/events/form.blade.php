<form
    action="{{ isset($event) ? route('admin.investor.events.update', $event->id) : route('admin.investor.events.store') }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @if (isset($event))
        @method('PUT')
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <label for="event_date">Event Date</label>
        <input type="date" name="event_date" class="form-control"
            value="{{ old('event_date', isset($event) ? $event->event_date : '') }}" required>
    </div>

    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" class="form-control" value="{{ old('subject', $event->subject ?? '') }}"
            required>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="dynamicTable">
            <thead>
                <tr>
                    <th>Button Text</th>
                    <th>Type</th>
                    <th>Link/File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $items = old('button_text')
                        ? collect(old('button_text'))->map(function ($text, $i) use ($event) {
                            return [
                                'button_text' => $text,
                                'type' => old('type.' . $i),
                                'link' => old('type.' . $i) === 'link' ? old('link.' . $i) : null,
                                'file' => old('type.' . $i) === 'file' ? null : null, // file can't be retained
        ];
    })
    : (isset($event)
        ? $event->items
        : collect([['button_text' => '', 'type' => '', 'link' => '', 'file' => '']]));
                @endphp

                @foreach ($items as $index => $item)
                    <tr>
                        <td>
                            <input type="text" name="button_text[]" placeholder="Enter Button Text"
                                value="{{ $item['button_text'] ?? '' }}" class="form-control" required>
                        </td>
                        <td>
                            <select name="type[]" class="form-control type-select" required>
                                <option value="">Select Type</option>
                                <option value="link" {{ $item['type'] === 'link' ? 'selected' : '' }}>Link</option>
                                <option value="file" {{ $item['type'] === 'file' ? 'selected' : '' }}>File</option>
                            </select>
                        </td>
                        <td class="input-column">
                            @if ($item['type'] === 'link')
                                <input type="url" name="link[]" value="{{ $item['link'] ?? '' }}"
                                    class="form-control" placeholder="Enter Link" required>
                            @elseif ($item['type'] === 'file')
                                <input type="file" name="file[]" class="form-control">
                                @if (isset($item->file) && $item->file)
                                    <p>Existing File:
                                        <a href="{{ asset('storage/' . $item->file) }}" target="_blank">View</a>
                                    </p>
                                    <!-- Hidden field to retain old file if no new upload -->
                                    <input type="hidden" name="existing_file[]" value="{{ $item->file }}">
                                @endif
                            @endif
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger remove-row">Remove</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="button" class="btn btn-sm btn-primary pull-right" id="addRow">Add More</button>
    </div>

    <button type="submit" class="btn btn-success">{{ isset($event) ? 'Update' : 'Save' }}</button>
</form>
