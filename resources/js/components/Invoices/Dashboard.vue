<template>
    <section class="container-fluid">
        <nav class="navbar navbar-expand-lg mt-3 mb-3 shadow-sm" style="background-color: #e3f2fd; border-radius: 8px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container-fluid py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="mb-0">Dashboard Overview</h4>
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="fas fa-calendar-alt me-2"></i>This Month
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Week</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="stat-icon bg-primary bg-opacity-10 text-primary">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <span class="badge bg-success trend-badge">
                                <i class="fas fa-arrow-up me-1"></i>12.5%
                            </span>
                            </div>
                            <h6 class="text-muted mb-2">Total Sales</h6>
                            <h4 class="mb-3">$24,589</h4>
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 75%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="stat-icon bg-success bg-opacity-10 text-success">
                                    <i class="fas fa-users"></i>
                                </div>
                                <span class="badge bg-danger trend-badge">
                                <i class="fas fa-arrow-down me-1"></i>5.2%
                            </span>
                            </div>
                            <h6 class="text-muted mb-2">Active Users</h6>
                            <h4 class="mb-3">14,789</h4>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width: 65%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="stat-icon bg-warning bg-opacity-10 text-warning">
                                    <i class="fas fa-box"></i>
                                </div>
                                <span class="badge bg-success trend-badge">
                                <i class="fas fa-arrow-up me-1"></i>8.4%
                            </span>
                            </div>
                            <h6 class="text-muted mb-2">New Orders</h6>
                            <h4 class="mb-3">1,589</h4>
                            <div class="progress">
                                <div class="progress-bar bg-warning" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card stat-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-3">
                                <div class="stat-icon bg-info bg-opacity-10 text-info">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <span class="badge bg-success trend-badge">
                                <i class="fas fa-arrow-up me-1"></i>15.7%
                            </span>
                            </div>
                            <h6 class="text-muted mb-2">Revenue</h6>
                            <h4 class="mb-3">$45,289</h4>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="card-title mb-0">Recent Activity</h5>
                                <button class="btn btn-light btn-sm">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                            </div>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item border-0 d-flex align-items-center px-0">
                                    <div class="avatar-sm bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="fas fa-shopping-cart text-primary"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">New order received</h6>
                                        <p class="text-muted small mb-0">Order #123456 from John Doe</p>
                                    </div>
                                    <small class="text-muted">Just now</small>
                                </div>
                                <div class="list-group-item border-0 d-flex align-items-center px-0">
                                    <div class="avatar-sm bg-success bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="fas fa-user-plus text-success"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">New user registered</h6>
                                        <p class="text-muted small mb-0">User ID: #987654</p>
                                    </div>
                                    <small class="text-muted">2 min ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center flex-column mt-6">

                <button type="button" class="shadow-sm btn btn-primary btn-sm mt-3" id="liveToastBtn" @click="showToast">
                    Show live toast
                </button>

                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <strong class="me-auto">Bootstrap</strong>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</template>

<script>
export default {
    name: "Dashboard",
    methods: {
        showToast: function () {
            var toastEl = document.getElementById("liveToast");
            var toast = new bootstrap.Toast(toastEl, {
                autohide: false,
            });
            toast.show();
        },
    }
}
</script>

<style scoped>

body {
    background: #f8f9fa;
    min-height: 100vh;
    padding: 20px;
}

.stat-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.progress {
    height: 8px;
}

.trend-badge {
    position: absolute;
    top: 20px;
    right: 20px;
}

.stat-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 12px;
}

.dropdown-toggle::after {
    display: none;
}

</style>
