@echo off
:: Set command prompt encoding to UTF-8 to handle Greek characters properly
chcp 65001 >nul

echo Renaming all .php files to .html...
for %%f in (*.php) do (
    ren "%%f" "%%~nf.html"
)

echo Replacing internal .php references with .html inside the files...
powershell -Command "Get-ChildItem -Filter *.html | ForEach-Object { $content = Get-Content $_.FullName -Raw; if ($content -match '\.php') { $content -replace '\.php', '.html' | Set-Content $_.FullName; Write-Host 'Updated file:' $_.Name } }"

echo ----------------------------------------
echo Process completed successfully!
pause