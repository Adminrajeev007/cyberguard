<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard - Monitor cyber threats and analytics">
    <title>Dashboard - CyberGuard</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .page-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 3rem 2rem;
            text-align: center;
            color: white;
        }
        
        .page-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        
        .dashboard-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }
        
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .dashboard-card {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1F2937;
        }
        
        .card-icon {
            width: 48px;
            height: 48px;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card-icon.blue {
            background: #DBEAFE;
            color: #1E40AF;
        }
        
        .card-icon.red {
            background: #FEE2E2;
            color: #991B1B;
        }
        
        .card-icon.green {
            background: #D1FAE5;
            color: #065F46;
        }
        
        .card-icon.yellow {
            background: #FEF3C7;
            color: #92400E;
        }
        
        .card-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1F2937;
            margin-bottom: 0.5rem;
        }
        
        .card-label {
            color: #6B7280;
            font-size: 0.875rem;
        }
        
        .card-trend {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
            font-size: 0.875rem;
        }
        
        .trend-up {
            color: #10B981;
        }
        
        .trend-down {
            color: #EF4444;
        }
        
        .chart-container {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }
        
        .chart-placeholder {
            height: 300px;
            background: linear-gradient(135deg, #667eea20 0%, #764ba220 100%);
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6B7280;
            font-size: 1.125rem;
        }
        
        .activity-list {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .activity-item {
            display: flex;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid #E5E7EB;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .activity-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        
        .activity-content {
            flex: 1;
        }
        
        .activity-title {
            font-weight: 600;
            color: #1F2937;
            margin-bottom: 0.25rem;
        }
        
        .activity-description {
            color: #6B7280;
            font-size: 0.875rem;
        }
        
        .activity-time {
            color: #9CA3AF;
            font-size: 0.75rem;
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    
    <div class="page-header">
        <h1>Dashboard</h1>
        <p>Monitor cyber threats and analytics in real-time</p>
    </div>
    
    <div class="dashboard-container">
        <!-- Stats Grid -->
        <div class="dashboard-grid">
            <div class="dashboard-card">
                <div class="card-header">
                    <div>
                        <div class="card-value">1,247</div>
                        <div class="card-label">Total Checks Today</div>
                    </div>
                    <div class="card-icon blue">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="8" stroke="currentColor" stroke-width="2"/>
                            <path d="M21 21L16.65 16.65" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
                <div class="card-trend trend-up">
                    <span>↑ 12%</span>
                    <span class="card-label">vs yesterday</span>
                </div>
            </div>
            
            <div class="dashboard-card">
                <div class="card-header">
                    <div>
                        <div class="card-value">89</div>
                        <div class="card-label">Threats Detected</div>
                    </div>
                    <div class="card-icon red">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.29 3.86L1.82 18C1.64537 18.3024 1.55296 18.6453 1.55199 18.9945C1.55101 19.3437 1.64151 19.6871 1.81445 19.9905C1.98738 20.2939 2.23675 20.5467 2.53773 20.7239C2.83871 20.9011 3.18082 20.9962 3.53 21H20.47C20.8192 20.9962 21.1613 20.9011 21.4623 20.7239C21.7633 20.5467 22.0126 20.2939 22.1856 19.9905C22.3585 19.6871 22.449 19.3437 22.448 18.9945C22.447 18.6453 22.3546 18.3024 22.18 18L13.71 3.86C13.5317 3.56611 13.2807 3.32312 12.9812 3.15448C12.6817 2.98585 12.3437 2.89725 12 2.89725C11.6563 2.89725 11.3183 2.98585 11.0188 3.15448C10.7193 3.32312 10.4683 3.56611 10.29 3.86Z" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
                <div class="card-trend trend-down">
                    <span>↓ 8%</span>
                    <span class="card-label">vs yesterday</span>
                </div>
            </div>
            
            <div class="dashboard-card">
                <div class="card-header">
                    <div>
                        <div class="card-value">1,158</div>
                        <div class="card-label">Safe Results</div>
                    </div>
                    <div class="card-icon green">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22 11.08V12C21.9988 14.1564 21.3005 16.2547 20.0093 17.9818C18.7182 19.7088 16.9033 20.9725 14.8354 21.5839C12.7674 22.1953 10.5573 22.1219 8.53447 21.3746C6.51168 20.6273 4.78465 19.2461 3.61096 17.4371C2.43727 15.628 1.87979 13.4881 2.02168 11.3363C2.16356 9.18455 2.99721 7.13631 4.39828 5.49706C5.79935 3.85781 7.69279 2.71537 9.79619 2.24013C11.8996 1.7649 14.1003 1.98232 16.07 2.85999" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            <path d="M22 4L12 14.01L9 11.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div class="card-trend trend-up">
                    <span>↑ 15%</span>
                    <span class="card-label">vs yesterday</span>
                </div>
            </div>
            
            <div class="dashboard-card">
                <div class="card-header">
                    <div>
                        <div class="card-value">342</div>
                        <div class="card-label">Active Users</div>
                    </div>
                    <div class="card-icon yellow">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="currentColor" stroke-width="2"/>
                            <path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="currentColor" stroke-width="2"/>
                            <path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="currentColor" stroke-width="2"/>
                            <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                </div>
                <div class="card-trend trend-up">
                    <span>↑ 23%</span>
                    <span class="card-label">vs yesterday</span>
                </div>
            </div>
        </div>
        
        <!-- Chart -->
        <div class="chart-container">
            <h3 class="card-title" style="margin-bottom: 1.5rem;">Threat Detection Trends</h3>
            <div class="chart-placeholder">
                📊 Chart visualization will be implemented here
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="activity-list">
            <h3 class="card-title" style="margin-bottom: 1.5rem;">Recent Activity</h3>
            
            <div class="activity-item">
                <div class="activity-icon" style="background: #FEE2E2; color: #991B1B;">⚠️</div>
                <div class="activity-content">
                    <div class="activity-title">Phishing URL Detected</div>
                    <div class="activity-description">https://fake-bank-secure.com reported as malicious</div>
                    <div class="activity-time">5 minutes ago</div>
                </div>
            </div>
            
            <div class="activity-item">
                <div class="activity-icon" style="background: #D1FAE5; color: #065F46;">✓</div>
                <div class="activity-content">
                    <div class="activity-title">Safe URL Verified</div>
                    <div class="activity-description">https://google.com verified as safe</div>
                    <div class="activity-time">12 minutes ago</div>
                </div>
            </div>
            
            <div class="activity-item">
                <div class="activity-icon" style="background: #FEE2E2; color: #991B1B;">⚠️</div>
                <div class="activity-content">
                    <div class="activity-title">Suspicious Email Reported</div>
                    <div class="activity-description">support@amaz0n-verify.com flagged by community</div>
                    <div class="activity-time">28 minutes ago</div>
                </div>
            </div>
            
            <div class="activity-item">
                <div class="activity-icon" style="background: #DBEAFE; color: #1E40AF;">👤</div>
                <div class="activity-content">
                    <div class="activity-title">New User Joined</div>
                    <div class="activity-description">Welcome to the CyberGuard community!</div>
                    <div class="activity-time">1 hour ago</div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="assets/js/main.js"></script>
</body>
</html>

