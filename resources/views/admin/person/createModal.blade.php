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
                <h4 class="modal-title" id="modalTitle">Add Person</h4>
            </div>
            <div class="modal-body">
                <form id="form" name="form" class="form-horizontal">
                    <input type="hidden" name="personId" id="personId">

                    <div class="form-group">
                        <label for="txtName" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="txtName" name="txtName" value="" required="">
                        </div>
                    </div>

                    {{-- <div class="form-group">
                        <label for="txtPhone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="txtPhone" name="txtPhone" value="" required="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="txtNote" class="col-sm-2 control-label">Note</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="txtNote" name="txtNote" value="" required="">
                        </div>
                    </div> --}}

                    {{-- <div class="form-group">
                        <label for="slctCategory" class="col-sm-6 control-label">Parent Category</label>
                        <div class="col-sm-12">
                            <select name="slctCategory" id="slctCategory" class="form-control"  aria-label="Default select example">
                                @isset($categories)
                                    @foreach($categories as $categ)
                                        <option id={{$categ->id}} value={{$categ->name}} >
                                            {{$categ->code}} - {{$categ->name}}
                                        </option>
                                    @endforeach
                                @endisset                                
                            </select>
                        </div>
                    </div> --}}

                    <div class="form-group">
{{--                         
                        <div id="alert"  class="alert alert-danger alert-dismissible" style="display:none;" role="alert" data-dismiss="alert">
                            <strong>Warning!</strong>
                            <span id="message"></span>
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        </div> --}}
                        <div id="alert"  class="alert alert-danger" style="display:none;">
                            <strong>Warning!</strong>
                            <span id="message"></span>
                            <button class="close" type="button" data-hide="alert" aria-label="close">&times;</button>
                        </div>
                    </div>
                    {{-- <div class="col-sm-offset-2 col-sm-10">
                        
                    </div> --}}
                </form>
            </div>
            <div class="modal-footer">
                {{-- <button type="submit" form= class="btn btn-primary" id="btn-save" value="create">Save</button> --}}
                <button type="submit"  class="btn btn-primary" id="btnSave" value="create">Save</button>
                {{-- <a href="" rel="modal:close" class="btn btn-danger" id="btnClose">Close</a> --}}
                <a href="" data-dismiss="modal" aria-label="Close" class="btn btn-danger" id="btnClose">Close</a>

            </div>
        </div>
    </div>
</div>
