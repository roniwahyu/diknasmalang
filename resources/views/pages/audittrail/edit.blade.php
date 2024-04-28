<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editAudittrail'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('editAudittrail') }}</div>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("audittrail/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="datetime">{{ __('datetime') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-datetime-holder" class="input-group ">
                                            <input id="ctrl-datetime" data-field="datetime" class="form-control datepicker  datepicker" required="" value="<?php  echo $data['datetime']; ?>" type="datetime"  name="datetime" placeholder="{{ __('enterDatetime') }}" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="script">{{ __('script') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-script-holder" class=" ">
                                            <input id="ctrl-script" data-field="script"  value="<?php  echo $data['script']; ?>" type="text" placeholder="{{ __('enterScript') }}"  name="script"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="user">{{ __('user') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-user-holder" class=" ">
                                            <input id="ctrl-user" data-field="user"  value="<?php  echo $data['user']; ?>" type="text" placeholder="{{ __('enterUser') }}"  name="user"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="action">{{ __('action') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-action-holder" class=" ">
                                            <input id="ctrl-action" data-field="action"  value="<?php  echo $data['action']; ?>" type="text" placeholder="{{ __('enterAction') }}"  name="action"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="table">{{ __('table') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-table-holder" class=" ">
                                            <input id="ctrl-table" data-field="table"  value="<?php  echo $data['table']; ?>" type="text" placeholder="{{ __('enterTable') }}"  name="table"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="field">{{ __('field') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-field-holder" class=" ">
                                            <input id="ctrl-field" data-field="field"  value="<?php  echo $data['field']; ?>" type="text" placeholder="{{ __('enterField') }}"  name="field"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="keyvalue">{{ __('keyvalue') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-keyvalue-holder" class=" ">
                                            <textarea placeholder="{{ __('enterKeyvalue') }}" id="ctrl-keyvalue" data-field="keyvalue"  rows="5" name="keyvalue" class=" form-control"><?php  echo $data['keyvalue']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="oldvalue">{{ __('oldvalue') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-oldvalue-holder" class=" ">
                                            <textarea placeholder="{{ __('enterOldvalue') }}" id="ctrl-oldvalue" data-field="oldvalue"  rows="5" name="oldvalue" class=" form-control"><?php  echo $data['oldvalue']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="newvalue">{{ __('newvalue') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-newvalue-holder" class=" ">
                                            <textarea placeholder="{{ __('enterNewvalue') }}" id="ctrl-newvalue" data-field="newvalue"  rows="5" name="newvalue" class=" form-control"><?php  echo $data['newvalue']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
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
