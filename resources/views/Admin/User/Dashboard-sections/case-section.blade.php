<div class="{{isset($id)? 'col-md-9':'col-md-6'}}">
    <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-header">
            <h6>Case Section</h6>
        </div>
        <div class="ms-panel-body">
            <div class="p-0">
                <button type="button" class="btn mb-2 btn-primary" data-toggle="modal" data-target="#notes-modal">
                    Create New Case
                </button>
                <div class="card">
                    <div class="card-body p-0">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                            <tr style="background-color: white">
                                <th>Id</th>
                                <th>Title</th>

                                <th>Action</th>
                            </tr>
                            </thead>

                            <tfoot>
                            <tr style="background-color: white">
                                <th>Id</th>
                                <th>Title</th>

                                <th>Action</th>

                            </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- cases Modal -->
<div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header bg-secondary">
                <h5 class="modal-title has-icon text-white" id="NoteModal">New Case</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{url('/create-case')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    <div class="ms-form-group">
                        <label>Case Title</label>
                        <input type="text" class="form-control" name="case_title" value="">
                    </div>

                    <div class="ms-form-group">
                        <label>Case Description</label>
                        <textarea class="form-control" name="case_description"></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-secondary shadow-none">Add Note</button>
                </div>

            </form>

        </div>
    </div>
</div>

<!-- cases update Modal -->
<div class="modal fade" id="edit-notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header bg-secondary">
                <h5 class="modal-title has-icon text-white" id="NoteModal">Edit Case</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

         
                @csrf

                <div class="modal-body">

                    <div class="ms-form-group">
                        <label>Case Title</label>
                        <input type="text" id="case_title" class="form-control" name="case_title">
                    </div>

                    <input type="hidden" id="case_id">

                    <div class="ms-form-group">
                        <label>Case Description</label>
                        <textarea class="form-control" id="case_description" name="case_description"></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button onclick="updateCase()"  class="btn btn-secondary shadow-none">Update Case</button>
                </div>

           

        </div>
    </div>
</div>

