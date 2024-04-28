    <?php
        $rec_id = $masterRecordId ?? null;
        $page_id = "tab-".random_str(6);
    ?>
    <div class="master-detail-page card">
        <div class="card-header text-bold h5 p-3 mb-3">Pagu SD</div>
        <div class="">
            <div class=" ">
                <?php
                    $params = ['sekolah_id' => $rec_id,'show_header' => false]; //new query param
                    $query = array_merge(request()->query(), $params);
                    $queryParams = http_build_query($query);
                    $url = url("skemapagusddetail/index/sekolah_id/$rec_id?$queryParams");
                ?>
                <div class="ajax-inline-page" data-url="{{ $url }}" >
                    <div class="ajax-page-load-indicator">
                        <div class="text-center d-flex justify-content-center load-indicator">
                            <span class="loader mr-3"></span>
                            <span class="fw-bold">{{ __('loading') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    