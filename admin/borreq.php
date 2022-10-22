<!DOCTYPE html>
<head>
<title>KOFLib | Borrow Requests</title>
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
                <h4> Welcome, admin!</h4>
                <li>
                    <a href="admin.php">Home</a>
                </li>
                <li>
                    <a href="booksearch.php">Search books</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Book Management</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="addbook.php">Add books</a>
                        </li>
                        <li>
                            <a href="deletebooks.php">Delete books</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="borreq.php" class="active">Borrow Requests</a>
                </li>
                <!-- <li>
                    <a href="#">Edit profile</a>
                </li> -->
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="/bstest/index.php" class="download">Log out</a>
                </li>
                <li>
                    <a href="" class="article">Contact us</a>
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
            <div class="line"></div>

            <h2 style="text-align:center;">Borrow Requests</h2><br>
            <table id="table">
                <tr>
                    <th>UserID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>ISBN</th>
                    <th>Book Name</th>
                    <th>Request Date</th>
                    <th></th>
                </tr>
                <tr>
                    <td>9123663</td>
                    <td>Clayton</td>
                    <td>Kershaw</td>
                    <td>9783879123397</td>
                    <td>Bibliography of Gunnhildr</td>
                    <td>Oct-20-2022</td>
                    <td><input type="submit" value="Approve">&nbsp;<input type="submit" value="Reject"></td>
                </tr>
            </table>
        </div>
    </div>