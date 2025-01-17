<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="/dashboard">iot-stela</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "dashboard") ? 'active' : ''}}" href="#">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "devices") ? 'active' : ''}}" href="/devices">Devices</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
