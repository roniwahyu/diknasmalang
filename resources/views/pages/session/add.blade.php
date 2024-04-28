<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewSession'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewSession') }}</div>
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
                        <form id="session-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('session.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="id">{{ __('id') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-id-holder" class=" ">
                                                <input id="ctrl-id" data-field="id"  value="<?php echo get_value('id') ?>" type="text" placeholder="{{ __('enterId') }}"  required="" name="id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="ip_address">{{ __('ipAddress') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-ip_address-holder" class=" ">
                                                <input id="ctrl-ip_address" data-field="ip_address"  value="<?php echo get_value('ip_address') ?>" type="text" placeholder="{{ __('enterIpAddress') }}"  required="" name="ip_address"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="timestamp">{{ __('timestamp') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-timestamp-holder" class=" ">
                                                <input id="ctrl-timestamp" data-field="timestamp"  value="<?php echo get_value('timestamp', "0") ?>" type="number" placeholder="{{ __('enterTimestamp') }}" step="any"  required="" name="timestamp"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="data">{{ __('data') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-data-holder" class=" ">
                                                <div class="dropzone required" input="#ctrl-data" fieldname="data" uploadurl="{{ url('fileuploader/upload/data') }}"    data-multiple="false" dropmsg="{{ __('chooseFilesOrDropFilesHere') }}"    btntext="{{ __('browse') }}" extensions=".jpg,.png,.gif,.jpeg" filesize="3" maximum="1">
                                                    <input name="data" id="ctrl-data" data-field="data" required="" class="dropzone-input form-control" value="<?php echo get_value('data') ?>" type="text"  />
                                                    <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseAChooseFile') }}</div>-->
                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                </div>
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
