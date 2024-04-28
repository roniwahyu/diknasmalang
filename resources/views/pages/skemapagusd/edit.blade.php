<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editSkemaPaguSd'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto  back-btn-col" >
                    <a class="back-btn btn " href="{{ url()->previous() }}" >
                        <i class="fa fa-angle-left"></i>                                
                         
                    </a>
                </div>
                <div class="col  " >
                    <div class="">
                        <div class="h5 font-weight-bold text-primary">{{ __('editSkemaPaguSd') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col-md-9 comp-grid " >
                    <div  class="card card-1 border rounded page-content" >
                        <!--[form-start]-->
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("skemapagusd/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="no">{{ __('no') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-no-holder" class=" ">
                                            <input id="ctrl-no" data-field="no"  value="<?php  echo $data['no']; ?>" type="text" placeholder="{{ __('enterNo') }}"  name="no"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sekolah_id">{{ __('sekolahId') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sekolah_id-holder" class=" ">
                                            <input id="ctrl-sekolah_id" data-field="sekolah_id"  value="<?php  echo $data['sekolah_id']; ?>" type="number" placeholder="{{ __('enterSekolahId') }}" step="any"  name="sekolah_id"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="namasekolah">{{ __('namasekolah') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-namasekolah-holder" class=" ">
                                            <input id="ctrl-namasekolah" data-field="namasekolah"  value="<?php  echo $data['namasekolah']; ?>" type="text" placeholder="{{ __('enterNamasekolah') }}"  name="namasekolah"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pagu_oktober">{{ __('paguOktober') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pagu_oktober-holder" class=" ">
                                            <input id="ctrl-pagu_oktober" data-field="pagu_oktober"  value="<?php  echo $data['pagu_oktober']; ?>" type="number" placeholder="{{ __('enterPaguOktober') }}" step="0.1"  name="pagu_oktober"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="input_sipd_2024">{{ __('inputSipd2024') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-input_sipd_2024-holder" class=" ">
                                            <input id="ctrl-input_sipd_2024" data-field="input_sipd_2024"  value="<?php  echo $data['input_sipd_2024']; ?>" type="number" placeholder="{{ __('enterInputSipd2024') }}" step="0.1"  name="input_sipd_2024"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="selisih">{{ __('selisih') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-selisih-holder" class=" ">
                                            <input id="ctrl-selisih" data-field="selisih"  value="<?php  echo $data['selisih']; ?>" type="number" placeholder="{{ __('enterSelisih') }}" step="0.1"  name="selisih"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bosda_9bulan">{{ __('bosda9Bulan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bosda_9bulan-holder" class=" ">
                                            <input id="ctrl-bosda_9bulan" data-field="bosda_9bulan"  value="<?php  echo $data['bosda_9bulan']; ?>" type="number" placeholder="{{ __('enterBosda9Bulan') }}" step="0.1"  name="bosda_9bulan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bosda_12bulan">{{ __('bosda12Bulan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bosda_12bulan-holder" class=" ">
                                            <input id="ctrl-bosda_12bulan" data-field="bosda_12bulan"  value="<?php  echo $data['bosda_12bulan']; ?>" type="number" placeholder="{{ __('enterBosda12Bulan') }}" step="0.1"  name="bosda_12bulan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jml_gttptt">{{ __('jmlGttptt') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jml_gttptt-holder" class=" ">
                                            <input id="ctrl-jml_gttptt" data-field="jml_gttptt"  value="<?php  echo $data['jml_gttptt']; ?>" type="number" placeholder="{{ __('enterJmlGttptt') }}" step="any"  name="jml_gttptt"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tunjangan">{{ __('tunjangan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tunjangan-holder" class=" ">
                                            <input id="ctrl-tunjangan" data-field="tunjangan"  value="<?php  echo $data['tunjangan']; ?>" type="number" placeholder="{{ __('enterTunjangan') }}" step="0.1"  name="tunjangan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tunjangan_total">{{ __('tunjanganTotal') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tunjangan_total-holder" class=" ">
                                            <input id="ctrl-tunjangan_total" data-field="tunjangan_total"  value="<?php  echo $data['tunjangan_total']; ?>" type="number" placeholder="{{ __('enterTunjanganTotal') }}" step="0.1"  name="tunjangan_total"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pagu_akhir">{{ __('paguAkhir') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pagu_akhir-holder" class=" ">
                                            <input id="ctrl-pagu_akhir" data-field="pagu_akhir"  value="<?php  echo $data['pagu_akhir']; ?>" type="number" placeholder="{{ __('enterPaguAkhir') }}" step="0.1"  name="pagu_akhir"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="keterangan">{{ __('keterangan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-keterangan-holder" class=" ">
                                            <input id="ctrl-keterangan" data-field="keterangan"  value="<?php  echo $data['keterangan']; ?>" type="text" placeholder="{{ __('enterKeterangan') }}"  name="keterangan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-ajax-status"></div>
                        <!--[form-content-end]-->
                        <!--[form-button-start]-->
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">
                            {{ __('update') }}
                            <i class="fa fa-send"></i>
                            </button>
                        </div>
                        <!--[form-button-end]-->
                    </form>
                    <!--[form-end]-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection
