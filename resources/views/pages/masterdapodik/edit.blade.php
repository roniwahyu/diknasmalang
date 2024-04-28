<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editMasterdapodik'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('editMasterdapodik') }}</div>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("masterdapodik/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="no">{{ __('no') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-no-holder" class=" ">
                                            <input id="ctrl-no" data-field="no"  value="<?php  echo $data['no']; ?>" type="text" placeholder="{{ __('enterNo') }}"  name="no"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="gelardepan">{{ __('gelardepan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-gelardepan-holder" class=" ">
                                            <input id="ctrl-gelardepan" data-field="gelardepan"  value="<?php  echo $data['gelardepan']; ?>" type="text" placeholder="{{ __('enterGelardepan') }}"  name="gelardepan"  class="form-control " />
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
                                            <input id="ctrl-nama" data-field="nama"  value="<?php  echo $data['nama']; ?>" type="text" placeholder="{{ __('enterNama') }}"  name="nama"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="gelarblkg">{{ __('gelarblkg') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-gelarblkg-holder" class=" ">
                                            <input id="ctrl-gelarblkg" data-field="gelarblkg"  value="<?php  echo $data['gelarblkg']; ?>" type="text" placeholder="{{ __('enterGelarblkg') }}"  name="gelarblkg"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nip">{{ __('nip') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nip-holder" class=" ">
                                            <input id="ctrl-nip" data-field="nip"  value="<?php  echo $data['nip']; ?>" type="text" placeholder="{{ __('enterNip') }}"  name="nip"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nipbaru">{{ __('nipbaru') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nipbaru-holder" class=" ">
                                            <input id="ctrl-nipbaru" data-field="nipbaru"  value="<?php  echo $data['nipbaru']; ?>" type="text" placeholder="{{ __('enterNipbaru') }}"  name="nipbaru"  class="form-control " />
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
                                            <input id="ctrl-jabatan" data-field="jabatan"  value="<?php  echo $data['jabatan']; ?>" type="text" placeholder="{{ __('enterJabatan') }}"  name="jabatan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nuks">{{ __('nuks') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nuks-holder" class=" ">
                                            <input id="ctrl-nuks" data-field="nuks"  value="<?php  echo $data['nuks']; ?>" type="text" placeholder="{{ __('enterNuks') }}"  name="nuks"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nuptk">{{ __('nuptk') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nuptk-holder" class=" ">
                                            <input id="ctrl-nuptk" data-field="nuptk"  value="<?php  echo $data['nuptk']; ?>" type="text" placeholder="{{ __('enterNuptk') }}"  name="nuptk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bernuptk">{{ __('bernuptk') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bernuptk-holder" class=" ">
                                            <input id="ctrl-bernuptk" data-field="bernuptk"  value="<?php  echo $data['bernuptk']; ?>" type="text" placeholder="{{ __('enterBernuptk') }}"  name="bernuptk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_nuptk">{{ __('statusNuptk') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_nuptk-holder" class=" ">
                                            <input id="ctrl-status_nuptk" data-field="status_nuptk"  value="<?php  echo $data['status_nuptk']; ?>" type="text" placeholder="{{ __('enterStatusNuptk') }}"  name="status_nuptk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ke_status_nuptk">{{ __('keStatusNuptk') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ke_status_nuptk-holder" class=" ">
                                            <input id="ctrl-ke_status_nuptk" data-field="ke_status_nuptk"  value="<?php  echo $data['ke_status_nuptk']; ?>" type="text" placeholder="{{ __('enterKeStatusNuptk') }}"  name="ke_status_nuptk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="ispns">{{ __('ispns') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-ispns-holder" class=" ">
                                            <input id="ctrl-ispns" data-field="ispns"  value="<?php  echo $data['ispns']; ?>" type="text" placeholder="{{ __('enterIspns') }}"  name="ispns"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="golongan">{{ __('golongan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-golongan-holder" class=" ">
                                            <input id="ctrl-golongan" data-field="golongan"  value="<?php  echo $data['golongan']; ?>" type="text" placeholder="{{ __('enterGolongan') }}"  name="golongan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="peg_tmt_tugas">{{ __('pegTmtTugas') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-peg_tmt_tugas-holder" class=" ">
                                            <input id="ctrl-peg_tmt_tugas" data-field="peg_tmt_tugas"  value="<?php  echo $data['peg_tmt_tugas']; ?>" type="text" placeholder="{{ __('enterPegTmtTugas') }}"  name="peg_tmt_tugas"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="masakerja">{{ __('masakerja') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-masakerja-holder" class=" ">
                                            <input id="ctrl-masakerja" data-field="masakerja"  value="<?php  echo $data['masakerja']; ?>" type="text" placeholder="{{ __('enterMasakerja') }}"  name="masakerja"  class="form-control " />
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
                                            <input id="ctrl-pendidikan" data-field="pendidikan"  value="<?php  echo $data['pendidikan']; ?>" type="text" placeholder="{{ __('enterPendidikan') }}"  name="pendidikan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="agama">{{ __('agama') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-agama-holder" class=" ">
                                            <input id="ctrl-agama" data-field="agama"  value="<?php  echo $data['agama']; ?>" type="text" placeholder="{{ __('enterAgama') }}"  name="agama"  class="form-control " />
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
                                            <input id="ctrl-tempatlahir" data-field="tempatlahir"  value="<?php  echo $data['tempatlahir']; ?>" type="text" placeholder="{{ __('enterTempatlahir') }}"  name="tempatlahir"  class="form-control " />
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
                                            <input id="ctrl-tglahir" data-field="tglahir"  value="<?php  echo $data['tglahir']; ?>" type="text" placeholder="{{ __('enterTglahir') }}"  name="tglahir"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tgpensiun">{{ __('tgpensiun') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tgpensiun-holder" class=" ">
                                            <input id="ctrl-tgpensiun" data-field="tgpensiun"  value="<?php  echo $data['tgpensiun']; ?>" type="text" placeholder="{{ __('enterTgpensiun') }}"  name="tgpensiun"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="thpensiun">{{ __('thpensiun') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-thpensiun-holder" class=" ">
                                            <input id="ctrl-thpensiun" data-field="thpensiun"  value="<?php  echo $data['thpensiun']; ?>" type="text" placeholder="{{ __('enterThpensiun') }}"  name="thpensiun"  class="form-control " />
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
                                            <input id="ctrl-jkel" data-field="jkel"  value="<?php  echo $data['jkel']; ?>" type="text" placeholder="{{ __('enterJkel') }}"  name="jkel"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="fakultas">{{ __('fakultas') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-fakultas-holder" class=" ">
                                            <input id="ctrl-fakultas" data-field="fakultas"  value="<?php  echo $data['fakultas']; ?>" type="text" placeholder="{{ __('enterFakultas') }}"  name="fakultas"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jurusan">{{ __('jurusan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jurusan-holder" class=" ">
                                            <input id="ctrl-jurusan" data-field="jurusan"  value="<?php  echo $data['jurusan']; ?>" type="text" placeholder="{{ __('enterJurusan') }}"  name="jurusan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tempat_tugas">{{ __('tempatTugas') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tempat_tugas-holder" class=" ">
                                            <input id="ctrl-tempat_tugas" data-field="tempat_tugas"  value="<?php  echo $data['tempat_tugas']; ?>" type="text" placeholder="{{ __('enterTempatTugas') }}"  name="tempat_tugas"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tugas_sebagai">{{ __('tugasSebagai') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tugas_sebagai-holder" class=" ">
                                            <input id="ctrl-tugas_sebagai" data-field="tugas_sebagai"  value="<?php  echo $data['tugas_sebagai']; ?>" type="text" placeholder="{{ __('enterTugasSebagai') }}"  name="tugas_sebagai"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tingkat_sekolah">{{ __('tingkatSekolah') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tingkat_sekolah-holder" class=" ">
                                            <input id="ctrl-tingkat_sekolah" data-field="tingkat_sekolah"  value="<?php  echo $data['tingkat_sekolah']; ?>" type="text" placeholder="{{ __('enterTingkatSekolah') }}"  name="tingkat_sekolah"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kecamatan">{{ __('kecamatan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kecamatan-holder" class=" ">
                                            <input id="ctrl-kecamatan" data-field="kecamatan"  value="<?php  echo $data['kecamatan']; ?>" type="text" placeholder="{{ __('enterKecamatan') }}"  name="kecamatan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_sekolah">{{ __('statusSekolah') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_sekolah-holder" class=" ">
                                            <input id="ctrl-status_sekolah" data-field="status_sekolah"  value="<?php  echo $data['status_sekolah']; ?>" type="text" placeholder="{{ __('enterStatusSekolah') }}"  name="status_sekolah"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_pegawai">{{ __('statusPegawai') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_pegawai-holder" class=" ">
                                            <input id="ctrl-status_pegawai" data-field="status_pegawai"  value="<?php  echo $data['status_pegawai']; ?>" type="text" placeholder="{{ __('enterStatusPegawai') }}"  name="status_pegawai"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tugas_mengajar">{{ __('tugasMengajar') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tugas_mengajar-holder" class=" ">
                                            <input id="ctrl-tugas_mengajar" data-field="tugas_mengajar"  value="<?php  echo $data['tugas_mengajar']; ?>" type="text" placeholder="{{ __('enterTugasMengajar') }}"  name="tugas_mengajar"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nuptk_pindahan">{{ __('nuptkPindahan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nuptk_pindahan-holder" class=" ">
                                            <input id="ctrl-nuptk_pindahan" data-field="nuptk_pindahan"  value="<?php  echo $data['nuptk_pindahan']; ?>" type="text" placeholder="{{ __('enterNuptkPindahan') }}"  name="nuptk_pindahan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tmt_gol">{{ __('tmtGol') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tmt_gol-holder" class=" ">
                                            <input id="ctrl-tmt_gol" data-field="tmt_gol"  value="<?php  echo $data['tmt_gol']; ?>" type="text" placeholder="{{ __('enterTmtGol') }}"  name="tmt_gol"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tmt_pns">{{ __('tmtPns') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tmt_pns-holder" class=" ">
                                            <input id="ctrl-tmt_pns" data-field="tmt_pns"  value="<?php  echo $data['tmt_pns']; ?>" type="text" placeholder="{{ __('enterTmtPns') }}"  name="tmt_pns"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_sertifikasi">{{ __('statusSertifikasi') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_sertifikasi-holder" class=" ">
                                            <input id="ctrl-status_sertifikasi" data-field="status_sertifikasi"  value="<?php  echo $data['status_sertifikasi']; ?>" type="text" placeholder="{{ __('enterStatusSertifikasi') }}"  name="status_sertifikasi"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kode_bdg_sertifikasi">{{ __('kodeBdgSertifikasi') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kode_bdg_sertifikasi-holder" class=" ">
                                            <input id="ctrl-kode_bdg_sertifikasi" data-field="kode_bdg_sertifikasi"  value="<?php  echo $data['kode_bdg_sertifikasi']; ?>" type="text" placeholder="{{ __('enterKodeBdgSertifikasi') }}"  name="kode_bdg_sertifikasi"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="bdg_studi">{{ __('bdgStudi') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-bdg_studi-holder" class=" ">
                                            <input id="ctrl-bdg_studi" data-field="bdg_studi"  value="<?php  echo $data['bdg_studi']; ?>" type="text" placeholder="{{ __('enterBdgStudi') }}"  name="bdg_studi"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tahun_sert">{{ __('tahunSert') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tahun_sert-holder" class=" ">
                                            <input id="ctrl-tahun_sert" data-field="tahun_sert"  value="<?php  echo $data['tahun_sert']; ?>" type="text" placeholder="{{ __('enterTahunSert') }}"  name="tahun_sert"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nourut">{{ __('nourut') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nourut-holder" class=" ">
                                            <input id="ctrl-nourut" data-field="nourut"  value="<?php  echo $data['nourut']; ?>" type="text" placeholder="{{ __('enterNourut') }}"  name="nourut"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="no_peserta_sert">{{ __('noPesertaSert') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-no_peserta_sert-holder" class=" ">
                                            <input id="ctrl-no_peserta_sert" data-field="no_peserta_sert"  value="<?php  echo $data['no_peserta_sert']; ?>" type="text" placeholder="{{ __('enterNoPesertaSert') }}"  name="no_peserta_sert"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nama_sekolah_sert">{{ __('namaSekolahSert') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nama_sekolah_sert-holder" class=" ">
                                            <input id="ctrl-nama_sekolah_sert" data-field="nama_sekolah_sert"  value="<?php  echo $data['nama_sekolah_sert']; ?>" type="text" placeholder="{{ __('enterNamaSekolahSert') }}"  name="nama_sekolah_sert"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="masakerja_guru">{{ __('masakerjaGuru') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-masakerja_guru-holder" class=" ">
                                            <input id="ctrl-masakerja_guru" data-field="masakerja_guru"  value="<?php  echo $data['masakerja_guru']; ?>" type="text" placeholder="{{ __('enterMasakerjaGuru') }}"  name="masakerja_guru"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="masakerja_kepsek">{{ __('masakerjaKepsek') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-masakerja_kepsek-holder" class=" ">
                                            <input id="ctrl-masakerja_kepsek" data-field="masakerja_kepsek"  value="<?php  echo $data['masakerja_kepsek']; ?>" type="text" placeholder="{{ __('enterMasakerjaKepsek') }}"  name="masakerja_kepsek"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="masakerja_pengawas">{{ __('masakerjaPengawas') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-masakerja_pengawas-holder" class=" ">
                                            <input id="ctrl-masakerja_pengawas" data-field="masakerja_pengawas"  value="<?php  echo $data['masakerja_pengawas']; ?>" type="text" placeholder="{{ __('enterMasakerjaPengawas') }}"  name="masakerja_pengawas"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pola_sert">{{ __('polaSert') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pola_sert-holder" class=" ">
                                            <input id="ctrl-pola_sert" data-field="pola_sert"  value="<?php  echo $data['pola_sert']; ?>" type="text" placeholder="{{ __('enterPolaSert') }}"  name="pola_sert"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tmp_tugas">{{ __('tmpTugas') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tmp_tugas-holder" class=" ">
                                            <input id="ctrl-tmp_tugas" data-field="tmp_tugas"  value="<?php  echo $data['tmp_tugas']; ?>" type="text" placeholder="{{ __('enterTmpTugas') }}"  name="tmp_tugas"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nss_sert">{{ __('nssSert') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nss_sert-holder" class=" ">
                                            <input id="ctrl-nss_sert" data-field="nss_sert"  value="<?php  echo $data['nss_sert']; ?>" type="text" placeholder="{{ __('enterNssSert') }}"  name="nss_sert"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kab_sert">{{ __('kabSert') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kab_sert-holder" class=" ">
                                            <input id="ctrl-kab_sert" data-field="kab_sert"  value="<?php  echo $data['kab_sert']; ?>" type="text" placeholder="{{ __('enterKabSert') }}"  name="kab_sert"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jenis_sert">{{ __('jenisSert') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jenis_sert-holder" class=" ">
                                            <input id="ctrl-jenis_sert" data-field="jenis_sert"  value="<?php  echo $data['jenis_sert']; ?>" type="text" placeholder="{{ __('enterJenisSert') }}"  name="jenis_sert"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="noukg">{{ __('noukg') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-noukg-holder" class=" ">
                                            <input id="ctrl-noukg" data-field="noukg"  value="<?php  echo $data['noukg']; ?>" type="text" placeholder="{{ __('enterNoukg') }}"  name="noukg"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="diklatpkb">{{ __('diklatpkb') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-diklatpkb-holder" class=" ">
                                            <input id="ctrl-diklatpkb" data-field="diklatpkb"  value="<?php  echo $data['diklatpkb']; ?>" type="text" placeholder="{{ __('enterDiklatpkb') }}"  name="diklatpkb"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="diklatcakep">{{ __('diklatcakep') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-diklatcakep-holder" class=" ">
                                            <input id="ctrl-diklatcakep" data-field="diklatcakep"  value="<?php  echo $data['diklatcakep']; ?>" type="text" placeholder="{{ __('enterDiklatcakep') }}"  name="diklatcakep"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="usia">{{ __('usia') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-usia-holder" class=" ">
                                            <input id="ctrl-usia" data-field="usia"  value="<?php  echo $data['usia']; ?>" type="text" placeholder="{{ __('enterUsia') }}"  name="usia"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="diklat_gurugerak">{{ __('diklatGurugerak') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-diklat_gurugerak-holder" class=" ">
                                            <input id="ctrl-diklat_gurugerak" data-field="diklat_gurugerak"  value="<?php  echo $data['diklat_gurugerak']; ?>" type="text" placeholder="{{ __('enterDiklatGurugerak') }}"  name="diklat_gurugerak"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="angkat_guru_gerak">{{ __('angkatGuruGerak') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-angkat_guru_gerak-holder" class=" ">
                                            <input id="ctrl-angkat_guru_gerak" data-field="angkat_guru_gerak"  value="<?php  echo $data['angkat_guru_gerak']; ?>" type="text" placeholder="{{ __('enterAngkatGuruGerak') }}"  name="angkat_guru_gerak"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_verval_gurugerak">{{ __('statusVervalGurugerak') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_verval_gurugerak-holder" class=" ">
                                            <input id="ctrl-status_verval_gurugerak" data-field="status_verval_gurugerak"  value="<?php  echo $data['status_verval_gurugerak']; ?>" type="text" placeholder="{{ __('enterStatusVervalGurugerak') }}"  name="status_verval_gurugerak"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_lulus_gurugerak">{{ __('statusLulusGurugerak') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_lulus_gurugerak-holder" class=" ">
                                            <input id="ctrl-status_lulus_gurugerak" data-field="status_lulus_gurugerak"  value="<?php  echo $data['status_lulus_gurugerak']; ?>" type="text" placeholder="{{ __('enterStatusLulusGurugerak') }}"  name="status_lulus_gurugerak"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pkp_tahun2019">{{ __('pkpTahun2019') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pkp_tahun2019-holder" class=" ">
                                            <input id="ctrl-pkp_tahun2019" data-field="pkp_tahun2019"  value="<?php  echo $data['pkp_tahun2019']; ?>" type="text" placeholder="{{ __('enterPkpTahun2019') }}"  name="pkp_tahun2019"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nilaipkp">{{ __('nilaipkp') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nilaipkp-holder" class=" ">
                                            <input id="ctrl-nilaipkp" data-field="nilaipkp"  value="<?php  echo $data['nilaipkp']; ?>" type="text" placeholder="{{ __('enterNilaipkp') }}"  name="nilaipkp"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="diklat_cawas">{{ __('diklatCawas') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-diklat_cawas-holder" class=" ">
                                            <input id="ctrl-diklat_cawas" data-field="diklat_cawas"  value="<?php  echo $data['diklat_cawas']; ?>" type="text" placeholder="{{ __('enterDiklatCawas') }}"  name="diklat_cawas"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="diklat_guruajar">{{ __('diklatGuruajar') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-diklat_guruajar-holder" class=" ">
                                            <input id="ctrl-diklat_guruajar" data-field="diklat_guruajar"  value="<?php  echo $data['diklat_guruajar']; ?>" type="text" placeholder="{{ __('enterDiklatGuruajar') }}"  name="diklat_guruajar"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="diklat_gpk">{{ __('diklatGpk') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-diklat_gpk-holder" class=" ">
                                            <input id="ctrl-diklat_gpk" data-field="diklat_gpk"  value="<?php  echo $data['diklat_gpk']; ?>" type="text" placeholder="{{ __('enterDiklatGpk') }}"  name="diklat_gpk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_verval_ukjj">{{ __('statusVervalUkjj') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_verval_ukjj-holder" class=" ">
                                            <input id="ctrl-status_verval_ukjj" data-field="status_verval_ukjj"  value="<?php  echo $data['status_verval_ukjj']; ?>" type="text" placeholder="{{ __('enterStatusVervalUkjj') }}"  name="status_verval_ukjj"  class="form-control " />
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
