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
    <button type="button" style="margin-top: -.5rem;" class="btn btn-primary col-log-4 fs-11" id="showModalBtn"><i
            class="ri-add-line"></i>
        Tambah Barang</button>

    <div class="modal fade" id="addBarang" tabindex="-1" aria-labelledby="addBarangLabel" aria-modal="true"
        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addBarangLabel">Tambah Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0);" id="formBarang">
                        @csrf
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <div>
                                    <label for="namaProduk" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="namaProduk"
                                        placeholder="Masukkan Nama Produk" name="namaProduk" required="required">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div>
                                    <label for="price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="price"
                                        placeholder="Masukkan price" name="price" required="required">
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
                                    <input type="file" class="form-control" id="foto" name="foto"
                                        placeholder="Masukan foto" required="required">
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

           $('#formBarang').on('submit', function(e) {
                e.preventDefault();
                let form = this;
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }

                let formData = new FormData(this);

                Swal.fire({
                    html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/etwtznjn.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Form Anda sedang diproses!</h4><p class="text-muted mx-4 mb-0">Mohon tunggu...</p></div></div>',
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: `{{ route('store-tambah-admin') }}`,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        Swal.close();

                        if (!res.error) {
                            form.reset();
                            $("#addBarang").modal('hide');

                            Swal.fire({
                                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Berhasil!</h4><p class="text-muted mx-4 mb-0">Selamat! Anda berhasil menambahkan user.</p></div></div>',
                                timer: 3000
                            })

                            user_list_datatable.ajax.reload();
                        } else {
                            Swal.fire({
                                html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Oops... Ada Kesalahan!</h4><p class="text-muted mx-4 mb-0">${Object.values(res.message)[0]}</p></div></div>`,
                                showCancelButton: !1,
                                showConfirmButton: !1,
                                buttonsStyling: !1,
                                showCloseButton: !0
                            })
                        }
                    }
                });
           })
        });
    </script>
</body>

</html>
