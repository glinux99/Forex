@extends('layouts.app')
@section('content')
<div class="aiz-main-content">
    <form action="{{ route('create.agent')}}" method="post">
        @csrf
        <div class="px-15px px-lg-25px">

            <div class="aiz-titlebar text-left mt-2 mb-3">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1 class="h3">@lang("Configuration d'un nouvel agent")</h1>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <a href="{{ route('agents.all')}}" class="btn btn-circle btn-info">
                            <span>@lang("Tous les agents")</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header row gutters-5">
                            <div class="col text-center text-md-left">
                                <h5 class="mb-md-0 h6">@lang("Information sur l'agent")</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('Nom')</label>
                                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="@lang('Nom de l\'agent')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('Adresse E-mail')</label>
                                        <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="@lang('adresse email de l\'agent')">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">@lang('Numero Tel')</label>
                                        <input type="numero" class="form-control" name="numero" id="" aria-describedby="helpId">
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
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang("A propos de l'agent")</label>
                                        <div class="col-md-12">
                                            <textarea class="aiz-text-editor" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header row gutters-5">
                            <div class="col text-center text-md-left">
                                <h5 class="mb-md-0 h6">@lang("Information supplementaire")</h5>
                            </div>
                        </div>
                        <div class="card-body row">
                            <div class="col-md-12 col-lg-12 col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="admin" value="admin" onclick="checked('admin');">
                                    <label class="form-check-label" for="admin">
                                        @lang("Admin")
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="role" id="agent" value="agent" checked>
                                    <label class="form-check-label" for="agent">
                                        @lang("Agent")
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-6">
                                <div class="form-group" id="permissions">
                                    <label for="inputrole" class="control-label">@lang("Permissions de l'agent")</label>
                                    <div class="">
                                        <select class="selectpicker" title='Choisissez les permissions' data-header="@lang('les permissions')" multiple>
                                            <optgroup label="@lang('Agent')" data-actions-box="true" id="selectAgent">
                                                @foreach ($caisse as $role)
                                                <option>{{$role->name}}</option>
                                                @endforeach
                                            </optgroup>
                                            <optgroup label="@lang('Admin')" data-actions-box="true" id="selectAdmin" hidden="true">
                                                @foreach ($admin as $role)
                                                @switch($role->name)
                                                @case('crud caissier')
                                                @php
                                                $val ="Add,modif,supp Agent";
                                                @endphp
                                                @break
                                                @case('devises crud')
                                                @php
                                                $val ="Add,modif,supp Devise";
                                                @endphp
                                                @break
                                                @case('balance')
                                                @php
                                                $val ="Tout les balances";
                                                @endphp
                                                @break
                                                @default

                                                @endswitch
                                                <option value="{{$role->name}}">{{ $val}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
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
                    <button type="submit" name="button" value="Enregistrer" class="btn btn-success action-btn">@lang("Enregistrer")</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
</div><!-- .aiz-main-content -->
<script type="text/javascript">
    if ($('#lang-change').length > 0) {
        $('#lang-change .dropdown-menu a').each(function() {
            $(this).on('click', function(e) {
                e.preventDefault();
                var $this = $(this);
                var locale = $this.data('flag');
                $.post('https://demo.activeitzone.com/ecommerce/language', {
                    _token: 'VcC75XFcLdImwXoDnbMCfttESQJI5hJX7gAFOYGF',
                    locale: locale
                }, function(data) {
                    location.reload();
                });

            });
        });
    }

    function menuSearch() {
        var filter, item;
        filter = $("#menu-search").val().toUpperCase();
        items = $("#main-menu").find("a");
        items = items.filter(function(i, item) {
            if ($(item).find(".aiz-side-nav-text")[0].innerText.toUpperCase().indexOf(filter) > -1 && $(item).attr('href') !== '#') {
                return item;
            }
        });

        if (filter !== '') {
            $("#main-menu").addClass('d-none');
            $("#search-menu").html('')
            if (items.length > 0) {
                for (i = 0; i < items.length; i++) {
                    const text = $(items[i]).find(".aiz-side-nav-text")[0].innerText;
                    const link = $(items[i]).attr('href');
                    $("#search-menu").append(`<li class="aiz-side-nav-item"><a href="${link}" class="aiz-side-nav-link"><i class="las la-ellipsis-h aiz-side-nav-icon"></i><span>${text}</span></a></li`);
                }
            } else {
                $("#search-menu").html(`<li class="aiz-side-nav-item"><span	class="text-center text-muted d-block">Nothing found</span></li>`);
            }
        } else {
            $("#main-menu").removeClass('d-none');
            $("#search-menu").html('')
        }
    }
</script>
@endsection
