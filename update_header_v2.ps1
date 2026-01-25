$path = "C:\xampp\htdocs\ics-group\resources\views\partials\header.blade.php"
$content = Get-Content $path -Raw

$navPattern = '(?s)<ul class="navbar-nav ms-auto">.*?</ul>'
$navReplacement = @"
<ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('business-community') ? 'active' : '' }}"
                            href="{{ route('business-community') }}">Business Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('newsroom') ? 'active' : '' }}"
                            href="{{ route('newsroom') }}">Newsroom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('careers') ? 'active' : '' }}"
                            href="{{ route('careers') }}">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
"@

$newContent = $content -replace $navPattern, $navReplacement
$newContent | Set-Content $path -NoNewline
