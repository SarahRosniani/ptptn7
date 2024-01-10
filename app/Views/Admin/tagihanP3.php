<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

  <main id="main" class="main">
    <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Tagihan P3</h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="card recent-sales overflow-auto">
                    <div class="card-body">
                            <button
                              type="button"
                              class="btn btn-primary"
                              data-bs-toggle="modal"
                              data-bs-target="#addTask"
                              ><i class="bi bi-plus-circle me-1"></i>
                              Add Task
                            </button>
                        </div>
                    <div class="row">
            <div class="row g-0">
                <div class="card-body">
                <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Uraian pekerjaan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Tanggal BA</th>
                        <th scope="col">No BA</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                        <!-- foreach -->
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?="Pancang Pendahuluan" ?></td>
                                <td><?="Ha" ?></td>
                                <td><?="22.967" ?></td>
                                <td><?="135,5" ?></td>
                                <td>
                                    <div>
                                        <!-- ini ts-id nya -->
                                    </div>
                                    <div class="d-flex justify-content align-items-">
                                        <button
                                            type="button"
                                            class="btn btn-outline-primary btn-icon-split me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editTask"
                                            ><i class="bi bi-pencil-square"></i>
                                        </button>
                                        <form action="#" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <?= csrf_field() ?>
                                            <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </div>    
                                    
                            </div>
                            <div 
                                class="modal fade" 
                                id="editTask" 
                                tabindex="-1" 
                                aria-labelledby="exampleModalLabel" 
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="#" method="post">
                                            <input type="hidden" name="_method" value="PUT">
                                            <?= csrf_field() ?>
                                                <div class="mb-3">
                                                    <label for="pembayaran" class="col-form-label">Uraian pembayaran</label>
                                                    <input type="text" class="form-control" placeholder="pembayaran" aria-label="pembayaran" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="mb-3">
                                                <label for="jumlah" class="col-form-label">Jumlah</label>
                                                <input type="integer" class="form-control" placeholder="Jumlah" aria-label="jumlah" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal" class="col-form-label">Tanggal BA</label>
                                                <input type="integer" class="form-control" placeholder="Tanggal BA" aria-label="tanggal" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="noba" class="col-form-label">No BA</label>
                                                <input type="integer" class="form-control" placeholder="No BA" aria-label="noba" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="biaya" class="col-form-label">Biaya</label>
                                                <input type="integer" class="form-control" placeholder="Biaya" aria-label="biaya" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jumlah" class="col-form-label">Jumlah</label>
                                                <input type="integer" class="form-control" placeholder="Jumlah" aria-label="jumlah" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update pembayaran</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <php
                                }
                            > -->
                        </div>

                        <div 
                            class="modal fade" 
                            id="addTask" 
                            tabindex="-1" 
                            aria-labelledby="exampleModalLabel" 
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add pembayaran</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('task/store' )?>" method="post">
                                        <div class="mb-3">
                                                    <label for="pembayaran" class="col-form-label">Uraian pembayaran</label>
                                                    <input type="text" class="form-control" placeholder="pembayaran" aria-label="pembayaran" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="mb-3">
                                                <label for="jumlah" class="col-form-label">Jumlah</label>
                                                <input type="integer" class="form-control" placeholder="Jumlah" aria-label="jumlah" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal" class="col-form-label">Tanggal BA</label>
                                            </div>
                                            <form action="" method="post">
                                                <select name="tanggal">
                                                    <option value="">Pilih Tanggal</option>
                                                    <?php for($d = 1; $d <= 31; $d++) { ?>
                                                    <option value="<?php echo $d ?>"><php echo $d ?></option>
                                                    <?php } ?>
                                                </select>

                                                <select name="bulan">
                                                    <option value="">Pilih Bulan</option>
                                                    <?php
                                                        $nama_bulan = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agust','Sep', 'Okt', 'Des')
                                                    ?>
                                                    <?php for($m = 0; $m <  12; $m++) { ?>
                                                    <option value="<?php echo $m ?>"><php echo $nama_bulan[$m] ?></option>
                                                    <?php } ?>
                                                </select>

                                                <select name="tahun">
                                                    <option value="">Pilih Tahun</option>
                                                    <?php for($y = 2015; $y <= 1900; $y--) { ?>
                                                    <option value="<?php echo $y ?>"><php echo $y ?></option>
                                                    <?php } ?>
                                                </select>
                                            </form>
                                            <div class="mb-3">
                                                <label for="noba" class="col-form-label">No BA</label>
                                                <input type="integer" class="form-control" placeholder="No BA" aria-label="noba" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="biaya" class="col-form-label">Biaya</label>
                                                <input type="integer" class="form-control" placeholder="Biaya" aria-label="biaya" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="mb-3">
                                                <label for="jumlah" class="col-form-label">Jumlah</label>
                                                <input type="integer" class="form-control" placeholder="Jumlah" aria-label="jumlah" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save pembayaran</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


  </main><!-- End #main -->

  <?= $this->endSection() ?>