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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
$("#submit_form").on('submit',(function(e) {
e.preventDefault();
$.ajax({
url:"upload.php",
type: "POST",
data:new FormData(this),
processData:false,
contentType: false,
success: function(data){
   console.log(data);
},
error: function(){
console.log("Internal Server error 404");
}
});

}));
});
</script>