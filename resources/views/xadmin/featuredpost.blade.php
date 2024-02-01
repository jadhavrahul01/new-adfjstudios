@extends('admin.includes.app')
@section('title', 'All Featured Posts')
@section('content')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Featured Posts</h4>
        </div>
        <div style="margin-right: 27px;" class="card-options">
            {{-- <a href="" class="btn btn-sm btn-primary">Update</a>&nbsp;&nbsp;&nbsp; --}}
            <a href="{{ route('admin.addposts') }}" class="btn btn-sm btn-primary">Add Post</a>
        </div>
        <div class="col-md-5 alert-message">
            @include('admin.message')
            <p class="" id="alert"></p>
        </div>
    </div>
    <!--End Page header-->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    {{-- <h3 class="card-title">
                        All Posts
                    </h3> --}}
                    {{-- <form action="" method="get" class="ms-5">
                        <div class="card-tools d-flex">
                            <div class="card-title mt-1 p-1">
                                <a href="{{ route('admin.featuredposts') }}" class="btn btn-sm btn-outline-primary">X</a>
                            </div>
                            <div class="input-group input-group" style="width: 100%; height:15px">
                                <input type="text" name="keyword" class="form-control float-right" placeholder="Search"
                                    value="{{ Request::get('keyword') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form> --}}

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-vcenter text-nowrap">
                            <thead>
                                <tr>
                                    <th>Media</th>
                                    <th>Title</th>
                                    <th>Service</th>
                                    <th>Sub-Service</th>
                                    <th>Date</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if ($posts->isNotEmpty())
                                    @foreach ($posts as $post)
                                        @if ($post->featured_post == 1)
                                            <tr style="vertical-align: middle;">
                                                <td><img src="/posts/{{ $post->media }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset="">
                                                </td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->pservices->service_name }}</td>
                                                <td>{{ $post->stypes->slug }}</td>
                                                <td>{{ $post->date }}</td>
                                                <td>{{ $post->location }}</td>
                                                <td class="text-left vertical-center">
                                                    @if ($post->fstatus == 1)
                                                        <p class="text-success">Added</p>
                                                    @else
                                                        <p class="text-danger">Removed</p>
                                                    @endif
                                                    <form action="" method="POST">
                                                        @csrf
                                                        @method('put')

                                                        <input type="hidden" name="postid" id="postid"
                                                            value="{{ $post->id }}">
                                                        <input type="hidden" name="featured_post" id="featured_post"
                                                            value="{{ $post->featured_post }}">
                                                        <select name="fstatus" id="fstatus" class="form-control">
                                                            <option value="1">Add</option>
                                                            <option value="0">Remove</option>
                                                        </select>
                                                        <button class="btn btn-sm btn-outline-secondary mt-2" type="submit"
                                                            id="fsubmit">Submit</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="7" class="text-center">No records found!</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
