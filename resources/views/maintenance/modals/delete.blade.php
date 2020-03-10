<div id="delete_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Are you sure you want to delete this?</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post">

                    <div class="form-group row">
                        <div class="col-12">
                            <input 
                                type="button" 
                                value="Cancel" 
                                name="cancel" 
                                id="cancel" 
                                class="btn btn-success" 
                                data-dismiss="modal"
                            >
                            <input 
                                type="button" 
                                value="Delete" 
                                name="delete" 
                                id="delete" 
                                class="btn btn-danger" 
                                data-dismiss="modal"
                            >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>