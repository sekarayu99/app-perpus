<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style type="text/css">
        p {
            margin: 5px 0 0 0;
        }
        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
            display: block;
        }
        .bold {
            font-weight: bold;
        }

        #footer {
            clear: both;
            position: relative;
            height: 40px;
            margin-top: -40px;
        }
    </style>
</head>
<body style="font-size: 16px">
    <p align="center">
        <span style="font-size: 20px"><b>LAPORAN PEMINJAMAN BUKU <br> Perpustakaan Kota</b></span> <br>
    </p>
    <hr><br>
    <table style="border: 1px solid black;border-collapse: collapse;font-size: 18px" width="100%">
        <tr style="margin: 5px">
            <th style="border: 1px solid black;">No</th>
            <th style="border: 1px solid black;">Id Peminjaman</th>
            <th style="border: 1px solid black;">Peminjam</th>
            <th style="border: 1px solid black;">Buku</th>
            <th style="border: 1px solid black;">Tanggal Pinjam</th>
            <th style="border: 1px solid black;">Tanggal Kembali</th>
        </tr>
        <?php
        $no = 1;
        foreach ($laporan as $l) : ?>
            <tr style="margin: 5px">
                <td style="border: 1px solid black;" align="center"><?= $no++ ?></td>
                <td style="border: 1px solid black;" align="center"><?= $l->id_pinjam ?></td>
                <td style="border: 1px solid black;" align="center"><?= $l->nama_anggota ?></td>
                <td style="border: 1px solid black;" align="center"><?= $l->judul_buku ?></td>
                <td style="border: 1px solid black;" align="center"><?= mediumdate_indo($l->tgl_pinjam) ?></td>
                <td style="border: 1px solid black;" align="center"><?= mediumdate_indo($l->tgl_kembali) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
        </p><br><br><br>
        <p>
        Demikian Laporan Peminjaman Buku ini dibuat dengan sebenar-benarnya, untuk diketahui dan digunakan dengan semestinya.</p>
        <p>
        <table width="100%">
            <tr>
                <td align="right">Diketahui oleh<br><br><br><br><br><u>(________________________)</u><br>Penanggungjawab Perpustakaan
            </td>
            </tr>
        </table>
        </p>
        <script type="text/javascript">
            window.print();
        </script>
    <p class="footer">
        <small>Tim Asset</small>
    </p>
</body>
</html>