<!DOCTYPE html>
<?php session_start(); ?>
<?php $user = $_COOKIE['username']; ?>
<?php error_reporting(0); ?>
<?php require 'dbconnect.php'; ?>
<html lang="en">

        <?php include 'header.php'; ?>

            <!-- Content Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-heading text-danger">Edit Your Character</h1><br>

                        <div class="panel panel-warning">

                        <h3 class="text-warning panel-heading">Combat Powers</a></h3>
                        <br><br>
                         <form class="form-horizontal">
                            <h3> Choose 7 Combat Powers </h3>
                            <br>
                            <label for="choosepower1"> Combat Power 1: </label>
                             <?php
                             $username = $_SESSION['username'];
                             $query = mysql_query("SELECT POWERS_ID, POWERS_NAME FROM POWERS");

                             // Open the drop down box
                             echo '<select name="Select Power">';

                             echo '<option class="placeholder" selected disabled value="">Select Power</option>';
                             // Loop through the query results, outputting the options one by one
                             while ($row = mysql_fetch_array($query)) {
                                 echo '<option value="'.$row['POWERS_ID'].'">'.$row['POWERS_NAME'].'</option>';
                             }
                             // Close the drop down box
                             echo '</select>';?>
                             <br>

                             <label for="choosepower2"> Combat Power 2: </label>
                             <?php
                             $username = $_SESSION['username'];
                             $query = mysql_query("SELECT POWERS_ID, POWERS_NAME FROM POWERS");

                             // Open the drop down box
                             echo '<select name="Select Power">';

                             echo '<option class="placeholder" selected disabled value="">Select Power</option>';

                             // Loop through the query results, outputting the options one by one
                             while ($row = mysql_fetch_array($query)) {
                                 echo '<option value="'.$row['POWERS_ID'].'">'.$row['POWERS_NAME'].'</option>';
                             }
                             // Close the drop down box
                             echo '</select>';?>
                             <br>

                             <label for="choosepower3"> Combat Power 3: </label>
                             <?php
                             $username = $_SESSION['username'];
                             $query = mysql_query("SELECT POWERS_ID, POWERS_NAME FROM POWERS");

                             // Open the drop down box
                             echo '<select name="Select Power">';

                             echo '<option class="placeholder" selected disabled value="">Select Power</option>';

                             // Loop through the query results, outputting the options one by one
                             while ($row = mysql_fetch_array($query)) {
                                 echo '<option value="'.$row['POWERS_ID'].'">'.$row['POWERS_NAME'].'</option>';
                             }
                             // Close the drop down box
                             echo '</select>';?>
                             <br>

                             <label for="choosepower4"> Combat Power 4: </label>
                             <?php
                             $username = $_SESSION['username'];
                             $query = mysql_query("SELECT POWERS_ID, POWERS_NAME FROM POWERS");

                             // Open the drop down box
                             echo '<select name="Select Power">';

                             echo '<option class="placeholder" selected disabled value="">Select Power</option>';

                             // Loop through the query results, outputting the options one by one
                             while ($row = mysql_fetch_array($query)) {
                                 echo '<option value="'.$row['POWERS_ID'].'">'.$row['POWERS_NAME'].'</option>';
                             }
                             // Close the drop down box
                             echo '</select>';?>
                             <br>

                             <label for="choosepower5"> Combat Power 5: </label>
                             <?php
                             $username = $_SESSION['username'];
                             $query = mysql_query("SELECT POWERS_ID, POWERS_NAME FROM POWERS");

                             // Open the drop down box
                             echo '<select name="Select Power">';

                             echo '<option class="placeholder" selected disabled value="">Select Power</option>';

                             // Loop through the query results, outputting the options one by one
                             while ($row = mysql_fetch_array($query)) {
                                 echo '<option value="'.$row['POWERS_ID'].'">'.$row['POWERS_NAME'].'</option>';
                             }
                             // Close the drop down box
                             echo '</select>';?>
                             <br>

                             <label for="choosepower6"> Combat Power 6: </label>
                             <?php
                             $username = $_SESSION['username'];
                             $query = mysql_query("SELECT POWERS_ID, POWERS_NAME FROM POWERS");

                             // Open the drop down box
                             echo '<select name="Select Power">';

                             echo '<option class="placeholder" selected disabled value="">Select Power</option>';

                             // Loop through the query results, outputting the options one by one
                             while ($row = mysql_fetch_array($query)) {
                                 echo '<option value="'.$row['POWERS_ID'].'">'.$row['POWERS_NAME'].'</option>';
                             }
                             // Close the drop down box
                             echo '</select>';?>
                             <br>

                             <label for="choosepower7"> Combat Power 7: </label>
                             <?php
                             $username = $_SESSION['username'];
                             $query = mysql_query("SELECT POWERS_ID, POWERS_NAME FROM POWERS");

                             // Open the drop down box
                             echo '<select name="Select Power">';

                             echo '<option class="placeholder" selected disabled value="">Select Power</option>';

                             // Loop through the query results, outputting the options one by one
                             while ($row = mysql_fetch_array($query)) {
                                 echo '<option value="'.$row['POWERS_ID'].'">'.$row['POWERS_NAME'].'</option>';
                             }
                             // Close the drop down box
                             echo '</select>';?>
                        </form>
                        <br>



                        </div>
                        <button type="button" class="btn btn-success pull-right"><a href="charactersheet.php">Save</a></button>
                    </div>
                </div>
            </div>
        </section>



        <!-- Fixed Height Image Aside -->
            <!-- Image backgrounds are set within the full-width-pics.css file. -->


            <!-- Content Section -->
            <!-- Content Section -->

            <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; 2016</p>
                    </div>
                </div>
                    <!-- /.row -->
            </div>
                <!-- /.container -->
        </footer>

            <!-- jQuery -->
        <script src='@routes.Assets.versioned("public/javascripts/jquery.js")'></script>

            <!-- Bootstrap Core JavaScript -->
        <script src='@routes.Assets.versioned("javascripts/bootsatrap.min.js")'></script>

    </body>
