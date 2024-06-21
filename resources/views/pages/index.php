<main class="max-w-screen-2xl mx-auto">
    <h1 class="text-center text-4xl mt-12 "><?= $title ?></h1>


    <div class="relative overflow-x-auto px-12 mt-12">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Tytył
                </th>
                <th scope="col" class="px-6 py-3">
                    Developer
                </th>
                <th scope="col" class="px-6 py-3">
                    Konsola
                </th>
                <th scope="col" class="px-6 py-3">

                </th>

            </tr>
        </thead>
        <tbody>

            <?php
            include('config/db.php');
            $sql = 'SELECT * from games';
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $row['id']; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $row['title']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $row['developer']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $row['console']; ?>
                    </td>
                    <td class="px-6 py-4 text-right ">


                        <a href="/view.php?id=<?= $row['id']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-5">Zobacz</a>
                        <a href="/edit.php?id=<?= $row['id']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-5">Edytuj</a>
                        <a href="/delete.php?id=<?= $row['id']; ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Usuń</a>
                    </td>

                <?php
            }
                ?>
                </tr>



        </tbody>
    </table>
</div>




</main>