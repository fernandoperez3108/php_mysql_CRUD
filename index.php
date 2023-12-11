<?php
    include("database/db.php");
?>

<?php
    include("includes/header.php");
?>

<main class="container p-4 mt-5 mb-5">
    <div class="row mt-5 mb-5">
        <div class="col-md-4">
            <!-- MESSAGES -->

            <?php if(isset($_SESSION['message'])) { ?>
                <div¡ class="alert alert-<?= $_SESSION ['message_type']?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['message'] ?>
                <button type="button" class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"></button>
            </div>
            <?php session_unset(); } ?>

            <!-- ADD TASK FORM -->
            <div class="card card-body">
                <form action="save_task.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                </div>
                <div class="form-group mb-3">
                    <textarea name="description" id="" cols="30" rows="10" row="2" class="form-control" placeholder="Task Description"></textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="file" name="image" class="form-control">
                <div>
                <input type="submit" name="save_task" class="btn btn-success btn-block w-100" value="Save" Task="">
                </form>
            </div>
        </div>
    </div>
</main>