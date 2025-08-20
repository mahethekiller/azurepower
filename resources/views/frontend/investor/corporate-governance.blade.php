<x-common-layout :pageTitle="$pageTitle" :pageDescription="$pageDescription" :pageScript="$pageScript">


    <x-addons.pageheader :banners="$banners" />


    <div class="investor">
        <div class="container-fluid">
            <div class="row align-items-center">

                <ul class="nav nav-tabs d-none d-lg-flex p-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="governance-documents-tab" data-bs-toggle="tab"
                            data-bs-target="#governance-documents-tab-pane" type="button" role="tab"
                            aria-controls="governance-documents-tab-pane" aria-selected="true">Governance
                            Documents</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="committees-tab" data-bs-toggle="tab"
                            data-bs-target="#committees-tab-pane" type="button" role="tab"
                            aria-controls="committees-tab-pane" aria-selected="false">Committees</button>
                    </li>
                </ul>
                <div class="container">
                    <div class="tab-content accordion" id="myTabContent">
                        <div class="tab-pane fade show active accordion-item border-0 investor-bg-grey"
                            id="governance-documents-tab-pane" role="tabpanel"
                            aria-labelledby="governance-documents-tab" tabindex="0">
                            <h2 class="accordion-header d-lg-none" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">Governance Documents</button>
                            </h2>
                            <div class="container">
                                <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block"
                                    aria-labelledby="headingOne" data-bs-parent="#myTabContent">
                                    <div class="accordion-body">
                                        <h2>Governance Documents</h2>

                                        <div class="responsive-table">
                                            <table class="table table-striped table-hover prReports" width="100%">
                                                <thead>
                                                    <tr class="trHeaders mb-5">
                                                        <th class="pr-date-field">Dates</th>
                                                        <th class="pr-title-field">Title</th>
                                                        <th class="pr-document-field">Document</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                         @foreach ($cgdocs as $filling)
                                            <tr>
                                                <th width="10%">{{ $filling->doc_date->format('M d, Y') }}</th>
                                                <td width="80%">
                                                    @if ($filling->link)
                                                        <a href="{{ $filling->link }}">{{ $filling->title }}</a>
                                                    @elseif ($filling->file)
                                                        <a href="{{ asset('storage/' . $filling->file) }}">{{ $filling->title }}</a>
                                                    @else
                                                        {{ $filling->title }}
                                                    @endif
                                                </td>
                                                <td width="10%">
                                                    <div class="link-buttons">

                                                        <a class="pdf-swap"
                                                            href="{{ $filling->link != '' ? $filling->link : asset('storage/' . $filling->file) }}"
                                                            target="_blank">
                                                            {{ $filling->link != '' ? 'Read' : 'Download' }}
                                                        </a>

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

                        <div class="tab-pane fade accordion-item border-0 investor-bg-grey" id="committees-tab-pane"
                            role="tabpanel" aria-labelledby="committees-tab" tabindex="0">
                            <h2 class="accordion-header d-lg-none" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Committees
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse d-lg-block"
                                aria-labelledby="headingFour" data-bs-parent="#myTabContent">
                                <div class="accordion-body">

                                    <h2>Committees</h2>

                                    <main class="wrap">

                                        <div class="legend" aria-label="Legend">
                                            <div class="legend-item"><span class="icon chair" aria-hidden="true">
                                                    <!-- person icon -->
                                                    <svg viewBox="0 0 24 24" role="img" aria-label="Chairman icon">
                                                        <path
                                                            d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z" />
                                                    </svg>
                                                </span> Chairman</div>
                                            <div class="legend-item"><span class="icon member" aria-hidden="true">
                                                    <svg viewBox="0 0 24 24" role="img" aria-label="Member icon">
                                                        <path
                                                            d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z" />
                                                    </svg>
                                                </span> Member</div>
                                        </div>

                                        <section class="table-card" role="region" aria-label="Committees table">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Audit &amp; Risk<br />Committee</th>
                                                        <th scope="col">Nomination
                                                            and<br />Remuneration<br />Committee
                                                        </th>
                                                        <th scope="col">Investment &<br />Capital<br />Committee
                                                        </th>
                                                        <th scope="col">Sustainability<br />and CSR<br />Committee
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="name"><a href="#">BRIJESH MEHRA</a></td>
                                                        <td class="cell-center"
                                                            aria-label="Audit &amp; Risk Chairman">
                                                            <span class="icon member">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td class="cell-center"
                                                            aria-label="Nomination &amp; Remuneration Member"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Investment & Capital Committee"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Sustainability &amp; CSR Member"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="name"><a href="#">RICHARD PAYETTE</a></td>
                                                        <td class="cell-center"
                                                            aria-label="Audit &amp; Risk Chairman">
                                                            <span class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td class="cell-center"
                                                            aria-label="Nomination &amp; Remuneration Chairman"><span
                                                                class="icon member">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Investment & Capital Committee"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Sustainability &amp; CSR Member"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="name"><a href="#">PHILIPPE PIERRE WIND</a>
                                                        </td>
                                                        <td class="cell-center"
                                                            aria-label="Audit &amp; Risk Chairman">
                                                            <span class="icon member">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td class="cell-center"
                                                            aria-label="Nomination &amp; Remuneration Member"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Investment & Capital Committee"><span
                                                                class="icon member">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Sustainability &amp; CSR Chairman"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="name"><a href="#">JULIAN GRATIAEN</a></td>
                                                        <td class="cell-center"
                                                            aria-label="Audit &amp; Risk Chairman">
                                                            <span class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td class="cell-center"
                                                            aria-label="Nomination &amp; Remuneration Chairman"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z" />
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Investment & Capital Committee"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Sustainability &amp; CSR Member"><span
                                                                class="icon member">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="name"><a href="#">JEAN–FRANÇOIS
                                                                BOISVENU</a></td>
                                                        <td class="cell-center" aria-label="Audit &amp; Risk Member">
                                                            <span class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td class="cell-center"
                                                            aria-label="Nomination &amp; Remuneration Member"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Investment & Capital Committee"><span
                                                                class="icon member">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Sustainability &amp; CSR Member"><span
                                                                class="icon member">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="name"><a href="#">PRATIBHA BAJAJ</a></td>
                                                        <td class="cell-center"
                                                            aria-label="Audit &amp; Risk Chairman">
                                                            <span class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z" />
                                                                </svg>
                                                            </span>
                                                        </td>
                                                        <td class="cell-center"
                                                            aria-label="Nomination &amp; Remuneration Member"><span
                                                                class="icon member">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Investment & Capital Committee"><span
                                                                class="icon chair">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                        <td class="cell-center"
                                                            aria-label="Sustainability &amp; CSR Member"><span
                                                                class="icon member">
                                                                <svg viewBox="0 0 24 24">
                                                                    <path
                                                                        d="M12 12c2.761 0 5-2.239 5-5s-2.239-5-5-5-5 2.239-5 5 2.239 5 5 5zm0 2c-4.418 0-8 2.239-8 5v3h16v-3c0-2.761-3.582-5-8-5z">
                                                                    </path>
                                                                </svg>
                                                            </span></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </section>
                                    </main>




                                </div>
                            </div>
                        </div>


                    </div>

                </div>




            </div>
        </div>
    </div>


</x-common-layout>
