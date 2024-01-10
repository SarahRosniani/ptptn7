<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

  <main id="main" class="main">
    <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Pekerjaan</h1>
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
                        <th scope="col">Uraian Pekerjaan</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($pekerjaan as $pkr) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $pkr['pekerjaan']; ?></td>
                                <td>
                                    <div class="d-flex justify-content align-items-">
                                        <button
                                            type="button"
                                            class="btn btn-outline-primary btn-icon-split me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editTask<?php echo $pkr['id']; ?>"
                                            ><i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button
                                            type="button"
                                            class="btn btn-outline-danger btn-icon-split me-2"
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteTask<?php echo $pkr['id']; ?>"
                                            ><i class="bi bi-trash"></i>
                                        </button>
                                    </div> 
                            </div>
                            <div 
                            class="modal fade" 
                                id="deleteTask<?php echo $pkr['id']; ?>" 
                                tabindex="-1" 
                                aria-labelledby="exampleModalLabel" 
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Pekerjaan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                                <form action="<?= base_url('pekerjaan/' . $pkr['id']) ?>" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <?= csrf_field() ?>
                                                    <div class="mb-3">
                                                        <label for="keterangan" class="col-form-label">Uraian Pekerjaan</label>
                                                        <label class="form-control"><?php echo $pkr['pekerjaan']; ?></input>
                                                    </div>
                                                </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Delete Pekerjaan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            <div 
                                class="modal fade" 
                                id="editTask<?php echo $pkr['id']; ?>" 
                                tabindex="-1" 
                                aria-labelledby="exampleModalLabel" 
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pekerjaan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?= base_url('/pekerjaan/' . $pkr['id'])?>" method="post">
                                            <input type="hidden" name="_method" value="PUT">
                                            <?= csrf_field() ?> 
                                                <div class="mb-3">
                                                    <label for="keterangan" class="col-form-label">Uraian Pekerjaan</label>
                                                    <input class="form-control" name="pekerjaan"  value="<?php echo $pkr['pekerjaan']; ?>"></input>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Update Pekerjaan</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            </tbody>
                            </table> 
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
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Pekerjaan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url('pekerjaan/store' )?>" method="post">
                                            
                                            <div class="mb-3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="col-form-label">Uraian Pekerjaan</label>
                                                <textarea class="form-control" name="pekerjaan"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save Pekerjaan</button>
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