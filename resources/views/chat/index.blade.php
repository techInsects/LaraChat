@extends('layouts.app')

@section('title')
    Chat
    @parent
@stop

@section('content')
<div class="chat_container">
  <div class="row">
    <!-- Contacts Section -->
    <div class="col s12 m3">
      <div class="col s12">
        <div class="row search_container valign-wrapper z-depth-2">
          <div class="col s12">
            <div class="custom_input_container">
              <input type="text" class="browser-default custom_input" placeholder="Search All">
            </div>
          </div>
        </div>
      </div>

      <ul class="collection z-depth-2">
        <li class="collection-item avatar cursor_pointer">
          <img src="{{ asset('img/uploads/user2.jpg') }}" alt="" class="circle">
          <span class="title">John Doe</span>
          <br><small>Last Message</small>
          <a href="#!" class="secondary-content"><i class="fa fa-star"></i></a>
        </li>
        <li class="collection-item avatar cursor_pointer">
          <img src="{{ asset('img/uploads/user3.jpg') }}" alt="" class="circle">
          <span class="title">Anglina</span>
          <br><small>Last Message</small>
          <a href="#!" class="secondary-content"><i class="fa fa-star"></i></a>
        </li>
        <li class="collection-item avatar cursor_pointer">
          <img src="{{ asset('img/uploads/user4.jpg') }}" alt="" class="circle">
          <span class="title">Alexandra</span>
          <br><small>Last Message</small>
          <a href="#!" class="secondary-content"><i class="fa fa-star"></i></a>
        </li>
        <li class="collection-item avatar cursor_pointer">
          <img src="{{ asset('img/uploads/user5.jpg') }}" alt="" class="circle">
          <span class="title">Simon</span>
          <br><small>Last Message</small>
          <a href="#!" class="secondary-content"><i class="fa fa-star"></i></a>
        </li>
        <li class="collection-item avatar cursor_pointer">
          <img src="{{ asset('img/uploads/user6.jpg') }}" alt="" class="circle">
          <span class="title">Christine</span>
          <br><small>Last Message</small>
          <a href="#!" class="secondary-content"><i class="fa fa-star"></i></a>
        </li>
        <li class="collection-item avatar cursor_pointer">
          <img src="{{ asset('img/uploads/user7.jpg') }}" alt="" class="circle">
          <span class="title">Casey</span>
          <br><small>Last Message</small>
          <a href="#!" class="secondary-content"><i class="fa fa-star"></i></a>
        </li>
        <li class="collection-item avatar cursor_pointer">
          <img src="{{ asset('img/uploads/user8.jpg') }}" alt="" class="circle">
          <span class="title">Brett</span>
          <br><small>Last Message</small>
          <a href="#!" class="secondary-content"><i class="fa fa-star"></i></a>
        </li>
        <li class="collection-item avatar cursor_pointer">
          <img src="{{ asset('img/uploads/user9.jpg') }}" alt="" class="circle">
          <span class="title">Eddie</span>
          <br><small>Last Message</small>
          <a href="#!" class="secondary-content"><i class="fa fa-star"></i></a>
        </li>
      </ul>
    </div>

    <!-- Conversation Section -->
    <div class="col s12 m6">
      <div class="col s12">
        <div class="row search_container valign-wrapper z-depth-2">
          <div class="col s9">
            <div class="custom_input_container">
              <input type="text" class="browser-default custom_input" placeholder="Search Conversation">
            </div>
          </div>
          <div class="col s3 icons_container">
            <span class="fa fa-arrow-circle-right fa-2x"></span>
          </div>
        </div>
      </div>

      <div class="col s12">
        <!-- User Pill -->
        <div class="user_pill row p_2 z-depth-2" style="border-radius:0 25px 25px 25px;background:#f2f2f2;">
          <div class="col s2">
            <img src="{{ asset('img/uploads/user2.jpg') }}" alt="" class="circle responsive-img" style="max-height:55px;max-width:55px;">
          </div>
          <div class="col s10">
            <span class="black-text">
              Hey Alexandra!!
            </span>
          </div>
        </div>

        <!-- Opponent Pill -->
        <div class="user_pill row p_2 z-depth-2" style="border-radius:25px 0 25px 25px;background:#e0e0e0;">
          <div class="col s10">
            <span class="black-text">
              Hi John.. How are you ?
            </span>
          </div>
          <div class="col s2">
            <img src="{{ asset('img/uploads/user3.jpg') }}" alt="" class="circle responsive-img" style="max-height:55px;max-width:55px;">
          </div>
        </div>

        <!-- User Pill -->
        <div class="user_pill row p_2 z-depth-2" style="border-radius:0 25px 25px 25px;background:#f2f2f2;">
          <div class="col s2">
            <img src="{{ asset('img/uploads/user2.jpg') }}" alt="" class="circle responsive-img" style="max-height:55px;max-width:55px;">
          </div>
          <div class="col s10">
            <span class="black-text">
              I am fine..
            </span>
          </div>
        </div>

        <!-- User Pill -->
        <div class="user_pill row p_2 z-depth-2" style="border-radius:0 25px 25px 25px;background:#f2f2f2;">
          <div class="col s2">
            <img src="{{ asset('img/uploads/user2.jpg') }}" alt="" class="circle responsive-img" style="max-height:55px;max-width:55px;">
          </div>
          <div class="col s10">
            <span class="black-text">
              How things going
            </span>
          </div>
        </div>

        <!-- Opponent Pill -->
        <div class="user_pill row p_2 z-depth-2" style="border-radius:25px 0 25px 25px;background:#e0e0e0;">
          <div class="col s10">
            <span class="black-text">
              quite well
            </span>
          </div>
          <div class="col s2">
            <img src="{{ asset('img/uploads/user3.jpg') }}" alt="" class="circle responsive-img" style="max-height:55px;max-width:55px;">
          </div>
        </div>
      </div>
    </div>

    <!-- About Section -->
    <div class="col s12 m3">
      <div class="col s12">
        <div class="row search_container z-depth-2">
          <div class="col s12 center">
              <h4>About Section</h4>
          </div>
        </div>
      </div>

      <div class="row about_section">
        <div class="col s12 about_header" align="center">
          <div class="z-depth-2">
            <img src="{{ asset('img/uploads/user3.jpg') }}" alt="" class="circle responsive-img" style="max-height:95px;max-width:95px;">
            <h4>Alexandra</h4>
            <h5>Graphic Designer</h5>
          </div>
        </div>
        <div class="col s12 about_details p_1">
          <h5>
            <span class="text_bold">Reviews</span><span class="right">4.7(12)</span><br>
            <span class="text_bold">Country</span><span class="right">Germany</span><br>
            <span class="text_bold">Language</span><span class="right">German</span><br>
            <span class="text_bold">Tagline</span>
            <br>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <br>
          </h5>
        </div>
      </div>
    </div>
  </div>
    
  <!-- Input Section -->
  <div class="col s12 m12 input_section">
    <div class="row" style="margin-bottom:0px;">
      <div class="col s3">
      </div>

      <div class="col s6" style="margin-bottom:0px;">
        <div class="row chat_input_container z-depth-2">
          <div class="col s1 icons">
            <span class="fa fa-arrow-circle-right fa-2x"></span>
          </div>
          <div class="col s10 input" contenteditable="true">
            Type a Message
          </div>
          <div class="col s1 icons">
            <span class="fa fa-arrow-circle-right fa-2x"></span>
          </div>
        </div>
      </div>

      <div class="col s3">
      </div>
    </div>
  </div>
</div>
@endsection