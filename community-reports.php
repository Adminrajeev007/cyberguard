<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Community Reports - View and contribute to cyber threat reports">
    <title>Community Reports - CyberGuard</title>
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
        
        .reports-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }
        
        .report-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .report-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .report-header {
            display: flex;
            justify-content: space-between;
            align-items: start;
            margin-bottom: 1rem;
        }
        
        .report-type {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 0.5rem;
            font-size: 0.875rem;
            font-weight: 600;
        }
        
        .report-type.url {
            background: #DBEAFE;
            color: #1E40AF;
        }
        
        .report-type.email {
            background: #FEE2E2;
            color: #991B1B;
        }
        
        .report-type.phone {
            background: #D1FAE5;
            color: #065F46;
        }
        
        .report-date {
            color: #6B7280;
            font-size: 0.875rem;
        }
        
        .report-content {
            margin-bottom: 1rem;
        }
        
        .report-value {
            font-family: monospace;
            background: #F3F4F6;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            margin: 0.5rem 0;
            word-break: break-all;
        }
        
        .report-description {
            color: #4B5563;
            line-height: 1.6;
        }
        
        .report-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #E5E7EB;
        }
        
        .report-stats {
            display: flex;
            gap: 1.5rem;
            color: #6B7280;
            font-size: 0.875rem;
        }
        
        .stat-item {
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    
    <div class="page-header">
        <h1>Community Reports</h1>
        <p>Recent cyber threat reports from our community members</p>
    </div>
    
    <div class="reports-container">
        <!-- Sample Report 1 -->
        <div class="report-card">
            <div class="report-header">
                <span class="report-type url">URL</span>
                <span class="report-date">2 hours ago</span>
            </div>
            <div class="report-content">
                <div class="report-value">https://fake-bank-login-secure.com</div>
                <p class="report-description">
                    Phishing website impersonating a major bank. The site attempts to steal login credentials 
                    and personal information. Multiple users have reported unauthorized transactions after visiting this site.
                </p>
            </div>
            <div class="report-footer">
                <div class="report-stats">
                    <span class="stat-item">👁️ 234 views</span>
                    <span class="stat-item">⚠️ 45 reports</span>
                </div>
            </div>
        </div>
        
        <!-- Sample Report 2 -->
        <div class="report-card">
            <div class="report-header">
                <span class="report-type email">Email</span>
                <span class="report-date">5 hours ago</span>
            </div>
            <div class="report-content">
                <div class="report-value">support@amaz0n-verify.com</div>
                <p class="report-description">
                    Fraudulent email claiming to be from Amazon, requesting users to verify their account 
                    information. The email contains links to phishing websites designed to steal credentials.
                </p>
            </div>
            <div class="report-footer">
                <div class="report-stats">
                    <span class="stat-item">👁️ 189 views</span>
                    <span class="stat-item">⚠️ 32 reports</span>
                </div>
            </div>
        </div>
        
        <!-- Sample Report 3 -->
        <div class="report-card">
            <div class="report-header">
                <span class="report-type phone">Phone</span>
                <span class="report-date">1 day ago</span>
            </div>
            <div class="report-content">
                <div class="report-value">+91 98765 43210</div>
                <p class="report-description">
                    Scam caller impersonating government officials, threatening legal action and demanding 
                    immediate payment. Multiple users have reported receiving threatening calls from this number.
                </p>
            </div>
            <div class="report-footer">
                <div class="report-stats">
                    <span class="stat-item">👁️ 456 views</span>
                    <span class="stat-item">⚠️ 78 reports</span>
                </div>
            </div>
        </div>
        
        <!-- Sample Report 4 -->
        <div class="report-card">
            <div class="report-header">
                <span class="report-type url">URL</span>
                <span class="report-date">2 days ago</span>
            </div>
            <div class="report-content">
                <div class="report-value">https://free-iphone-winner.xyz</div>
                <p class="report-description">
                    Fake giveaway website claiming users have won an iPhone. Requests personal information 
                    and payment for "shipping fees". Classic advance-fee scam.
                </p>
            </div>
            <div class="report-footer">
                <div class="report-stats">
                    <span class="stat-item">👁️ 567 views</span>
                    <span class="stat-item">⚠️ 92 reports</span>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <script src="assets/js/main.js"></script>
</body>
</html>

