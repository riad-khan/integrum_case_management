@include('vendor.Chatify.layouts.headLinks')
<div class="messenger">
    {{-- ----------------------Users/Groups lists side---------------------- --}}
    <div class="messenger-listView">
        {{-- Header and search bar --}}
        <div class="m-header">
            <nav>
                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">MESSAGES</span> </a>
                {{-- header buttons --}}
                <nav class="m-header-right">
                    <a style="display:none" href="#"><i class="fas fa-cog settings-btn"></i></a>
                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                </nav>
            </nav>

            {{-- Search input --}}

            @php
                $roles = Auth::user()->roles;
                
                $seperatedRoles = explode(',', $roles);
                
                $lastRole = last($seperatedRoles);
                
            @endphp

            @if ($lastRole == 2 || $lastRole == 3)
                <input type="text" class="messenger-search" placeholder="Search" />
            @endif
            {{-- Tabs --}}
            <div class="messenger-listView-tabs">
                <a  @if ($type == 'user') class="active-tab" @endif data-view="users">
                    <span class="far fa-user"></span>Inbox</a>
                <a  @if ($type == 'group') class="active-tab" @endif data-view="groups">
                    <span class="fas fa-users"></span>Contacts</a>
            </div>
        </div>
        {{-- tabs and lists --}}
        <div class="m-body contacts-container">
            {{-- Lists [Users/Group] --}}
            {{-- ---------------- [ User Tab ] ---------------- --}}
            <div class="@if ($type == 'user') show @endif messenger-tab users-tab app-scroll"
                data-view="users">

                {{-- Favorites --}}
                <div class="favorites-section">
                    <p class="messenger-title">Favorites</p>
                    <div class="messenger-favorites app-scroll-thin"></div>
                </div>

                {{-- Saved Messages --}}
                {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!}

                {{-- Contact --}}
                <div class="listOfContacts" style="width: 100%;height: calc(100% - 200px);position: relative;"></div>

            </div>

            {{-- ---------------- [ Group Tab ] ---------------- --}}
            <div class="@if ($type == 'group') show @endif messenger-tab groups-tab app-scroll"
                data-view="groups">


                @php
                    $data = [];
                    
                    if ($lastRole == 1) {
                        $checkUserEmployee = DB::table('users')
                            ->where('id', '=', Auth::user()->id)
                            ->get();
                        if (!$checkUserEmployee[0]->support_employee) {
                            $check_case = DB::table('cases')
                                ->where('user_id', '=', Auth::user()->id)
                                ->get();
                    
                            if (count($check_case) == 0) {
                                $adminSql = 'select * from users where find_in_set(3,roles)';
                                $Admin = DB::select($adminSql);
                                foreach ($Admin as $item) {
                                    $checkExistMsg = DB::table('ch_messages')
                                        ->where('to_id', '=', $item->id)
                                        ->get();
                    
                                    if (count($checkExistMsg) > 0) {
                                        echo '<p class="message-hint center-el"><span>No More Contact</span></p>';
                                    } else {
                                        $data = $Admin;
                                    }
                                }
                            } else {
                                $data = DB::select('SELECT a.* from users a LEFT JOIN cases b on a.id = b.employee_id WHERE b.user_id = ' . Auth::user()->id . '');
                            }
                        } else {
                            $data = DB::table('users')
                                ->where('id', '=', $checkUserEmployee[0]->support_employee)
                                ->get();
                        }

                    }else if($lastRole == 2){
                        $assignedUserList = DB::Select('select a.* from users a LEFT join cases b on a.id = b.user_id WHERE b.employee_id = '.Auth::user()->id.' and a.id <> '.Auth::user()->id.'');
                        if(count($assignedUserList) > 0){
                            $data = $assignedUserList;
                        }else{
                            $adminSql = 'select * from users where find_in_set(3,roles)';
                                $Admin = DB::select($adminSql);
                                $data = $Admin;
                        }
                    }else if($lastRole == 3){
                            $userList = DB::select('select * from users where id <> '.Auth::user()->id.'');

                            $data = $userList ;
                    }
                    
                @endphp

                @foreach ($data as $user)
                    <table class="messenger-list-item" data-contact="{{ $user->id }}">
                        <tr data-action="0">
                            {{-- Avatar side --}}
                            <td style="position: relative">
                                @if ($user->active_status)
                                    <span class="activeStatus"></span>
                                @endif
                                <div class="avatar av-m" style="background-image: url('{{ $user->avatar }}');">
                                </div>
                            </td>
                            {{-- center side --}}
                            <td>
                                <p data-id="{{ $user->id }}" data-type="user">
                                    {{ strlen($user->name) > 12 ? trim(substr($user->name, 0, 12)) . '..' : $user->name }}
                                </p>

                                {{-- New messages counter --}}

                            </td>

                        </tr>
                    </table>
                @endforeach

            </div>

            {{-- ---------------- [ Search Tab ] ---------------- --}}
            <div class="messenger-tab search-tab app-scroll" data-view="search">
                {{-- items --}}
                <p class="messenger-title">Search</p>
                <div class="search-records">
                    <p class="message-hint center-el"><span>Type to search..</span></p>
                </div>
            </div>
        </div>
    </div>

    {{-- ----------------------Messaging side---------------------- --}}
    <div class="messenger-messagingView" style="overflow: hidden">
        {{-- header title [conversation name] amd buttons --}}
        <div class="ms-panel-header">
            <div class="ms-chat-header justify-content-between">
                <div class="ms-chat-user-container media clearfix">
                    <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                        <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                        <div class="avatar av-s header-avatar" style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                        </div>
                        <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                    </div>

                    {{-- header buttons --}}
                <nav class="m-header-right">
                   
                    <a href="/"><i class="fas fa-home"></i></a>
                   
                </nav>
                </div>
                {{-- <ul class="ms-list ms-list-flex ms-chat-controls">
                    <li data-toggle="tooltip" data-placement="top" title="Call"> <i
                            class="material-icons">local_phone</i> </li>
                    <li data-toggle="tooltip" data-placement="top" title="Video Call"> <i
                            class="material-icons">videocam</i> </li>
                    <li data-toggle="tooltip" data-placement="top" title="Add to Chat"> <i
                            class="material-icons">person_add</i> </li>
                </ul> --}}
            </div>
        </div>

        {{-- Messaging area --}}
        <div class="m-body messages-container app-scroll">
            {{-- Internet connection --}}
            <div class="internet-connection">
                <span class="ic-connected">Connected</span>
                <span class="ic-connecting">Connecting...</span>
                <span class="ic-noInternet">No internet access</span>
            </div>
            <div class="messages">
                <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
            </div>
            {{-- Typing indicator --}}
            <div class="typing-indicator">
                <div class="message-card typing">
                    <p>
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                    </p>
                </div>
            </div>

        </div>
        {{-- Send Message Form --}}
        @include('Chatify::layouts.sendForm')
    </div>
    {{-- ---------------------- Info side ---------------------- --}}

</div>

@include('Chatify::layouts.modals')
@include('vendor.Chatify.layouts.footerLinks')
