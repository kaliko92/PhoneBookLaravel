{{-- 
    moadl = main modal
    modalTitle
    modalBody
    form
    --}}

<div class="modal fade" id="modal"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalTitle">Add New Contact Type</h4>
            </div>
            <div class="modal-body">
                <form id="form" name="form" class="form-horizontal">
                    <input type="hidden" name="contactTypeId" id="contactTypeId">

                    <div class="form-group">
                        <label for="txtName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="txtName" name="txtName" value="" required="">
                        </div>
                    </div>
                

                    <div class="form-group">
                        <div id="alert"  class="alert alert-danger" style="display:none;">
                            <strong>Warning!</strong>
                            <span id="message"></span>
                            <button class="close" type="button" data-hide="alert" aria-label="close">&times;</button>
                        </div>
                    </div>                   
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit"  class="btn btn-primary" id="btnSave" value="create">Save</button>
                <a href="" data-dismiss="modal" aria-label="Close" class="btn btn-danger" id="btnClose">Close</a>
            </div>
        </div>
    </div>
</div>
