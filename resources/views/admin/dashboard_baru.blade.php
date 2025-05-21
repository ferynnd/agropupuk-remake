@extends('layouts.laman_admin_dashboard')
@section('admin_dashboard')
    <style>
        .warna-hijau {
            color: #224038;
        }

        .warna-hijau-muda {
            color: #2f725f;
        }

        .text-unline {
            text-decoration: none;
            list-style: none;
        }

        .dashboard-title {
            font-size: 1.25rem; /* fs-4 */
            font-weight: 700;
        }

        .dashboard-subtitle {
            font-size: 1rem; /* fs-5 */
            font-weight: 400;
        }

        .dashboard-img {
            width: 60px;
            height: 70px;
        }

        /* New styles for modernized UI */
        .dashboard-container {
            padding: 2rem;
            background-color: #f8f9fa;
        }

        .header-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2rem;
        }

        .welcome-text {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .course-tabs {
            display: flex;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #e0e0e0;
        }

        .course-tab {
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            position: relative;
            color: #6c757d;
        }

        .course-tab.active {
            color: #224038;
            font-weight: 600;
        }

        .course-tab.active::after {
            content: "";
            position: absolute;
            bottom: -1px;
            left: 50%;
            transform: translateX(-50%);
            width: 5px;
            height: 5px;
            background-color: #224038;
            border-radius: 50%;
        }

        .see-all {
            color: #6c757d;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-size: 0.875rem;
        }

        .card-modern {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            margin-bottom: 1rem;
            border: none;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card-modern:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }

        .card-content {
            padding: 1.5rem;
        }

        .calendar-container {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
            gap: 0.5rem;
        }

        .day-name {
            font-size: 0.75rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
        }

        .day-number {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto;
        }

        .current-day {
            background-color: #224038;
            color: white;
        }

        .schedule-item {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1rem;
            margin-bottom: 0.75rem;
        }

        .schedule-date {
            background-color: #17212b;
            color: white;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-weight: bold;
        }

        .schedule-info {
            font-size: 0.875rem;
        }
    </style>

    <div class="dashboard-container">
        <!-- Header section - removed search bar and user info -->
        <div class="header-section">
            <div class="d-flex align-items-center">
                <h1 class="fs-4 warna-hijau mb-0">My Dashboard</h1>
            </div>
        </div>

        <!-- Welcome section -->
        <div class="row mb-4">
            <div class="col-12">
                <h3 class="welcome-text warna-hijau">Welcome, <span class="fw-bold text-uppercase">{{ $admin->nama }}</span></h3>

                <div class="card card-modern">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-start">
                                <p class="warna-hijau-muda mb-2">
                                    SELAMAT DATANG DI DASHBOARD ADMIN AGROPUPUK
                                </p>
                                <h5 class="fw-bold warna-hijau fs-5 mb-0">
                                    PERIKSA, KELOLA DAN BAGIKAN INFORMASI<br>
                                    TENTANG PERTANIAN YANG BERMANFAAT UNTUK <br>
                                    PETANI DAN MASYARAKAT.
                                </h5>
                            </div>
                            <div class="gambar-end">
                                <img src="{{ asset('storage/image/gambar-dashboard.svg') }}" alt="image dashboard"
                                    style="width: 250px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Management sections and calendar -->
        <div class="row">
            <!-- Management cards column -->
            <div class="col-lg-8">
                <!-- Category tabs removed -->
                <div class="mb-3">
                    <!-- Removed tabs and See all button -->
                </div>

                <!-- Management Cards - removed "Start" buttons -->
                <div class="management-cards">
                    <!-- Content Management -->
                    <div class="card card-modern mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="dashboard-title warna-hijau mb-1">CONTENT</h5>
                                    <p class="dashboard-subtitle warna-hijau-muda mb-2">MANAGEMENT</p>
                                    <div class="mt-2">
                                        <span class="badge bg-light text-secondary me-2">Content</span>
                                        <span class="badge bg-light text-secondary">Management</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img class="dashboard-img" src="{{ asset('storage/image/dashboard_content.png') }}" alt="content dashboard">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Article Management -->
                    <div class="card card-modern mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="dashboard-title warna-hijau mb-1">ARTICLE</h5>
                                    <p class="dashboard-subtitle warna-hijau-muda mb-2">MANAGEMENT</p>
                                    <div class="mt-2">
                                        <span class="badge bg-light text-secondary me-2">Article</span>
                                        <span class="badge bg-light text-secondary">Content</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img class="dashboard-img" src="{{ asset('storage/image/dashboard-artikel.png') }}" alt="article dashboard">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Management -->
                    <div class="card card-modern mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="dashboard-title warna-hijau mb-1">PRODUCT</h5>
                                    <p class="dashboard-subtitle warna-hijau-muda mb-2">MANAGEMENT</p>
                                    <div class="mt-2">
                                        <span class="badge bg-light text-secondary me-2">Product</span>
                                        <span class="badge bg-light text-secondary">Inventory</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img class="dashboard-img" src="{{ asset('storage/image/dashboard_produk.png') }}" alt="product dashboard">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- News Management -->
                    <div class="card card-modern">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="dashboard-title warna-hijau mb-1">NEWS</h5>
                                    <p class="dashboard-subtitle warna-hijau-muda mb-2">MANAGEMENT</p>
                                    <div class="mt-2">
                                        <span class="badge bg-light text-secondary me-2">News</span>
                                        <span class="badge bg-light text-secondary">Update</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <img class="dashboard-img" src="{{ asset('storage/image/dashboard_news.png') }}" alt="news dashboard">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Calendar and stats column - removed Hours Spent section -->
            <div class="col-lg-4">
                <!-- Calendar with real-time functionality -->
                <div class="calendar-container mb-4">
                    <div class="calendar-header">
                        <h5 class="mb-0 warna-hijau">May 2025</h5>
                        <div>
                            <button class="btn btn-sm btn-light" id="prevMonth"><i class="bi bi-chevron-left"></i></button>
                            <button class="btn btn-sm btn-light ms-2" id="nextMonth"><i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>

                    <div class="calendar-days mb-3">
                        <div class="day-name">SUN</div>
                        <div class="day-name">MON</div>
                        <div class="day-name">TUE</div>
                        <div class="day-name">WED</div>
                        <div class="day-name">THU</div>
                        <div class="day-name">FRI</div>
                        <div class="day-name">SAT</div>

                        <!-- Calendar days will be filled by JavaScript -->
                        <div id="calendar-grid"></div>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        let currentDate = new Date(2025, 4, 20); // May 20, 2025

                        function updateCalendarTitle() {
                            const months = ['January', 'February', 'March', 'April', 'May', 'June',
                                           'July', 'August', 'September', 'October', 'November', 'December'];
                            document.querySelector('.calendar-header h5').textContent =
                                months[currentDate.getMonth()] + ' ' + currentDate.getFullYear();
                        }

                        function generateCalendar() {
                            const calendarGrid = document.querySelector('.calendar-days');

                            // Clear existing days (except day names)
                            const dayNames = document.querySelectorAll('.day-name');
                            calendarGrid.innerHTML = '';
                            dayNames.forEach(day => calendarGrid.appendChild(day));

                            // Get first day of month and last day of month
                            const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
                            const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);

                            // Add empty cells for days before start of month
                            for (let i = 0; i < firstDay.getDay(); i++) {
                                const emptyDay = document.createElement('div');
                                calendarGrid.appendChild(emptyDay);
                            }

                            // Add days of the month
                            for (let i = 1; i <= lastDay.getDate(); i++) {
                                const dayCell = document.createElement('div');
                                const dayNumber = document.createElement('div');
                                dayNumber.className = 'day-number';
                                dayNumber.textContent = i;

                                // Highlight current day
                                if (i === 20 && currentDate.getMonth() === 4 && currentDate.getFullYear() === 2025) {
                                    dayNumber.classList.add('current-day');
                                }

                                dayCell.appendChild(dayNumber);
                                calendarGrid.appendChild(dayCell);
                            }
                        }

                        // Initialize calendar
                        updateCalendarTitle();
                        generateCalendar();

                        // Handle month navigation
                        document.getElementById('prevMonth').addEventListener('click', function() {
                            currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 1);
                            updateCalendarTitle();
                            generateCalendar();
                        });

                        document.getElementById('nextMonth').addEventListener('click', function() {
                            currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
                            updateCalendarTitle();
                            generateCalendar();
                        });
                    });
                </script>

                <!-- Schedule -->
                <div class="calendar-container mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="mb-0 warna-hijau">Schedule</h5>
                    </div>

                    <div class="schedule-list">
                        <div class="schedule-item d-flex align-items-center">
                            <div class="schedule-date me-3">
                                <span>20</span>
                            </div>
                            <div class="schedule-info">
                                <h6 class="mb-1 warna-hijau">Content Update</h6>
                                <p class="mb-0 small text-muted">10:00 - 11:30</p>
                            </div>
                        </div>

                        <div class="schedule-item d-flex align-items-center">
                            <div class="schedule-date me-3">
                                <span>21</span>
                            </div>
                            <div class="schedule-info">
                                <h6 class="mb-1 warna-hijau">Product Review</h6>
                                <p class="mb-0 small text-muted">14:00 - 15:30</p>
                            </div>
                        </div>

                        <div class="schedule-item d-flex align-items-center">
                            <div class="schedule-date me-3">
                                <span>23</span>
                            </div>
                            <div class="schedule-info">
                                <h6 class="mb-1 warna-hijau">News Update</h6>
                                <p class="mb-0 small text-muted">09:00 - 10:30</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/session.js') }}"></script>
@endsection
