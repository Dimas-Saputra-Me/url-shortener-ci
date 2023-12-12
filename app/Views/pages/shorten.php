<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <?= View('components/navbar') ?>

    <form class="mx-5 mt-5 mb-3 d-flex" method="GET" action="<?= $_SERVER['REQUEST_URI'] . "/getshortenurl" ?>">
        <div class="form-floating mb-3 flex-fill">
            <input type="url" class="form-control" id="floatingInput" placeholder="https://www.youtube.com/watch?v=qrH9vMZBwAk" name="url">
            <label for="floatingInput">URL</label>
        </div>
        <button type="submit" class="btn btn-primary ms-3">Shorten</button>
    </form>

    <?php
    if (isset($url)) {
    ?>
        <div class="mx-auto card" style="width: 18rem;">
            <img src="https://api.qrserver.com/v1/create-qr-code/?data=<?= $url ?>&size=70x70" class="card-img-top qr-code-img" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $url ?></h5>
                <button onclick="copyToClipboard('<?= $url ?>')" class="btn btn-primary">Copy Link</button>
                <button onclick="copyImageToClipboard()" class="btn btn-primary">Copy QR Code</button>
            </div>
        </div>

    <?php
    }
    ?>

    <!-- Footer -->
    <?= View('components/botbar') ?>

    <!-- Script -->
    <script>
        // Copy Link
        function copyToClipboard(value) {
            var tempInput = document.createElement("input");
            tempInput.style = "position: absolute; left: -1000px; top: -1000px";
            tempInput.value = value;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);

            alert("Text Copied: " + value);
        }

        // Copy QR Code
        function copyImageToClipboard(){
            var imageElem = document.querySelector('.qr-code-img');
            var range = document.createRange();
            range.selectNode(imageElem);
            window.getSelection().addRange(range);

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'successful' : 'unsuccessful';
                alert('Copy image command was ' + msg);
            } catch (err) {
                alert('Oops, unable to copy');
            }

            window.getSelection().removeAllRanges();
        }
        
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>