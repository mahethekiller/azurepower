function toggleInputs() {
    var type = $("#type").val();
    if (type === "link") {
        $("#link_input").show();
        $("#file_input").hide();
    } else if (type === "file") {
        $("#file_input").show();
        $("#link_input").hide();
    } else {
        $("#link_input, #file_input").hide();
    }
}

$(document).ready(function () {
    toggleInputs(); // Call on page load
    $("#type").on("change", toggleInputs); // Call on type change
});



    $(document).ready(function() {
        $('#addRow').click(function() {
            var newRow = `<tr>
                <td>
                <input type="text" name="button_text[]" placeholder="Enter Button Text" class="form-control" required>
                </td>
                <td>
                    <select name="type[]" class="form-control type-select" required>
                        <option value="">Select Type</option>
                        <option value="link">Link</option>
                        <option value="file">File</option>
                    </select>
                </td>
                <td class="input-column"></td>
                <td><button type="button" class="btn btn-sm btn-danger remove-row">Remove</button></td>
            </tr>`;
            $('#dynamicTable tbody').append(newRow);
        });

        $(document).on('change', '.type-select', function() {
            var $inputColumn = $(this).closest('tr').find('.input-column');
            if ($(this).val() === 'link') {
                $inputColumn.html('<input type="url" name="link[]" class="form-control" placeholder="Enter Link" required>');
            } else if ($(this).val() === 'file') {
                $inputColumn.html('<input type="file" name="file[]" class="form-control" required>');
            } else {
                $inputColumn.empty();
            }
        });

        $(document).on('click', '.remove-row', function() {
            $(this).closest('tr').remove();
        });
    });
