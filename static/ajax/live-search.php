<?php
session_start();
require '../../functions.php';

$userListValueName = $_GET['live-search'];

$query = "SELECT * FROM userlist WHERE
    name LIKE '$userListValueName%'
    ORDER BY userlist.name ASC";

$userListValue = query($query);
?>

<?php if (count($userListValue) === 0) : ?>

    <div class="row d-flex justify-content-center mb-3">
        <div class="alert alert-primary" role="alert">
            The data you are referring to is not available.
        </div>
    </div>

<?php else : ?>

    <div class="row justify-content-center mb-2">

        <?php foreach ($userListValue as $userListValueRow) : ?>
            <div class="col-430px col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2">
                <div class="card mb-4 box-shadow" style="height: calc(100% - 1.5rem);">
                    <img class="card-img-top card-image" src="images/<?php echo $userListValueRow['image']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-center"><?php echo $userListValueRow["name"]; ?></p>

                        <div class="d-flex 
                        <?php if (isset($_COOKIE['admin']) && isset($_SESSION['admin'])) echo 'flex-column'; ?> 
                        justify-content-between 
                        align-items-center">

                            <?php if (isset($_COOKIE['admin']) && isset($_SESSION['admin'])) : ?>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                                </div>
                            <?php endif; ?>

                            <small class="text-muted 
                            <?php if (isset($_COOKIE['admin']) && isset($_SESSION['admin'])) echo 'mt-date'; ?> ">
                                <?php echo $userListValueRow['date']; ?>
                            </small>

                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

<?php endif; ?>