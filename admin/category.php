<?php include "header.php";

if ($_SESSION['user_role'] == '0') {
    header("location:post.php");
}


?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Categories</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-category.php">add category</a>
            </div>
            <div class="col-md-12">


                <?php

                include 'config.php';


                $category_query = " SELECT * FROM category ORDER BY category_id DESC ";
                $category_result = mysqli_query($connection, $category_query) or die("Failed");
                $count = mysqli_num_rows($category_result);
                if ($count > 0) {

                ?>




                    <table class="content-table">
                        <thead>
                            <th>S.No.</th>
                            <th>Category Name</th>
                            <th>No. of Posts</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>

                            <?php
                            $category_serial_number = 1;
                            while ($row = mysqli_fetch_assoc($category_result)) {

                            ?>


                                <tr>
                                    <td class='id'><?php echo $category_serial_number++ ?></td>
                                    <td><?php echo $row['category_name'] ?></td>
                                    <td><?php echo $row['post'] ?></td>

                                    <td class='edit'><a href='update-category.php?id=<?php echo $row['category_id'] ?>'><i class="fa fa-edit"></i></a></td>
                                    <td class='delete'><a onclick="return confirm('You want to delete ?')" href='delete-category.php?id=<?php echo $row['category_id'] ?>'><i class='fa fa-trash-o'></i></a></td>
                                </tr>


                            <?php } ?>
                        </tbody>
                    <?php } ?>


                    </table>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>