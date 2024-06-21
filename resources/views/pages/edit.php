<main class="max-w-screen-2xl mx-auto">
<h1 class=" text-center text-4xl mt-12 text-white"><?= $title ?></h1>

<?php
if (isset($_GET['id'])) {
        $id = $_GET['id'];
    include('config/db.php');
    $sql = "SELECT * FROM games WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
}
?>


<form action="/controllers/gameController.php" method="post" class="max-w-sm mx-auto mt-12" >
<input type="hidden" name="id" value="<?=$row['id'] ?>">

  <div class="mb-5">
    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tytuł</label>
    <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="<?=$row['title'] ?>" required />
  </div>

  <div class="mb-5">
    <label for="developer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Developer</label>
    <input type="text" id="developer" name="developer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required   value="<?=$row['developer'] ?>"/>
  </div>

  <div class="mb-5">
<label for="console" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wybierz platformę</label>
  <select id="console" name="console" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option selected>Platforma</option>
    <option value="PC" <?php echo $row['console'] == "PC" ? 'selected' : ''; ?>>PC</option>
    <option value="pegasus" <?php echo $row['console'] == "pegasus" ? 'selected' : ''; ?>>Pegasus</option>
    <option value="gbc" <?php echo $row['console'] == "gbc" ? 'selected' : ''; ?>>GameBoy Color</option>
    <option value="gba" <?php echo $row['console'] == "gba" ? 'selected' : ''; ?>>GameBoy Advance</option>
  </select>
</div>

<div class="mb-5">
<label for="note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Notatki</label>
<textarea id="note" name="note" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Notatki..."><?=$row['note'] ?></textarea>

</div> 


<button type="submit" name="edit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edytuj</button>
</form>
