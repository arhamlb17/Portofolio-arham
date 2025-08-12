<h3>Data Barang</h3>
<table border="1">
    <tr>
        <th>No. </th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga Barang</th>
        <th colspan="2"> aksi</th>
    </tr>

    <?php
    include "koneksi.php";
    $no = 1;
    $ambildata = mysqli_query($koneksi, "SELECT * FROM barang");
    while ($tampil = mysqli_fetch_array($ambildata)) {
        echo "

             <tr>
                <td>$no</td>
                <td>$tampil[kode_barang]</td>
                <td>$tampil[nama_barang]</td>
                <td>$tampil[harga_barang]</td>
                <td><a href='?kode=$tampil[kode_barang]'>Hapus </a></td>
                <td><a href='barang-ubah.php?kode=$tampil[kode_barang]'>Ubah</a></td>
            </tr>":
        $no++;    
    }
    
             ?>
                </table>
                <?php
                    if(isset($_GET['kode'])) {
                                mysqli_query($koneksi, "DELETE FROM barang WHERE kode_barang='$_GET[kode]'");
                                echo "Data berhasil dihapus";
                                echo "<meta http-equev=refresh content=2;URL='barang-data.php'>";
}
