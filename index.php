<form method="post" id="submit_form" enctype="multipart/form-data">
    <div>
        <input type="file" name="file" id="upload_file">
    </div>
    <!--<div>
        <input type="file" name="files[]" multiple>
    </div>-->
    <select class="form-control" name="convertto">
        <option value="WORD">WORD</option>
        <option value="HTML">HTML</option>
        <option value="Excel">Excel</option>
    </select>
    <div>
        <button type="submit" name="submit" id="upload">Submit</button>
    </div>
</form>