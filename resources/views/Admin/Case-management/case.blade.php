@extends('Admin')

@section('content')
    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-md-8">


                <div class="ms-panel">
                    <div class="flex ms-panel-header">
                        <h6>Case Management</h6>
                        {{-- <a href="/create-user" class="btn mb-2 mt-2 btn-primary">
                            Create New Case
                        </a> --}}

                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-striped thead-primary w-100">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Case Title</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Assigned To</th>
                                      

                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Case Title</th>
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Assigned To</th>
                                      

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

            <!-- cases Modal -->
            <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">

                        <div class="modal-header bg-secondary">
                            <h5 class="modal-title has-icon text-white" id="NoteModal">Assign Employee</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>


                        @csrf

                        <div class="modal-body">

                            <div class="col-md-12 mb-3">
                                <label for="validationCustom22">Assigne A Employee</label>
                                <div class="input-group">
                                    @php
                                        $employees = DB::select('SELECT users.first_name,users.last_name,users.id FROM `users` WHERE find_in_set(2,`roles`)');
                                    @endphp
                                    <input type="hidden" id="case_id">
                                    <select class="form-control" id="employeeList" name="employee" required="">
                                        <option value="">Select an Employee</option>

                                        @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->first_name }}
                                                {{ $employee->last_name }} </option>
                                        @endforeach


                                    </select>

                                </div>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button onclick="assignNow()" class="btn btn-secondary shadow-none">Assign Now</button>
                        </div>



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
                "lengthChange": false,
                "autoWidth": false,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "ajax": '/case-list'
            });
        });

        function assignNow() {
            let el = document.getElementById('employeeList');
            let selectedEmployee = el.value;
            let CaseId = document.getElementById('case_id').value;

            const formData = {
                case_id: CaseId,
                employee_id: selectedEmployee,
            }
            axios.post('/api/assign-case', formData)
                .then((response) => {
                    $('#notes-modal').modal('hide');
                    $('#example2').DataTable().ajax.reload();
                })
        }

        function setId(val) {
            document.getElementById('case_id').setAttribute('value', val);
        }

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
