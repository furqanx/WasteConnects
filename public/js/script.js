/** script untuk form input data postingan sampah */

    /* Script untuk input harga sampah */
    var dengan_rupiah = document.getElementById('priceInput');

    dengan_rupiah.addEventListener('keyup', function(e) {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    /* Script untuk menampilkan input gambar sampah */

    // Mendapatkan elemen input file
    const inputImage = document.getElementById('imageInput');
    // Mendapatkan elemen preview gambar
    const imagePreview = document.getElementById('imagePreview');

    // Ketika input file berubah
    inputImage.addEventListener('input', function() {

        // Membaca file gambar yang dipilih
        const file = this.files[0];

        // Validasi apakah file yang dipilih adalah gambar
        if (!file.type.match('image.*')) {
            alert('File yang dipilih bukan gambar');
            return;
        }

        // Membuat FileReader object
        const reader = new FileReader();

        // Ketika proses pembacaan file selesai
        reader.onload = (function(img) {
            return function(e) {
            // Menampilkan gambar di elemen preview
            img.src = e.target.result;
            };
        })(imagePreview);
        
        // Membaca file sebagai data URL
        reader.readAsDataURL(file);

    });
