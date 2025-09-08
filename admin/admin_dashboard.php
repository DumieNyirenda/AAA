<?php
session_start();
// Simple authentication check (replace with real auth in production)
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Access Ability Africa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
    <style>
      body {
        background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
        min-height: 100vh;
        font-size: 0.97rem;
      }
      .sidebar {
        background: linear-gradient(135deg, #212529 60%, #007bff 100%);
        color: #fff;
        min-height: 100vh;
        box-shadow: 2px 0 12px rgba(0,0,0,0.08);
      }
      .sidebar .nav-link {
        color: #fff;
        font-weight: 500;
        border-radius: 8px;
        margin-bottom: 8px;
        transition: background 0.2s;
      }
      .sidebar .nav-link.active, .sidebar .nav-link:hover {
        background: rgba(0,123,255,0.15);
        color: #fff;
      }
      .sidebar .nav-link i {
        margin-right: 8px;
      }
      .sidebar .logo {
        font-size: 1.25rem;
        font-weight: bold;
        letter-spacing: 1px;
        margin-bottom: 1.2rem;
        color: #fff;
        text-shadow: 1px 2px 8px #007bff44;
      }
      .main-content {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        padding: 2.5rem 2rem 2rem 2rem;
        margin: 2.5rem 2rem;
        min-height: 90vh;
      }
      .main-content h1 {
        font-weight: 700;
        color: #007bff;
        margin-bottom: 1.2rem;
        font-size: 1.5rem;
      }
      .main-content h3 {
        font-size: 1.1rem;
        font-weight: 600;
      }
      .main-content h5 {
        font-size: 1rem;
        font-weight: 500;
      }
      .form-label, .btn, .list-group-item, .sidebar .nav-link {
        font-size: 0.97rem;
      }
      .form-label {
        font-weight: 500;
      }
      .card-style {
        background: linear-gradient(135deg, #e0eafc 60%, #cfdef3 100%);
        border-radius: 12px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.06);
        padding: 1.5rem;
        margin-bottom: 2rem;
      }
      .list-group-item {
        border: none;
        border-radius: 8px;
        margin-bottom: 6px;
        background: #f8f9fa;
      }
      .btn-primary {
        background: linear-gradient(90deg, #007bff 60%, #20c997 100%);
        border: none;
        font-weight: 600;
        letter-spacing: 1px;
        box-shadow: 0 2px 8px #007bff33;
      }
      .btn-primary:hover {
        background: linear-gradient(90deg, #0056b3 60%, #198754 100%);
      }
      @media (max-width: 991px) {
        .main-content {
          margin: 1rem 0.5rem;
          padding: 1.2rem 0.5rem;
        }
        .sidebar {
          min-width: 60px;
          padding: 0.5rem 0.2rem;
        }
        .sidebar .logo {
          font-size: 1.2rem;
        }
      }
    </style>
</head>
<body>
<div class="d-flex" style="min-height: 100vh;">
  <!-- Sidebar -->
  <nav class="sidebar d-flex flex-column p-4" style="width: 250px;">
    <div class="logo mb-4"><i class="bi bi-shield-lock me-2"></i>AAA Admin</div>
    <ul class="nav flex-column mb-4">
      <li class="nav-item mb-2">
        <a class="nav-link" id="sidebar-partners" href="#" onclick="showTab('partners')"><i class="bi bi-people"></i> Partners</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link active" id="sidebar-stats" href="#" onclick="showTab('stats')"><i class="bi bi-bar-chart"></i> Deployment Stats</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link" id="sidebar-stories" href="#" onclick="showTab('stories')"><i class="bi bi-chat-left-quote"></i> Stories</a>
      </li>
      <li class="nav-item mb-2">
        <a class="nav-link" id="sidebar-messages" href="#" onclick="showTab('messages')"><i class="bi bi-envelope"></i> Messages</a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
      </li>
    </ul>
    <div class="mt-auto small text-white-50">&copy; 2025 Access Ability Africa</div>
  </nav>
  <!-- Main Content -->
  <div class="main-content flex-grow-1">
    <h1 class="mb-4"><i class="bi bi-speedometer2 me-2"></i>Admin Dashboard</h1>
  <div id="tab-stats">
      <div class="card-style">
        <h3 class="mb-3"><i class="bi bi-bar-chart me-2"></i>Deployment Stats</h3>
        <form method="post" action="admin_save_stats.php" class="mb-4">
          <div class="row g-3">
            <div class="col-md-3">
              <label class="form-label">Systems Deployed</label>
              <input type="number" class="form-control" name="systems_deployed" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Students Reached</label>
              <input type="number" class="form-control" name="students_reached" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Schools Phase 1</label>
              <input type="number" class="form-control" name="schools_phase1" required>
            </div>
            <div class="col-md-3">
              <label class="form-label">Districts Active</label>
              <input type="number" class="form-control" name="districts_active" required>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3"><i class="bi bi-save me-1"></i>Save Stats</button>
        </form>
        <h5 class="mb-2">Current Stats</h5>
        <div id="currentStats"></div>
      </div>
    </div>
  <div id="tab-messages" style="display:none;">
  <div id="tab-partners" style="display:none;">
    <div class="card-style">
      <h3 class="mb-3"><i class="bi bi-people me-2"></i>Partners</h3>
      <form id="addPartnerForm" class="mb-4">
        <div class="row g-3">
          <div class="col-md-4">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">Type</label>
            <input type="text" class="form-control" name="type" required placeholder="e.g. Official Implementing Partner">
          </div>
          <div class="col-md-4">
            <label class="form-label">Icon (Bootstrap Icon class)</label>
            <input type="text" class="form-control" name="icon" required placeholder="e.g. bi-bullseye">
          </div>
        </div>
        <div class="row g-3 mt-2">
          <div class="col-md-4">
            <label class="form-label">Color (primary, secondary, etc)</label>
            <input type="text" class="form-control" name="color" required placeholder="primary">
          </div>
          <div class="col-md-4">
            <label class="form-label">Programs (comma separated)</label>
            <input type="text" class="form-control" name="programs" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">Impact (comma separated)</label>
            <input type="text" class="form-control" name="impact" required>
          </div>
        </div>
        <div class="mb-3 mt-2">
          <label class="form-label">Description</label>
          <textarea class="form-control" name="description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-plus-circle me-1"></i>Add Partner</button>
      </form>
      <h5 class="mb-2">All Partners</h5>
      <div id="allPartners"></div>
    </div>
  </div>
    <div class="card-style">
      <h3 class="mb-3"><i class="bi bi-envelope me-2"></i>Messages</h3>
      <div id="allMessages">
        <div class="text-muted">Loading messages...</div>
      </div>
    </div>
  </div>
  <div id="tab-stories" style="display:none;">
    <div class="card-style">
      <h3 class="mb-3"><i class="bi bi-chat-left-quote me-2"></i>Stories</h3>
      <form method="post" action="admin_add_story.php" class="mb-4">
        <div class="mb-3">
          <label class="form-label">Quote</label>
          <textarea class="form-control" name="quote" required></textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Role/Title</label>
          <input type="text" class="form-control" name="role" required>
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-plus-circle me-1"></i>Add Story</button>
      </form>
      <h5 class="mb-2">All Stories</h5>
      <div id="allStories"></div>
    </div>
  </div>
  </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Sidebar tab switching
function showTab(tab) {
  document.getElementById('tab-stats').style.display = tab === 'stats' ? '' : 'none';
  document.getElementById('tab-stories').style.display = tab === 'stories' ? '' : 'none';
  document.getElementById('tab-messages').style.display = tab === 'messages' ? '' : 'none';
  document.getElementById('tab-partners').style.display = tab === 'partners' ? '' : 'none';
  document.getElementById('sidebar-stats').classList.toggle('active', tab === 'stats');
  document.getElementById('sidebar-stories').classList.toggle('active', tab === 'stories');
  document.getElementById('sidebar-messages').classList.toggle('active', tab === 'messages');
  document.getElementById('sidebar-partners').classList.toggle('active', tab === 'partners');
// Fetch and display all partners
function loadPartners() {
  fetch('../backend/api/partners.php')
    .then(r => r.json())
    .then(partners => {
      let html = '';
      if (Array.isArray(partners) && partners.length > 0) {
        html += '<ul class="list-group">';
        partners.forEach(partner => {
          html += `<li class="list-group-item">
            <div class="d-flex align-items-center mb-1">
              <div class="icon-box bg-gradient-${partner.color || 'primary'} me-2"><i class="bi ${partner.icon || 'bi-people'} text-white"></i></div>
              <b>${partner.name}</b> <span class="text-muted small ms-2">(${partner.type})</span>
            </div>
            <div class="small text-muted mb-1">${partner.description || ''}</div>
            <div><b>Programs:</b> ${partner.programs.map(p => `<span class='badge bg-light text-dark me-1'>${p}</span>`).join(' ')}</div>
            <div><b>Impact:</b> ${partner.impact.map(i => `<span class='badge bg-secondary me-1'>${i}</span>`).join(' ')}</div>
          </li>`;
        });
        html += '</ul>';
      } else {
        html = '<div class="text-muted">No partners found.</div>';
      }
      document.getElementById('allPartners').innerHTML = html;
    });
}
// Initial load
loadPartners();

// Add partner form submit
document.getElementById('addPartnerForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const form = e.target;
  const data = new FormData(form);
  fetch('../backend/api/add_partner.php', {
    method: 'POST',
    body: data
  })
    .then(r => r.json())
    .then(res => {
      if (res.success) {
        form.reset();
        loadPartners();
        alert('Partner added successfully!');
      } else {
        alert('Failed to add partner.');
      }
    })
    .catch(() => alert('Error adding partner.'));
});
}
// Set default tab
showTab('stats');
// Fetch and display all messages
fetch('../backend/api/messages.php')
  .then(r => r.json())
  .then(messages => {
    let html = '';
    if (Array.isArray(messages) && messages.length > 0) {
      html += '<ul class="list-group">';
      messages.forEach(msg => {
        html += `<li class="list-group-item">
          <div><b>${msg.name || 'Anonymous'}</b> <span class="text-muted small">(${msg.email || 'No email'})</span></div>
          <div class="small text-muted mb-1">${msg.interest ? msg.interest : ''}</div>
          <div>${msg.message}</div>
          <div class="text-end text-muted small">${msg.created_at ? msg.created_at : ''}</div>
        </li>`;
      });
      html += '</ul>';
    } else {
      html = '<div class="text-muted">No messages found.</div>';
    }
    document.getElementById('allMessages').innerHTML = html;
  });
// Fetch and display current stats
fetch('../backend/api/dashboard_stats.php')
  .then(r => r.json())
  .then(data => {
    document.getElementById('currentStats').innerHTML = `
      <ul class="list-group">
        <li class="list-group-item">Systems Deployed: <b>${data.systems_deployed}</b></li>
        <li class="list-group-item">Students Reached: <b>${data.students_reached}</b></li>
        <li class="list-group-item">Schools Phase 1: <b>${data.schools_phase1}</b></li>
        <li class="list-group-item">Districts Active: <b>${data.districts_active}</b></li>
      </ul>
    `;
  });
// Fetch and display all stories
fetch('../backend/api/stories.php')
  .then(r => r.json())
  .then(stories => {
    let html = '<ul class="list-group">';
    stories.forEach(story => {
      html += `<li class="list-group-item"><b>\"${story.quote}\"</b><br><span>${story.name} - <i>${story.role}</i></span></li>`;
    });
    html += '</ul>';
    document.getElementById('allStories').innerHTML = html;
  });
</script>
</body>
</html>
