@extends('layout.master', ['title' => 'Me — Yuxxeun'])
@section('content')
    <div class="container mx-5">
        <div class="row">
            <div class="col-md-3">
                <div class="img-circle">
                    <img src="/image/ava.jpg" alt="fuck off" class="rounded" width="170" srcset="" >
                </div>
            </div>
            <div class="col-md-1">
                {{-- blank --}}
            </div>
            <div class="col-md-7">
                <div class="mt-2 d-flex">
                    <h3><b>Me</b> <i class="fas fa-certificate" style="color: #ff2bd1"></i> &nbsp;</h3>
                    <div class="dropdown">
                        <button class="btn btn-primary btn-sm" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          blame this guy!
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">Action</button>
                          <button class="dropdown-item" type="button">Another action</button>
                          <button class="dropdown-item" type="button">Something else here</button>
                        </div>
                    </div>
                </div>
                <div class="mt-3 d-flex justify-content-start align-items-center">
                    <h5 class="follow-profile"><b>666</b> Post &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <h5 class="follow-profile"><b>0</b> Following</h5>
                </div>
                <div class="mt-3">
                    <h5 class="Mb-1"><b>krido</b></h5>
                    <h6><a href="http://github.com/yuxxeun">github.com/yuxxeun</a></h6>
                </div>  
            </div>
        </div>
        {{-- Post section --}}
    </div>
@section('post')
    <div class="container d-flex justify-content-start align-items-center">
        <div class="mx-auto d-flex">
            <p class="icon-post px-6"><i class="fa fa-table fa-1x"></i>&nbsp; POSTS</p> &nbsp;
            <p class="icon-post px-6" style="color: grey;"><i class="fa fa-user-circle fa-1x" style="color: grey"></i>&nbsp;COLLECTIONS</p>
        </div>
    </div>
    <div class="mt-3 mx-auto d-flex justify-content-start align-items-center">
        <div class="d-flex mx-auto space-envly">
            <div class="card px-3" style="width: 18rem;">
                <img src="/image/jiso1.jpg" width="100" height="180" class="image-position card-img-top" alt="...">
            </div>
            <div class="card px-3" style="width: 18rem;">
                <img src="/image/fuck.jpg" height="180" class="card-img-top" alt="...">
            </div>
            <div class="card px-3" style="width: 18rem;">
                <img src="/image/jiso2.jpg" width="100" height="180" class="image-position card-img-top" alt="...">
            </div>
        </div>
    </div>    
@endsection
@endsection