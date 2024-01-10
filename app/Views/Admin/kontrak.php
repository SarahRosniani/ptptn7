<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

  <main id="main" class="main">
    <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Kontrak</h1>
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
                        <th scope="col">Fisik</th>
                        <th scope="col">Satuan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                        <!-- foreach -->
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?="138,0" ?></td>
                                <td><?="HA" ?></td>
                                <td><?="27.142,08" ?></td>
                                <td><?="3.745.607" ?></td>

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
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Kontrak</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="#" method="post">
                                            <input type="hidden" name="_method" value="PUT">
                                            <?= csrf_field() ?>
                                                <div class="mb-3">
                                                    <label for="fisik" class="col-form-label">Fisik</label>
                                                    <input type="integer" class="form-control" placeholder="Fisik" aria-label="Fisik" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="satuan" class="col-form-label">Satuan</label>
                                                    <input type="integer" class="form-control" placeholder="Satuan" aria-label="satuan" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="harga" class="col-form-label">Harga</label>
                                                    <input type="integer" class="form-control" placeholder="Harga" aria-label="harga" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="keterangan" class="col-form-label">Jumlah</label>
                                                    <input type="integer" class="form-control" placeholder="Jumlah" aria-label="jumlah" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update Kontrak</button>
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
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Kontrak</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('task/store' )?>" method="post">
                                            
                                            <div class="mb-3">
                                            </div>
                                            <div class="mb-3">
                                                    <label for="fisik" class="col-form-label">Fisik</label>
                                                    <input type="integer" class="form-control" placeholder="Fisik" aria-label="Fisik" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="satuan" class="col-form-label">Satuan</label>
                                                    <input type="integer" class="form-control" placeholder="Satuan" aria-label="satuan" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="harga" class="col-form-label">Harga</label>
                                                    <input type="integer" class="form-control" placeholder="Harga" aria-label="harga" aria-describedby="basic-addon1">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="keterangan" class="col-form-label">Jumlah</label>
                                                    <input type="integer" class="form-control" placeholder="Jumlah" aria-label="jumlah" aria-describedby="basic-addon1">
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save Kontrak</button>
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