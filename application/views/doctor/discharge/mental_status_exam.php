<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php $this->load->view('doctor/navbar'); ?>
        <?php $this->load->view('doctor/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2 class="m-0 text-dark">ROY O. DAHILDAHIL, 28, M</h2>
                            <p class="mb-0">Date of Admission: December 19, 2020 (3 Days)</p>
                            <a href="#">View Pavilion History</a>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="d-flex justify-content-end mb-2">
                                <h1>Pavilion 1</h1>
                            </div>
                            <div class="d-flex justify-content-end">
                                <p>December 22, 2020</p>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <?php $this->load->view('doctor/discharge/discharge_sidebar'); ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header p-2">
                                    <?php $this->load->view('doctor/discharge/tabs'); ?>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">

                                        <div class="container-fluid">
                                            <form action="">
                                                <h3>MENTAL STATUS EXAMINATION &nbsp; <button class="btn btn-default">Import Previous Data</button></h3>

                                                <hr>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>General Appearance</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2">
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Weight:</label>
                                                                <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Obese </span>
                                                                <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Underweight </span>
                                                                <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Emaciated </span>
                                                                <input type="radio" name="weight" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Grooming:</label>
                                                                <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Well-kempt </span>
                                                                <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Kempt </span>
                                                                <input type="radio" name="grooming" class="form-control mr-1"> <span class="mr-3"> Poorly-kempt </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Other Findings:</label>
                                                                <textarea class="form-control mb-2" style="width:85%"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>Behavior/Motor</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2">
                                                            <div class="form-inline">
                                                                <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Repetition </span>
                                                                <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Overactivity </span>
                                                                <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Agitated </span>
                                                                <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Catatonia </span>
                                                                <input type="radio" name="behavior" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Other Findings:</label>
                                                                <textarea class="form-control mb-2" style="width:85%"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>Attitude</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2">
                                                            <div class="form-inline">
                                                                <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Cooperative </span>
                                                                <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Attentive </span>
                                                                <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Evasive </span>
                                                                <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Hostile </span>
                                                                <input type="radio" name="attitude" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Other Findings:</label>
                                                                <textarea class="form-control mb-2" style="width:85%"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>Mood</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2">
                                                            <div class="form-inline">
                                                                <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Euphoric </span>
                                                                <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                                                <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Expansive </span>
                                                                <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Depressed </span>
                                                                <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Euthymic </span>
                                                                <input type="radio" name="mood" class="form-control mr-1"> <span class="mr-3"> Labile </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Other Findings:</label>
                                                                <textarea class="form-control mb-2" style="width:85%"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>Affect</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2">
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Quality/Tone:</label>
                                                                <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Euthymic </span>
                                                                <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Happy </span>
                                                                <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                                                <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Irritable </span>
                                                                <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Expansive </span>
                                                                <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Labile </span>
                                                                <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Depressed </span>
                                                                <input type="radio" name="quality" class="form-control mr-1"> <span class="mr-3"> Agitated </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Quantity:</label>
                                                                <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Mild </span>
                                                                <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Moderate </span>
                                                                <input type="radio" name="quantity" class="form-control mr-1"> <span class="mr-3"> Severe </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Range:</label>
                                                                <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                                                <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Restricted </span>
                                                                <input type="radio" name="range" class="form-control mr-1"> <span class="mr-3"> Flat </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Appropriateness:</label>
                                                                <input type="radio" name="appropriateness" class="form-control mr-1"> <span class="mr-3"> Appropriate </span>
                                                                <input type="radio" name="appropriateness" class="form-control mr-1"> <span class="mr-3"> Inappropriate </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Congruence:</label>
                                                                <input type="radio" name="congruence" class="form-control mr-1"> <span class="mr-3"> Congruent </span>
                                                                <input type="radio" name="congruence" class="form-control mr-1"> <span class="mr-3"> Incongruent </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Other Findings:</label>
                                                                <textarea class="form-control mb-2" style="width:85%"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>Speech</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2">
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Fluency:</label>
                                                                <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                                                <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Paraphasia </span>
                                                                <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Slurred </span>
                                                                <input type="radio" name="fluency" class="form-control mr-1"> <span class="mr-3"> Stuttering </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Amount:</label>
                                                                <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Normoproductive </span>
                                                                <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Hyperproductive </span>
                                                                <input type="radio" name="amount" class="form-control mr-1"> <span class="mr-3"> Hypoproductive </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Rate:</label>
                                                                <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                                                <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Slowed </span>
                                                                <input type="radio" name="rate" class="form-control mr-1"> <span class="mr-3"> Rapid </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Tone:</label>
                                                                <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Normal </span>
                                                                <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Childlike </span>
                                                                <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Anxious </span>
                                                                <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Irritable </span>
                                                                <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Timid </span>
                                                                <input type="radio" name="tone" class="form-control mr-1"> <span class="mr-3"> Dysphoric </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Volume:</label>
                                                                <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Audible </span>
                                                                <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Soft </span>
                                                                <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Loud </span>
                                                                <input type="radio" name="volume" class="form-control mr-1"> <span class="mr-3"> Mumbled </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Other Findings:</label>
                                                                <textarea class="form-control mb-2" style="width:85%"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>Thought Process</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2">
                                                            <div class="form-inline">
                                                                <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Goal-directed </span>
                                                                <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Flight of Ideas </span>
                                                                <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Circumstantiality </span>
                                                                <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Looseness of Association </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Tangentiality </span>
                                                                <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Thought Blocking </span>
                                                                <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Neologism </span>
                                                                <input type="radio" name="thought_process" class="form-control mr-1"> <span class="mr-3"> Perseveration </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Other Findings:</label>
                                                                <textarea class="form-control mb-2" style="width:85%"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>Thought Content</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2 pt-2">

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <input type="checkbox" class="form-control mr-1" name="" id="">
                                                                    <label for="" class="mr-1">Obsession:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text" name="" id="" class="form-control" style="width:100%;">
                                                                </div>
                                                            </div>

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <input type="checkbox" class="form-control mr-1" name="" id="">
                                                                    <label for="" class="mr-1">Preoccupations:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text" name="" id="" class="form-control" style="width:100%;">
                                                                </div>
                                                            </div>

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <input type="checkbox" class="form-control mr-1" name="" id="">
                                                                    <label for="" class="mr-1">Compulsions:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text" name="" id="" class="form-control" style="width:100%;">
                                                                </div>
                                                            </div>

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <input type="checkbox" class="form-control mr-1" name="" id="">
                                                                    <label for="" class="mr-1">Suicidality:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="radio" name="suicidality" class="form-control mr-1"> <span class="mr-2"> Suicide ideations </span>
                                                                    <input type="radio" name="suicidality" class="form-control mr-1"> <span class="mr-2"> Suicide behavior </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <input type="checkbox" class="form-control mr-1" name="" id="">
                                                                    <label for="" class="mr-1">Homocidality:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text" name="" id="" class="form-control" style="width:100%;">
                                                                </div>
                                                            </div>

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <input type="checkbox" class="form-control mr-1" name="" id="">
                                                                    <label for="" class="mr-1">Delusions:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="text" name="" id="" class="form-control" style="width:100%;">
                                                                </div>
                                                            </div>

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <input type="checkbox" class="form-control mr-1" name="" id="">
                                                                    <label for="" class="mr-1">Description:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <textarea class="form-control mb-2" style="width:100%"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-inline">
                                                                <div class="col-md-2">
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Bizzare </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Non-bizzare </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Mood-congruent </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Mood-incongruent </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Grandiose </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Persecutory </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-inline">
                                                                <div class="col-md-2">
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Erotomania </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Paranoid </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Jealousy </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Somatic </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Referential </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Nihilistic </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Withdrawal </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-inline">
                                                                <div class="col-md-2">
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Broadcasting </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Insertion </span>
                                                                    <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-2"> Thought Control </span>
                                                                </div>
                                                            </div>

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <label for="" class="mr-1">Other Findings:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <textarea class="form-control mb-2" style="width:100%"></textarea>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>Perception</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2">
                                                            <div class="form-inline">
                                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Auditory </span>
                                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Visual </span>
                                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Tactile </span>
                                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Gustatory </span>
                                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Olfactory </span>
                                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Derealization </span>
                                                                <input type="checkbox" name="" class="form-control mr-1"> <span class="mr-3"> Depersonalization </span>
                                                            </div>

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <label for="" class="mr-1">Notes:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <textarea class="form-control mb-2" style="width:100%"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-inline mb-2">
                                                                <div class="form-inline col-md-2">
                                                                    <label for="" class="mr-1">Other Findings:</label>
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <textarea class="form-control mb-2" style="width:100%"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-2 d-flex justify-content-end">
                                                        <label>Sensoriom/Cognition</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="card pl-2">
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Consciousness:</label>
                                                                <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Awake </span>
                                                                <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Asleep </span>
                                                                <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Lethargic </span>
                                                                <input type="radio" name="consciousness" class="form-control mr-1"> <span class="mr-3"> Stuporous </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Orientation:</label>
                                                                <input type="radio" name="orientation" class="form-control mr-1"> <span class="mr-3"> Person </span>
                                                                <input type="radio" name="orientation" class="form-control mr-1"> <span class="mr-3"> Place </span>
                                                                <input type="radio" name="orientation" class="form-control mr-1"> <span class="mr-3"> Time </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Attention Span:</label>
                                                                <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                                                <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                                                <input type="radio" name="attention_span" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Impulse:</label>
                                                                <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                                                <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                                                <input type="radio" name="impulse" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Judgement:</label>
                                                                <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                                                <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                                                <input type="radio" name="judgement" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Insight:</label>
                                                                <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                                                <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                                                <input type="radio" name="insight" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Reliability:</label>
                                                                <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Good </span>
                                                                <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Fair </span>
                                                                <input type="radio" name="reliability" class="form-control mr-1"> <span class="mr-3"> Poor </span>
                                                            </div>
                                                            <div class="form-inline">
                                                                <label for="" class="mr-3">Other Findings:</label>
                                                                <textarea class="form-control mb-2" style="width:85%"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <input type="hidden" value="submitted" name="ope_submitted" /> -->
                                                <button type="submit" class="btn btn-primary float-right" name="ope_submit">Submit</button>
                                                <!-- <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button> -->
                                            </form>
                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- /.nav-tabs-custom -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div> <!-- /.content-wrapper -->

        <!-- <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.5
            </div>
        </footer> -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
</body>

<script type="text/javascript">
    $('#height').change(function() {
        if ($('#weight').val() != 0) {
            var height_cm = $('#height').val() / 100;
            var bmi = $('#weight').val() / height_cm;
            $('#bmi').val(bmi.toFixed(2));
        }
    });

    $('#weight').change(function() {
        if ($('#height').val() != 0) {
            var height_cm = $('#height').val() / 100;
            var bmi = $('#weight').val() / (height_cm * height_cm);
            $('#bmi').val(bmi.toFixed(2));
        }
    });
</script>

<script>
    $('[data-widget="pushmenu"]').PushMenu('collapse');

    $(function() {
        $("#tbl_prognotes").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        // $('#example2').DataTable({
        //     "paging": true,
        //     "lengthChange": false,
        //     "searching": false,
        //     "ordering": true,
        //     "info": true,
        //     "autoWidth": false,
        //     "responsive": true,
        // });
    });
</script>

</html>