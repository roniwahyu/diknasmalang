<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewRolePermission'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewRolePermission') }}</div>
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
                        <form id="rolepermissions-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('rolepermissions.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="role_id">{{ __('roleId') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-role_id-holder" class=" ">
                                                <input id="ctrl-role_id" data-field="role_id"  value="<?php echo get_value('role_id') ?>" type="number" placeholder="{{ __('enterRoleId') }}" step="any"  name="role_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="perm_id">{{ __('permId') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-perm_id-holder" class=" ">
                                                <input id="ctrl-perm_id" data-field="perm_id"  value="<?php echo get_value('perm_id') ?>" type="number" placeholder="{{ __('enterPermId') }}" step="any"  name="perm_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="permissions">{{ __('permissions') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-permissions-holder" class=" ">
                                                <input id="ctrl-permissions" data-field="permissions"  value="<?php echo get_value('permissions') ?>" type="text" placeholder="{{ __('enterPermissions') }}"  name="permissions"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="name">{{ __('name') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-name-holder" class=" ">
                                                <input id="ctrl-name" data-field="name"  value="<?php echo get_value('name') ?>" type="text" placeholder="{{ __('enterName') }}"  name="name"  class="form-control " />
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
                                                <input id="ctrl-action" data-field="action"  value="<?php echo get_value('action') ?>" type="text" placeholder="{{ __('enterAction') }}"  name="action"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="isactive">{{ __('isactive') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-isactive-holder" class=" ">
                                                <select  id="ctrl-isactive" data-field="isactive" name="isactive"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                                <option value="">{{ __('selectAValue') }}</option>
                                                <?php
                                                    $options = Menu::isactive();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('isactive', $value, "");
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
                                            <label class="control-label" for="module_id">{{ __('moduleId') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-module_id-holder" class=" ">
                                                <input id="ctrl-module_id" data-field="module_id"  value="<?php echo get_value('module_id') ?>" type="number" placeholder="{{ __('enterModuleId') }}" step="any"  name="module_id"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="class">{{ __('class') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-class-holder" class=" ">
                                                <input id="ctrl-class" data-field="class"  value="<?php echo get_value('class') ?>" type="text" placeholder="{{ __('enterClass') }}"  name="class"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="method">{{ __('method') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-method-holder" class=" ">
                                                <input id="ctrl-method" data-field="method"  value="<?php echo get_value('method') ?>" type="text" placeholder="{{ __('enterMethod') }}"  name="method"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="params">{{ __('params') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-params-holder" class=" ">
                                                <input id="ctrl-params" data-field="params"  value="<?php echo get_value('params') ?>" type="text" placeholder="{{ __('enterParams') }}"  name="params"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="userid">{{ __('userid') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-userid-holder" class=" ">
                                                <input id="ctrl-userid" data-field="userid"  value="<?php echo get_value('userid') ?>" type="number" placeholder="{{ __('enterUserid') }}" step="any"  name="userid"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="created">{{ __('created') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-created-holder" class="input-group ">
                                                <input id="ctrl-created" data-field="created" class="form-control datepicker  datepicker" value="<?php echo get_value('created') ?>" type="datetime"  name="created" placeholder="{{ __('enterCreated') }}" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="modified">{{ __('modified') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-modified-holder" class="input-group ">
                                                <input id="ctrl-modified" data-field="modified" class="form-control datepicker  datepicker" value="<?php echo get_value('modified') ?>" type="datetime"  name="modified" placeholder="{{ __('enterModified') }}" data-enable-time="true" data-min-date="" data-max-date="" data-date-format="Y-m-d H:i:S" data-alt-format="F j, Y - H:i" data-inline="false" data-no-calendar="false" data-mode="single" /> 
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
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
