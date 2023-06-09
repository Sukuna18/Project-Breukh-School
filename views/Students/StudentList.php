<div class="container-fluide">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div>
	<li class="nav-item" style="display: flex; align-items: center;">
          <a class="nav-link d-flex align-items-center me-3" href="/">
		  <i class="fa-solid fa-right-from-bracket"></i>&nbsp;Se deconnecter
          </a>
        </li>
	</div>
  <!-- Container wrapper -->
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="/niveau"><img id="MDB-logo"
        src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/modern-school-logo-design-template-1d88683e857f70116bf3ba828be9a84e_screen.jpg?ts=1576966343" alt="MDB Logo"
        draggable="false" height="30" /></a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      
      <!-- Left links -->

      <form class="d-flex align-items-center w-100 form-search">
        <div class="input-group">
          <input type="search" class="form-control" placeholder="Search" aria-label="Search" />
        </div>
        <a href="#!" class="text-white"><i class="fas fa-search ps-3"></i></a>
      </form>

      <ul class="navbar-nav ms-3">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center me-3" href="/add">
            <i class="fas fa-bookmark pe-2"></i>Enregister
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center me-2" href="/discipline/gestion">
					<i class="fa-solid fa-chalkboard-user pe-2"></i>Discipline
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link d-flex align-items-center me-2" href="/class">
		  <i class="fa-solid fa-landmark pe-2"></i>Classes
          </a>
        </li>
		<li class="nav-item">
          <a class="nav-link d-flex align-items-center me-3" href="/annee">
		  <i class="fa-solid fa-calendar-days pe-2"></i>Annee
          </a>
        </li>
      </ul>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-1000" style="margin-right: 11%;">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-10">

        <div class="card">
          <div class="card-header p-3">
            <h5 class="mb-0"><i class="fas fa-tasks me-2"></i>Liste Des Eleves Breukh School</h5>
          </div>
          <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 500px;  overflow: scroll;">

            <table class="table mb-0">
              <thead>
                <tr>
                  <th scope="col">Eleve</th>
                  <th scope="col">Naissance</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
              
                
                
                <?php foreach($params['students'] as $tab): ?>
                  <tr class="fw-normal">
                  <th class="border-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp"
                      class="shadow-1-strong rounded-circle" alt="avatar 1"
                      style="width: 55px; height: auto;">
                    <span class="ms-2"><?= $tab['prenom']?>&nbsp;<?= $tab['nom']?></span>
                  </th>
                  <td class="border-0 align-middle"><?= $tab['birthday']?></td>
                  <td class="border-0 align-middle">
                    <a href="edit/<?= $tab['id']?>"  data-mdb-toggle="tooltip" title="Edit"><i
                        class="fa-solid fa-file-pen text-success me-3"></i></a>
                    <a href="#!" data-mdb-toggle="tooltip" title="Remove">
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</div>