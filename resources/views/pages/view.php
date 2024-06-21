<main class="max-w-screen-2xl mx-auto">
<h1 class=" text-center text-4xl mt-12 text-white"><?= $title ?></h1>


<div class="flex justify-center items-center flex-col mt-12 gap-6 text-center text-white
">
    <?php
    if (isset($_GET['id']))
        $id = $_GET['id'];
    include('config/db.php');
    $sql = "SELECT * FROM games WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    ?>
    <div>

        <h2 class="text-2xl font-semibold">Tytuł:</h2>
        <p><?= $row['title'] ?></p>
    </div>
    <div>

        <h2 class="text-2xl font-semibold">Developer:</h2>
        <p><?= $row['developer'] ?></p>
    </div>
    <div>

        <h2 class="text-2xl font-semibold">Konsola:</h2>
        <p><?= $row['console'] ?></p>
    </div>
    <div>

        <h2 class="text-2xl font-semibold">Notatka:</h2>
        <p><?= $row['note'] ?></p>
    </div>

</div>


</main>