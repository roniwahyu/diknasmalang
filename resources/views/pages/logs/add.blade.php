<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewLog'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewLog') }}</div>
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
                        <form id="logs-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('logs.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="uid">{{ __('uid') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-uid-holder" class=" ">
                                                <input id="ctrl-uid" data-field="uid"  value="<?php echo get_value('uid') ?>" type="number" placeholder="{{ __('enterUid') }}" step="any"  name="uid"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="name">{{ __('name') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-name-holder" class=" ">
                                                <input id="ctrl-name" data-field="name"  value="<?php echo get_value('name') ?>" type="text" placeholder="{{ __('enterName') }}"  required="" name="name"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="app">{{ __('app') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-app-holder" class=" ">
                                                <input id="ctrl-app" data-field="app"  value="<?php echo get_value('app') ?>" type="text" placeholder="{{ __('enterApp') }}"  required="" name="app"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="class">{{ __('class') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-class-holder" class=" ">
                                                <input id="ctrl-class" data-field="class"  value="<?php echo get_value('class') ?>" type="text" placeholder="{{ __('enterClass') }}"  required="" name="class"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="method">{{ __('method') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-method-holder" class=" ">
                                                <input id="ctrl-method" data-field="method"  value="<?php echo get_value('method') ?>" type="text" placeholder="{{ __('enterMethod') }}"  required="" name="method"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="task">{{ __('task') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-task-holder" class=" ">
                                                <select required=""  id="ctrl-task" data-field="task" name="task"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                                <option value="">{{ __('selectAValue') }}</option>
                                                <?php
                                                    $options = Menu::task();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('task', $value, "");
                                                ?>
                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                <?php echo $label ?>
                                                </option>                                   
                                                <?php
                                                    }
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="note">{{ __('note') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-note-holder" class=" ">
                                                <textarea placeholder="{{ __('enterNote') }}" id="ctrl-note" data-field="note"  required="" rows="5" name="note" class=" form-control"><?php echo get_value('note') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="browser">{{ __('browser') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-browser-holder" class=" ">
                                                <input id="ctrl-browser" data-field="browser"  value="<?php echo get_value('browser') ?>" type="text" placeholder="{{ __('enterBrowser') }}"  required="" name="browser"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="platform">{{ __('platform') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-platform-holder" class=" ">
                                                <input id="ctrl-platform" data-field="platform"  value="<?php echo get_value('platform') ?>" type="text" placeholder="{{ __('enterPlatform') }}"  required="" name="platform"  class="form-control " />
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
