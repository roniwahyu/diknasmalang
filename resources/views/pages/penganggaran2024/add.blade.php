<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewPenganggaran2024'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewPenganggaran2024') }}</div>
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
                        <form id="penganggaran2024-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('penganggaran2024.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="parentid">{{ __('parentid') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-parentid-holder" class=" ">
                                                <input id="ctrl-parentid" data-field="parentid"  value="<?php echo get_value('parentid') ?>" type="number" placeholder="{{ __('enterParentid') }}" step="any"  name="parentid"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="subkegiatanasli">{{ __('subkegiatanasli') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-subkegiatanasli-holder" class=" ">
                                                <textarea placeholder="{{ __('enterSubkegiatanasli') }}" id="ctrl-subkegiatanasli" data-field="subkegiatanasli"  rows="5" name="subkegiatanasli" class=" form-control"><?php echo get_value('subkegiatanasli') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="statussubkegiatan">{{ __('statussubkegiatan') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-statussubkegiatan-holder" class=" ">
                                                <input id="ctrl-statussubkegiatan" data-field="statussubkegiatan"  value="<?php echo get_value('statussubkegiatan') ?>" type="text" placeholder="{{ __('enterStatussubkegiatan') }}"  name="statussubkegiatan"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="statusrincian">{{ __('statusrincian') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-statusrincian-holder" class=" ">
                                                <input id="ctrl-statusrincian" data-field="statusrincian"  value="<?php echo get_value('statusrincian') ?>" type="text" placeholder="{{ __('enterStatusrincian') }}"  name="statusrincian"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="subkegiatan">{{ __('subkegiatan') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-subkegiatan-holder" class=" ">
                                                <textarea placeholder="{{ __('enterSubkegiatan') }}" id="ctrl-subkegiatan" data-field="subkegiatan"  rows="5" name="subkegiatan" class=" form-control"><?php echo get_value('subkegiatan') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="norek">{{ __('norek') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-norek-holder" class=" ">
                                                <input id="ctrl-norek" data-field="norek"  value="<?php echo get_value('norek') ?>" type="text" placeholder="{{ __('enterNorek') }}"  name="norek"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="sub">{{ __('sub') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-sub-holder" class=" ">
                                                <input id="ctrl-sub" data-field="sub"  value="<?php echo get_value('sub') ?>" type="text" placeholder="{{ __('enterSub') }}"  name="sub"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="paguvalidasi">{{ __('paguvalidasi') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-paguvalidasi-holder" class=" ">
                                                <input id="ctrl-paguvalidasi" data-field="paguvalidasi"  value="<?php echo get_value('paguvalidasi') ?>" type="number" placeholder="{{ __('enterPaguvalidasi') }}" step="0.1"  name="paguvalidasi"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="totalrincian">{{ __('totalrincian') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-totalrincian-holder" class=" ">
                                                <input id="ctrl-totalrincian" data-field="totalrincian"  value="<?php echo get_value('totalrincian') ?>" type="number" placeholder="{{ __('enterTotalrincian') }}" step="0.1"  name="totalrincian"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                {{ __('submit') }}
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
