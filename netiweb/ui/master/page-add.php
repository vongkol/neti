<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            New Page
        </div>
    </div>
    <div class="col-sm-6" style="text-align: right">
         <input type="submit" value="Save" class="btn btn-primary btn-sm" />
         <input type="reset" value="Cancel" class="btn btn-danger btn-sm" />
    </div>
</div>
<hr />
<div class="row">
    <div class="col-sm-12">
        <form action="#" method="post">
            <label for="title" class="control-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" />
            <label for="description" class="control-label">Description</label>
            <textarea id="description" name="description" class="form-control"></textarea>
             <p id="url">page url will be here...</p>    
        </form>
         
    </div>
</div>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
<script>
    window.onload=function()
    {
        CKEDITOR.replace('description');
    };
</script>