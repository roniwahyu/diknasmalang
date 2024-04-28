<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = __('masterdapodik'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('masterdapodik') }}</div>
                    </div>
                </div>
                <div class="col-auto  " >
                    <a  class="btn btn-primary btn-block" href="<?php print_link("masterdapodik/add", true) ?>" >
                    <i class="fa fa-plus"></i>                              
                    {{ __('addNewMasterdapodik') }} 
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
                    <div id="masterdapodik-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/masterdapodik/", $field_name, $field_value); ?>
                            <?php Html::display_page_errors($errors); ?>
                            <div class="filter-tags mb-2">
                                <?php Html::filter_tag('search', __('Search')); ?>
                            </div>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-checkbox">
                                        <label class="form-check-label">
                                        <input class="toggle-check-all form-check-input" type="checkbox" />
                                        </label>
                                        </th>
                                        <th class="td-id" > {{ __('id') }}</th>
                                        <th class="td-no" > {{ __('no') }}</th>
                                        <th class="td-gelardepan" > {{ __('gelardepan') }}</th>
                                        <th class="td-nama" > {{ __('nama') }}</th>
                                        <th class="td-gelarblkg" > {{ __('gelarblkg') }}</th>
                                        <th class="td-nip" > {{ __('nip') }}</th>
                                        <th class="td-nipbaru" > {{ __('nipbaru') }}</th>
                                        <th class="td-jabatan" > {{ __('jabatan') }}</th>
                                        <th class="td-nuks" > {{ __('nuks') }}</th>
                                        <th class="td-nuptk" > {{ __('nuptk') }}</th>
                                        <th class="td-bernuptk" > {{ __('bernuptk') }}</th>
                                        <th class="td-status_nuptk" > {{ __('statusNuptk') }}</th>
                                        <th class="td-ke_status_nuptk" > {{ __('keStatusNuptk') }}</th>
                                        <th class="td-ispns" > {{ __('ispns') }}</th>
                                        <th class="td-golongan" > {{ __('golongan') }}</th>
                                        <th class="td-peg_tmt_tugas" > {{ __('pegTmtTugas') }}</th>
                                        <th class="td-masakerja" > {{ __('masakerja') }}</th>
                                        <th class="td-pendidikan" > {{ __('pendidikan') }}</th>
                                        <th class="td-agama" > {{ __('agama') }}</th>
                                        <th class="td-tempatlahir" > {{ __('tempatlahir') }}</th>
                                        <th class="td-tglahir" > {{ __('tglahir') }}</th>
                                        <th class="td-tgpensiun" > {{ __('tgpensiun') }}</th>
                                        <th class="td-thpensiun" > {{ __('thpensiun') }}</th>
                                        <th class="td-jkel" > {{ __('jkel') }}</th>
                                        <th class="td-fakultas" > {{ __('fakultas') }}</th>
                                        <th class="td-jurusan" > {{ __('jurusan') }}</th>
                                        <th class="td-tempat_tugas" > {{ __('tempatTugas') }}</th>
                                        <th class="td-tugas_sebagai" > {{ __('tugasSebagai') }}</th>
                                        <th class="td-tingkat_sekolah" > {{ __('tingkatSekolah') }}</th>
                                        <th class="td-kecamatan" > {{ __('kecamatan') }}</th>
                                        <th class="td-status_sekolah" > {{ __('statusSekolah') }}</th>
                                        <th class="td-status_pegawai" > {{ __('statusPegawai') }}</th>
                                        <th class="td-tugas_mengajar" > {{ __('tugasMengajar') }}</th>
                                        <th class="td-nuptk_pindahan" > {{ __('nuptkPindahan') }}</th>
                                        <th class="td-tmt_gol" > {{ __('tmtGol') }}</th>
                                        <th class="td-tmt_pns" > {{ __('tmtPns') }}</th>
                                        <th class="td-status_sertifikasi" > {{ __('statusSertifikasi') }}</th>
                                        <th class="td-kode_bdg_sertifikasi" > {{ __('kodeBdgSertifikasi') }}</th>
                                        <th class="td-bdg_studi" > {{ __('bdgStudi') }}</th>
                                        <th class="td-tahun_sert" > {{ __('tahunSert') }}</th>
                                        <th class="td-nourut" > {{ __('nourut') }}</th>
                                        <th class="td-no_peserta_sert" > {{ __('noPesertaSert') }}</th>
                                        <th class="td-nama_sekolah_sert" > {{ __('namaSekolahSert') }}</th>
                                        <th class="td-masakerja_guru" > {{ __('masakerjaGuru') }}</th>
                                        <th class="td-masakerja_kepsek" > {{ __('masakerjaKepsek') }}</th>
                                        <th class="td-masakerja_pengawas" > {{ __('masakerjaPengawas') }}</th>
                                        <th class="td-pola_sert" > {{ __('polaSert') }}</th>
                                        <th class="td-tmp_tugas" > {{ __('tmpTugas') }}</th>
                                        <th class="td-nss_sert" > {{ __('nssSert') }}</th>
                                        <th class="td-kab_sert" > {{ __('kabSert') }}</th>
                                        <th class="td-jenis_sert" > {{ __('jenisSert') }}</th>
                                        <th class="td-noukg" > {{ __('noukg') }}</th>
                                        <th class="td-diklatpkb" > {{ __('diklatpkb') }}</th>
                                        <th class="td-diklatcakep" > {{ __('diklatcakep') }}</th>
                                        <th class="td-usia" > {{ __('usia') }}</th>
                                        <th class="td-diklat_gurugerak" > {{ __('diklatGurugerak') }}</th>
                                        <th class="td-angkat_guru_gerak" > {{ __('angkatGuruGerak') }}</th>
                                        <th class="td-status_verval_gurugerak" > {{ __('statusVervalGurugerak') }}</th>
                                        <th class="td-status_lulus_gurugerak" > {{ __('statusLulusGurugerak') }}</th>
                                        <th class="td-pkp_tahun2019" > {{ __('pkpTahun2019') }}</th>
                                        <th class="td-nilaipkp" > {{ __('nilaipkp') }}</th>
                                        <th class="td-diklat_cawas" > {{ __('diklatCawas') }}</th>
                                        <th class="td-diklat_guruajar" > {{ __('diklatGuruajar') }}</th>
                                        <th class="td-diklat_gpk" > {{ __('diklatGpk') }}</th>
                                        <th class="td-status_verval_ukjj" > {{ __('statusVervalUkjj') }}</th>
                                        <th class="td-date_created" > {{ __('dateCreated') }}</th>
                                        <th class="td-date_updated" > {{ __('dateUpdated') }}</th>
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
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-id">
                                            <a href="<?php print_link("/masterdapodik/view/$data[id]") ?>"><?php echo $data['id']; ?></a>
                                        </td>
                                        <td class="td-no">
                                            <?php echo  $data['no'] ; ?>
                                        </td>
                                        <td class="td-gelardepan">
                                            <?php echo  $data['gelardepan'] ; ?>
                                        </td>
                                        <td class="td-nama">
                                            <?php echo  $data['nama'] ; ?>
                                        </td>
                                        <td class="td-gelarblkg">
                                            <?php echo  $data['gelarblkg'] ; ?>
                                        </td>
                                        <td class="td-nip">
                                            <?php echo  $data['nip'] ; ?>
                                        </td>
                                        <td class="td-nipbaru">
                                            <?php echo  $data['nipbaru'] ; ?>
                                        </td>
                                        <td class="td-jabatan">
                                            <?php echo  $data['jabatan'] ; ?>
                                        </td>
                                        <td class="td-nuks">
                                            <?php echo  $data['nuks'] ; ?>
                                        </td>
                                        <td class="td-nuptk">
                                            <?php echo  $data['nuptk'] ; ?>
                                        </td>
                                        <td class="td-bernuptk">
                                            <?php echo  $data['bernuptk'] ; ?>
                                        </td>
                                        <td class="td-status_nuptk">
                                            <?php echo  $data['status_nuptk'] ; ?>
                                        </td>
                                        <td class="td-ke_status_nuptk">
                                            <?php echo  $data['ke_status_nuptk'] ; ?>
                                        </td>
                                        <td class="td-ispns">
                                            <?php echo  $data['ispns'] ; ?>
                                        </td>
                                        <td class="td-golongan">
                                            <?php echo  $data['golongan'] ; ?>
                                        </td>
                                        <td class="td-peg_tmt_tugas">
                                            <?php echo  $data['peg_tmt_tugas'] ; ?>
                                        </td>
                                        <td class="td-masakerja">
                                            <?php echo  $data['masakerja'] ; ?>
                                        </td>
                                        <td class="td-pendidikan">
                                            <?php echo  $data['pendidikan'] ; ?>
                                        </td>
                                        <td class="td-agama">
                                            <?php echo  $data['agama'] ; ?>
                                        </td>
                                        <td class="td-tempatlahir">
                                            <?php echo  $data['tempatlahir'] ; ?>
                                        </td>
                                        <td class="td-tglahir">
                                            <?php echo  $data['tglahir'] ; ?>
                                        </td>
                                        <td class="td-tgpensiun">
                                            <?php echo  $data['tgpensiun'] ; ?>
                                        </td>
                                        <td class="td-thpensiun">
                                            <?php echo  $data['thpensiun'] ; ?>
                                        </td>
                                        <td class="td-jkel">
                                            <?php echo  $data['jkel'] ; ?>
                                        </td>
                                        <td class="td-fakultas">
                                            <?php echo  $data['fakultas'] ; ?>
                                        </td>
                                        <td class="td-jurusan">
                                            <?php echo  $data['jurusan'] ; ?>
                                        </td>
                                        <td class="td-tempat_tugas">
                                            <?php echo  $data['tempat_tugas'] ; ?>
                                        </td>
                                        <td class="td-tugas_sebagai">
                                            <?php echo  $data['tugas_sebagai'] ; ?>
                                        </td>
                                        <td class="td-tingkat_sekolah">
                                            <?php echo  $data['tingkat_sekolah'] ; ?>
                                        </td>
                                        <td class="td-kecamatan">
                                            <?php echo  $data['kecamatan'] ; ?>
                                        </td>
                                        <td class="td-status_sekolah">
                                            <?php echo  $data['status_sekolah'] ; ?>
                                        </td>
                                        <td class="td-status_pegawai">
                                            <?php echo  $data['status_pegawai'] ; ?>
                                        </td>
                                        <td class="td-tugas_mengajar">
                                            <?php echo  $data['tugas_mengajar'] ; ?>
                                        </td>
                                        <td class="td-nuptk_pindahan">
                                            <?php echo  $data['nuptk_pindahan'] ; ?>
                                        </td>
                                        <td class="td-tmt_gol">
                                            <?php echo  $data['tmt_gol'] ; ?>
                                        </td>
                                        <td class="td-tmt_pns">
                                            <?php echo  $data['tmt_pns'] ; ?>
                                        </td>
                                        <td class="td-status_sertifikasi">
                                            <?php echo  $data['status_sertifikasi'] ; ?>
                                        </td>
                                        <td class="td-kode_bdg_sertifikasi">
                                            <?php echo  $data['kode_bdg_sertifikasi'] ; ?>
                                        </td>
                                        <td class="td-bdg_studi">
                                            <?php echo  $data['bdg_studi'] ; ?>
                                        </td>
                                        <td class="td-tahun_sert">
                                            <?php echo  $data['tahun_sert'] ; ?>
                                        </td>
                                        <td class="td-nourut">
                                            <?php echo  $data['nourut'] ; ?>
                                        </td>
                                        <td class="td-no_peserta_sert">
                                            <?php echo  $data['no_peserta_sert'] ; ?>
                                        </td>
                                        <td class="td-nama_sekolah_sert">
                                            <?php echo  $data['nama_sekolah_sert'] ; ?>
                                        </td>
                                        <td class="td-masakerja_guru">
                                            <?php echo  $data['masakerja_guru'] ; ?>
                                        </td>
                                        <td class="td-masakerja_kepsek">
                                            <?php echo  $data['masakerja_kepsek'] ; ?>
                                        </td>
                                        <td class="td-masakerja_pengawas">
                                            <?php echo  $data['masakerja_pengawas'] ; ?>
                                        </td>
                                        <td class="td-pola_sert">
                                            <?php echo  $data['pola_sert'] ; ?>
                                        </td>
                                        <td class="td-tmp_tugas">
                                            <?php echo  $data['tmp_tugas'] ; ?>
                                        </td>
                                        <td class="td-nss_sert">
                                            <?php echo  $data['nss_sert'] ; ?>
                                        </td>
                                        <td class="td-kab_sert">
                                            <?php echo  $data['kab_sert'] ; ?>
                                        </td>
                                        <td class="td-jenis_sert">
                                            <?php echo  $data['jenis_sert'] ; ?>
                                        </td>
                                        <td class="td-noukg">
                                            <?php echo  $data['noukg'] ; ?>
                                        </td>
                                        <td class="td-diklatpkb">
                                            <?php echo  $data['diklatpkb'] ; ?>
                                        </td>
                                        <td class="td-diklatcakep">
                                            <?php echo  $data['diklatcakep'] ; ?>
                                        </td>
                                        <td class="td-usia">
                                            <?php echo  $data['usia'] ; ?>
                                        </td>
                                        <td class="td-diklat_gurugerak">
                                            <?php echo  $data['diklat_gurugerak'] ; ?>
                                        </td>
                                        <td class="td-angkat_guru_gerak">
                                            <?php echo  $data['angkat_guru_gerak'] ; ?>
                                        </td>
                                        <td class="td-status_verval_gurugerak">
                                            <?php echo  $data['status_verval_gurugerak'] ; ?>
                                        </td>
                                        <td class="td-status_lulus_gurugerak">
                                            <?php echo  $data['status_lulus_gurugerak'] ; ?>
                                        </td>
                                        <td class="td-pkp_tahun2019">
                                            <?php echo  $data['pkp_tahun2019'] ; ?>
                                        </td>
                                        <td class="td-nilaipkp">
                                            <?php echo  $data['nilaipkp'] ; ?>
                                        </td>
                                        <td class="td-diklat_cawas">
                                            <?php echo  $data['diklat_cawas'] ; ?>
                                        </td>
                                        <td class="td-diklat_guruajar">
                                            <?php echo  $data['diklat_guruajar'] ; ?>
                                        </td>
                                        <td class="td-diklat_gpk">
                                            <?php echo  $data['diklat_gpk'] ; ?>
                                        </td>
                                        <td class="td-status_verval_ukjj">
                                            <?php echo  $data['status_verval_ukjj'] ; ?>
                                        </td>
                                        <td class="td-date_created">
                                            <?php echo  $data['date_created'] ; ?>
                                        </td>
                                        <td class="td-date_updated">
                                            <?php echo  $data['date_updated'] ; ?>
                                        </td>
                                        <!--PageComponentEnd-->
                                        <td class="td-btn">
                                            <div class="dropdown" >
                                                <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                                <i class="fa fa-bars"></i> 
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <a class="dropdown-item "   href="<?php print_link("masterdapodik/view/$rec_id"); ?>" >
                                                    <i class="fa fa-eye"></i> {{ __('view') }}
                                                </a>
                                                <a class="dropdown-item "   href="<?php print_link("masterdapodik/edit/$rec_id"); ?>" >
                                                <i class="fa fa-edit"></i> {{ __('edit') }}
                                            </a>
                                            <a class="dropdown-item record-delete-btn" data-prompt-msg="{{ __('promptDeleteRecord') }}" data-display-style="modal" href="<?php print_link("masterdapodik/delete/$rec_id"); ?>" >
                                            <i class="fa fa-times"></i> {{ __('delete') }}
                                        </a>
                                    </ul>
                                </div>
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
                        <button data-prompt-msg="{{ __('promptDeleteRecords') }}" data-display-style="modal" data-url="<?php print_link("masterdapodik/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                        <i class="fa fa-times"></i> {{ __('deleteSelected') }}
                        </button>
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
