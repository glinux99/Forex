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
                            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" value="{{ Auth::user()->name}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Code du devise')</label>
                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Pays')</label>
                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">@lang('Quantite en stock')</label>
                                <input type="number" class="form-control" name="name" id="" aria-describedby="helpId">
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
</section>
