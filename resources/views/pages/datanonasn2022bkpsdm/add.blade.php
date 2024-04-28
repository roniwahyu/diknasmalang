<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewDataNonAsn2022Bkpsdm'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewDataNonAsn2022Bkpsdm') }}</div>
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
                        <form id="datanonasn2022bkpsdm-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('datanonasn2022bkpsdm.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nomor">{{ __('nomor') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-nomor-holder" class=" ">
                                                <input id="ctrl-nomor" data-field="nomor"  value="<?php echo get_value('nomor') ?>" type="number" placeholder="{{ __('enterNomor') }}" step="any"  name="nomor"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nik">{{ __('nik') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-nik-holder" class=" ">
                                                <input id="ctrl-nik" data-field="nik"  value="<?php echo get_value('nik') ?>" type="text" placeholder="{{ __('enterNik') }}"  name="nik"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="namalengkap">{{ __('namalengkap') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-namalengkap-holder" class=" ">
                                                <input id="ctrl-namalengkap" data-field="namalengkap"  value="<?php echo get_value('namalengkap') ?>" type="text" placeholder="{{ __('enterNamalengkap') }}"  name="namalengkap"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nomork2">{{ __('nomork2') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-nomork2-holder" class=" ">
                                                <input id="ctrl-nomork2" data-field="nomork2"  value="<?php echo get_value('nomork2') ?>" type="text" placeholder="{{ __('enterNomork2') }}"  name="nomork2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tempatlahir">{{ __('tempatlahir') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-tempatlahir-holder" class=" ">
                                                <input id="ctrl-tempatlahir" data-field="tempatlahir"  value="<?php echo get_value('tempatlahir') ?>" type="text" placeholder="{{ __('enterTempatlahir') }}"  name="tempatlahir"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tglahir">{{ __('tglahir') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-tglahir-holder" class=" ">
                                                <input id="ctrl-tglahir" data-field="tglahir"  value="<?php echo get_value('tglahir') ?>" type="text" placeholder="{{ __('enterTglahir') }}"  name="tglahir"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="jkel">{{ __('jkel') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-jkel-holder" class=" ">
                                                <input id="ctrl-jkel" data-field="jkel"  value="<?php echo get_value('jkel') ?>" type="text" placeholder="{{ __('enterJkel') }}"  name="jkel"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="unitkerja">{{ __('unitkerja') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-unitkerja-holder" class=" ">
                                                <input id="ctrl-unitkerja" data-field="unitkerja"  value="<?php echo get_value('unitkerja') ?>" type="text" placeholder="{{ __('enterUnitkerja') }}"  name="unitkerja"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="jabatan">{{ __('jabatan') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-jabatan-holder" class=" ">
                                                <input id="ctrl-jabatan" data-field="jabatan"  value="<?php echo get_value('jabatan') ?>" type="text" placeholder="{{ __('enterJabatan') }}"  name="jabatan"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pendidikan">{{ __('pendidikan') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-pendidikan-holder" class=" ">
                                                <input id="ctrl-pendidikan" data-field="pendidikan"  value="<?php echo get_value('pendidikan') ?>" type="text" placeholder="{{ __('enterPendidikan') }}"  name="pendidikan"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tipe">{{ __('tipe') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-tipe-holder" class=" ">
                                                <input id="ctrl-tipe" data-field="tipe"  value="<?php echo get_value('tipe') ?>" type="text" placeholder="{{ __('enterTipe') }}"  name="tipe"  class="form-control " />
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
