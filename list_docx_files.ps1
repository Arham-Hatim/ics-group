Add-Type -AssemblyName System.IO.Compression.FileSystem
$zipPath = "C:\xampp\htdocs\ics-group\ICS website.docx"
$zip = [System.IO.Compression.ZipFile]::OpenRead($zipPath)
$zip.Entries | Select-Object FullName
$zip.Dispose()
