<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>
<body>

<h5 class="card-title mt-2">Data Barang</h5>
<button type="button" style="margin-top: -.5rem;" class="btn btn-primary col-log-4 fs-11"
    id="showModalBtn"><i class="ri-add-line"></i>
    Tambah Barang</button>

<div class="modal fade" id="addBarang" tabindex="-1" aria-labelledby="addBarangLabel"
aria-modal="true" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBarangLabel">Tambah Barang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0);" id="formBarang">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div>
                                <label for="namaProduk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control"
                                    id="namaProduk" placeholder="Masukkan Nama Produk"
                                    name="namaProduk" required="required">
                            </div>
                        </div>
                
                        <div class="col-lg-6">
                            <div>
                                <label for="price" class="form-label">Price</label>
                                <input type="text" 
                                    class="form-control" id="price"
                                    placeholder="Masukkan price" name="price"
                                    required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div>
                                <label for="stockBarang" class="form-label">Stock Barang</label>
                                <input type="number" class="form-control" id="stockBarang"
                                    placeholder="Masukkan stock Barang" name="stockBarang" required="required">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label for="foto" class="form-label">foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" placeholder="Masukan foto" required="required">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>

                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        // Sembunyikan modal saat halaman dimuat
        $('#addBarang').modal('hide');

        // Tampilkan modal saat tombol "barang" diklik
        $('#showModalBtn').click(function() {
            $('#addBarang').modal('show');
        });
    });
</script>
</body>
</html>
