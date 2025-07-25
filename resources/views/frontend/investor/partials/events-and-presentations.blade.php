<div class="tab-pane fade show active accordion-item border-0 investor-bg-grey"
                            id="events-and-presentations-tab-pane" role="tabpanel"
                            aria-labelledby="events-and-presentations-tab" tabindex="0">
                            <h2 class="accordion-header d-lg-none" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">Events and Presentations</button>
                            </h2>
                            <div class="container">
                                <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block"
                                    aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                    <div class="accordion-body">
                                        <h2>Events and Presentations</h2>
                                        <h3>Upcoming Events</h3>

                                        <div class="responsive-table">
                                            <table class="table table-striped table-hover prReports" width="100%">
                                            <table class="table table-striped table-hover prReports" width="100%">
                                                <thead>
                                                    <tr class="trHeaders mb-5">
                                                        <th class="pr-date-field">Dates</th>
                                                        <th class="pr-title-field">Event Subject</th>
                                                        <th class="pr-document-field">Supporting links</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($upcomingEvents as $upcomingEvent):
                                                    <tr width="100%">
                                                        <th width="10%">
                                                            {{-- {{ \Carbon\Carbon::parse($upcomingEvent->event_date)->format('M d, Y') }} --}}

                                                            {{ $upcomingEvent->event_date->format('M d, Y') }}

                                                        </th>
                                                        <td width="50%">Investor Presentation November 2023</td>
                                                        <td width="40%">
                                                            <div class="link-buttons">
                                                            @if (count($upcomingEvent->items) > 0)
                                                                @foreach ($upcomingEvent->items as $item)
                                                                    <a class="pdf-swap" href="{{ isset($item->link) ? $item->link : asset('storage/' . $item->file) }}" target="_blank">
                                                                        {{ $item->button_text }}

                                                                    </a>
                                                                @endforeach
                                                            @else
                                                                <p class="text-center">No files available</p>
                                                            @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <h3>Past Events</h3>
                                        <div class="responsive-table">
                                            <table class="table table-striped table-hover prReports" width="100%">
                                                <thead>
                                                    <tr class="trHeaders mb-5">
                                                        <th class="pr-date-field">Dates</th>
                                                        <th class="pr-title-field">Event Subject</th>
                                                        <th class="pr-document-field">Supporting links</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($pastEvents as $pastEvent)
                                                    <tr>
                                                        <th width="10%">{{ $pastEvent->event_date->format('M d, Y') }}</th>
                                                        <td width="50%">{{ $pastEvent->subject }}</td>
                                                        <td width="40%">
                                                            <div class="link-buttons">
                                                            @if (count($pastEvent->items) > 0)
                                                                @foreach ($pastEvent->items as $item)
                                                                    <a class="pdf-swap" href="{{ isset($item->link) ? $item->link : asset('storage/' . $item->file) }}" target="_blank">
                                                                        {{ $item->button_text }}

                                                                    </a>
                                                                @endforeach
                                                            @else
                                                                <p class="text-center">No files available</p>
                                                            @endif
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
