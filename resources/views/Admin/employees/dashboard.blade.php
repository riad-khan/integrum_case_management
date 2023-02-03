@extends('Admin')

@section('content')
    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-md-8">


                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Assaigned Case List</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped thead-primary w-100">
                                <thead>
                                    <tr>
                                        <th>Case id</th>
                                        <th>Case Title</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Case id</th>
                                        <th>Case Title</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Action</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div id="details" class="hidden col-xl-4 col-md-12">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-body">
                        <h2 class="section-title">Case Information</h2>
                        <table class="table ms-profile-information">
                            <tbody>
                                <tr>
                                    <th scope="row">Case ID</th>
                                    <td id="case_id"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Case Title</th>
                                    <td id="title"></td>
                                </tr>
                                
                                <tr>
                                    <th scope="row">Case Details</th>
                                    <td id="description"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Case Score</th>
                                    <td id="score"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td id="name"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Assigned To</th>
                                    <td id="Assigned_to"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Created At</th>
                                    <td id="created_at"></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        $(function() {
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

       async function showDetails(id) {
        document.getElementById('details').classList.remove('hidden');
        const response = await axios.get(`/api/case-details-employee/${id}`);
        document.getElementById('case_id').innerText = id;
        document.getElementById('title').innerText = response.data[0].case_title;
        document.getElementById('description').innerText = response.data[0].description;
        document.getElementById('score').innerText = response.data[0].case_score;
        document.getElementById('name').innerText = response.data[0].user_first+ ' ' + response.data[0].user_last ;
      document.getElementById('Assigned_to').innerText = response.data[0].first_name+ ' ' + response.data[0].last_name ;
        document.getElementById('created_at').innerText = response.data[0].created_at ;
        
        
        }
    </script>
@endsection
