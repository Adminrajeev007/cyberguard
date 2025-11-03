// Tab switching functionality
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const searchInput = document.getElementById('searchInput');
    const searchForm = document.getElementById('searchForm');
    const searchResult = document.getElementById('searchResult');
    
    // Tab switching
    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Update placeholder based on selected tab
            const tab = this.getAttribute('data-tab');
            updatePlaceholder(tab);
            
            // Clear input and hide result
            searchInput.value = '';
            searchResult.style.display = 'none';
        });
    });
    
    // Update placeholder text
    function updatePlaceholder(tab) {
        const placeholders = {
            'url': 'Enter URL (e.g., https://example.com)',
            'phone': 'Enter Phone Number (e.g., +91 9876543210)',
            'email': 'Enter Email Address (e.g., example@email.com)'
        };
        searchInput.placeholder = placeholders[tab] || placeholders['url'];
    }
    
    // Form submission
    searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const inputValue = searchInput.value.trim();
        const activeTab = document.querySelector('.tab-btn.active').getAttribute('data-tab');
        
        if (!inputValue) {
            return;
        }
        
        // Simulate checking (in future, this will call your backend API)
        checkForThreats(inputValue, activeTab);
    });
    
    // Simulate threat checking
    function checkForThreats(value, type) {
        // Show loading state
        searchResult.style.display = 'block';
        searchResult.className = 'search-result';
        document.getElementById('resultIcon').innerHTML = '⏳';
        document.getElementById('resultTitle').textContent = 'Checking...';
        document.getElementById('resultMessage').textContent = 'Please wait while we verify this ' + type;
        
        // Simulate API call with timeout
        setTimeout(() => {
            // Random result for demonstration (replace with actual API call)
            const isSafe = Math.random() > 0.3; // 70% chance of being safe
            
            if (isSafe) {
                showSafeResult(value, type);
            } else {
                showThreatResult(value, type);
            }
        }, 1500);
    }
    
    // Show safe result
    function showSafeResult(value, type) {
        searchResult.className = 'search-result safe';
        document.getElementById('resultIcon').innerHTML = '✅';
        document.getElementById('resultTitle').textContent = 'No Threats Detected';
        document.getElementById('resultMessage').textContent = `This ${type} appears to be safe. However, always exercise caution when sharing personal information.`;
    }
    
    // Show threat result
    function showThreatResult(value, type) {
        searchResult.className = 'search-result threat';
        document.getElementById('resultIcon').innerHTML = '⚠️';
        document.getElementById('resultTitle').textContent = 'Potential Threat Detected!';
        document.getElementById('resultMessage').textContent = `This ${type} has been reported as suspicious. We recommend avoiding interaction with it.`;
    }
    
    // Mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobileMenuToggle');
    const navMenu = document.getElementById('navMenu');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            navMenu.classList.toggle('active');
            this.classList.toggle('active');
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe stat cards
    document.querySelectorAll('.stat-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
});

// Input validation helpers
function validateURL(url) {
    try {
        new URL(url);
        return true;
    } catch (e) {
        return false;
    }
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validatePhone(phone) {
    const phoneRegex = /^[\+]?[(]?[0-9]{1,4}[)]?[-\s\.]?[(]?[0-9]{1,4}[)]?[-\s\.]?[0-9]{1,9}$/;
    return phoneRegex.test(phone.replace(/\s/g, ''));
}

