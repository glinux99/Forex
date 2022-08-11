<section>
    <div id="devise-modal" class="modal fade">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">@lang("Ajouter une devise")</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <p class="mt-1">
                    <div>
                        <div class="form-group">
                            <label for="">@lang('Description')</label>
                            <input type="text" class="form-control" name="designation" id="" aria-describedby="helpId" value="{{ Auth::user()->name}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Code du devise')</label>
                                <input type="text" class="form-control" name="code" id="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Pays')</label>
                                <input type="text" class="form-control" name="pays" id="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Quantite en stock')</label>
                                <input type="number" class="form-control" name="quantite" id="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Devise de ref')</label>
                                <input type="number" class="form-control" name="name" id="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Valeur reelle')</label>
                                <input type="number" class="form-control" name="name" id="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Valeur d\'echange')</label>
                                <input type="number" class="form-control" name="name" id="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <a href="" class="btn btn-primary mt-2 comfirm-link" id="supp" data-id="">@lang("Supprimer")</a>
                </div>
            </div>
        </div>
    </div>
    <div id="approv-modal" class="modal fade">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title h6">@lang("Approvisionner un agent")</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <p class="mt-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Service')</label>
                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Nom de l\'agent')</label>
                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="" class="form-label">{{__("Montant")}} # <span>1</span></label>
                        <div class="row">
                            <div class="col-md-9 col-sm-9 col-lg-9 col-xs-9">
                                <div class="input-group mb-2">
                                    <input type="text" class="form-control">
                                    <div class="input-group-btn">
                                        <select name="code" id="inputcode" class="form-control" required="required">
                                            <option value="">USD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="ms-2 col-md-2 col-sm-2 col-lg-2 col-xs-2">
                                <button type="button" class="btn btn-primary pull-left d-flex" id="addElement"><span class="la la-plus me-1"></span>{{__(" Devises")}}</button>
                            </div>
                        </div>
                    </div>
                    <div id="addDevise"></div>
                    </p>
                    <button type="button" class="btn btn-link mt-2" data-dismiss="modal">@lang("Annuler")</button>
                    <a href="" class="btn btn-primary mt-2 comfirm-link" id="supp" data-id="">@lang("Supprimer")</a>
                </div>
            </div>
        </div>
    </div>
</section>
