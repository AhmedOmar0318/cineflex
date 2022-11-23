<?php
if (isset($_SESSION['notification'])) {
    echo '<p style = "color:red;">' . $_SESSION['notification'] . '</p>';
    unset($_SESSION['notification']);
} ?>

<body>
<div class="container mt-3">
    <h2>Add A Genre</h2>
    <form action="php/addlanguage.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3 mt-3">
            <label>Language:</label>
            <input type="text" class="form-control" placeholder="Enter Language" name="language">
        </div>
        <button name="submit" type="submit" class="btn btn-success">Add</button>
    </form>
</div>
</body>