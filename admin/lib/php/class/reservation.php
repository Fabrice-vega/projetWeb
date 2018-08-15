<div class = "container">
    <div class = "row">
        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30 text-center">
            <h2>Formulaire de réservation</h2>
        </div>
    </div>
    <div class = "row">

        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb30">
            <div class = "tour-booking-form">
                <form>
                    <div class = "row">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <h4 class = "tour-form-title">Demande de réservation</h4>
                        </div>
                        <div class = "col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class = "form-group">
                                <label class = "control-label required" for = "select">Destination</label>
                                <div class = "select">
                                    <select id = "select" name = "select" class = "form-control">
                                        <?php
                                            $voyages = new VoyagesDB($cnx);
                                            $datas = $voyages->getAllVoyages();
                                            foreach ( $datas as $data ): ?>
                                                <option value = "<?= $data["ID"]; ?>"><?= $data["NOM"]; ?></option>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class = "col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class = "form-group">
                                <div class = "container">
                                    <div class = "rowdate">
                                        <!-- Bootstrap Datepicker -->
                                        <link rel = "stylesheet"
                                              href = "//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css"/>
                                        <link rel = "stylesheet"
                                              href = "//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css"/>

                                        <script
                                            src = "//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>


                                        <div class = "form-group">
                                            <div class = "col-xs-5 date">
                                                <div class = "input-group input-append date" id = "datePicker">
                                                    <input type = "text" class = "form-control" name = "date"/>
                                                    <span class = "input-group-addon add-on"><span
                                                            class = "glyphicon glyphicon-calendar"></span></span>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            $(document).ready(function () {
                                                $('#datePicker')
                                                    .datepicker({
                                                        format: 'mm/dd/yyyy'
                                                    })
                                                    .on('changeDate', function (e) {
                                                        // Revalidate the date field
                                                        $('#eventForm').formValidation('revalidateField', 'date');
                                                    });

                                                $('#eventForm').formValidation({
                                                    framework: 'bootstrap',
                                                    icon: {
                                                        valid: 'glyphicon glyphicon-ok',
                                                        invalid: 'glyphicon glyphicon-remove',
                                                        validating: 'glyphicon glyphicon-refresh'
                                                    },
                                                    fields: {
                                                        name: {
                                                            validators: {
                                                                notEmpty: {
                                                                    message: 'The name is required'
                                                                }
                                                            }
                                                        },
                                                        date: {
                                                            validators: {
                                                                notEmpty: {
                                                                    message: 'The date is required'
                                                                },
                                                                date: {
                                                                    format: 'MM/DD/YYYY',
                                                                    message: 'The date is not a valid'
                                                                }
                                                            }
                                                        }
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class = "col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class = "form-group">
                                <label class = "control-label required" for = "select">Nombre de personnes</label>
                                <div class = "select">
                                    <select id = "select" name = "select" class = "form-control">
                                        <option value = "">01</option>
                                        <option value = "">02</option>
                                        <option value = "">03</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class = "col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class = "form-group">
                                <label class = "control-label required" for = "select">Budget</label>
                                <div class = "select">
                                    <select id = "select" name = "select" class = "form-control">
                                        <option value = "">Bon marché</option>
                                        <option value = "">Standard</option>
                                        <option value = "">Luxe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12 mt30">
                            <h4 class = "tour-form-title">Vos coordonnées</h4>
                        </div>
                        <div class = "col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class = "form-group">
                                <label class = "control-label" for = "name">Nom</label>
                                <input id = "name" type = "text" placeholder = "Nom..." class = "form-control" required>
                            </div>
                        </div>
                        <div class = "col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class = "form-group">
                                <label class = "control-label" for = "email">Email</label>
                                <input id = "email" type = "text" placeholder = "xxxx@xxxx.xxx" class = "form-control"
                                       required>
                            </div>
                        </div>
                        <div class = "col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class = "form-group">
                                <label class = "control-label" for = "phone">Téléphone</label>
                                <input id = "phone" type = "text" placeholder = "0479/13/24/57" class = "form-control"
                                       required>
                            </div>
                        </div>
                        <div class = "col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class = "form-group">
                                <label class = "control-label" for = "country">Pays</label>
                                <input id = "country" type = "text" placeholder = "Belgique..." class = "form-control"
                                       required>
                            </div>
                        </div>
                        <div class = "col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class = "form-group">
                                <label class = "control-label" for = "city">Ville</label>
                                <input id = "city" type = "text" placeholder = "Mons..." class = "form-control"
                                       required>
                            </div>
                        </div>
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button type = "submit" name = "singlebutton" class = "btn btn-primary">envoyer la demande
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
</div