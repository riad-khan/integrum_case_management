@extends('Admin')

@section('content')
    <div class="ms-content-wrapper">
        <form action="{{ url('/case-update/' . $case[0]->id) }}" method="post" class="needs-validation" novalidate="">
            <div class="row">

                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel">
                        <div class="ms-panel-header">
                            <h6>Case ID : {{$case[0]->id}}</h6>
                        </div>
                        <div class="ms-panel-body">

                            @csrf
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Case Score</label>
                                    <div class="input-group">
                                        <input type="text" value="{{$case[0]->case_score}}" class="form-control" name="score" id="validationCustom03">
                                        <div class="invalid-feedback">
                                            Please provide a valid Language.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Case Title</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $case[0]->case_title }}"
                                            id="validationCustom03" name="case_title" required="">
                                        <div class="invalid-feedback">
                                            Please provide a valid email.
                                        </div>
                                        @error('case_title')
                                            <span style="color: red" class="backend-error"> {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>

                            

                            
                        </div>

                        






                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom03">Case Description</label>
                                <div class="input-group">
                                    <textarea class="form-control" name="description" id="validationCustom03">{{ $case[0]->description }}</textarea>
                                    <div class="invalid-feedback">
                                        Please provide a valid Language.
                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="col-md-6 mb-3">
                            <label for="validationCustom22">Assigne A Employee</label>
                            <div class="input-group">
                                <select class="form-control" id="validationCustom22" name="employee" required="">
                                    <option value="">Select an Employee</option>
                                    @foreach ($employees as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $case[0]->employee_id ? 'selected' : '' }}>
                                            {{ $item->first_name }}
                                            {{ $item->last_name }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a Country.
                                </div>
                            </div>
                        </div>









                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-header">
                        <h6>hlaðið upp skrám</h6>
                    </div>

                    @php
                        $files = DB::table('file_uploads')
                            ->where('user_id', $case[0]->user_id)
                            ->get();
                    @endphp

                    <div class="ms-panel-body">
                        <div class="p-0">
                            <h2 class="mb-4">Files</h2>
                            <div class="card">
                                <div class="card-body p-0">
                                    <div id="files" class="row">
                                        {{-- @foreach ($files as $item)
        
                          @if ($item->file_extention == 'jpg' || $item->file_extention == 'png')
        
                          <div class="col-md-3">
                            <img style="" src="{{url($item->file)}}">
                            <a href="{{$item->file}}" style="text-align: center;margin-left:12px" download>{{$item->title}}</a>
                          </div>
        
                         @else
                              <div class="col-md-3">
                                <img style="" src="{{asset('admin/assets/img/file-icon.png')}}">
                                <a href="{{$item->file}}" style="text-align: center;margin-left:12px" download>{{$item->title}}</a>
                              </div>
        
                              @endif
        
                              @endforeach --}}

                                    </div>
                                </div>
                                <a id="load_more" onclick="LoadMore()" style="color:white"
                                    class="btn btn-primary mt-4 d-block w-100" type="submit">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           

            <div class="col-xl-6 col-md-12">
                <table class="table table-striped thead-primary w-100">
                    <thead>
                        <tr>

                            <th scope="col">Case Files</th>
                            <th scope="col">Approved By</th>
                            <th scope="col">Created At</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($case_files as $key => $item)
                            <tr>

                                <td>
                                    <div class="form-group form-check">
                                        <input type="checkbox" onclick="updateCaseFiles(this)" value={{ $key }}
                                            {{ $item == 'yes' ? 'checked' : '' }} class="form-check-input"
                                            id="exampleCheck1">
                                        <input type="hidden" id="approved_by" value="{{ Auth::user()->id }}">
                                        <input type="hidden" id="user_id" value="{{ $case[0]->user_id }}">
                                        <input type="hidden" id="case_id" value="{{ $case[0]->id }}">
                                        <label class="form-check-label" for="exampleCheck1">{{ $key }}</label>
                                    </div>

                                </td>
                                <td>{{ $approves[$key] }}</td>

                                <td>{{ $creates[$key] }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="col-xl-12 col-md-12">
                <div class="ms-panel ms-panel-fh">
                  <div class="ms-panel-header">
                    <h6>Tímalína</h6>
                  </div>
                  <div class="ms-panel-body">
                      <div class="time-line">
                          <ul>

                            @foreach ($timelines as $key=>$item )

                              <li>
                                  <span class="time-line_heading">{{$key}}</span>
                                  <span class="time-arrow"><img src="{{asset('/admin/assets/img/custom/step-arrow.svg')}}" alt=""/></span>
                                  <input type="date" value="{{$item}}" name="date[]"  class="form-control">
                                  <input type="hidden" value="{{$key}}" name="title[]"  class="form-control">
                                  
                              </li>
                              @endforeach
        
                          </ul>
                      </div>
                  </div>
                </div>
              </div>

            <button class="btn btn-primary mt-4 d-block w-100" type="submit">Update</button>

    </div>

    </form>

    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function updateCaseFiles(el) {
            let caseFileName = el.value;
            let caseId = document.getElementById('case_id').value;
            let approved_by = document.getElementById('approved_by').value;

            const formData = {
                case_file: caseFileName,
                case_id: caseId,
                approved_by: approved_by,
                status: el.checked
            }

            axios.post(`/api/update-case-file-list/${caseId}`, formData)
                .then((response => {
                    console.log(response.data);
                }))
                .catch(error => {
                    console.log(error.response);
                })

        }

        let files = new Array();

        async function fetchFiles(page) {
            let html = ''
            let user_id = document.getElementById('user_id').value;
            let response = await axios.get(`/api/case-files/${page}/${user_id}`);
            let url = 'http://127.0.0.1:8002/'

            response.data.uploaded_files.map((item) => {
                files.push(item)
                if (files.length === response.data.total) {
                    document.getElementById('load_more').classList.remove('display');
                    document.getElementById('load_more').classList.add('hidden');
                } else {
                    document.getElementById('load_more').classList.remove('hidden');
                    document.getElementById('load_more').classList.add('display');
                }
            })
            files.map((item) => {
                html += '<div class="col-md-4">';
                if (item.file_extention == 'jpg' || item.file_extention == 'png') {
                    html += '<img style="width:70px;" src=' + url + item.file + '>';
                } else {
                    html += '<img style="width:70px;" src=' + url + 'admin/assets/img/file-icon.png' + '>';
                }

                html += '<a href=' + url + item.file +
                    ' style="width:100%;display:block" download>' + item.title + '</a>'
                html += '</div>';
                document.getElementById('files').innerHTML = html;
            })


        }
        let count = 0;

function LoadMore() {
    count++;

    fetchFiles(count);

}


       
        fetchFiles(0);
    </script>
@endsection
