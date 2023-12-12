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

    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h1 class="text-body-emphasis">Shorten URL</h1>
            <p class="col-lg-8 mx-auto fs-5 text-muted">
                ShortenURL, a personal project by Dimas-Saputra-ME, offers a simple and efficient solution for transforming long URLs into concise links. Users can generate shortened URLs, along with corresponding QR codes, for easy sharing and access on mobile devices. 
            </p>
            <p class="col-lg-8 mx-auto fs-5 text-muted">
                Dimas-Saputra-ME welcomes contributions from developers, designers, and testers to enhance the website's functionality and user experience. Join in and help create a powerful platform that simplifies URL management and sharing for all users.
            </p>
            <div class="d-inline-flex gap-2 mb-5">
                <a href="./shorten">
                    <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
                        Get Started
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?= View('components/botbar') ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>

</html>