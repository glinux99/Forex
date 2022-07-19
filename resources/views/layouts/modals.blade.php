<!-- Modal Ajouter un agent -->
<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade">
    <div class="modal-dialog modal-lg">
        <form method="POST" action="{{ route('register.agent') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="myModalLabel" class="modal-title">{{__("Ajouter un agent")}}</h4>
                </div>
                <div class="modal-body mx-5">
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="col-md-8 ">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        <div class="col-md-8 ">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-8 ">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                        <div class="col-md-8 ">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">{{__("Annuler")}}</button>
                    <button type="submit" class="btn btn-primary me-5">{{__("Enregistrer")}}</button>
                </div>
        </form>
    </div>
</div>
</div>
<!-- Fin modal ajouter un agent -->
<!-- Modal Ajouter une nouvelle devise -->
<div id="devise" tabindex="-1" role="dialog" aria-labelledby="deviseLabel" aria-hidden="true" class="modal fade">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="deviseLabel" class="modal-title">{{__("Ajouter une nouvelle devise")}}</h4>
                </div>
                <div class="modal-body mx-5">

                    <div class="row mb-3">
                        <small>{{__("Les valeurs entrees sont equivantes a la devise ")}} <span>USD</span>, {{__("pour changer la devise de reference, cliquez")}} <a data-toggle="collapse" href="#changeCurrentDevise" aria-expanded="false" aria-controls="changeCurrentDevise">{{__("ici")}}</a></small>
                    </div>
                    <div class="collapse" id="changeCurrentDevise">
                        <p>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __("Devise de Ref") }}</label>
                            <div class="col-md-8 ">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus id="currentDevise">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        </p>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __("Designation") }}</label>
                        <div class="col-md-8 ">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __("Pays") }}</label>

                        <div class="col-md-8 ">

                            <div class="input-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="input-group-btn">

                                    <select name="devise" id="codeDevide" class="form-control" required="required">
                                        <option value="Devise">Devise</option>
                                        <option value="USD">USD</option>
                                        <option value="CDF">CDF</option>
                                    </select>

                                </span>

                            </div>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __("Qte en Stock") }}</label>

                        <div class="col-md-8 ">

                            <div class="input-group">
                                <input id="email" type="number" value="0" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <span class="input-group-btn">

                                    <input type="text" name="code" id="codeQte" class="form-control" disabled>

                                </span>

                            </div>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __("Valeur reelle en ") }} <span class="currentDevise2">(USD)</span></label>

                        <div class="col-md-8 ">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __("Valeur d'echange en ") }}<span class="currentDevise">(USD)</span></label>
                        <div class="col-md-8 ">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">{{__("Annuler")}}</button>
                    <button type="submit" class="btn btn-primary me-5">{{__("Enregistrer")}}</button>
                </div>
        </form>
    </div>
</div>
</div>
<!-- Fin modal ajouter une nouvelle devise -->
