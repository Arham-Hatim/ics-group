Add-Type -AssemblyName System.IO.Compression.FileSystem
$zipPath = "C:\xampp\htdocs\ics-group\ICS website.docx"
$zip = [System.IO.Compression.ZipFile]::OpenRead($zipPath)
$entry = $zip.GetEntry("word/document.xml")
$stream = $entry.Open()
$reader = New-Object System.IO.StreamReader($stream)
$xmlText = $reader.ReadToEnd()
$reader.Close()
$stream.Close()
$zip.Dispose()

if ($xmlText -match "Address") { Write-Output "Found 'Address'" }
if ($xmlText -match "Phone") { Write-Output "Found 'Phone'" }
if ($xmlText -match "@") { Write-Output "Found '@'" }
if ($xmlText -match "facebook") { Write-Output "Found 'facebook'" }
if ($xmlText -match "linkedin") { Write-Output "Found 'linkedin'" }

# Output a chunk of text around the matches if found
$matches = [regex]::Matches($xmlText, ".{0,100}(Address|Phone|@|facebook|linkedin).{0,100}")
foreach ($match in $matches) {
    Write-Output "MATCH: $($match.Value)"
}
