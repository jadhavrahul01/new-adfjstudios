@extends('admin.includes.app')
@section('title', 'Dashboard')
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Add Post</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Add Post</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="content-body">


                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h4 class="card-title">Multiple Column</h4>
                                </div> --}}

                                <div class="card-body">
                                    <form class="form" action="/admin/add-post" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Title</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="write your project title here" name="author" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Service</label>
                                                    <select name="service" id="" value="" class="form-control" required>
                                                        <option value=""><- Select Service -></option>
                                                        @foreach ($pservices as $item)
                                                            <option value="{{ $item->id }}">{{ $item->service_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Sub-Service</label>
                                                    <select name="type" id="" value="" class="form-control" required>
                                                        <option value=""><- Select Service Type -></option>
                                                        @foreach ($stypes as $item1)
                                                            <option value="{{ $item1->id }}">{{ $item1->stype_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Location</label>
                                                    <input type="text" id="country-floating" class="form-control" name="location" placeholder="Location" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Date</label>
                                                    <input type="date" id="company-column" class="form-control" name="date" placeholder="Date" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Hyperlink(optional)</label>
                                                    <input type="url" id="country-floating" class="form-control" name="videolink" placeholder="put hyperlink here">
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex col-12">
                                                <div style="margin-right: 30px" class="custom-control custom-switch custom-switch-primary">
                                                    <p style="color: #5e5873;font-size: 0.857rem;" class="company-column">Play Button</p>
                                                    <input type="checkbox"  value="1" name="playbtn" class="custom-control-input" id="customSwitch10">
                                                    <label class="custom-control-label" for="customSwitch10">
                                                        <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                        <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                    </label>
                                                </div>
                                                <div class="custom-control custom-switch custom-switch-primary">
                                                    <p style="color: #5e5873;font-size: 0.857rem;" ">Featured Post</p>
                                                    <input type="checkbox"  value="1" name="featured" class="custom-control-input" id="customSwitch11">
                                                    <label class="custom-control-label" for="customSwitch11">
                                                        <span class="switch-icon-left"><i data-feather="check"></i></span>
                                                        <span class="switch-icon-right"><i data-feather="x"></i></span>
                                                    </label>
                                                </div>

                                            </div>


                                            {{--
                                            <label class="m-2">Media (Cover Image) &nbsp;<span class="text-danger">(570 × 600
                                                px)</span></label>
                                        <input type="file" id="input-file-now-custom-3" class="form-control" name="cover"
                                            required> --}}


                                            {{-- <div class="media">


                                                <div class="media-body mt-75 ml-1">
                                                    <label>Media (Cover Image) &nbsp;<span class="text-danger">(570 × 600
                                                        px)</span></label> <br>

                                                    <input type="file" id="account-upload" name="cover"  accept="image/*">
                                           <br>
                                                    <p>Allowed JPG, GIF or PNG. Max size of 800kB</p>
                                                </div>

                                            </div> --}}

                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="customFile">Media (Cover Image) &nbsp;<span class="text-danger">(570 × 600
                                                        px)</span></label>
                                                    <div class="custom-file">
                                                        <input type="file" name="cover" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                                {{-- <button type="reset" class="btn btn-outline-secondary">Reset</button> --}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
