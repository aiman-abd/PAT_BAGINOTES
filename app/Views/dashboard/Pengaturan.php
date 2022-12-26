<?= $this->extend('layout/dashboard-layout'); ?>
<?= $this->section('content'); ?>
<?php
$tanggal = mktime(date('m'), date("d"), date('Y'));
echo "Tanggal : <b> " . date("d-m-Y", $tanggal) . "</b>";
date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i:s");
echo " | Jam Berapa : <span id='jam'> <b> " . $jam . " " . " </b> </span>";
$a = date("H");
if (($a >= 6) && ($a <= 11)) {
    echo " <b>, Selamat Pagi !! </b>";
} else if (($a >= 11) && ($a <= 15)) {
    echo " , Selamat  Pagi !! ";
} elseif (($a > 15) && ($a <= 18)) {
    echo ", Selamat Siang !!";
} else {
    echo ", <b> Selamat Malam </b>";
}

?>
<script type="text/javascript">
    window.onload = function() {
        jam();
    }

    function jam() {
        var e = document.getElementById('jam'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = h + ':' + m + ':' + s;

        setTimeout('jam()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }
</script>
<?= $this->endSection(); ?>