@include('admin.includes.datatable')

@push('scripts')
    <script>
        let table;
        let modal = '#modal-form';
        let button = '#submitBtn';

        $(function() {
            $('#spinner-border').hide();
        });

        table = $('#roleTable').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            responsive: true,
            ajax: {
                url: '{{ route('berita.data') }}',
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'image',
                    name: 'image'
                },
                {
                    data: 'informasi_berita',
                    name: 'informasi_berita'
                },
                {
                    data: 'informasi_alumni',
                    name: 'informasi_alumni'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        function addFormBerita(url, title = 'Form Tambah Berita') {
            $(modal).modal('show');
            $(`${modal} .modal-title`).text(title);
            $(`${modal} form`).attr('action', url);
            $(`${modal} [name=_method]`).val('POST');
            $(`${modal} #informasi_berita, ${modal} #informasi_alumni`).prop('readonly', false);
            $('#spinner-border').hide();

            $(button).show();
            $(button).prop('disabled', false);

            resetForm(`${modal} form`);
        }

        function detailDataBerita(url, title = 'Detail Berita') {
            $.ajax({
                url: url,
                dataType: 'JSON',
                type: 'GET',
                success: function(response) {
                    $(modal).modal('show');
                    $(`${modal} .modal-title`).text(title);
                    $(`${modal} form`).attr('action', url);
                    $(`${modal} [name=_method]`).val('PUT');
                    $(`${modal} #submitBtn`).hide();
                    $(`${modal} #informasi_berita, ${modal} #informasi_alumni`).prop('readonly', true);

                    resetForm(`${modal} form`);
                    loopForm(response.data);
                },
                error: function(errors) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Opps! Gagal',
                        text: errors.responseJSON.message,
                        showConfirmButton: true,
                    });
                }
            })
        }

        function editDataBerita(url, title = 'Form Update Berita') {
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'JSON',
                success: function(response) {
                    $(modal).modal('show');
                    $(`${modal} .modal-title`).text(title);
                    $(`${modal} form`).attr('action', `${url}/update`);
                    $(`${modal} [name=_method]`).val('PUT');
                    $(`${modal} #informasi_berita, ${modal} #informasi_alumni`).prop('readonly', false);
                    $(`${modal} #submitBtn`).show();

                    resetForm(`${modal} form`);
                    loopForm(response.data);
                },
                error: function(xhr, status, error) {
                    var errorMessage = xhr.status + ': ' + xhr.statusText;
                    Swal.fire({
                        icon: 'error',
                        title: 'Opps! Gagal',
                        text: errorMessage,
                        showConfirmButton: true,
                    });
                }
            })
        }


        function deleteDataBerita(url, name, title = 'Delete Berita') {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: true,
            })
            swalWithBootstrapButtons.fire({
                title: 'Delete Data!',
                text: 'Apakah anda yakin ingin menghapus berita ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Iya !',
                cancelButtonText: 'Tidak',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "delete",
                        url: url,
                        dataType: "json",
                        success: function(response) {
                            if (response.status = 200) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message,
                                    showConfirmButton: false,
                                    timer: 3000
                                }).then(() => {
                                    table.ajax.reload();
                                })
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Opps! Gagal',
                                text: xhr.responseJSON.message,
                                showConfirmButton: true,
                            }).then(() => {
                                table.ajax.reload();
                            });
                        }
                    });
                }
            });
        }

        function submitForm(originalForm) {
            $(button).prop('disabled', true);
            $('#spinner-border').show();

            $.post({
                    url: $(originalForm).attr('action'),
                    data: new FormData(originalForm),
                    dataType: 'JSON',
                    contentType: false,
                    cache: false,
                    processData: false
                })
                .done(response => {
                    $(modal).modal('hide');
                    if (response.status = 200) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message,
                            showConfirmButton: false,
                            timer: 3000
                        }).then(() => {
                            $(button).prop('disabled', false);
                            $('#spinner-border').hide();

                            table.ajax.reload();
                        })
                    }
                })
                .fail(errors => {
                    $('#spinner-border').hide();
                    $(button).prop('disabled', false);
                    Swal.fire({
                        icon: 'error',
                        title: 'Opps! Gagal',
                        text: errors.responseJSON.message,
                        showConfirmButton: true,
                    });
                    if (errors.status == 422) {
                        $('#spinner-border').hide()
                        $(button).prop('disabled', false);
                        loopErrors(errors.responseJSON.errors);
                        return;
                    }
                });
        }
    </script>
@endpush
