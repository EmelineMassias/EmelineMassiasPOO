<nav class="mt-3 navbar navbar-expand-lg" style="border: solid #e48648 10px; border-radius: 8px; box-shadow:
  0px 0px 20px #e48648; background-color: rgba(228, 134, 72, .3);">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?controller=moto&action=list"><img style="width:225px; height:225px;"
        src="View/Public/images/logobleu.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active me-5" style="font-family: 'Montserrat', sans-serif; color: #212932; font-weight: 900; font-size: 1em;"
            aria-current="page" aria-current="page" href="index.php?controller=moto&action=list">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle me-5" style="font-family: 'Montserrat', sans-serif; color: #212932; font-weight: 900; font-size: 1em;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Type de moto
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?controller=moto&action=filterType&type=Enduro">Enduro</a></li>
            <li><a class="dropdown-item" href="index.php?controller=moto&action=filterType&type=Custom">Custom</a></li>
            <li><a class="dropdown-item" href="index.php?controller=moto&action=filterType&type=Sportive">Sportive</a>
            </li>
            <li><a class="dropdown-item" href="index.php?controller=moto&action=filterType&type=Roadster">Roadster</a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-5" aria-current="page"
            href="index.php?controller=security&action=logout" style="font-family: 'Montserrat', sans-serif; font-weight: 900; color: #212932; font-size: 1em;">Déconnexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>