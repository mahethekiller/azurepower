$(function () {
    let ajaxUrl = $('#documents-table').data('url');

    $('#documents-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: window.ajaxUrl, // or from data-url
    columns: [
        { data: 'title', name: 'title' },
        {
            data: 'doc_date',
            name: 'doc_date',
            type: 'date', // Tell DataTable it’s a date column
        },
        { data: 'link', name: 'link', orderable: false, searchable: false },
        { data: 'file', name: 'file', orderable: false, searchable: false },
        { data: 'action', name: 'action', orderable: false, searchable: false }
    ],
    order: [[1, 'desc']], // default sort on date descending
});

});
