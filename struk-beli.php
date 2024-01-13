<?php
require "includes/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembelian</title>
    <link rel="stylesheet" href="struk-beli.css">
</head>
<body>

<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM mobil WHERE id = $id";
    $result = mysqli_query($conn, $query);
    foreach ($result as $data) {
        ?>
    <div class="background">
        <div class="struk">
            <h2>Struk Pembelian</h2>
            <div id="item-info">
                <p>Item: <span id="item"><?php echo "$data[mobil]"?></span></p>
                <p>Harga: <span id="harga"><?php echo "$data[harga]"?></span></p>
            </div>
            <?php
            }
            ?>
            <button class="btn" onclick="showKonfirmasiPembelian()" id="showButton">Konfirmasi Pembelian</button>
            <div class="terimakasih" id="terimakasih">
                <div id="closeButton" onclick="closeThankYouBox()">X</div>
                <div id="spinner" class="animate__animated animate__fadeIn animate__delay-2s"></div>
                <div id="checkmark" class="animate__animated animate__fadeIn animate__delay-2s">&#10003;</div>
                <p>Terima kasih atas pembelian Anda!</p>
            </div>
            <div id="terimakasihContainer">
                <div id="tandaCentang">&#10003;</div>
                <p>Terima kasih atas pembelian Anda!</p>
            </div>
            <div id="konfirmasiModal">
                <p>Apakah Anda yakin dengan pembelian Anda?</p>
                <button class="btn" onclick="konfirmasiPembelian()">OK</button>
                <button class="btn" onclick="batalPembelian()">Cancel</button>
            </div>
            <div id="batalModal">
                <span class="closeButton" onclick="closeBatalModal()">X</span>
                <p>Pembelian telah dibatalkan</p>
            </div>
        </div>
    </div>

    <script>
        function showKonfirmasiPembelian() {
            var konfirmasiModal = document.getElementById('konfirmasiModal');
            konfirmasiModal.style.display = 'block';
        }

        function konfirmasiPembelian() {
            var konfirmasiModal = document.getElementById('konfirmasiModal');
            konfirmasiModal.style.display = 'none';
            showTerimaKasih();
        }

        function batalPembelian() {
            var konfirmasiModal = document.getElementById('konfirmasiModal');
            konfirmasiModal.style.display = 'none';

            var batalModal = document.getElementById('batalModal');
            batalModal.style.display = 'block';
        }

        function closeBatalModal() {
            var batalModal = document.getElementById('batalModal');
            batalModal.style.display = 'none';
        }

        function showTerimaKasih() {
            var terimakasih = document.getElementById('terimakasih');
            terimakasih.style.display = 'none';

            var spinner = document.getElementById('spinner');
            spinner.style.display = 'none';

            var checkmark = document.getElementById('checkmark');
            checkmark.style.display = 'none';

            var terimakasihContainer = document.getElementById('terimakasihContainer');
            terimakasihContainer.style.display = 'block';
        }

        function closeThankYouBox() {
            var terimakasihContainer = document.getElementById('terimakasihContainer');
            terimakasihContainer.style.display = 'none';
        }

        function konfirmasiPembelian() {
        var konfirmasiModal = document.getElementById('konfirmasiModal');
        konfirmasiModal.style.display = 'none';

        var showButton = document.getElementById('showButton');
        showButton.style.display = 'none';
        showTerimaKasih();
}

    </script>
</body>
</html>
