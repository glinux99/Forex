@extends( (Auth::user()->hasRole('client')) ? 'layouts.page' : 'layouts.app')
@section('content')
<section class="main-content col-md-12 col-centered mx-auto">
    <div class="aiz-main-content">
        <div class="px-15px px-lg-25px">

            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">@lang("Configuration mon profile")</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <form action="{{ route('update.profile')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row gutters-5">
                                <div class="card col-md-12">
                                    <div class="card-header row gutters-5">
                                        <div class="col text-center text-md-left">
                                            <h5 class="mb-md-0 h6">@lang("Modifier mon profile")</h5>
                                        </div>
                                        <div class="float-right d-flex">
                                            <p class="mr-2 align-self-center">@lang("Recevoir les notifications")</p>
                                            <label class="aiz-switch aiz-switch-success mb-0">
                                                <input type="checkbox" name="notificable" @if (Auth::user()->notificable) checked @endif value="1">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">@lang('Nom')</label>
                                                    <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" value="{{ Auth::user()->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">@lang('Adresse E-mail')</label>
                                                    <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" value="{{ Auth::user()->email}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">@lang('Numero Tel')</label>
                                                    <input type="numero" class="form-control" name="numero" id="" aria-describedby="helpId" value="{{ Auth::user()->numero}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">@lang('Image')</label>
                                                    <input type="file" class="form-control" name="images" id="" aria-describedby="helpId">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">@lang('Adresse')</label>
                                                    <input type="numero" class="form-control" name="numero" id="" aria-describedby="helpId" value="{{ Auth::user()->numero}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""><i class='las la-file-pdf text-danger'></i> @lang('Mon dossier en pdf') </label>
                                                    <input type="file" class="form-control" name="images" id="" aria-describedby="helpId">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>@lang("A propos de moi")</label>
                                                    <div class="col-md-12">
                                                        <textarea class="aiz-text-editor" name="description">{{ Auth::user()->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="btn-toolbar float-right mb-3" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <button type="submit" name="button" value="publish" class="btn btn-success action-btn">@lang("Enregistrer")</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card-body px-0 mx-0">
                        <div class="card card-user">
                            <div class="image">
                                <img class="w-100" src="https://infocongo.net/wp-content/uploads/2021/12/goma-intacte.jpg" alt="..." />
                            </div>
                            <div class="content">
                                <div class="author">
                                    <style>
                                        .avatar:hover {
                                            transform: scale(1.2);
                                            transition: transform 1s 0s ease;
                                        }
                                    </style>
                                    <a href="{{ asset(Session::get('profile'))}}">
                                        @if (Session::get('profile'))
                                        <img class="avatar border-gray" src="{{ asset(Session::get('profile'))}}" alt="photo de profile" onerror="this.onerror=null;this.src='';">
                                        @else
                                        <img class="avatar border-gray" src="{{ asset('assets/img/default.png')}}" class="w-100">
                                        @endif
                                        <h4 class="title text-center">{{ Auth::user()->name }}<br />
                                            <small>{{ auth()->user()->getRoleNames()->first()}}</small>
                                            <br>
                                            <style>
                                                .user-block,
                                                .user-block-info {
                                                    display: inline-block !important;
                                                }

                                                .user-block,
                                                .user-block-info,
                                                .user-block-name {
                                                    display: block !important;
                                                    color: #f1f1f1 !important;
                                                }

                                                .user-block,
                                                .user-block-info,
                                                .user-block-role {
                                                    display: block !important;
                                                    font-size: 12px !important;
                                                    color: green !important;
                                                }

                                                .user-block-status {
                                                    position: absolute;
                                                    left: 80px;
                                                    bottom: -3px;
                                                }
                                            </style>
                                            <div class="user-block">

                                                <div class="user-block-info">
                                                    <span class="user-block-name item-text">{{ Auth::user()->name }}</span>
                                                    <span class="user-block-role "> <i class="la la-check text-success"></i> Verified</span>
                                                    <div class="label label-primary"><i class="la la-chevron-down"></i> Account Info</div>
                                                </div>
                                            </div>
                                            <i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i><i class='las la-star'></i>
                                        </h4>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <p class="description text-center">{!! Auth::user()->description!!}
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center py-3">
                                {{__("Profile design")}} {{Config("app.name")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .aiz-main-content -->
</section>
@endsection
