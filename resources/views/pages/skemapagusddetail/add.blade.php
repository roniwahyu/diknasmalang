<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewSkemaPaguSdDetail'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewSkemaPaguSdDetail') }}</div>
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
                        <form id="skemapagusddetail-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('skemapagusddetail.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="no">{{ __('no') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-no-holder" class=" ">
                                                <input id="ctrl-no" data-field="no"  value="<?php echo get_value('no') ?>" type="text" placeholder="{{ __('enterNo') }}"  name="no"  class="form-control " />
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
                                                <input id="ctrl-namasekolah" data-field="namasekolah"  value="<?php echo get_value('namasekolah') ?>" type="text" placeholder="{{ __('enterNamasekolah') }}"  name="namasekolah"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nama">{{ __('nama') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-nama-holder" class=" ">
                                                <input id="ctrl-nama" data-field="nama"  value="<?php echo get_value('nama') ?>" type="text" placeholder="{{ __('enterNama') }}"  name="nama"  class="form-control " />
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
                                            <label class="control-label" for="keterangan">{{ __('keterangan') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-keterangan-holder" class=" ">
                                                <input id="ctrl-keterangan" data-field="keterangan"  value="<?php echo get_value('keterangan') ?>" type="text" placeholder="{{ __('enterKeterangan') }}"  name="keterangan"  class="form-control " />
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
                                                <input id="ctrl-sekolah_id" data-field="sekolah_id"  value="<?php echo get_value('sekolah_id') ?>" type="number" placeholder="{{ __('enterSekolahId') }}" step="any"  name="sekolah_id"  class="form-control " />
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
