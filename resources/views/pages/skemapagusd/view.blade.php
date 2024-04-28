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
    $pageTitle = __('skemaPaguSdDetail'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page ajax-page" data-page-type="view" data-page-url="{{ url()->full() }}">
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
                        <div class="h5 font-weight-bold text-primary">{{ __('skemaPaguSdDetails') }}</div>
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
                <div class="col comp-grid " >
                    <div  class=" page-content" >
                        <?php
                            if($data){
                            $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                        ?>
                        <div id="page-main-content" class=" px-3 mb-3">
                            <div class="row gutter-lg ">
                                <div class="col-12">
                                    <div class="ajax-page-load-indicator" style="display:none">
                                        <div class="text-center d-flex justify-content-center load-indicator">
                                            <span class="loader mr-3"></span>
                                            <span class="fw-bold">{{ __('loading') }}</span>
                                        </div>
                                    </div>
                                    <div class="page-data">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="dropup export-btn-holder">
                                                <button  class="btn  btn-sm btn-outline-primary dropdown-toggle" title="Export" type="button" data-bs-toggle="dropdown">
                                                <i class="fa fa-save"></i> 
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <?php Html :: export_menus(['pdf', 'print']); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--PageComponentStart-->
                                        <div class="mb-3 row row justify-content-start g-0">
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('id') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo  $data['id'] ; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('namasekolah') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo  $data['namasekolah'] ; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('paguOktober') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo '<div class="text-end">'.approximate( $data['pagu_oktober'] , 2).'</div>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('inputSipd2024') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo '<div class="text-end">'.approximate( $data['input_sipd_2024'] , 2).'</div>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('selisih') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo '<div class="text-end">'.approximate( $data['selisih'] , 2).'</div>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('bosda9Bulan') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo '<div class="text-end">'.approximate( $data['bosda_9bulan'] , 2).'</div>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('bosda12Bulan') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo '<div class="text-end">'.approximate( $data['bosda_12bulan'] , 2).'</div>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('jmlGttptt') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo '<div class="text-center">'.approximate( $data['jml_gttptt'] , 0).'</div>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('tunjangan') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo '<div class="text-end">'.approximate( $data['tunjangan'] , 2).'</div>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('tunjanganTotal') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo '<div class="text-end">'.approximate( $data['tunjangan_total'] , 2).'</div>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('paguAkhir') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo '<div class="text-end">'.approximate( $data['pagu_akhir'] , 2).'</div>'; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="bg-light mb-1 card-1 p-2 border rounded">
                                                    <div class="row align-items-center">
                                                        <div class="col">
                                                            <small class="text-muted">{{ __('keterangan') }}</small>
                                                            <div class="fw-bold">
                                                                <?php echo  $data['keterangan'] ; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--PageComponentEnd-->
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="dropup export-btn-holder">
                                                <button  class="btn  btn-sm btn-outline-primary dropdown-toggle" title="Export" type="button" data-bs-toggle="dropdown">
                                                <i class="fa fa-save"></i> 
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <?php Html :: export_menus(['pdf', 'print']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Detail Page Column -->
                                <?php if(!request()->has('subpage')){ ?>
                                <div class="col-12">
                                    <div class="my-3 p-1 ">
                                        @include("pages.skemapagusd.detail-pages", ["masterRecordId" => $rec_id])
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                            }
                            else{
                        ?>
                        <!-- Empty Record Message -->
                        <div class="text-muted p-3">
                            <i class="fa fa-ban"></i> {{ __('noRecordFound') }}
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
