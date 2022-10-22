<!DOCTYPE html>
<head>
<title>KOFLib | Borrowing History</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="menustyle.css">
</head>
<script>
    $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>
<?php 
session_start();
?>

<style>
.search {
  width: 75%;
  position: relative;
  display: flex;
  margin-left: auto;
  margin-right: auto;
  height: 50px;
}
.searchTerm {
  width: 100%;
  border: 3px solid black;
  border-right: none;
  padding: 5px;
  height: 50px;
  border-radius: 5px 0 0 5px;
  outline: none;

}
.searchTerm:focus{
  color: #00B4CC;
}
</style>
<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
            <img src="koflib.png" width="100%" height="100%" class="center">
            </div>

            <ul class="list-unstyled components">
                <h4> Welcome, <?php echo $_SESSION['username']; ?></h4>
                <li>
                    <a href="user.php">Home</a>
                <li>
                    <a href="booksearch.php" class="active">Search books</a>
                </li>
                <li>
                    <a href="reservation.php">Reservations</a>
                </li>
                <li class="active">
                    <a href="borhis.php">Borrowing History</a>
                </li>
                <!-- <li>
                    <a href="user_ed_prof.php">Edit profile</a>
                </li> -->
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="/bstest/index.php" class="download">Log out</a>
                </li>
                <li>
                <a href="mailto:alfredtheslugger@gmail.com" class="article">Contact us</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>

            <!-- <h2>Welcome to this library!</h2>
            <h4>WE STILL DON'T HAVE BOOKS YET. PLZ WAIT</h4>
            <p></p>
            <p></p> -->

            <div class="line"></div>

            <h2 style="text-align:center;">Borrowing History</h2>
            <br> <br>
            <table id="table">
                <tr>
                    <th>BookID</th>
                    <th>ISBN</th>
                    <th>Book Name</th>
                    <th>Author(s)</th>
                    <th>Publisher</th>
                    <th>Date Borrowed</th>
                    <th>Date Returned</th>
                    <th></th>
                </tr>
                <tr>
                    <td>15</td>
                    <td>9783879123397</td>
                    <td>Bibliography of Gunnhildr</td>
                    <td>Jean Gunnhildr</td>
                    <td>SABR</td>
                    <td>Oct-21-2022</td>
                    <td>Oct-23-2022</td>
                    <td><input type="submit" value="Borrow Again"></td>
                </tr>
            </table>
    </div>