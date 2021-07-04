// ketika document siap maka jalankan fungsinya
$(function(){
    $('tambahDataMahasiswa').on('click', function(){
        // Mencari id dengan nama judul modal kemudian mengubah isinya
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        const id = $(this).data('id');

        $.ajax({
            url : 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val("");
                $('#nim').val("");
                $('#email').val("");
                $('#prodi').val("");
            }
        });
    });
    // Menentukan id setelah itu mengeksekusi fungsi
    $('.tampilModalUbah').on('click', function(){
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');
        // membuat constant untuk mengambil data id dari mahasiswa 
        // this merujuk pada action yang kita lakukan (tombol tampilModalUbah)
        const id = $(this).data('id');

        $.ajax({
            url : 'http://localhost/phpmvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#prodi').val(data.prodi);
                $('#id').val(data.id);
            }
        });
    });

});