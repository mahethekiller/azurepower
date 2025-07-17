<x-userdashboard-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">
    <div class="row">
        <div class="col-md-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h2>Update Event</h2>
                    {{-- @include('admin.investor.events.form') --}}
                    <form action="{{ route('admin.investor.events.update', $event->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
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
                                value="{{ old('event_date', $event->event_date) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control"
                                value="{{ old('subject', $event->subject) }}" required>
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
                                    @foreach ($event->items as $index => $item)
                                        <tr>
                                            <td>
                                                <input type="text" name="button_text[]"
                                                    value="{{ old('button_text.' . $index, $item->button_text) }}"
                                                    class="form-control" required>
                                            </td>
                                            <td>
                                                <select name="type[]" class="form-control type-select" required>
                                                    <option value="">Select Type</option>
                                                    <option value="link"
                                                        {{ old('type.' . $index, $item->type) == 'link' ? 'selected' : '' }}>
                                                        Link</option>
                                                    <option value="file"
                                                        {{ old('type.' . $index, $item->type) == 'file' ? 'selected' : '' }}>
                                                        File</option>
                                                </select>
                                            </td>
                                            <td class="input-column">
                                                @if ($item->type === 'link')
                                                    <input type="url" name="link[]"
                                                        value="{{ old('link.' . $index, $item->link) }}"
                                                        class="form-control" placeholder="Enter Link" required>
                                                @elseif($item->type === 'file')
                                                    <input type="file" name="file[]" class="form-control">
                                                    @if ($item->file)
                                                        <p>Existing File: <a href="{{ asset('storage/' . $item->file) }}"
                                                                target="_blank">View</a></p>
                                                        <input type="hidden" name="existing_file[]"
                                                            value="{{ $item->file }}">
                                                    @endif
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button"
                                                    class="btn btn-sm btn-danger remove-row">Remove</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-sm btn-primary pull-right" id="addRow">Add More</button>
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                    </form>


                </div>
            </div>
        </div>
    </div>




</x-userdashboard-layout>
