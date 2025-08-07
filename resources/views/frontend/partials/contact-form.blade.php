<form id="contactForm" action="#" method="POST" data-toggle="validator">
    <div class="row">
        <div class="form-group col-md-6 mb-4">
            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group col-md-6 mb-4">
            <input type="email" name ="email" class="form-control" id="email" placeholder="Email" required>
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group col-md-6 mb-4">
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group col-md-6 mb-4">
            <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group col-md-6 mb-4">
            <input type="text" name="querytype" class="form-control" id="querytype" placeholder="Query Type"
                required>
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group col-md-6 mb-4">
            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group col-md-12 mb-4">
            <input class="form-control" type="file" id="formFile" multiple>
            <p class="mb-0 small">(Maximum 5 MB) One file only. 5 MB limit. Allowed types:
                pdf, doc, docx. 50 bytes limit per form.</p>
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group col-md-12 mb-4">
            <textarea name="msg" class="form-control" id="msg" rows="4" placeholder="Questions/Comments/Message"
                required></textarea>
            <div class="help-block with-errors"></div>
        </div>

        <div class="col-md-12 text-center">
            <button type="submit" class="btn-default">Submit</button>
            <div id="msgSubmit" class="h3 text-left hidden"></div>
        </div>
    </div>
</form>
