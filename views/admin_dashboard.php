
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Avocat connect</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../assest/image/css/style.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.html">ADMIN DASHBOARD</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>          
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">details</div>
                            <a class="nav-link" href="../views/profile.php" >
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                profile
                            </a>
                            <a class="nav-link" href="../views/logout.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-sign-out" aria-hidden="true"></i>                                </div>
                                LOGOUT
                            </a>
                            <a href="#" id="editButton" class="mb-20 rounded-md bg-blue-600 hover:bg-blue-700 text-white uppercase mx-auto px-6 py-2 my-4">ADD ACTIVITY</a>

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        imily
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                       

                        <div class="card mb-4 mt-10">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                members resivations :
                            </div>
                            <div class="overflow-x-auto p-4 bg-white rounded-lg shadow-md">
    <table class="table-auto w-full border-collapse border border-gray-200">
        <thead class="bg-red-500 text-white">
            <tr>
                <th class="px-4 py-2 border border-gray-300">date de reservation</th>
                <th class="px-4 py-2 border border-gray-300">Nom</th>
                <th class="px-4 py-2 border border-gray-300">Prenom</th>
                <th class="px-4 py-2 border border-gray-300">Email</th>
            </tr>
        </thead>
        <tbody>
    
           
    </table>
</div>
                  </div>
                    </div>
                </main>
   

                <div class="bg-gray-800 p-4 rounded bg-opacity-50 absolute" id="editForm" style="display:none">
        <h1 class="text-3xl font-bold text-center mb-8 text-white">ADD ACTIVITY</h1>

          <form id="player-form" class="space-y-4">
            <div>
              <label class="block mb-2 text-white">Name</label>
              <input type="text" id="name"  name="activity_name" class="w-full p-2  rounded">
            </div>
            <div>
              <label class="block mb-2 text-white">description</label>
              <input type="text" id="description" name="description" required class="w-full p-2  rounded">
            </div>
            <div>
              <label class="block mb-2 text-white">PRICE</label>
              <input type="numbre" id="price" name="price" required class="w-full p-2  rounded">
            </div>
            <button type="submit" name="update" class="rounded-md bg-green-600 hover:bg-green-700 text-white uppercase mx-auto px-6 py-2 my-4">add</button>
          </form>
            </div>   





                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; FITNESSE BDARIJA 2024</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>


        <script>
            window.addEventListener('DOMContentLoaded', event => {

const sidebarToggle = document.body.querySelector('#sidebarToggle');
if (sidebarToggle) {
   
    sidebarToggle.addEventListener('click', event => {
        event.preventDefault();
        document.body.classList.toggle('sb-sidenav-toggled');
        localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
    });
}

});


        </script>
                <script>
    document.getElementById('editButton').onclick = function() {
        var editForm = document.getElementById('editForm');
        if (editForm.style.display === "none") {
            editForm.style.display = "block";
        } else {
            editForm.style.display = "none";
        }
    };
</script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>