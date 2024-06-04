<?php include('includes/header.php'); ?>

<!-- Add this in your head section to include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="container-fluid px-4">
    <h1 class="mt-3">Admin panel</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="d-flex">
    <div class="card bg-success text-white mb-4 me-4 p-4 rounded-3" style="width: 50%;">
        <div class="card-body d-flex align-items-center">
            <i class="fas fa-truck fa-2x me-3"></i> <!-- Supplier icon with increased size and margin-end -->
            <div class="ps-3"> <!-- Added padding-start for left padding -->
                <p class="mb-1 fs-4">1234</p> <!-- Number with margin-bottom 1 and increased font size -->
                <p class="mb-0">Some text here</p> <!-- Text with no margin-bottom -->
            </div>
        </div>
    </div>

    <!-- HTML Structure for the card -->
    <div class="card bg-danger text-white mb-4 p-4 rounded-3" style="width: 50%;">
        <div class="card-body d-flex align-items-center">
            <i class="fas fa-truck fa-2x me-3"></i> <!-- Supplier icon with increased size and margin-end -->
            <div class="ps-3"> <!-- Added padding-start for left padding -->
                <p class="mb-1 fs-4">1234</p> <!-- Number with margin-bottom 1 and increased font size -->
                <p class="mb-0">Some text here</p> <!-- Text with no margin-bottom -->
            </div>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>
