<?php include('head.php'); ?>

<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php include('topbar.php'); ?>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <?php include('sidebar.php'); ?>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header-title">
                                <h4 class="pull-left page-title">Marquage</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Tableau de bord</a></li>
                                    <li><a href="#">Marquage</a></li>
                                    <li class="active">Nouvelle demande</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>


                    <?php require('config.php') ?>
                    <?php if (isset($_POST['valider'])) {


                        // INSERT INTO `attente_marquage` (`id`, `fournisseur`, `nbr_terminaux`, `email`) VALUES (NULL, 'samsung officiel', '52', 'sjunior@samsung.com');



                        $sql = "INSERT INTO attente_marquage(id,demandeur,nbr_terminaux,email,pays_origine,ref_certificat,date_corm,date_demande,start_imei,end_imei,start_serial,end_serial) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

                        if ($stmt = mysqli_prepare($link, $sql)) {
                            // Bind variables to the prepared statement as parameters
                            mysqli_stmt_bind_param($stmt, "isisssssssss", $d_id, $demandeur, $nbr_tmx, $email, $pays, $ref_certificate, $good_date_corm, $date_demande, $start_imei, $end_imei, $start_serial, $end_serial);

                            // Set parameters
                            $d_id = null;
                            $demandeur = $_POST['fname'];
                            $nbr_tmx = $_POST['nbr_tmx'];
                            $email = $_POST['femail'];
                            $pays = $_POST['pays'];
                            $ref_certificate = $_POST['ref_certificate'];
                            $date_demande = date("Y-m-d");
                            $good_date_corm = $_POST['date_corm'];
                            $start_imei = $_POST['start_imei'];
                            $end_imei = $_POST['end_imei'];
                            $start_serial = $_POST['start_num_serie'];
                            $end_serial = $_POST['end_num_serie'];

                            // Creates a password hash

                            // Attempt to execute the prepared statement
                            if (mysqli_stmt_execute($stmt)) {
                                // Redirect to login page
                                echo "Demande enregistree ";
                                header("location: mark-waiting.php");
                            } else {
                                echo "Oops! Une erreur s'est produite. Veuillez reessayer plus tard.";
                            }

                            // Close statement
                            mysqli_stmt_close($stmt);
                        }

                        // $stmt->bind_param("isis",'',$fname,$nbr_terminaux,$femail);
                        // $fname = $_POST['fname'];
                        // $femail = $_POST['femail'];
                        // $nbr_terminaux=$_POST['nbr_tmx'];
                        // $stmt->execute();
                        // $stmt->close();


                        // // $stmt->execute(array(
                        // //     'fname' => $fname,
                        // //     'nb_terminaux' => $nbr_terminaux,
                        // //     'email' => $femail,

                        // // ));
                    }
                    mysqli_close($link);



                    ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Enregistrer une nouvelle demande de marquage.</h3>
                                </div>
                                <div class="panel-body">

                                    <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group col-sm-6">
                                            <label>Nom demandeur *</label>
                                            <input type="text" name="fname" class="form-control" required placeholder="" />
                                        </div>


                                        <!-- <div class="form-group">
                                                            <label>Equal To</label>
                                                            <div>
                                                                <input type="password" id="pass2" class="form-control" required
                                                                       placeholder="Password"/>
                                                            </div>
                                                            <div class="m-t-10">
                                                                <input type="password" class="form-control" required
                                                                       data-parsley-equalto="#pass2"
                                                                       placeholder="Re-Type Password"/>
                                                            </div>
                                                        </div> -->

                                        <div class="form-group col-sm-6">
                                            <label>E-Mail Demandeur *</label>
                                            <div>
                                                <input name="femail" type="email" class="form-control" required parsley-type="email" placeholder="Entrer un e-mail valide" />
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Reference du certificat d'homologation *</label>
                                            <input type="text" class="form-control" required placeholder="" name="ref_certificate" />
                                        </div>
                                        <!-- <div class="form-group">
                                                            <label>URL</label>
                                                            <div>
                                                                <input parsley-type="url" type="url" class="form-control"
                                                                       required placeholder="URL"/>
                                                            </div>
                                                        </div> -->
                                        <div class="form-group col-sm-6">
                                            <label>Nombre de terminaux *</label>
                                            <div>
                                                <input type="text" class="form-control" required="" data-parsley-min="5" placeholder="Min value is 5" name= "nbr_tmx">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-6 ">
                                            <label>Debut IMEI*</label>
                                            <div>
                                                <input name="start_imei" data-parsley-type="alphanum" type="text" class="form-control" required="" placeholder="Enter alphanumeric value">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-6 ">
                                            <label>Fin IMEI*</label>
                                            <div>
                                                <input name="end_imei" data-parsley-type="alphanum" type="text" class="form-control" required="" placeholder="Enter alphanumeric value">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-6 ">
                                            <label>Debut Numero de serie*</label>
                                            <div>
                                                <input name="start_num_serie" data-parsley-type="alphanum" type="text" class="form-control" required="" placeholder="Enter alphanumeric value">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-6 ">
                                            <label>Fin Numero de serie*</label>
                                            <div>
                                                <input name="end_num_serie" data-parsley-type="alphanum" type="text" class="form-control" required="" placeholder="Enter alphanumeric value">
                                            </div>
                                        </div>



                                        <div class="form-group col-sm-6">
                                            <label class="">Pays d'origine</label>
                                            <div class="">
                                                <select class="form-control" name="pays">
                                                    <option value="Afganistan">Afghanistan</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bonaire">Bonaire</option>
                                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Canary Islands">Canary Islands</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Channel Islands">Channel Islands</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos Island">Cocos Island</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote DIvoire">Cote DIvoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Curaco">Curacao</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Ter">French Southern Ter</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Great Britain">Great Britain</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="India">India</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea North">Korea North</option>
                                                    <option value="Korea Sout">Korea South</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Midway Islands">Midway Islands</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Nambia">Nambia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherland Antilles">Netherland Antilles</option>
                                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                    <option value="Nevis">Nevis</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau Island">Palau Island</option>
                                                    <option value="Palestine">Palestine</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Phillipines">Philippines</option>
                                                    <option value="Pitcairn Island">Pitcairn Island</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                    <option value="Republic of Serbia">Republic of Serbia</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="St Barthelemy">St Barthelemy</option>
                                                    <option value="St Eustatius">St Eustatius</option>
                                                    <option value="St Helena">St Helena</option>
                                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                    <option value="St Lucia">St Lucia</option>
                                                    <option value="St Maarten">St Maarten</option>
                                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                    <option value="Saipan">Saipan</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="Samoa American">Samoa American</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Tahiti">Tahiti</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Erimates">United Arab Emirates</option>
                                                    <option value="United States of America">United States of America</option>
                                                    <option value="Uraguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City State">Vatican City State</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                    <option value="Wake Island">Wake Island</option>
                                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zaire">Zaire</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label>Date prevu pour commercialisation *</label>
                                            <div>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" name="date_corm">
                                                    <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                </div><!-- input-group -->
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                                            <label>Number</label>
                                                            <div>
                                                                <input data-parsley-type="number" type="text"
                                                                       class="form-control" required
                                                                       placeholder="Enter only numbers"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alphanumeric</label>
                                                            <div>
                                                                <input data-parsley-type="alphanum" type="text"
                                                                       class="form-control" required
                                                                       placeholder="Enter alphanumeric value"/>
                                                            </div>
                                                        </div> -->
                                        <!-- <div class="form-group">
                                            <label>Observations</label>
                                            <div>
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div> -->
                                        <div class="form-group">

                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="valider">
                                                Enregistrer
                                            </button>


                                        </div>

                                    </form>

                                    <!-- <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Text</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" value="Some text value...">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label" for="example-email">Email</label>
                                            <div class="col-md-10">
                                                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Password</label>
                                            <div class="col-md-10">
                                                <input type="password" class="form-control" value="password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Readonly</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" readonly="readonly" value="Readonly value">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Disabled</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" disabled="disabled" value="Disabled value">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Placeholder</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="placeholder">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Text area</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Static control</label>
                                            <div class="col-sm-10">
                                                <p class="form-control-static">email@example.com</p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Helping text</label>
                                            <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="Helping text">
                                                <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Input Select</label>
                                            <div class="col-sm-10">
                                                <select class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                                <h6>Multiple select</h6>
                                                <select multiple="multiple" class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>

                                    </form> -->
                                </div> <!-- panel-body -->
                            </div> <!-- panel -->
                        </div> <!-- col -->
                    </div> <!-- End row -->





                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer">
                2011 - 2021 © Ingetelcom - powred by Orion soft CIV.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <script src="assets/js/app.js"></script>
    <!-- Plugins js -->
    <script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
    <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>

    <!-- Plugins Init js -->
    <script src="assets/pages/form-advanced.js"></script>
    <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>
    <script type="text/javascript">
			$(document).ready(function() {
				$('form').parsley();
			});
		</script>
</body>

</html>