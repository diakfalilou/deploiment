<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js" ></script>
<style>
    /* your CSS goes here*/
 body {
    background: #eee
}

#regForm {
    background-color: #ffffff;
    margin: 0px auto;
    font-family: Raleway;
    padding: 40px;
    border-radius: 10px
}






input.invalid {
    background-color: #ffdddd
}

.tab {
    display: none
}




#prevBtn {
    /* //background-color: #bbbbbb */
}

.step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #135e0053;
    border: none;
    border-radius: 50%;
    display: inline-block;
    /* opacity: 0.5 */
}

.step.active {
    opacity: 5
}

.step.finish {
    background-color: green
}

.all-steps {
    text-align: center;
    margin-top: 30px;
    margin-bottom: 30px
}

.thanks-message {
    display: none
}




/* Hide the browser's default radio button */

.container input[type="radio"] {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}


/* Create a custom radio button */

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}


/* On mouse-over, add a grey background color */

.container:hover input~.checkmark {
    background-color: #ccc;
}


/* When the radio button is checked, add a blue background */

.container input:checked~.checkmark {
    background-color: #2196F3;


}


/* Create the indicator (the dot/circle - hidden when not checked) */

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}


/* Show the indicator (dot/circle) when checked */

.container input:checked~.checkmark:after {
    display: block;
}


/* Style the indicator (dot/circle) */

.container .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
</style>
<nav style="background-color:#023429; padding:0%" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <img style="float: left;" src="{{URL::asset('/img/logoCNT.PNG')}}"  width="40" class="mb-4">
        <em style="text-align:center; color:white; margin-left: 10%; text-tranform:uppercase " >
            Les avis et documents collectés sur cette plate-forme seront utilisés dans le cadre de
            l'élaboration de la nouvelle Consitution et peuvent faire l'objet d'une large publication
            par le Conseil National de la Transition
        </em>

      </div>
    </div>
</nav>


<?php
    $tab_id_sous_titre=array();
    $tab_items_qc=array();
    $tab_tbl_titre=array();
    foreach ($tbl_sous_titre as  $value){$tab_id_sous_titre[]=$value->id;}
    foreach ($tbl_items_qc as  $value){ $tab_items_qc[]=$value->id;}
    foreach ($tbl_titre as  $value){ $tab_tbl_titre[]=$value->id;}
?>





<div class="container-">

    <div class="row d-flex justify-content-center align-items-center">
        {{-- <div style="padding-top:0%" class="col-md-5">
            <p style="text-align:justify; font-family:cambria" >
                <span>Institutions constitutionnelles</span>  <br>
    Désignent les organes gouvernementaux créés par la Constitution pour exercer les pouvoirs politiques et administratifs de l'État. Elles comprennent généralement le pouvoir législatif, exécutif et judiciaire, qui sont séparés pour garantir une répartition équilibrée du pouvoir et une protection contre l'abus de pouvoir. Les institutions constitutionnelles jouent un rôle clé dans la protection des droits et libertés fondamentales et assurent la stabilité et la légitimité du système politique.
            </p>
        </div> --}}
        <div class="col-md-7">
            <form method="POST" action="#" id="regForm">
            @csrf
                <h4 class="lh-base" style="text-align: center; font-size:15px" id="register"></h4>
                <hr>
                <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
                <div class="tab">
                        <ul type="none" >
                            <li>
                                <h4 class="lh-base" style="text-align: center; font-size:15px">I. LISTE DES INSTITUTIONS CONSTITUTIONNELLES : </h4>
                                <input style="border-color:#c10027;" type="hidden" name="titre1" value="{{ $tab_tbl_titre[0] }}" >
                            </li>
                            <ol type="1" >

                                <li>

                                     <span style="font-size:15px; font-weight:bold;" >
                                        <input style="border-color:#c10027;" name="id_sous_titre1" type="hidden" value="{{ $tab_id_sous_titre[0] }}">
                                        Faut-il maintenir dans la Constitution l’ensemble des institutions Constitutionnelles antérieurement connues ?</span>
                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">La Cour Constitutionnelle</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items1" type="hidden" value="{{ $tab_items_qc[0] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" checked class="form-check-input" type="radio" name="items1" id="inlineRadio1" checked value="OUI">
                                            <label class="form-check-label" for="inlineRadio1">Oui</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items1" id="inlineRadio2" value="NON">
                                            <label class="form-check-label" for="inlineRadio2">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="vous"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items2" type="hidden" value="{{ $tab_items_qc[1] }}" >
                                            <textarea style="border-color:#c10027;"  class="form-control" type="text" name="items2" id="vous"></textarea>
                                        </div>
                                    </p>

                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">La Cour des Comptes</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items3" type="hidden" value="{{ $tab_items_qc[2] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items3" id="inlineRadio3"  checked value="Oui">
                                            <label class="form-check-label" for="inlineRadio3">Oui</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items3" id="inlineRadio4" value="Non">
                                            <label class="form-check-label" for="inlineRadio4">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="courCompte"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items4" type="hidden" value="{{ $tab_items_qc[3] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" name="items4" id="courCompte" ></textarea>

                                        </div>
                                    </p>

                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">La Haute Cour de Justice</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items5" type="hidden" value="{{ $tab_items_qc[4] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items5" id="items9" checked value="Oui">
                                            <label class="form-check-label" for="items9">Oui</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items5" id="items90" value="Non">
                                            <label class="form-check-label" for="items90">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="pensezPerson"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items6" type="hidden" value="{{ $tab_items_qc[5] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" name="items6" id="pensezPerson" ></textarea>
                                        </div>
                                    </p>

                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">Le Conseil Economique, Social, Environnemental et Culturel</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items7" type="hidden" value="{{ $tab_items_qc[6] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items7" id="conseillEconomique" checked value="Oui">
                                            <label class="form-check-label" for="conseillEconomique">Oui</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items7" id="conseillEconomique0" value="Non">
                                            <label class="form-check-label" for="conseillEconomique0">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="pense01"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items8" type="hidden" value="{{ $tab_items_qc[7] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" name="items8" id="pense01" ></textarea>
                                        </div>
                                    </p>

                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">La Haute Autorité de la Communication</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items9" type="hidden" value="{{ $tab_items_qc[8] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items9" id="hauteAutorite"  checked value="Oui">
                                            <label class="form-check-label" for="hauteAutorite">Oui</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items9" id="hauteAutorite0" value="Non">
                                            <label class="form-check-label" for="hauteAutorite0">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="pense02"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items10" type="hidden" value="{{ $tab_items_qc[9] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" name="items10" id="pense02" ></textarea>
                                        </div>
                                    </p>

                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">Le Médiateur de la République</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items11" type="hidden" value="{{ $tab_items_qc[10] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items11" id="mediateurRepublique"  checked value="Oui">
                                            <label class="form-check-label" for="mediateurRepublique">Oui</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items11" id="mediateurRepublique0" value="Non">
                                            <label class="form-check-label" for="mediateurRepublique0">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="pense03"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items12" type="hidden" value="{{ $tab_items_qc[11] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" name="items12" id="pense03" ></textarea>
                                        </div>
                                    </p>

                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">La commission Electorale Nationale Indépendante</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items13" type="hidden" value="{{ $tab_items_qc[12] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items13" id="commissionElectoral"  checked value="Oui">
                                            <label class="form-check-label" for="commissionElectoral">Oui</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items13" id="commissionElectoral0" value="Non">
                                            <label class="form-check-label" for="commissionElectoral0">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="pense04"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items14" type="hidden" value="{{ $tab_items_qc[13] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" name="items14" id="pense04" ></textarea>
                                        </div>
                                    </p>

                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">L’institution Indépendante des Droits Humains</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items15" type="hidden" value="{{ $tab_items_qc[14] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items15" id="items15"  checked value="Oui">
                                            <label class="form-check-label" for="items15">Oui</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items15" id="items150" value="Non">
                                            <label class="form-check-label" for="items150">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="pense04"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items16" type="hidden" value="{{ $tab_items_qc[15] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" name="items16" id="pense04" ></textarea>
                                        </div>
                                    </p>

                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">Le Conseil Supérieur de la Magistrature</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items17" type="hidden" value="{{ $tab_items_qc[16] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items17" id="items17"  checked value="Oui">
                                            <label class="form-check-label" for="items17">Oui</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items17" id="items170" value="Non">
                                            <label class="form-check-label" for="items170">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="pense05"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items18" type="hidden" value="{{ $tab_items_qc[17] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" name="items18" id="pense05" ></textarea>
                                        </div>
                                    </p>

                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">Le Haut Conseil des Collectivités Locales</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items19" type="hidden" value="{{ $tab_items_qc[18] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items19" id="items19"  checked value="Oui">
                                            <label class="form-check-label" for="items19">Oui</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items19" id="items190" value="Non">
                                            <label class="form-check-label" for="items190">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="pense06"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items20" type="hidden"items19 value="{{ $tab_items_qc[19] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" name="items20" id="pense06" ></textarea>
                                        </div>
                                    </p>
                                </li>

                                <li>
                                    <input style="border-color:#c10027;" name="id_sous_titre2" type="hidden" value="{{ $tab_id_sous_titre[1] }}">
                                    <span style="font-size:15px; font-weight:bold;" > Faut-il créer les nouvelles institutions constitutionnelles suivantes ? </span>
                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">Le Haut Conseil des Sages</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items21" type="hidden" value="{{ $tab_items_qc[20] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items21" id="hautConseilSage"  checked value="Oui">
                                            <label class="form-check-label" for="hautConseilSage">Oui</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items21" id="hautConseilSage3" value="Non">
                                            <label class="form-check-label" for="hautConseilSage3">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="vous02"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items22" type="hidden" value="{{ $tab_items_qc[21] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" type="text" name="items22" id="vous02"></textarea>
                                        </div>
                                    </p>
                                    <p style="margin-top:0.5%" >
                                        <label style="font-weight:bol;" for=""> <span style="font-weight:bold;">Le Conseil National des Jeunes et Femmes</span> </label>
                                        <input style="border-color:#c10027;" name="qc_items23" type="hidden" value="{{ $tab_items_qc[22] }}" >
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items23" id="conseilNationalJeuneFemme"  checked value="Oui">
                                            <label class="form-check-label" for="conseilNationalJeuneFemme">Oui</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input style="border-color:#c10027;" class="form-check-input" type="radio" name="items23" id="conseilNationalJeuneFemme3" value="Non">
                                            <label class="form-check-label" for="conseilNationalJeuneFemme3">Non</label>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <label style="font-weight:bol;" for="vous021"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                                        </div>
                                        <div style="padding:0.5%" class="input-group">
                                            <input style="border-color:#c10027;" name="qc_items24" type="hidden" value="{{ $tab_items_qc[23] }}" >
                                            <textarea style="border-color:#c10027;" class="form-control" type="text" name="items24" id="vous021"></textarea>

                                        </div>
                                    </p>
                                </li>
                            </ol>
                        </ul>
                </div>

                <div class="tab">
                    <h4 class="lh-base" style="text-align: center; font-size:15px">
                        II.  AMENAGEMENTS ORGANISATIONNELS AUX INSTITUTIONS CONSTITUTIONNELLES : </h4>
                        <input style="border-color:#c10027;" type="hidden" name="titre2" value="{{ $tab_tbl_titre[1] }}" >
                    <p>
                        <span style="font-size:15px; font-weight:bold;" >
                            <input style="border-color:#c10027;" name="id_sous_titre3" type="hidden" value="{{ $tab_id_sous_titre[2] }}">
                            1. Faut-il transférer les attributions du Médiateur de la République au Haut Conseil des Sages s’il est maintenu  ?</span>
                        <div style="padding:0.5%" class="input-group">
                            <p style="font-zise:22px; font-weight:bold;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-right-line-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-6v-6h6z" fill="currentColor"></path>
                                    <path d="M3 15v-6"></path>
                                 </svg> Cochez une seule réponse :
                                 <input style="border-color:#c10027;" name="qc_items25" type="hidden" value="{{ $tab_items_qc[24] }}" >
                            </p>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="chek20">
                                Il faut transférer les attributions du Médiateur de la République au Haut Conseil des sages
                            </label>

                            <input style="border-color:#c10027;" checked name="items25" class="form-check-input" type="radio"  id="chek20" >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDisabled">
                                Il ne faut pas transférer les attributions du médiateur de la République au haut conseil des sages
                            </label>
                            <input style="border-color:#c10027;" value="Il ne faut pas transférer les attributions du médiateur de la République au haut conseil des sages" name="items25" class="form-check-input" type="radio"  id="flexCheckDisabled" >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckCheckedDisabled">
                                Quelle que soit la façon
                            </label>
                            <input style="border-color:#c10027;"  name="items25" class="form-check-input" type="radio"  id="flexCheckCheckedDisabled" >
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <label style="font-weight:bol;" for="vous021"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <input style="border-color:#c10027;" name="qc_items26" type="hidden" value="{{ $tab_items_qc[25] }}" >
                            <textarea style="border-color:#c10027;" class="form-control" type="text" name="items26" id="vous021"></textarea>
                        </div>
                    </p>

                    <p>
                        <span style="font-size:15px; font-weight:bold;" >
                            <input style="border-color:#c10027;" name="id_sous_titre4" type="hidden" value="{{ $tab_id_sous_titre[3] }}">

                            2. Comment les membres des institutions Constitutionnelles doivent-ils être désignés ? </span>
                        <div style="padding:0.5%" class="input-group">
                            <p style="font-zise:22px; font-weight:bold;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-right-line-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-6v-6h6z" fill="currentColor"></path>
                                    <path d="M3 15v-6"></path>
                                 </svg> Cochez une seule réponse :
                                 <input style="border-color:#c10027;" name="qc_items27" type="hidden" value="{{ $tab_items_qc[26] }}" >
                            </p>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckIndeterminateDisabled">
                                Election par leurs corporations ou entités d’origine
                            </label>
                            <input style="border-color:#c10027;" checked  name="items27" class="form-check-input" type="radio"  id="flexCheckIndeterminateDisabled" >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckDisabled011">
                                Election par leurs corporations ou entités d’origine pour les uns et nominations pour les autres
                            </label>
                            <input style="border-color:#c10027;"  name="items27" class="form-check-input" type="radio"  id="flexCheckDisabled011" >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckCheckedDisabled012">
                                Seulement au second tour
                            </label>
                            <input style="border-color:#c10027;" value="Seulement au second tour" name="items27" class="form-check-input" type="radio"  id="flexCheckCheckedDisabled012" >
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <label style="font-weight:bol;" for="vous021"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <input style="border-color:#c10027;" name="qc_items28" type="hidden" value="{{ $tab_items_qc[27] }}" >
                            <textarea style="border-color:#c10027;" class="form-control" type="text" name="items28" id="vous021"></textarea>
                        </div>
                    </p>
                    <p>
                        <span style="font-size:15px; font-weight:bold;" >
                            <input style="border-color:#c10027;" name="id_sous_titre5" type="hidden" value="{{ $tab_id_sous_titre[4] }}">
                            3. Comment les Présidents d’institutions Constitutionnelles doivent-ils être désignés ? </span>
                        <div style="padding:0.5%" class="input-group">
                            <p style="font-zise:22px; font-weight:bold;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-right-line-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" filcandidatElection1l="none"></path>
                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-6v-6h6z" fill="currentColor"></path>
                                    <path d="M3 15v-6"></path>
                                 </svg> Cochez une seule réponse :
                                 <input style="border-color:#c10027;" name="qc_items29" type="hidden" value="{{ $tab_items_qc[28] }}" >
                            </p>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="check3">
                                Validation par le Chef de l’Etat de l’élection de chaque Président d’Institution par ses paires
                            </label>
                            <input style="border-color:#c10027;" checked  name="items29" class="form-check-input" type="radio"  id="items29" >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="check10">
                                Validation par le Chef de l’Etat de la proposition faite par le parlement après enquête préalable
                            </label>
                            <input style="border-color:#c10027;" value="Validation par le Chef de l’Etat de la proposition faite par le parlement après enquête préalable" name="items29" class="form-check-input" type="radio"  id="check10" >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="check100">
                                Nomination à la discrétion du Chef de l’Etat
                            </label>
                            <input style="border-color:#c10027;" value="Nomination à la discrétion du Chef de l’Etat" name="items29" class="form-check-input" type="radio"  id="check100" >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="check101">
                                mination par le Chef de l’Etat parmi les représentants désignés par les entités ou corporations de départ
                            </label>
                            <input style="border-color:#c10027;" value=" mination par le Chef de l’Etat parmi les représentants désignés par les entités ou corporations de départ" name="items29" class="form-check-input" type="radio"  id="check101" >
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="flexCheckCheckedDisabled">
                                Nomination par le Chef de l’Etat parmi les représentants désignés par les entités ou corporations de départ
                            </label>
                            <input style="border-color:#c10027;" value="Nomination par le Chef de l’Etat parmi les représentants désignés par les entités ou corporations de départ" name="items29" class="form-check-input" type="radio"  id="flexCheckCheckedDisabled" >
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <label style="font-weight:bol;" for="vous021"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <input style="border-color:#c10027;" name="qc_items30" type="hidden" value="{{ $tab_items_qc[29] }}" >
                            <textarea style="border-color:#c10027;" class="form-control" type="text" name="items30" id="vous021"></textarea>

                        </div>
                    </p>


                </div>

                <div class="tab">
                    <h4 class="lh-base" style="text-align: center; font-size:15px">III. CONTROLE DES INSTITUTIONS CONSTITUTIONNELLES </h4>
                    <input style="border-color:#c10027;" type="hidden" name="titre2" value="{{ $tab_tbl_titre[2] }}" >

                    <p>
                        <span style="font-size:15px; font-weight:bold;" >
                            <input style="border-color:#c10027;" name="id_sous_titre6" type="hidden" value="{{ $tab_id_sous_titre[5] }}">
                            1. 	Faut-il confier le contrôle et l’évaluation des Institutions constitutionnelles au pouvoir législatif ou à l’une des chambres du Parlement ?</span>
                        <div style="padding:0.5%" class="input-group">
                            <p style="font-zise:22px; font-weight:bold;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-right-line-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-6v-6h6z" fill="currentColor"></path>
                                    <path d="M3 15v-6"></path>
                                 </svg> Cochez les réponses ci-dessous qui vous conviennent :
                                 <input style="border-color:#c10027;" name="qc_items31" type="hidden" value="{{ $tab_items_qc[30] }}" >
                            </p>
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexChec1">
                                Sans exclure les autres mécanismes de contrôle, le contrôle et l’évaluation des Institutions constitutionnelles peuvent être confiés à une seule chambre du Parlement
                            </label>
                            <input style="border-color:#c10027;"  name="items31" class="form-check-input" type="checkbox"  id="flexChec1" >
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexCheck2">
                                Sans exclure les autres mécanismes de contrôle, le contrôle et l’évaluation des Institutions constitutionnelles peuvent être confiés aux deux chambres du Parlement, s’il y a lieu
                            </label>
                            <input style="border-color:#c10027;"  name="items32" class="form-check-input" type="checkbox"  id="flexCheck2" >
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexCheckChecke3">
                                Il ne faut pas confier le contrôle et l’évaluation des Institutions constitutionnelles au pouvoir législatif
                            </label>
                            <input style="border-color:#c10027;"  name="items33" class="form-check-input" type="checkbox"  id="flexCheckChecke3" >
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <hr>
                            <label style="font-weight:bol;" for="vous021"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <input style="border-color:#c10027;" name="qc_items32" type="hidden" value="{{ $tab_items_qc[31] }}" >
                            <textarea style="border-color:#c10027;" class="form-control" type="text" name="items34" id="vous021"></textarea>
                        </div>
                    </p>

                </div>

                <div class="tab" >
                    <h4 class="lh-base" style="text-align: center; font-size:15px">IV. CADRAGE ET GARANTIE DES LOIS ORGANIQUES : </h4>
                    <input style="border-color:#c10027;" type="hidden" name="titre3" value="{{ $tab_tbl_titre[3] }}" >
                    <p>
                        <span style="font-size:15px; <input style="border-color:#c10027;" type="text" name="titre
                        <input style="border-color:#c10027;" type="text" name="titre
                        <input style="border-color:#c10027;" type="text" name="titre
                        <input style="border-color:#c10027;" type="text" name="titrefont-weight:bold;" >
                            <input style="border-color:#c10027;" name="id_sous_titre7" type="hidden" value="{{ $tab_id_sous_titre[6] }}">
                            1. Quels doivent être les principes directeurs de l’élaboration des Lois organiques (celles qui détaillent les dispositions de la Constitution) ?</span>
                        <div style="padding:0.5%" class="input-group">
                            <p style="font-zise:22px; font-weight:bold;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-right-line-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-6v-6h6z" fill="currentColor"></path>
                                    <path d="M3 15v-6"></path>
                                 </svg> Cochez les réponses ci-dessous qui vous conviennent :
                                 <input style="border-color:#c10027;" name="qc_items33" type="hidden" value="{{ $tab_items_qc[32] }}" >
                            </p>
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexChec1">
                                • Consultation obligatoire des institutions existantes et des faitières de la société civile pendant
                                la conception des Lois organiques
                            </label>
                            <input style="border-color:#c10027;"  name="items35" class="form-check-input" type="checkbox"  id="flexChec1" >
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexCheck2">
                                Prise en compte obligatoire des réalités sociologiques et solutions endogènes
                            </label>
                            <input style="border-color:#c10027;"  name="items36" class="form-check-input" type="checkbox"  id="flexCheck2" >
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexCheckChecke3">
                                • Etude obligatoire des impacts des Lois organiques sur l’économie, la société (fonctionnement
                                général de l’Etat), la culture, l’environnement et les futures générations
                            </label>
                            <input style="border-color:#c10027;"  name="items37" class="form-check-input" type="checkbox"  id="flexCheckChecke3" >
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexCheckChecke3">
                                • L’équilibre entre l’efficacité et la représentation des composantes de la Nation
                            </label>
                            <input style="border-color:#c10027;"  name="items38" class="form-check-input" type="checkbox"  id="flexCheckChecke3" >
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexCheckChecke3">
                                • La conformité aux principes fondamentaux de la République
                            </label>
                            <input style="border-color:#c10027;"  name="items39" class="form-check-input" type="checkbox"  id="flexCheckChecke3" >
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <hr>
                            <label style="font-weight:bol;" for="vous021"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <input style="border-color:#c10027;" name="qc_items34" type="hidden" value="{{ $tab_items_qc[33] }}" >
                            <textarea style="border-color:#c10027;" class="form-control" type="text" name="items40" id="vous021"></textarea>
                            {{-- <input style="border-color:#c10027;" id="vous" class="form-control" > --}}
                        </div>
                    </p>

                    <p>
                        <span style="font-size:15px; font-weight:bold;" >
                            <input style="border-color:#c10027;" name="id_sous_titre8" type="hidden" value="{{ $tab_id_sous_titre[7] }}">
                            2. Quelle sanction doit-elle être prévue contre la non-élaboration d’une Loi organique ? </span>
                        <div style="padding:0.5%" class="input-group">
                            <p style="font-zise:22px; font-weight:bold;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-right-line-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-6v-6h6z" fill="currentColor"></path>
                                    <path d="M3 15v-6"></path>
                                 </svg> Cochez les réponses ci-dessous qui vous conviennent :
                                 <input style="border-color:#c10027;" name="qc_items35" type="hidden" value="{{ $tab_items_qc[34] }}" >
                            </p>
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexChec1">
                                • Considérer et punir comme haute trahison l’abstention volontaire d’élaborer d’une Loi organique
                            </label>
                            <input style="border-color:#c10027;" checked  name="items41" class="form-check-input" type="checkbox"  id="flexChec1" >
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexCheck2">
                                • Rendre obligatoires des explications publiques des motifs de la non-élaboration une Loi
                                organique une année après l’entrée en fonction du Chef de l’Etat ou une année après l’installation
                                du Parlement
                            </label>
                            <input style="border-color:#c10027;"  name="items42" class="form-check-input" type="checkbox"  id="flexCheck2" >
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexCheckChecke3">
                                • Etude obligatoire des impacts des Lois organiques sur l’économie, la société (fonctionnement
                                général de l’Etat), la culture, l’environnement et les futures générations
                            </label>
                            <input style="border-color:#c10027;" name="items43" class="form-check-input" type="checkbox"  id="flexCheckChecke3" >
                        </div>
                        <div class="form-check">
                            <hr>
                            <label class="form-check-label" for="flexCheckChecke3">
                                • Suspendre la candidature du Président de la République en exercice et du Président du Parlement
                                (ou des Présidents des Chambres du Parlement) au compte des prochaines élections présidentielle
                                ou législatives
                            </label>
                            <input style="border-color:#c10027;"  name="items44" class="form-check-input" type="checkbox"  id="flexCheckChecke3" >
                        </div>

                        <div style="padding:0.5%" class="input-group">
                            <hr>
                            <label style="font-weight:bol;" for="vous021"><span style="font-weight:bold;"> Si vous le souhaitez, développez votre pensez ici</span></label><br>
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <input style="border-color:#c10027;" name="qc_items36" type="hidden" value="{{ $tab_items_qc[35] }}" >
                            <textarea style="border-color:#c10027;" class="form-control" type="text" name="items45" id="vous021"></textarea>
                            {{-- <input style="border-color:#c10027;" id="vous" class="form-control" > --}}
                        </div>
                    </p>

                    <p>
                        <span style="font-size:15px; font-weight:bold;" >
                            <input style="border-color:#c10027;" name="id_sous_titre9" type="hidden" value="{{ $tab_id_sous_titre[8] }}">
                            3. Quelle autre idée voulez-vous développer sur les Institutions constitutionnelles ?</span>
                        <div style="padding:0.5%" class="input-group">
                            <hr>
                            <label style="font-weight:bol;" for="vous021"><span style="font-weight:bold;"> Veuillez saisir votre idée</span></label><br>
                        </div>
                        <div style="padding:0.5%" class="input-group">
                            <input style="border-color:#c10027;" name="qc_items37" type="hidden" value="{{ $tab_items_qc[36] }}" >
                            <textarea style="border-color:#c10027;" class="form-control" type="text" name="items46" id="vous021"></textarea>
                            {{-- <input style="border-color:#c10027;" id="vous" class="form-control" > --}}
                        </div>
                    </p>


                </div>

                <div class="thanks-message text-center" id="text-message">
                    <img src="{{URL::asset('/img/logoCNT.PNG')}}"  width="100" class="mb-4">

                    <h3>Veillez validé le formulaire..!</h3>
                    {{-- <span></span> --}}
                    <button style="width:25%" class="btn btn-success" >Valider</button>
                    @if(isset($testeur))
                    <script type="text/javascript">
                        $(document).ready(function() {
                            swal({
                                title: "Formulaire validé !",
                                text: "Nous vous remercions pour cet exercice citoyen. Vous pouvez aussi lancer des sujets de discussion et interagir avec des milliers de Guinéens",
                                icon: "success",
                                button: "Ok",
                                timer: 15000
                            });
                        });
                    </script>
                    @endif
                </div>
                <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;">
                        <button class="btn btn-danger" type="button" id="prevBtn" onclick="nextPrev(-1)"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-left-line" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 15v3.586a1 1 0 0 1 -1.707 .707l-6.586 -6.586a1 1 0 0 1 0 -1.414l6.586 -6.586a1 1 0 0 1 1.707 .707v3.586h6v6h-6z"></path>
                            <path d="M21 15v-6"></path>
                         </svg> Précédent</button>
                        <button   name="btns" value="012" class="btn btn-success" type="button" id="nextBtn" onclick="nextPrev(1)">Suivant
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-right-line" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 9v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-6v-6h6z"></path>
                                <path d="M3 9v6"></path>
                             </svg>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script type="text/javascript">

</script>


<script>
    //your javascript goes here
var currentTab = 0;
document.addEventListener("DOMContentLoaded", function(event) {
    showTab(currentTab);
});

function showTab(n) {

    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "soumetre";

    } else {
        document.getElementById("nextBtn").innerHTML = "Suivant";

    }
    fixStepIndicator(n)
    if(n!=0){
        $(document).ready(function() {
        swal({
            title: "Formulaire : "+n+" validé !",
            text: "Merci de bien vouloir répondre aux questionnaires suivants.",
            icon: "success",
            button: "Ok",
            timer: 7000
        });
    });
    }

}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
        // document.getElementById("regForm").submit();
        // return false;
        //alert("sdf");
        document.getElementById("nextprevious").style.display = "none";
        document.getElementById("all-steps").style.display = "none";
        document.getElementById("register").style.display = "none";
        document.getElementById("text-message").style.display = "block";
    }
    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
        }
    }
    if (valid) { document.getElementsByClassName("step")[currentTab].className += " finish"; }
    return valid;
}

function fixStepIndicator(n) {
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) { x[i].className = x[i].className.replace(" active", ""); }
    x[n].className += " active";
}
</script>
