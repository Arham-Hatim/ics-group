# Update Business Community
$bcPath = "C:\xampp\htdocs\ics-group\resources\views\business-community.blade.php"
$bcContent = Get-Content $bcPath -Raw

$bcHeaderPattern = '(?s)<!-- Page Header -->.*?<section class="page-header-section">.*?<div class="container">.*?<div class="row align-items-center">.*?<div class="col-lg-8" data-aos="fade-right">.*?<h1 class="page-title">Business <span class="text-primary">Community</span></h1>.*?<p class="page-subtitle">Building a strong network for sustainable growth and innovation.</p>.*?</div>.*?</div>.*?</div>.*?</section>'
$bcHeaderReplacement = @"
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Business <span class="text-primary">Community</span></h1>
                    <p class="page-subtitle">Building a strong network for sustainable growth and innovation.</p>
                </div>
            </div>
        </div>
    </section>
"@

$bcCtaPattern = '(?s)<!-- Call to Action -->.*?<section class="cta-section py-5">.*?<div class="container text-center" data-aos="zoom-in">.*?<h2 class="mb-4">Ready to be part of our community\?</h2>.*?<p class="lead mb-5">Join us in building a coherent and vibrant group of divergent companies.</p>.*?<a href="{{ route\(''contact''\) }}" class="btn btn-light btn-lg">Get in Touch</a>.*?</div>.*?</section>'
$bcCtaReplacement = @"
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center" data-aos="zoom-in">
                <h2 class="cta-title">Ready to be part of our community?</h2>
                <p class="cta-subtitle">Join us in building a coherent and vibrant group of divergent companies.</p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Get in Touch</a>
            </div>
        </div>
    </section>
"@

$bcContent = $bcContent -replace $bcHeaderPattern, $bcHeaderReplacement
$bcContent = $bcContent -replace $bcCtaPattern, $bcCtaReplacement
$bcContent | Set-Content $bcPath -NoNewline

# Update Newsroom
$nrPath = "C:\xampp\htdocs\ics-group\resources\views\newsroom.blade.php"
$nrContent = Get-Content $nrPath -Raw

$nrHeaderPattern = '(?s)<!-- Page Header -->.*?<section class="page-header-section">.*?<div class="container">.*?<div class="row align-items-center">.*?<div class="col-lg-8" data-aos="fade-right">.*?<h1 class="page-title">News <span class="text-primary">Room</span></h1>.*?<p class="page-subtitle">Latest updates, insights, and stories from across the ICS Group.</p>.*?</div>.*?</div>.*?</div>.*?</section>'
$nrHeaderReplacement = @"
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">News <span class="text-primary">Room</span></h1>
                    <p class="page-subtitle">Latest updates, insights, and stories from across the ICS Group.</p>
                </div>
            </div>
        </div>
    </section>
"@

$nrContent = $nrContent -replace $nrHeaderPattern, $nrHeaderReplacement
$nrContent | Set-Content $nrPath -NoNewline

# Update Careers
$crPath = "C:\xampp\htdocs\ics-group\resources\views\careers.blade.php"
$crContent = Get-Content $crPath -Raw

$crHeaderPattern = '(?s)<!-- Page Header -->.*?<section class="page-header-section">.*?<div class="container">.*?<div class="row align-items-center">.*?<div class="col-lg-8" data-aos="fade-right">.*?<h1 class="page-title">Join Our <span class="text-primary">Team</span></h1>.*?<p class="page-subtitle">Build your future with a global leader in business solutions.</p>.*?</div>.*?</div>.*?</div>.*?</section>'
$crHeaderReplacement = @"
    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down">
                    <h1 class="page-title">Join Our <span class="text-primary">Team</span></h1>
                    <p class="page-subtitle">Build your future with a global leader in business solutions.</p>
                </div>
            </div>
        </div>
    </section>
"@

$crCtaPattern = '(?s)<!-- Resume Drop -->.*?<section class="resume-drop-section py-5 text-center">.*?<div class="container" data-aos="zoom-in">.*?<h2 class="mb-4">Don''t see a perfect fit\?</h2>.*?<p class="lead mb-5">Send us your resume and we''ll keep you in mind for future opportunities.</p>.*?<a href="{{ route\(''contact''\) }}" class="btn btn-primary btn-lg">Submit Your Resume</a>.*?</div>.*?</section>'
$crCtaReplacement = @"
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content text-center" data-aos="zoom-in">
                <h2 class="cta-title">Don't see a perfect fit?</h2>
                <p class="cta-subtitle">Send us your resume and we'll keep you in mind for future opportunities.</p>
                <a href="{{ route('contact') }}" class="btn btn-light btn-lg">Submit Your Resume</a>
            </div>
        </div>
    </section>
"@

$crContent = $crContent -replace $crHeaderPattern, $crHeaderReplacement
$crContent = $crContent -replace $crCtaPattern, $crCtaReplacement
$crContent | Set-Content $crPath -NoNewline
