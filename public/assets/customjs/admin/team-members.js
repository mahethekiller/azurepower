//  tinymce.init({ selector: '.editor', height: 300 });

let socialIndex = 1;

$('#addSocialLink').on('click', function () {
    const newRow = `
    <div class="row mb-3 social-link-row">
        <div class="col-md-4">
            <select name="social_links[${socialIndex}][icon]" class="form-control">
                <option value="fab fa-facebook">Facebook</option>
                <option value="fab fa-twitter">Twitter</option>
                <option value="fab fa-linkedin">LinkedIn</option>
                <option value="fab fa-instagram">Instagram</option>
                <option value="fab fa-youtube">YouTube</option>
            </select>
        </div>
        <div class="col-md-6">
            <input type="url" name="social_links[${socialIndex}][url]" class="form-control" placeholder="https://example.com">
        </div>
        <div class="col-md-2 d-flex align-items-end">
            <button type="button" class="btn btn-danger remove-social-link">Remove</button>
        </div>
    </div>
    `;
    $('#socialLinksWrapper').append(newRow);
    socialIndex++;
});

$(document).on('click', '.remove-social-link', function () {
    $(this).closest('.social-link-row').remove();
});


