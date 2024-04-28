<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->canAccess("skemapagusd/add");
    $can_edit = $user->canAccess("skemapagusd/edit");
    $can_view = $user->canAccess("skemapagusd/view");
    $can_delete = $user->canAccess("skemapagusd/delete");
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = __('skemaPaguSd'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="list" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center gap-3">
                <div class="col  " >
                    <div class="">
                        <div class="h5 font-weight-bold text-primary">{{ __('skemaPaguSd') }}</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn " href="<?php print_link("skemapagusd/add") ?>" >
                    <i class="fa fa-plus"></i>                              
                    {{ __('addNewSkemaPaguSd') }} 
                </a>
            </div>
            <div class="col-md-3  " >
                <!-- Page drop down search component -->
                <form  class="search" action="{{ url()->current() }}" method="get">
                    <input type="hidden" name="page" value="1" />
                    <div class="input-group">
                        <input value="<?php echo get_value('search'); ?>" class="form-control page-search" type="text" name="search"  placeholder="{{ __('search') }}" />
                        <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
<div  class="" >
    <div class="container-fluid">
        <div class="row ">
            <div class="col comp-grid " >
                <div  class=" page-content" >
                    <div id="skemapagusd-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/skemapagusd/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <div class="col-md-auto d-flex">    
                                <?php if($can_delete){ ?>
                                <button data-prompt-msg="{{ __('promptDeleteRecords') }}" data-display-style="modal" data-url="<?php print_link("skemapagusd/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                <i class="fa fa-times"></i> {{ __('deleteSelected') }}
                                </button>
                                <?php } ?>
                                <div class="dropup export-btn-holder">
                                    <button  class="btn  btn-sm btn-outline-primary dropdown-toggle" title="Export" type="button" data-bs-toggle="dropdown">
                                    <i class="fa fa-save"></i> 
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php Html :: export_menus(['pdf', 'print', 'excel', 'csv']); ?>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-id <?php echo (get_value('orderby') == 'id' ? 'sortedby' : null); ?>" >
                                        <?php Html :: get_field_order_link('id', __('id'), ''); ?>
                                        </th>
                                        <th class="td-namasekolah <?php echo (get_value('orderby') == 'namasekolah' ? 'sortedby' : null); ?>" >
                                        <?php Html :: get_field_order_link('namasekolah', __('namaSekolah'), ''); ?>
                                        </th>
                                        <th class="td-pagu_oktober" > {{ __('paguOktober') }}</th>
                                        <th class="td-input_sipd_2024" > {{ __('inputSipd2024') }}</th>
                                        <th class="td-selisih" > {{ __('selisih') }}</th>
                                        <th class="td-bosda_9bulan" > {{ __('bosda9Bulan') }}</th>
                                        <th class="td-bosda_12bulan" > {{ __('bosda12Bulan') }}</th>
                                        <th class="td-jml_gttptt" > {{ __('jmlGttptt') }}</th>
                                        <th class="td-tunjangan" > {{ __('tunjangan') }}</th>
                                        <th class="td-tunjangan_total" > {{ __('tunjanganTotal') }}</th>
                                        <th class="td-pagu_akhir" > {{ __('paguAkhir') }}</th>
                                        <th class="td-keterangan" > {{ __('keterangan') }}</th>
                                        <th class="td-btn"></th>
                                    </tr>
                                </thead>
                                <?php
                                    if($total_records){
                                ?>
                                <tbody class="page-data">
                                    <!--record-->
                                    <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <!--PageComponentStart-->
                                        <td class="td-id">
                                            <a href="<?php print_link("/skemapagusd/view/$data[id]") ?>"><?php echo $data['id']; ?></a>
                                        </td>
                                        <td class="td-namasekolah">
                                            <?php echo  $data['namasekolah'] ; ?>
                                        </td>
                                        <td class="td-pagu_oktober">
                                            <?php echo  $data['pagu_oktober'] ; ?>
                                        </td>
                                        <td class="td-input_sipd_2024">
                                            <?php echo  $data['input_sipd_2024'] ; ?>
                                        </td>
                                        <td class="td-selisih">
                                            <?php echo  $data['selisih'] ; ?>
                                        </td>
                                        <td class="td-bosda_9bulan">
                                            <?php echo  $data['bosda_9bulan'] ; ?>
                                        </td>
                                        <td class="td-bosda_12bulan">
                                            <?php echo  $data['bosda_12bulan'] ; ?>
                                        </td>
                                        <td class="td-jml_gttptt">
                                            <?php echo  $data['jml_gttptt'] ; ?>
                                        </td>
                                        <td class="td-tunjangan">
                                            <?php echo  $data['tunjangan'] ; ?>
                                        </td>
                                        <td class="td-tunjangan_total">
                                            <?php echo  $data['tunjangan_total'] ; ?>
                                        </td>
                                        <td class="td-pagu_akhir">
                                            <?php echo  $data['pagu_akhir'] ; ?>
                                        </td>
                                        <td class="td-keterangan">
                                            <?php echo  $data['keterangan'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <?php if($can_view){ ?>
                                            <a class="btn btn-sm btn-primary has-tooltip "    href="<?php print_link("skemapagusd/view/$rec_id"); ?>" >
                                            <i class="fa fa-eye "></i> {{ __('view') }}
                                        </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                ?>
                                <!--endrecord-->
                            </tbody>
                            <tbody class="search-data"></tbody>
                            <?php
                                }
                                else{
                            ?>
                            <tbody class="page-data">
                                <tr>
                                    <td class="bg-light text-center text-muted animated bounce p-3" colspan="1000">
                                        <i class="fa fa-ban"></i> {{ __('noRecordFound') }}
                                    </td>
                                </tr>
                            </tbody>
                            <?php
                                }
                            ?>
                        </table>
                    </div>
                    <?php
                        if($show_footer){
                    ?>
                    <div class=" mt-3">
                        <div class="row align-items-center justify-content-between">    
                            <div class="col-md-auto d-flex">    
                                <?php if($can_delete){ ?>
                                <button data-prompt-msg="{{ __('promptDeleteRecords') }}" data-display-style="modal" data-url="<?php print_link("skemapagusd/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                                <i class="fa fa-times"></i> {{ __('deleteSelected') }}
                                </button>
                                <?php } ?>
                                <div class="dropup export-btn-holder">
                                    <button  class="btn  btn-sm btn-outline-primary dropdown-toggle" title="Export" type="button" data-bs-toggle="dropdown">
                                    <i class="fa fa-save"></i> 
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php Html :: export_menus(['pdf', 'print', 'excel', 'csv']); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col">   
                                <?php
                                    if($show_pagination == true){
                                    $pager = new Pagination($total_records, $record_count);
                                    $pager->show_page_count = false;
                                    $pager->show_record_count = true;
                                    $pager->show_page_limit =false;
                                    $pager->limit = $limit;
                                    $pager->show_page_number_list = true;
                                    $pager->pager_link_range=5;
                                    $pager->render();
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>


@endsection
