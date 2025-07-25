<div class="tab-pane fade show active accordion-item border-0 investor-bg-grey" id="events-and-presentations-tab-pane"
    role="tabpanel" aria-labelledby="events-and-presentations-tab" tabindex="0">
    <h2 class="accordion-header d-lg-none" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">Press
            Release</button>
    </h2>
    <div class="container">
        <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne"
            data-bs-parent="#myTabContent">
            <div class="accordion-body">


                {{-- <div class="accordion" id="documentAccordion"> --}}
                @php
                    $groupedDocuments = $press_release->groupBy(function ($item) {
                        return $item->doc_date->format('Y');
                    });
                @endphp

                @foreach ($groupedDocuments as $year => $yearDocuments)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-{{ $year }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-{{ $year }}" aria-expanded="false"
                                aria-controls="collapse-{{ $year }}">
                                {{ $year }}
                            </button>
                        </h2>
                        <div id="collapse-{{ $year }}" class="accordion-collapse collapse"
                            aria-labelledby="heading-{{ $year }}" data-bs-parent="#documentAccordion">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover prReports">
                                        @foreach ($yearDocuments as $document)
                                            <tr>
                                                <td class="col-2">
                                                    {{ $document->doc_date->format('M d, Y') }}
                                                </td>
                                                <td class="col-8">
                                                    {{ $document->title }}
                                                </td>
                                                <td class="col-2">
                                                    <div class="link-buttons">
                                                        <a class="pdf-swap"
                                                            href="{{ $document->link != '' ? $document->link : asset('storage/' . $document->file) }}"
                                                            target="_blank">
                                                            {{ $document->link != '' ? 'Read' : 'Download' }}
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- </div> --}}




            </div>
        </div>
    </div>
</div>
