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

# Simple regex to extract text between tags
$text = $xmlText -replace '<[^>]+>', ' '
$text = $text -replace '\s+', ' '
Write-Output $text.Trim()
