@extends ('layout.app')

@section('title')
    Contact
@endsection



@section('content')
    <div class="container">
        <h1 class="page-header">Formulaire de contact</h1>
        <h1>Contactez-nous</h1>
        <p>Pour toute question, vous pouvez nous contacter via le formulaire ci-dessous.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="form-item form-item-contact-nom form-type-textfield form-group"><label class="control-label element-invisible" for="edit-contact-nom">Nom*<span class="form-required" title="Ce champ est requis."></span></label><input placeholder="Nom " class="form-control form-text required" type="text" id="edit-contact-nom" name="contact_nom" value="" size="20" maxlength="128">
                </div>
                <div class="form-item form-item-contact-email form-type-textfield form-group"><label class="control-label element-invisible" for="edit-contact-email">E-mail*<span class="form-required" title="Ce champ est requis."></span></label><input placeholder="E-mail " class="email form-control form-text required" type="text" id="edit-contact-email" name="contact_email" value="" size="20" maxlength="128">
                </div>


            </div>
            <div class="col-md-6 mb-5">
                <div class="form-item form-item-contact-prenom form-type-textfield form-group"><label class="control-label element-invisible" for="edit-contact-prenom">Prénom*<span class="form-required" title="Ce champ est requis."></span></label><input placeholder="Prénom " class="form-control form-text required" type="text" id="edit-contact-prenom" name="contact_prenom" value="" size="20" maxlength="128">
                </div>
                <div class="form-item form-item-contact-tel form-type-textfield form-group"><label class="control-label element-invisible" for="edit-contact-tel">Téléphone*</label><input placeholder="Téléphone" class="form-control form-text" type="text" id="edit-contact-tel" name="contact_tel" value="" size="20" maxlength="128">
                </div>

            </div>
            <br>
            <div class="col-md-12 text-center mb-5">
                <div class="form-textarea-wrapper  mb-3 resizable textarea-processed resizable-textarea">Message*<textarea placeholder="Message" class="form-control form-textarea required" id="edit-contact-message" name="contact_message" cols="60" rows="5"></textarea><div class="grippie"></div></div>
                <button class="btn btn-primary right col-md-2 col-md-offset-4 btn form-submit" type="submit" id="edit-contact-submit" name="op" value="Envoyer">Envoyer</button>
            </div>
        </div>
    </div>
@endsection