@extends('Admin')

@section('content')
    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-md-6">


                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Assaigned Case List</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped thead-primary w-100">
                                <thead>
                                <tr >
                                    <th>Case id</th>
                                    <th>Case Title</th>
                                    <th>User First Name</th>
    
                                    <th>Action</th>
                                </tr>
                                </thead>
    
                                <tfoot>
                                <tr >
                                    <th>Case id</th>
                                    <th>Case Title</th>
                                    <th>User First Name</th>
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
                "autoWidth": false,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "ajax": '/get-assaigned-cases'
            });
        });
    </script>
@endsection
