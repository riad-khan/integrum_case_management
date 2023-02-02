@extends('Admin')

@section('content')
  <!-- Body Content Wrapper -->
  <div class="ms-content-wrapper">
    <div class="row">
        <livewire:admin.user.components.user-details />
      <div class="col-xl-6 col-md-12">
        <div class="ms-panel ms-panel-fh ms-widget ms-chat-conversations">
          <div class="ms-panel-header">
            <div class="ms-chat-header justify-content-between">
              <div class="ms-chat-user-container media clearfix">
                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                  <img src="{{asset('/admin/assets/img/dashboard/rakhan-potik-1.jpg')}}" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-chat-user-info mt-1">
                  <h6>Heather Brown</h6>
                  <span class="text-disabled fs-12">
                    Active Now
                  </span>
                </div>
              </div>
              <ul class="ms-list ms-list-flex ms-chat-controls">
                <li data-toggle="tooltip" data-placement="top" title="Call"> <i class="material-icons">local_phone</i> </li>
                <li data-toggle="tooltip" data-placement="top" title="Video Call"> <i class="material-icons">videocam</i> </li>
                <li data-toggle="tooltip" data-placement="top" title="Add to Chat"> <i class="material-icons">person_add</i> </li>
              </ul>
            </div>
          </div>
          <div class="ms-panel-body ms-scrollable ps">
            <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
              <div class="ms-chat-status ms-status-online ms-chat-img">
                <img src="{{asset('/admin/assets/img/dashboard/rakhan-potik-1.jpg')}}" class="ms-img-round" alt="people">
              </div>
              <div class="media-body">
                <div class="ms-chat-text">
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <p class="ms-chat-time">10:33 pm</p>
              </div>
            </div>
            <div class="ms-chat-bubble ms-chat-message ms-chat-incoming media clearfix">
              <div class="ms-chat-status ms-status-online ms-chat-img">
                <img src="{{asset('/admin/assets/img/dashboard/rakhan-potik-2.jpg')}}" class="ms-img-round" alt="people">
              </div>
              <div class="media-body">
                <div class="ms-chat-text">
                  <p> I'm doing great, thanks for asking </p>
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                </div>
                <p class="ms-chat-time">11:01 pm</p>
              </div>
            </div>
            <div class="ms-chat-bubble ms-chat-message ms-chat-outgoing media clearfix">
              <div class="ms-chat-status ms-status-online ms-chat-img">
                <img src="{{asset('/admin/assets/img/dashboard/rakhan-potik-1.jpg')}}" class="ms-img-round" alt="people">
              </div>
              <div class="media-body">
                <div class="ms-chat-text">
                  <p> It is a long established fact that a reader will be distracted by the readable content of a page </p>
                  <p> There are many variations of passages of Lorem Ipsum available </p>
                </div>
                <p class="ms-chat-time">11:03 pm</p>
              </div>
            </div>
            <div class="ms-panel-footer">
              <div class="ms-chat-textbox">
                <ul class="ms-list-flex mb-0">
                  <li class="ms-chat-vn"><i class="material-icons">mic</i> </li>
                  <li class="ms-chat-input">
                    <input type="text" name="msg" placeholder="Enter Message" value="">
                  </li>
                  <li class="ms-chat-text-controls ms-list-flex">
                    <span> <i class="material-icons">tag_faces</i> </span>
                    <span> <i class="material-icons">attach_file</i> </span>
                    <span> <i class="material-icons">camera_alt</i> </span>
                  </li>
                </ul>
              </div>
            </div>
          <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
      </div>

        @php
            if(!isset($details)){
                $details = DB::table('cases')->where('user_id','=',Auth::user()->id)->orderByDesc('id')->limit(1)->get();
            }

           if(count($details) > 0){
            if(!isset($case_files)){
                $caseFiles = DB::table('case_files')->where('case_id','=',$details[0]->id)->get();

                $case_files = [
                   "Verkbeiðni" => 'no',
                   "Tjónstilkynning"=>'no',
                   "Lögregluskýrslur"=>'no',
                   "Áverkavottorð"=>"no",
                    "Skýrsla sjúkraþjálfara" => "no",
                   "Matsbeiðni"=>"no",
                   "Útlagður kostnaður"=>"no",
                   "Matsgerð"=>"no",
                   "Lokauppgjör"=>"no",

       ];

       foreach ($caseFiles as $item){
        

           $case_files[$item->meta] = "yes";

       }
            }
           }


        @endphp
      
      @if(count($details) > 0)
      <div class="col-xl-3 col-md-12">
        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-body">
            <ul class="ms-profile-stats">
              <li>
                <h3 class="ms-count">{{$details[0]->id}}</h3>
                <span>{{$details[0]->case_title}}</span>
              </li>
              <li>
                <h3 class="ms-count">4.8</h3>
                <span>Málsnr Score</span>
              </li>
            </ul>

            <h2 class="section-title">Gögnin mín</h2>
            <ul class="my_info">

                @foreach($case_files as $key =>$item)

                    @if($item == 'yes')

                 <li><a href="">{{$loop->iteration}}) {{$key}} <i class="flaticon-tick-inside-circle ml-3"></i></a></li>

                    @else
                        <li><a href="">{{$loop->iteration}}) {{$key}} </a></li>

                    @endif


                @endforeach

            </ul>
          </div>
        </div>
      </div>

      @endif

    </div>
   <div class="row">
      <div class="col-md-6">
        <div class="ms-panel">
          <div class="ms-panel-header">
            <h6>Senda gögn til lögmanns</h6>
          </div>
          <div class="ms-panel-body">
            <form action="{{url('/file-uploads')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="drop-zone">
                  <span class="drop-zone__prompt">Drag & drop</span>
                  <input type="file" name="myFile" class="drop-zone__input">
                </div>
                <div class="input-group mt-3">
                  <input type="text" class="form-control" name="title" value="" id="validationCustom03" placeholder="Please write a file caption" required>

              </div>
                <button class="btn btn-primary w-100 d-block" type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>

    @include('Admin.User.Dashboard-sections.case-section')


      <div class="col-md-6">
        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-header">
            <h6>hlaðið upp skrám</h6>
          </div>

          @php
            $files = DB::table('file_uploads')->where('user_id',Auth::user()->id)->get();
          @endphp

          <div class="ms-panel-body">
              <div class="p-0">
                <h2 class="mb-4">Files</h2>
                <div class="card">
                  <div class="card-body p-0">
                   <div class="row">
                    @foreach ($files as $item )

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

                      @endforeach

                   </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-header">
            <h6>Panta samtal við lögmann</h6>
          </div>
          <div class="ms-panel-body">
              <div class="p-5">
                <h2 class="mb-4">Calendar</h2>
                <div class="card">
                  <div class="card-body p-0">
                    <div id="calendar"></div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
   </div>
   <!--
  <div class="row">
      <div class="col-md-12">
        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-header">
            <h6>Tímalína</h6>
          </div>
          <div class="ms-panel-body">
            <div class="table-responsive">
              <table id="data-table-9" class="table table-striped thead-primary w-100"></table>
            </div>
          </div>
        </div>
      </div>
  </div>
  -->
  <div class="row">
      <div class="col-md-12">
        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-header">
            <h6>Tímalína</h6>
          </div>
          <div class="ms-panel-body">
              <div class="time-line">
                  <ul>

                    @php
                    
                     if(!isset($time_line)){
                      $lattestCase = DB::table('cases')->where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->get();
                      $time_line= DB::table('timeline')->where('case_id','=',$lattestCase[0]->id)->get();
                       echo $lattestCase[0]->id ;
                      
                     }
                    @endphp


                    @foreach($time_line as $item)

                      <li>
                          <span class="time-line_heading">{{$item->title}}</span>
                          <span class="time-arrow"><img src="{{asset('/admin/assets/img/custom/step-arrow.svg')}}" alt=""/></span>
                          <span class="time-date">{{$item->approve_date}}</span>
                      </li>

                      @endforeach
                     

                  </ul>
              </div>
          </div>
        </div>
      </div>
  </div>

  </div>

</main>

<!-- Quick bar -->
<aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

  <ul class="nav nav-tabs ms-quick-bar-list" role="tablist">
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Chat" data-title="Chat">
      <a href="#qa-chat" aria-controls="qa-chat" role="tab" data-toggle="tab">
        <i class="flaticon-chat"></i>
        <span class="ms-quick-bar-label">Chat</span>
      </a>
    </li>
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Email" data-title="Email">
      <a href="#qa-email" aria-controls="qa-email" role="tab" data-toggle="tab">
        <i class="flaticon-mail"></i>
        <span class="ms-quick-bar-label">Email</span>
      </a>
    </li>
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch To-do-list" data-title="To-do-list">
      <a href="#qa-toDo" aria-controls="qa-toDo" role="tab" data-toggle="tab">
        <i class="flaticon-list"></i>
        <span class="ms-quick-bar-label">To-do</span>
      </a>
    </li>
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Reminders" data-title="Reminders">
      <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab">
        <i class="flaticon-bell"></i>
        <span class="ms-quick-bar-label">Reminder</span>
      </a>
    </li>
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Notes" data-title="Notes">
      <a href="#qa-notes" aria-controls="qa-notes" role="tab" data-toggle="tab">
        <i class="flaticon-pencil"></i>
        <span class="ms-quick-bar-label">Notes</span>
      </a>
    </li>
    <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Invite Members" data-title="Invite Members">
      <a href="#qa-invite" aria-controls="qa-invite" role="tab" data-toggle="tab">
        <i class="flaticon-share-1"></i>
        <span class="ms-quick-bar-label">Invite</span>
      </a>
    </li>

  </ul>

  <div class="ms-configure-qa" data-toggle="tooltip" data-placement="left" title="Configure Quick Access">

    <a href="#">
      <i class="flaticon-hammer"></i>
      <span class="ms-quick-bar-label">Configure</span>
    </a>

  </div>

  <!-- Quick bar Content -->
  <div class="ms-quick-bar-content">

    <div class="ms-quick-bar-header clearfix">
      <h5 class="ms-quick-bar-title float-left">Title</h5>
      <button type="button" class="close ms-toggler" data-target="#ms-quick-bar" data-toggle="hideQuickBar" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

    <div class="ms-quick-bar-body tab-content">
      <div role="tabpanel" class="tab-pane" id="qa-chat">

        <div class="ms-chat-container">

          <div class="ms-chat-header px-3">
            <div class="ms-chat-user-container media clearfix">
              <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
              </div>
              <div class="media-body ms-chat-user-info mt-1">
                <h6>Anny Farisha</h6>
                <a href="#" class="text-disabled has-chevron fs-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Available
                </a>
                <ul class="dropdown-menu">
                  <li class="ms-dropdown-list">
                    <a class="media p-2" href="#">
                      <div class="media-body">
                        <span>Busy</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="media-body">
                        <span>Away</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="media-body">
                        <span>Offline</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <form class="ms-form my-3" method="post">
              <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                <input type="search" class="ms-form-input w-100" name="search" placeholder="Search for People and Groups" value="">
                <i class="flaticon-search text-disabled"></i>
              </div>
            </form>
          </div>

          <div class="ms-chat-body">
            <ul class="nav nav-tabs tabs-bordered d-flex nav-justified px-3" role="tablist">
              <li role="presentation" class="fs-12"><a href="#chats" aria-controls="chats" class="active show" role="tab" data-toggle="tab"> Chats </a></li>
              <li role="presentation" class="fs-12"><a href="#groups" aria-controls="groups" role="tab" data-toggle="tab"> Groups </a></li>
              <li role="presentation" class="fs-12"><a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab"> Contacts </a></li>
            </ul>

            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active show fade in" id="chats">
                <ul class="ms-scrollable ms-quickbar-container">
                  <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                    <div class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center">
                      <span class="msg-count">3</span>
                      <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>James Zathila</h6> <span class="ms-chat-time">2 Hours ago</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      <i class="flaticon-trash ms-delete-trigger"> </i>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                    <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>Raymart Sandiago</h6> <span class="ms-chat-time">3 Hours ago</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      <i class="flaticon-trash ms-delete-trigger"> </i>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                    <div class="ms-chat-status ms-status-offline ms-chat-img mr-3 align-self-center">
                      <img src="{{asset('/admin/assets/img/dashboard/rakhan-potik-4.jpg')}}" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>Heather Brown</h6> <span class="ms-chat-time">12 Hours ago</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      <i class="flaticon-trash ms-delete-trigger"> </i>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                    <div class="ms-chat-status ms-status-busy ms-chat-img mr-3 align-self-center">
                      <img src="{{asset('/admin/assets/img/dashboard/rakhan-potik-5.jpg')}}" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>Micheal John</h6> <span class="ms-chat-time">Yesterday</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      <i class="flaticon-trash ms-delete-trigger"> </i>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                    <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                      <img src="{{asset('/admin/assets/img/dashboard/rakhan-potik-4.jpg')}}" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>John Doe</h6> <span class="ms-chat-time">3 Days ago</span>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      <i class="flaticon-trash ms-delete-trigger"> </i>
                    </div>
                  </li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="groups">
                <ul class="ms-scrollable ms-quickbar-container">
                  <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                    <div class="ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>James Zathila</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      <ul class="ms-group-members clearfix mt-3 mb-0">
                        <li> <img src="assets/img/dashboard/rakhan-potik-1.jpg" alt="member"> </li>
                        <li> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                        <li> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                        <li class="ms-group-count"> + 12 more </li>
                      </ul>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                    <div class="ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>Raymart Sandiago</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      <ul class="ms-group-members clearfix mt-3 mb-0">
                        <li> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                        <li> <img src="assets/img/dashboard/rakhan-potik-4.jpg" alt="member"> </li>
                      </ul>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                    <div class="ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>John Doe</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      <ul class="ms-group-members clearfix mt-3 mb-0">
                        <li> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                        <li> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                        <li> <img src="assets/img/dashboard/rakhan-potik-4.jpg" alt="member"> </li>
                        <li class="ms-group-count"> + 4 more </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="contacts">
                <ul class="ms-scrollable ms-quickbar-container">
                  <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                    <div class="ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-5.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>John Doe</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                    <div class="ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-7.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>Raymart Sandiago</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                    <div class="ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-8.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>Micheal John</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                    <div class="ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>Heather Brown</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                    <div class="ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>Mila Freign</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                  </li>
                  <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                    <div class="ms-chat-img mr-3 align-self-center">
                      <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>James Zathila</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

          </div>

        </div>

      </div>

      <div role="tabpanel" class="tab-pane" id="qa-email">

        <div class="ms-email-container">

          <div class="ms-qa-options">
            <a href="#" class="btn btn-primary w-100 mt-0 has-icon"> <i class="flaticon-pencil"></i> Compose Email </a>
          </div>

          <ul class="ms-scrollable ms-quickbar-container">
            <li class="p-3  media ms-email clearfix">
              <div class="ms-email-img mr-3 ">
                <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
              </div>
              <div class="media-body ms-email-details">
                <span class="ms-email-sender">James Zathila</span>
                <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">2 Hours ago</span>
                <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
              </div>
            </li>
            <li class="p-3  media ms-email clearfix">
              <div class="ms-email-img mr-3 ">
                <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
              </div>
              <div class="media-body ms-email-details">
                <span class="ms-email-sender">John Doe</span>
                <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">8 Hours ago</span>
                <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
              </div>
            </li>
            <li class="p-3  media ms-email clearfix">
              <div class="ms-email-img mr-3 ">
                <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
              </div>
              <div class="media-body ms-email-details">
                <span class="ms-email-sender">Heather Brown</span>
                <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">1 Day ago</span>
                <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
              </div>
            </li>
          </ul>
        </div>

      </div>

      <div role="tabpanel" class="tab-pane" id="qa-toDo">
        <div class="ms-quickbar-container ms-todo-list-container ms-scrollable">

          <form class="ms-add-task-block">
            <div class="form-group mx-3 mt-0  fs-14 clearfix">
              <input type="text" class="form-control fs-14 float-left" id="task-block" name="todo-block" placeholder="Add Task Block" value="">
              <button type="submit" class="ms-btn-icon bg-primary float-right"><i class="material-icons text-disabled">add</i></button>
            </div>
          </form>

          <ul class="ms-todo-list">
            <li class="ms-card ms-qa-card ms-deletable">

              <div class="ms-card-header clearfix">
                <h6 class="ms-card-title">Task Block Title</h6>
                <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right"> <i class="material-icons text-disabled">add</i> </button>
              </div>

              <div class="ms-card-body">
                <ul class="ms-list ms-task-block">
                  <li class="ms-list-item ms-to-do-task ms-deletable">
                    <label class="ms-checkbox-wrap ms-todo-complete">
                      <input type="checkbox" value="">
                      <i class="ms-checkbox-check"></i>
                    </label>
                    <span> Task to do </span>
                    <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                  </li>
                  <li class="ms-list-item ms-to-do-task ms-deletable">
                    <label class="ms-checkbox-wrap ms-todo-complete">
                      <input type="checkbox" value="">
                      <i class="ms-checkbox-check"></i>
                    </label>
                    <span>Task to do</span>
                    <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                  </li>
                </ul>
              </div>

              <div class="ms-card-footer clearfix">
                <a href="#" class="text-disabled mr-2"> <i class="flaticon-archive"> </i> Archive </a>
                <a href="#" class="text-disabled  ms-delete-trigger float-right"> <i class="flaticon-trash"> </i> Delete </a>
              </div>

            </li>
          </ul>

        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="qa-reminder">
        <div class="ms-quickbar-container ms-reminders">

          <ul class="ms-qa-options">
            <li> <a href="#" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-bell"></i> New Reminder </a> </li>
          </ul>

          <div class="ms-quickbar-container ms-scrollable">

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-body">
                <p> Developer Meeting in Block B </p>
                <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Today - 3:45 pm</span>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>
            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-body">
                <p> Start adding change log to version 2 </p>
                <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Tomorrow - 12:00 pm</span>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

          </div>

        </div>
      </div>

      <div role="tabpanel" class="tab-pane" id="qa-notes">

        <ul class="ms-qa-options">
          <li> <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-sticky-note"></i> New Note </a> </li>
          <li> <a href="#"> <i class="flaticon-excel"></i> Export to Excel </a> </li>
        </ul>

        <div class="ms-quickbar-container ms-scrollable">

          <div class="ms-card ms-qa-card ms-deletable">
            <div class="ms-card-header">
              <h6 class="ms-card-title">Don't forget to check with the Manager</h6>
            </div>
            <div class="ms-card-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
              </p>
              <ul class="ms-note-members clearfix mb-0">
                <li class="ms-deletable"> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                <li class="ms-deletable"> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
              </ul>
            </div>
            <div class="ms-card-footer clearfix">

              <div class="dropdown float-left">
                <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-share-1"></i> Share
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="ms-scrollable ms-dropdown-list ms-members-list">
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-4.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>John Doe</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-5.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>Raymart Sandiago</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-7.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>Heather Brown</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="ms-note-editor float-right">
                <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
              </div>

            </div>
          </div>

          <div class="ms-card ms-qa-card ms-deletable">
            <div class="ms-card-header">
              <h6 class="ms-card-title">Perform the required unit tests</h6>
            </div>
            <div class="ms-card-body">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
              </p>
              <ul class="ms-note-members clearfix mb-0">
                <li class="ms-deletable"> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
              </ul>
            </div>
            <div class="ms-card-footer clearfix">

              <div class="dropdown float-left">
                <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="flaticon-share-1"></i> Share
                </a>
                <ul class="dropdown-menu">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="ms-scrollable ms-dropdown-list ms-members-list">
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>John Doe</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-7.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>Raymart Sandiago</span>
                      </div>
                    </a>
                    <a class="media p-2" href="#">
                      <div class="mr-2 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-8.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body">
                        <span>Heather Brown</span>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="ms-note-editor float-right">
                <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
              </div>

            </div>
          </div>

        </div>

      </div>

      <div role="tabpanel" class="tab-pane" id="qa-invite">

        <div class="ms-quickbar-container text-center ms-invite-member">
          <i class="flaticon-network"></i>
          <p>Invite Team Members</p>
          <form>
            <div class="ms-form-group">
              <input type="text" placeholder="Member Email" class="form-control" name="invite-email" value="">
            </div>
            <div class="ms-form-group">
              <button type="submit" name="invite-member" class="btn btn-primary w-100">Invite</button>
            </div>
          </form>
        </div>

      </div>

    </div>

  </div>

</aside>

<!-- MODALS -->

<!-- Reminder Modal -->
<div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">

      <div class="modal-header bg-secondary">
        <h5 class="modal-title has-icon text-white"> New Reminder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <form>

        <div class="modal-body">

          <div class="ms-form-group">
            <label>Remind me about</label>
            <textarea class="form-control" name="reminder"></textarea>
          </div>

          <div class="ms-form-group">
            <span class="ms-option-name fs-14">Repeat Daily</span>
            <label class="ms-switch float-right">
              <input type="checkbox">
              <span class="ms-switch-slider round"></span>
            </label>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="ms-form-group">
                <input type="text" class="form-control datepicker" name="reminder-date" value="" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="ms-form-group">
                <select class="form-control" name="reminder-time">
                  <option value="">12:00 pm</option>
                  <option value="">1:00 pm</option>
                  <option value="">2:00 pm</option>
                  <option value="">3:00 pm</option>
                  <option value="">4:00 pm</option>
                </select>
              </div>
            </div>
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
        </div>

      </form>

    </div>
  </div>
</div>
  <script src="//code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
              "ajax": '/case/get-cases'
          });
      });
  </script>



@endsection
