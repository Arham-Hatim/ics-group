$path = "C:\xampp\htdocs\ics-group\resources\views\home.blade.php"
$content = Get-Content $path -Raw

# Replace Services Overview
$servicesPattern = "(?s)<!-- Services Overview Section -->.*?<!-- Portfolio/Projects Carousel Section -->"
$servicesReplacement = @"
<!-- Business Verticals Section -->
    <section class="services-overview-section" id="services">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Business <span class="text-primary">Verticals</span></h2>
                <p class="section-subtitle">Diverse expertise across multiple industries</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach(`$services as `$service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ `$loop->index * 100 }}">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="bi {{ `$service['icon'] }}"></i>
                            </div>
                            <h4 class="service-title">{{ `$service['title'] }}</h4>
                            <p class="service-description">{{ `$service['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Portfolio/Projects Carousel Section -->
"@

# Replace Portfolio with Our Brands
$brandsPattern = "(?s)<!-- Portfolio/Projects Carousel Section -->.*?<!-- Why Choose Us Premium Section -->"
$brandsReplacement = @"
<!-- Our Brands Section -->
    <section class="portfolio-carousel-section" id="brands">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Our <span class="text-primary">Brands</span></h2>
                <p class="section-subtitle">Leading companies under the ICS Group umbrella</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach(`$brands as `$brand)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ `$loop->index * 100 }}">
                        <div class="portfolio-card">
                            <div class="p-4 text-center">
                                <h4 class="mb-3">{{ `$brand['name'] }}</h4>
                                <p class="text-muted mb-4">{{ `$brand['description'] }}</p>
                                <a href="{{ `$brand['url'] }}" target="_blank" class="btn btn-outline-primary btn-sm">Visit Website</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us Premium Section -->
"@

# Replace Why Choose Us with Business Overview
$overviewPattern = "(?s)<!-- Why Choose Us Premium Section -->.*?<!-- Global Reach Section -->"
$overviewReplacement = @"
<!-- Business Overview Section -->
    <section class="why-choose-premium">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2 class="section-title">Business <span class="text-primary">Overview</span></h2>
                <p class="section-subtitle">Our journey and commitment to excellence</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10" data-aos="fade-up">
                    <div class="premium-card p-5">
                        <p class="lead text-center mb-0" style="font-size: 1.25rem; line-height: 2;">
                            {{ `$overview }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global Reach Section -->
"@

$newContent = $content -replace $servicesPattern, $servicesReplacement
$newContent = $newContent -replace $brandsPattern, $brandsReplacement
$newContent = $newContent -replace $overviewPattern, $overviewReplacement

$newContent | Set-Content $path -NoNewline
