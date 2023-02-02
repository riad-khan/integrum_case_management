@extends('Admin')

@section('content')
<div class="ms-content-wrapper">
    <div class="row">
        <div class="col-md-12">


            <div class="ms-panel">
                <div class="flex ms-panel-header">
                    <h6>User Management</h6>
                    <a href="/create-user" class="btn mb-2 mt-2 btn-primary">
                        Create New User
                    </a>
                    
                </div>
                <div class="ms-panel-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped thead-primary w-100">
                            <thead>
                            <tr >
                                <th>Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                

                                <th>Action</th>
                            </tr>
                            </thead>

                            <tfoot>
                                <tr >
                                    <th>Id</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Roles</th>
    
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
<script src="//code.jquery.com/jquery-3.5.1.js"></script>
<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "lengthChange": false,
            "autoWidth": false,
            "responsive": true,
            "processing": true,
            "serverSide": true,
            "ajax": '/get-user-list'
        });
    });
</script>
@endsection